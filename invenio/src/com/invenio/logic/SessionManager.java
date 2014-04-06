package com.invenio.logic;

import java.security.NoSuchAlgorithmException;
import java.util.List;

import org.apache.log4j.Logger;

import com.emr.auth.InvenioCrypt;
import com.invenio.domain.InvenioUserSession;
import com.invenio.exception.InvalidSessionException;
import com.invenio.manager.InvenioUserMgr;
import com.invenio.manager.InvenioUserSessionMgr;
import com.invenio.service.ServiceLocator;
import com.invenio.service.impl.CurrentSession;
import com.invenio.service.impl.InvenioSession;

public class SessionManager {

	private static Logger logger = Logger.getLogger(SessionManager.class);

	public static void main(String[] args) {
		String fivecharLower = RandomGenerator.generateRandomString(RandomGenerator.TYPE_MIXED_CASE, 10);
		System.out.println(fivecharLower);
	}
	
	public static boolean isValidSession(String userid, String jsessionId, String cookieHash) throws InvalidSessionException {
		try {
			String token = userid+"-" + jsessionId + "-";
			InvenioSession session = CurrentSession.openSession();
			InvenioUserSessionMgr invenioUserSessionMgr = (InvenioUserSessionMgr) ServiceLocator.get().getObjectManager(InvenioUserSessionMgr.class);
			List<InvenioUserSession> invenioUserSessionList = invenioUserSessionMgr.findInvenioUserSessionBySessionId(userid, jsessionId);
			if (invenioUserSessionList!= null && !invenioUserSessionList.isEmpty()) {
				String randomKey = invenioUserSessionList.get(0).getRandomKey();
				token += randomKey;
				String hash = InvenioCrypt.getEncryptedHash(token);
				System.out.println("Old hash:"+cookieHash +"\nNew hash:"+hash);
				if (cookieHash.equals(hash)) {
					return true;
				} 
			}
			session.beginTransaction();
			if (invenioUserSessionList!= null && !invenioUserSessionList.isEmpty()) {
				for (InvenioUserSession invenioUserSession : invenioUserSessionList) {
					invenioUserSessionMgr.delete(invenioUserSession);
				}
			}
			session.commitTransaction();
		} catch (NoSuchAlgorithmException e) {
			logger.error("Unable to create session token for user :"+userid,e);
			throw new InvalidSessionException(e);
		} catch (Exception e) {
			logger.error("Unable to save session token for user :"+userid,e);
			throw new InvalidSessionException(e);
		} finally {
			CurrentSession.closeSession();
		}
		return false;
	}

	public static String generateAuthenticatedToken(String userid, String jsessionId) throws InvalidSessionException {
		String hash = null;
		try {
			String random = RandomGenerator.generateRandomString(RandomGenerator.TYPE_MIXED_CASE, 10);
			String token = userid+"-" + jsessionId + "-" + random;
			hash = InvenioCrypt.getEncryptedHash(token);
			InvenioSession session = CurrentSession.openSession();
			InvenioUserSessionMgr ehrUserSessionMgr = (InvenioUserSessionMgr) ServiceLocator.get().getObjectManager(InvenioUserSessionMgr.class);
			InvenioUserMgr invenioUserMgr = (InvenioUserMgr) ServiceLocator.get().getObjectManager(InvenioUserMgr.class);
			InvenioUserSession ehrUserSession = new InvenioUserSession();
			ehrUserSession.setInvenioUser(invenioUserMgr.findInvenioUserByUserId(userid).get(0));
			ehrUserSession.setSessionId(jsessionId);
			ehrUserSession.setRandomKey(random);
			session.beginTransaction();
			ehrUserSessionMgr.add(ehrUserSession);
			session.commitTransaction();
		} catch (NoSuchAlgorithmException e) {
			logger.error("Unable to create session token for user :"+userid,e);
			throw new InvalidSessionException(e);
		} catch (Exception e) {
			logger.error("Unable to save session token for user :"+userid,e);
			throw new InvalidSessionException(e);
		} finally {
			CurrentSession.closeSession();
		}
		return hash;
	}
	
	public static boolean inValidSession(String userid, String jsessionId) throws InvalidSessionException {
		try {
			InvenioSession session = CurrentSession.openSession();
			InvenioUserSessionMgr ehrUserSessionMgr = (InvenioUserSessionMgr) ServiceLocator.get().getObjectManager(InvenioUserSessionMgr.class);
			List<InvenioUserSession> ehrUserSessionList = ehrUserSessionMgr.findInvenioUserSessionBySessionId(userid, jsessionId);
			session.beginTransaction();
			if (ehrUserSessionList!= null && !ehrUserSessionList.isEmpty()) {
				for (InvenioUserSession ehrUserSession : ehrUserSessionList) {
					ehrUserSessionMgr.delete(ehrUserSession);
				}
			}
			session.commitTransaction();
		} catch (NoSuchAlgorithmException e) {
			logger.error("Unable to create session token for user :"+userid,e);
			throw new InvalidSessionException(e);
		} catch (Exception e) {
			logger.error("Unable to save session token for user :"+userid,e);
			throw new InvalidSessionException(e);
		} finally {
			CurrentSession.closeSession();
		}
		return false;
	}
	
}
