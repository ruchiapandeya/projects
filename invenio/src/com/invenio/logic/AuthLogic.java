package com.invenio.logic;

import java.util.ArrayList;
import java.util.Date;
import java.util.List;
import java.util.Random;

import javax.jws.WebService;
import javax.ws.rs.FormParam;
import javax.ws.rs.GET;
import javax.ws.rs.POST;
import javax.ws.rs.Path;
import javax.ws.rs.PathParam;
import javax.ws.rs.Produces;

import org.apache.log4j.Logger;

import com.emr.auth.InvenioCrypt;
import com.invenio.domain.InvenioUser;
import com.invenio.manager.InvenioUserMgr;
import com.invenio.service.ServiceLocator;
import com.invenio.service.impl.CurrentSession;
import com.invenio.service.impl.InvenioSession;
import com.invenio.vo.ResponseVO;
import com.invenio.vo.UserSecretQuestionsVO;

@WebService
@Path("/auth")
@Produces("application/json")
public class AuthLogic {

	private static final Logger logger = Logger.getLogger(AuthLogic.class);
	private static Random randomGen = new Random();
	
	@GET
	@Path("/validateUser/{userid}/{password}")
	@Produces("application/json")
	public List<ResponseVO> userProfile(@PathParam("userid")String userid, 
			@PathParam("password")String password) {
		List<ResponseVO> responseVOList = new ArrayList<ResponseVO>();
		ResponseVO response = new ResponseVO();
		response.setPassed(false);
		try {			
			CurrentSession.openSession();
			InvenioUserMgr invenioUserMgr = (InvenioUserMgr) ServiceLocator.get().getObjectManager(InvenioUserMgr.class);
			List<InvenioUser> invenioUserList = invenioUserMgr.findInvenioUserByUserId(userid);
			if (invenioUserList != null && !invenioUserList.isEmpty()) {
				for (InvenioUser invenioUser : invenioUserList) {
					String userName = invenioUser.getUserid();
					String encUserPassword = invenioUser.getPassword();
					
					if (userName.equals(userid)) {					
						if (InvenioCrypt.getEncryptedHash(password).equals(encUserPassword)) {
							response.setPassed(true);
							response.setMgs("User \'" + userid + "\' is valid");
						} 
					}
					
					responseVOList.add(response);
				}
			}
		} catch (Exception e) {
			logger.error(e);
			response.setMgs("Exception doing lookup for user: " + userid + " : e- " + e.getMessage());
		} finally {
			CurrentSession.closeSession();
		}
		return responseVOList;
	}
	
	@GET
	@Path("/getSecretQuestions/{userid}")
	@Produces("application/json")
	public List<UserSecretQuestionsVO> getSecretQuestions(@PathParam("userid")String userid) {
		List<UserSecretQuestionsVO> userSecretQuestionsVOList = new ArrayList<UserSecretQuestionsVO>();
		UserSecretQuestionsVO userSecretQuestionsVO = new UserSecretQuestionsVO();
		try {			
			CurrentSession.openSession();
			InvenioUserMgr ehrUserMgr = (InvenioUserMgr) ServiceLocator.get().getObjectManager(InvenioUserMgr.class);
			List<InvenioUser> ehrUserList = ehrUserMgr.findInvenioUserByUserId(userid);
			if (ehrUserList != null && !ehrUserList.isEmpty()) {
				for (InvenioUser ehrUser : ehrUserList) {
					userSecretQuestionsVO.setUserid(userid);
					userSecretQuestionsVO.setSecretQuestion1(ehrUser.getSecretQuestion1());
					userSecretQuestionsVO.setSecretQuestion2(ehrUser.getSecretQuestion2());
					
					userSecretQuestionsVOList.add(userSecretQuestionsVO);
				}
			}
		} catch (Exception e) {
			logger.error(e);
		} finally {
			CurrentSession.closeSession();
		}
		return userSecretQuestionsVOList;
	}
	
	@POST
	@Path("/updateSecretInfo")
	@Produces("application/json")
	public List<ResponseVO> updateSecretInfo(@FormParam("userid")String userid,
			@FormParam("question1")String question1, @FormParam("answer1")String answer1,
			@FormParam("question2")String question2, @FormParam("answer2")String answer2) {
		List<ResponseVO> response = new ArrayList<ResponseVO>();
		ResponseVO responseVO = new ResponseVO();
		if (userid == null || "".equals(userid)) {
			responseVO.setPassed(false);
			responseVO.setMgs("Invalid userid passed, please pass a valid value");
			response.add(responseVO);
			return response;
		}
		
		try {			
			InvenioSession session = CurrentSession.openSession();
			InvenioUserMgr ehrUserMgr = (InvenioUserMgr) ServiceLocator.get().getObjectManager(InvenioUserMgr.class);
			List<InvenioUser> ehrUserList = ehrUserMgr.findInvenioUserByUserId(userid);
			if (ehrUserList != null && !ehrUserList.isEmpty()) {
				InvenioUser ehrUser = ehrUserList.get(0);
				ehrUser.setSecretQuestion1(question1);
				ehrUser.setSecretQuestion2(question2);
				ehrUser.setSecretAnswer1(InvenioCrypt.getEncryptedHash(answer1));
				ehrUser.setSecretAnswer2(InvenioCrypt.getEncryptedHash(answer2));
				
				session.beginTransaction();
				ehrUserMgr.update(ehrUser);
				session.commitTransaction();
				
				responseVO.setPassed(true);
				responseVO.setMgs("User info updated successfully");
				response.add(responseVO);
				
			} else {
				responseVO.setPassed(false);
				responseVO.setMgs("userid '" + userid + "' does not exist");
				response.add(responseVO);
			}
		} catch (Exception e) {
			e.printStackTrace();
			logger.error(e);
			responseVO.setPassed(false);
			responseVO.setMgs("Exception occurred");
			response.add(responseVO);
		} finally {
			CurrentSession.closeSession();
		}
		return response;
	}
	
	@POST
	@Path("/validateResetInfo")
	@Produces("application/json")
	public List<ResponseVO> validateResetInfo (@FormParam("userid")String userid,
			@FormParam("question1")String question1, @FormParam("answer1")String answer1,
			@FormParam("question2")String question2, @FormParam("answer2")String answer2) {
		List<ResponseVO> response = new ArrayList<ResponseVO>();
		ResponseVO responseVO = new ResponseVO();
		if (userid == null || "".equals(userid)) {
			responseVO.setPassed(false);
			responseVO.setMgs("Invalid userid passed, please pass a valid value");
			response.add(responseVO);
			return response;
		}
		
		if (question1 == null || "".equals(question1)) {
			responseVO.setPassed(false);
			responseVO.setMgs("Invalid question1 passed, please pass a valid value");
			response.add(responseVO);
			return response;
		}
		
		if (question2 == null || "".equals(question2)) {
			responseVO.setPassed(false);
			responseVO.setMgs("Invalid question2 passed, please pass a valid value");
			response.add(responseVO);
			return response;
		}
		
		if (answer1 == null || "".equals(answer1)) {
			responseVO.setPassed(false);
			responseVO.setMgs("Invalid answer1 passed, please pass a valid value");
			response.add(responseVO);
			return response;
		}
		
		if (answer2 == null || "".equals(answer2)) {
			responseVO.setPassed(false);
			responseVO.setMgs("Invalid answer2 passed, please pass a valid value");
			response.add(responseVO);
			return response;
		}
		
		try {			
			InvenioSession session = CurrentSession.openSession();
			InvenioUserMgr ehrUserMgr = (InvenioUserMgr) ServiceLocator.get().getObjectManager(InvenioUserMgr.class);
			List<InvenioUser> ehrUserList = ehrUserMgr.findInvenioUserByUserId(userid);
			if (ehrUserList != null && !ehrUserList.isEmpty()) {
				for (InvenioUser ehrUser : ehrUserList) {
					if (question1.equals(ehrUser.getSecretQuestion1()) &&
							question2.equals(ehrUser.getSecretQuestion2()) &&
							InvenioCrypt.getEncryptedHash(answer1).equals(ehrUser.getSecretAnswer1()) &&
							InvenioCrypt.getEncryptedHash(answer2).equals(ehrUser.getSecretAnswer2())) {
						session.beginTransaction();
						ehrUser.setResetKey(null);
						ehrUser.setResetProfile("N");
						ehrUser.setResetProfileTimestamp(null);
						ehrUserMgr.update(ehrUser);
						session.commitTransaction();
						
						responseVO.setPassed(true);
						responseVO.setMgs("Secret info matched, profile is reset");
						response.add(responseVO);						
					} else {
						responseVO.setPassed(false);
						responseVO.setMgs("Invalid credentials, secret info does not match");
						response.add(responseVO);
					}
				}
			} else {
				responseVO.setPassed(false);
				responseVO.setMgs("userid '" + userid + "' does not exist");
				response.add(responseVO);
				return response;
			}
		} catch (Exception e) {
			logger.error(e);
		} finally {
			CurrentSession.closeSession();
		}
		return response;
	}
	
	@POST
	@Path("/validateResetLink")
	@Produces("application/json")
	public List<ResponseVO> validateResetLink (@FormParam("userid")String userid,
			@FormParam("resetKey")String resetKey) {
		List<ResponseVO> response = new ArrayList<ResponseVO>();
		ResponseVO responseVO = new ResponseVO();
		if (userid == null || "".equals(userid)) {
			responseVO.setPassed(false);
			responseVO.setMgs("Invalid userid passed, please pass a valid value");
			response.add(responseVO);
			return response;
		}
		
		if (resetKey == null || "".equals(resetKey)) {
			responseVO.setPassed(false);
			responseVO.setMgs("Invalid reset key passed, please pass a valid value");
			response.add(responseVO);
			return response;
		}
		
		try {			
			InvenioSession session = CurrentSession.openSession();
			InvenioUserMgr ehrUserMgr = (InvenioUserMgr) ServiceLocator.get().getObjectManager(InvenioUserMgr.class);
			List<InvenioUser> ehrUserList = ehrUserMgr.findInvenioUserByUserId(userid);
			if (ehrUserList != null && !ehrUserList.isEmpty()) {
				for (InvenioUser ehrUser : ehrUserList) {
					if (resetKey.equals(ehrUser.getResetKey())) {
						responseVO.setPassed(true);
						responseVO.setMgs("Reset key matches");
						response.add(responseVO);	
						session.commitTransaction();
					} else {
						responseVO.setPassed(false);
						responseVO.setMgs("Reset key does not match");
						response.add(responseVO);
					}
				}
			} else {
				responseVO.setPassed(false);
				responseVO.setMgs("userid '" + userid + "' does not exist");
				response.add(responseVO);
				return response;
			}
		} catch (Exception e) {
			logger.error(e);
		} finally {
			CurrentSession.closeSession();
		}
		return response;
	}
	
	@GET
	@Path("/forgotPassword/{userid}")
	@Produces("application/json")
	public List<ResponseVO> forgotPassword(@PathParam("userid")String userid) {
		List<ResponseVO> response = new ArrayList<ResponseVO>();
		ResponseVO responseVO = new ResponseVO();
		responseVO.setPassed(false);
		try {			
			InvenioSession session = CurrentSession.openSession();
			InvenioUserMgr ehrUserMgr = (InvenioUserMgr) ServiceLocator.get().getObjectManager(InvenioUserMgr.class);
			List<InvenioUser> ehrUserList = ehrUserMgr.findInvenioUserByUserId(userid);
			if (ehrUserList != null && !ehrUserList.isEmpty()) {
				session.beginTransaction();
				InvenioUser ehrUser = ehrUserList.get(0);
				// update DB to reset
				ehrUser.setResetProfile("Y");
				ehrUser.setResetProfileTimestamp(new Date());
				String randomKey = InvenioCrypt.getEncryptedHash(Integer.toString(AuthLogic.generateRandomKey()));
				ehrUser.setResetKey(randomKey);
				ehrUserMgr.update(ehrUser);
				session.commitTransaction();
				
				// send mail
				String[] resetMailRecipents = {ehrUser.getEmail()};
				String resetLink = "http://thinkon.emr.com/userid="+ehrUser.getUserid()+"&key="+randomKey;
				MailLogic.mailPasswordReset(resetMailRecipents, "Click " + resetLink + " to reset your password");
				
				responseVO.setPassed(true);
				responseVO.setMgs("Email sent for reset");
				response.add(responseVO);
			}
		} catch (Exception e) {
			logger.error(e);
			responseVO.setPassed(false);
			responseVO.setMgs("Exception occurred");
			response.add(responseVO);
		} finally {
			CurrentSession.closeSession();
		}
		return response;
	}
	
	public static int generateRandomKey() {
		return randomGen.nextInt();
	}
}
