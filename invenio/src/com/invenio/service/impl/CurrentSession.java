package com.invenio.service.impl;

import org.apache.log4j.Logger;
import org.hibernate.Session;

import com.invenio.service.SessionFactory;
/**
 * 
 * @author girishbabu
 * <p>
 * 
 * This class is implementation for getting Hibernate session.
 * 
 */
public class CurrentSession {

	private static Logger logger = Logger.getLogger(CurrentSession.class);
	private static ThreadLocal<InvenioSession> threadlocal = new ThreadLocal<InvenioSession>();

	/**
	 * This method gets new session from session factory. 
	 * Marks begining of hibernate DB session.
	 * <p>
	 * @return Session
	 * @throws Exception
	 */
	public static InvenioSession openSession() throws Exception {
		
		InvenioSession session = threadlocal.get();
		if(session == null || !session.getHibernateSession().isOpen()) {
			try {
				SessionFactory sessionFactory = (SessionFactory) new SessionFactoryImpl(); 
				session = new InvenioSession(sessionFactory.newSession());
				session.concurrentSessionCount++;
				threadlocal.set(session);
			} catch (Exception e) {
				logger.error("CurrentSession:currentSession() -- Exception ",e);
				throw new Exception("Unable to configure new session", e);
			}
		}
		return session;
	}

	protected static Session getSession() throws Exception {
		InvenioSession session = threadlocal.get();
		return session.getHibernateSession();
	}

	/**
	 * This method closes the hibernate session.
	 */
	public static void closeSession() {
		InvenioSession xSession = threadlocal.get();
		if (xSession != null) {
		xSession.concurrentSessionCount--;
		if (xSession.concurrentSessionCount == 0) {
			logger.debug("CurrentSession:closeSession() -- Remaining concurrentSessionCount "+xSession.concurrentSessionCount);
			if(xSession != null) {
				Session session = xSession.getHibernateSession();

				if (session.getTransaction() != null) {
					xSession.closeTransaction();
				}

				if (session != null) {
					session.close();
					session = null;
					threadlocal.set(null);
				}
			}
			}
		}
	}
}