package com.invenio.logic;

import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.Date;
import java.util.List;

import javax.jws.WebService;
import javax.ws.rs.FormParam;
import javax.ws.rs.GET;
import javax.ws.rs.POST;
import javax.ws.rs.Path;
import javax.ws.rs.PathParam;
import javax.ws.rs.Produces;

import org.apache.log4j.Logger;

import com.emr.auth.InvenioCrypt;
import com.invenio.domain.City;
import com.invenio.domain.InvenioUser;
import com.invenio.init.NonSecureMethod;
import com.invenio.init.ReadProperties;
import com.invenio.manager.CityMgr;
import com.invenio.manager.InvenioUserMgr;
import com.invenio.service.ServiceLocator;
import com.invenio.service.impl.CurrentSession;
import com.invenio.service.impl.InvenioSession;
import com.invenio.vo.ResponseVO;
import com.invenio.vo.UserProfileVO;

@WebService
@Path("/user")
@Produces("application/json")
public class UserProfileLogic {

	private static final Logger logger = Logger.getLogger(UserProfileLogic.class);
	
	@NonSecureMethod
	@GET
	@Path("/sayHello/{name}/{msg}")
	@Produces("application/json")
	public String sayHello(@PathParam("name")String name,@PathParam("msg")String msg) {
		return "Hello "+name+", "+msg;
	}


	@GET
	@Path("/userProfile/{userid}")
	@Produces("application/json")
	public List<UserProfileVO> userProfile(@PathParam("userid")String userid) {
		List<UserProfileVO> userProfileList = new ArrayList<UserProfileVO>();
		try {
			CurrentSession.openSession();
			InvenioUserMgr invenioUserMgr = (InvenioUserMgr) ServiceLocator.get().getObjectManager(InvenioUserMgr.class);
			List<InvenioUser> invenioUserList = invenioUserMgr.findInvenioUserByUserId(userid);
			if (invenioUserList != null && !invenioUserList.isEmpty()) {
				for (InvenioUser invenioUser : invenioUserList) {
					UserProfileVO userProfileVo = new UserProfileVO();
					userProfileVo.setRecordId(invenioUser.getRecordId().toString());
					userProfileVo.setFirstName(invenioUser.getFirstName());
					userProfileVo.setLastName(invenioUser.getLastName());
					userProfileVo.setMiddleName(invenioUser.getMiddleName());
					if (invenioUser.getCreatedTime() != null)
						userProfileVo.setCreatedTime(invenioUser.getCreatedTime().toString());
					userProfileVo.setGender(invenioUser.getGender());
					userProfileVo.setActiveInd(invenioUser.getActiveInd());
					userProfileVo.setUserid(userid);
					userProfileVo.setAddress1(invenioUser.getAddress1());
					userProfileVo.setAddress2(invenioUser.getAddress2());
					if (invenioUser.getCity() != null) {
						userProfileVo.setCityName(invenioUser.getCity().getCityName());
						userProfileVo.setStateName(invenioUser.getCity().getState().getStateName());
						userProfileVo.setCountryName(invenioUser.getCity().getState().getCountry().getCountryName());
					}
					userProfileVo.setPhone(invenioUser.getPhone());
					if (invenioUser.getDateOfBirth() != null){
						userProfileVo.setDateOfBirth(new SimpleDateFormat("yyyy-MM-dd").format(invenioUser.getDateOfBirth()));
					}
					userProfileVo.setEmail(invenioUser.getEmail());
					userProfileVo.setZipCode(invenioUser.getZipCode());
					userProfileVo.setResetProfile(invenioUser.getResetProfile());
					
					if (invenioUser.getResetProfileTimestamp() != null && !"".equals(invenioUser.getResetProfileTimestamp()))
						userProfileVo.setResetProfileTimestamp(invenioUser.getResetProfileTimestamp().toString());
					userProfileList.add(userProfileVo);
				}
			}
		} catch (Exception e) {
			logger.error(e);
		} finally {
			CurrentSession.closeSession();
		}
		return userProfileList;
	}

	@NonSecureMethod
	@POST
	@Path("/addMinProfile")
	@Produces("application/json")
	public List<ResponseVO> addMinProfile(@FormParam("userId")String userid) {
		List<ResponseVO> responseList = new ArrayList<ResponseVO>();
		try {
			if (userid == null || userid.isEmpty()) {
				ResponseVO responseVO = new ResponseVO();
				responseVO.setPassed(false);
				responseVO.setMgs("User id cannot be blank");
				responseList.add(responseVO);
				return responseList;
			} else {
				if (!checkDuplicateUserId(userid)) {
					ResponseVO responseVO = new ResponseVO();
					responseVO.setPassed(false);
					responseVO.setMgs("User id: "+userid+" already exists!");
					responseList.add(responseVO);
					return responseList;
				}
			}
			
			InvenioSession session = CurrentSession.openSession();
			InvenioUserMgr invenioUserMgr = (InvenioUserMgr) ServiceLocator.get().getObjectManager(InvenioUserMgr.class);
			InvenioUser invenioUser = new InvenioUser();
			invenioUser.setUserid(userid);
			//Generate temp password, this can be used for activation as well
			String randomPassword = RandomGenerator.generateRandomString(RandomGenerator.TYPE_MIXED_CASE, 8);
			invenioUser.setPassword(InvenioCrypt.getEncryptedHash(randomPassword));
			invenioUser.setActiveInd("N");
			invenioUser.setCreatedTime(new Date());
			invenioUser.setEmail(userid);
					
			session.beginTransaction();
			invenioUserMgr.add(invenioUser);
			session.commitTransaction();
			ResponseVO responseVO = new ResponseVO();
			responseVO.setPassed(true);
			responseVO.setMgs("Added user id: "+userid+" successfully");
			responseList.add(responseVO);
			
			//Send registration mail
			String registrationLink = ReadProperties.getValue("profile.activate.url") + "userid=" + invenioUser.getEmail();
			String[] welcomeNoteRecipients = {invenioUser.getEmail()};
			MailLogic.mailWelcomeNote(welcomeNoteRecipients, MailLogic.WELCOME_NOTE_PLAIN + registrationLink);
			
			//Send temp password
			String passwordMailBody = "You would have recieved another mail with the activation link. " +
					"Please use the following temporary password to activate your profile : " +
					randomPassword;
			MailLogic.mail(MailLogic.MAIL_AS_NOREPLY, welcomeNoteRecipients, new String[0], "Password for profile activation", passwordMailBody);
			
			return responseList;
		} catch (Exception e) {
			logger.error(e);
			ResponseVO responseVO = new ResponseVO();
			responseVO.setPassed(false);
			responseVO.setMgs("Failed to add user id: "+e.getMessage());
			responseList.add(responseVO);
		} finally {
			CurrentSession.closeSession();
		}
		return responseList;
	}

	@SuppressWarnings("unused")
	private Date parseDate(String dob) {
		try {
			SimpleDateFormat simpleDateFormat = new SimpleDateFormat("dd/mm/yyyy");
			return simpleDateFormat.parse(dob);
		} catch (Exception e) {
			logger.error("Error in formatting date",e);
		}
		return null;
	}


	@POST
	@Path("/updateProfile")
	@Produces("application/json")
	public List<ResponseVO> updateProfile(
			@FormParam("userId")String userid, 
			@FormParam("password")String password,
			@FormParam("firstName")String firstName,
			@FormParam("middleName")String middleName,
			@FormParam("lastName")String lastName,
			@FormParam("gender")String gender,
			@FormParam("dob")String dob,
			@FormParam("address1")String address1,
			@FormParam("address2")String address2,
			@FormParam("phone")String phone,
			@FormParam("question1") String question1,
			@FormParam("question2") String question2,
			@FormParam("answer1") String answer1,
			@FormParam("answer2") String answer2,
			@FormParam("cityId")String cityId,
			@FormParam("zipCode")String zipCode,
			@FormParam("email")String email) {
		List<ResponseVO> responseList = new ArrayList<ResponseVO>();
		try {
			InvenioSession session = CurrentSession.openSession();
			InvenioUserMgr invenioUserMgr = (InvenioUserMgr) ServiceLocator.get().getObjectManager(InvenioUserMgr.class);
			List<InvenioUser> invenioUserList = invenioUserMgr.findInvenioUserByUserId(userid);
			if (invenioUserList == null || invenioUserList.isEmpty()) {
				ResponseVO responseVO = new ResponseVO();
				responseVO.setPassed(false);
				responseVO.setMgs("User id cannot be blank");
				responseList.add(responseVO);
				return responseList;
			}			
			
			List<ResponseVO> validateResponseList = validateUserProfile(firstName, lastName, address1, address2, phone,
					 cityId, zipCode, email, question1, question2, answer1, answer2, dob, gender);
			if ( validateResponseList != null) {
				return validateResponseList;
			}
			
			InvenioUser invenioUser = invenioUserList.get(0);
			invenioUser.setFirstName(firstName);
			invenioUser.setMiddleName(middleName);
			invenioUser.setLastName(lastName);
			invenioUser.setGender(gender);
			
			SimpleDateFormat format = new SimpleDateFormat("YYYY-MM-DD");
			Date formattedDob = format.parse(dob);
			invenioUser.setDateOfBirth(formattedDob);
			
			invenioUser.setPhone(phone);
			if (password != null && !"".equals(password))
				invenioUser.setPassword(InvenioCrypt.getEncryptedHash(password));
			invenioUser.setAddress1(address1);
			invenioUser.setAddress2(address2);
			invenioUser.setActiveInd("Y");
			
			if (question1 != null && !question1.isEmpty()) {
				invenioUser.setSecretQuestion1(question1);
				invenioUser.setSecretAnswer1(InvenioCrypt.getEncryptedHash(answer1));
			}
			if (question2 != null && !question2.isEmpty()) {
				invenioUser.setSecretQuestion2(question2);
				invenioUser.setSecretAnswer2(InvenioCrypt.getEncryptedHash(answer2));
			}
			
			if (cityId != null && !cityId.isEmpty()) {
				CityMgr cityMgr = (CityMgr) ServiceLocator.get().getObjectManager(CityMgr.class);
				City city = cityMgr.findByPrimaryKey(Integer.parseInt(cityId));
				invenioUser.setCity(city);
			}

			invenioUser.setZipCode(zipCode);

			session.beginTransaction();
			invenioUserMgr.update(invenioUser);
			session.commitTransaction();
			ResponseVO responseVO = new ResponseVO();
			responseVO.setPassed(true);
			responseVO.setMgs("Updated user "+userid+" successfully");
			responseList.add(responseVO);
		} catch (Exception e) {
			logger.error(e);
			ResponseVO responseVO = new ResponseVO();
			responseVO.setPassed(false);
			responseVO.setMgs("Failed to update user id: "+userid);
			responseList.add(responseVO);
		} finally {
			CurrentSession.closeSession();
		}
		return responseList;
	}
	
	
	@POST
	@Path("/updateSecret")
	@Produces("application/json")
	public List<ResponseVO> updateSecret(
			@FormParam("userId")String userid, 
			@FormParam("password")String password,
			@FormParam("question1") String question1,
			@FormParam("question2") String question2,
			@FormParam("answer1") String answer1,
			@FormParam("answer2") String answer2) {
		List<ResponseVO> responseList = new ArrayList<ResponseVO>();
		try {
			InvenioSession session = CurrentSession.openSession();
			InvenioUserMgr invenioUserMgr = (InvenioUserMgr) ServiceLocator.get().getObjectManager(InvenioUserMgr.class);
			List<InvenioUser> invenioUserList = invenioUserMgr.findInvenioUserByUserId(userid);
			if (invenioUserList == null || invenioUserList.isEmpty()) {
				ResponseVO responseVO = new ResponseVO();
				responseVO.setPassed(false);
				responseVO.setMgs("User id cannot be blank");
				responseList.add(responseVO);
				return responseList;
			}			
			
			List<ResponseVO> validateResponseList = validateUserSecret(question1, answer1, question2, answer2);
			if ( validateResponseList != null) {
				return validateResponseList;
			}
			
			InvenioUser invenioUser = invenioUserList.get(0);
			invenioUser.setSecretQuestion1(question1);
			invenioUser.setSecretAnswer1(InvenioCrypt.getEncryptedHash(answer1));
			invenioUser.setSecretQuestion2(question2);
			invenioUser.setSecretAnswer2(InvenioCrypt.getEncryptedHash(answer2));
			
			session.beginTransaction();
			invenioUserMgr.update(invenioUser);
			session.commitTransaction();
			ResponseVO responseVO = new ResponseVO();
			responseVO.setPassed(true);
			responseVO.setMgs("Updated secret info successfully");
			responseList.add(responseVO);
		} catch (Exception e) {
			logger.error(e);
			ResponseVO responseVO = new ResponseVO();
			responseVO.setPassed(false);
			responseVO.setMgs("Failed to update secret info for user id: "+userid);
			responseList.add(responseVO);
		} finally {
			CurrentSession.closeSession();
		}
		return responseList;
	}


	public static List<ResponseVO> validateUserProfile(String firstName, String lastName,
			String address1, String address2, String phone,
			String cityId, String zipCode, String email, String question1,
			String question2,
			String answer1,
			String answer2,
			String dob, String gender) {
		List<ResponseVO> responseList = new ArrayList<ResponseVO>();
		if (firstName == null || firstName.isEmpty()) {
			ResponseVO responseVO = new ResponseVO();
			responseVO.setPassed(false);
			responseVO.setMgs("First name cannot be blank");
			responseList.add(responseVO);
			return responseList;
		} 
		
		
		if (lastName == null || lastName.isEmpty()) {
			ResponseVO responseVO = new ResponseVO();
			responseVO.setPassed(false);
			responseVO.setMgs("Last name cannot be blank");
			responseList.add(responseVO);
			return responseList;
		} 
		
		if (gender == null || gender.isEmpty()) {
			ResponseVO responseVO = new ResponseVO();
			responseVO.setPassed(false);
			responseVO.setMgs("Gender cannot be left blank");
			responseList.add(responseVO);
			return responseList;
		}
		
		/*if (email == null || email.isEmpty()) {
			ResponseVO responseVO = new ResponseVO();
			responseVO.setPassed(false);
			responseVO.setMgs("Email id cannot be blank");
			responseList.add(responseVO);
			return responseList;
		} 
		
		
		if (phone == null || phone.isEmpty()) {
			ResponseVO responseVO = new ResponseVO();
			responseVO.setPassed(false);
			responseVO.setMgs("Phone number cannot be blank");
			responseList.add(responseVO);
			return responseList;
		} */
		
		if (question1 != null && !question1.isEmpty()) {
			if (answer1 == null || answer1.isEmpty()) {
				ResponseVO responseVO = new ResponseVO();
				responseVO.setPassed(false);
				responseVO.setMgs("Secrfet answer 1 cannot be blank");
				responseList.add(responseVO);
				return responseList;
			} 
		}
		
		if (question2 != null && !question2.isEmpty()) {
			if (answer2 == null || answer2.isEmpty()) {
				ResponseVO responseVO = new ResponseVO();
				responseVO.setPassed(false);
				responseVO.setMgs("Secret answer 2 cannot be blank");
				responseList.add(responseVO);
				return responseList;
			} 
		}
		
		/*if (address1 == null || address1.isEmpty()) {
			ResponseVO responseVO = new ResponseVO();
			responseVO.setPassed(false);
			responseVO.setMgs("Address line 1 cannot be blank");
			responseList.add(responseVO);
			return responseList;
		} 
		
		
		if (address2 == null || address2.isEmpty()) {
			ResponseVO responseVO = new ResponseVO();
			responseVO.setPassed(false);
			responseVO.setMgs("Address line 2 cannot be blank");
			responseList.add(responseVO);
			return responseList;
		} 
		
		
		if (cityId == null || cityId.isEmpty()) {
			ResponseVO responseVO = new ResponseVO();
			responseVO.setPassed(false);
			responseVO.setMgs("City cannot be blank");
			responseList.add(responseVO);
			return responseList;
		} 
		
		
		if (zipCode == null || zipCode.isEmpty()) {
			ResponseVO responseVO = new ResponseVO();
			responseVO.setPassed(false);
			responseVO.setMgs("City cannot be blank");
			responseList.add(responseVO);
			return responseList;
		}*/
		
		if (dob == null || dob.isEmpty()) {
			ResponseVO responseVO = new ResponseVO();
			responseVO.setPassed(false);
			responseVO.setMgs("Date of birth cannot be blank");
			responseList.add(responseVO);
			return responseList;
		}
		return null;
	}

	
	public static List<ResponseVO> validateUserSecret(String question1, String answer1,
			String question2, String answer2) {
		List<ResponseVO> responseList = new ArrayList<ResponseVO>();
		if (question1 == null || question1.isEmpty()) {
			ResponseVO responseVO = new ResponseVO();
			responseVO.setPassed(false);
			responseVO.setMgs("Secret Question 1 cannot be blank");
			responseList.add(responseVO);
			return responseList;
		} 
		
		if (question2 == null || question2.isEmpty()) {
			ResponseVO responseVO = new ResponseVO();
			responseVO.setPassed(false);
			responseVO.setMgs("Secret Question 2 cannot be blank");
			responseList.add(responseVO);
			return responseList;
		}
		
		if (answer1 == null || answer1.isEmpty()) {
			ResponseVO responseVO = new ResponseVO();
			responseVO.setPassed(false);
			responseVO.setMgs("Secret answer 1 cannot be blank");
			responseList.add(responseVO);
			return responseList;
		}
		
		if (answer2 == null || answer2.isEmpty()) {
			ResponseVO responseVO = new ResponseVO();
			responseVO.setPassed(false);
			responseVO.setMgs("Secret answer 2 cannot be blank");
			responseList.add(responseVO);
			return responseList;
		}
		
		return null;
	}

	@GET
	@Path("/activateUser/{userId}")
	@Produces("application/json")
	public List<ResponseVO> activateUser(@PathParam("userId")String userid) {
		List<ResponseVO> responseList = new ArrayList<ResponseVO>();
		try {
			InvenioSession session = CurrentSession.openSession();
			InvenioUserMgr invenioUserMgr = (InvenioUserMgr) ServiceLocator.get().getObjectManager(InvenioUserMgr.class);
			List<InvenioUser> invenioUserList = invenioUserMgr.findInvenioUserByUserId(userid);
			if (invenioUserList == null || invenioUserList.isEmpty()) {
				ResponseVO responseVO = new ResponseVO();
				responseVO.setPassed(false);
				responseVO.setMgs("Failed to activate user for user id: "+userid+". User does not exists.");
				responseList.add(responseVO);
				return responseList;
			}
			InvenioUser invenioUser = invenioUserList.get(0);
			invenioUser.setActiveInd("Y");
			session.beginTransaction();
			invenioUserMgr.update(invenioUser);
			session.commitTransaction();
			ResponseVO responseVO = new ResponseVO();
			responseVO.setPassed(true);
			responseVO.setMgs("Activated user "+userid+" successfully");
			responseList.add(responseVO);
		} catch (Exception e) {
			logger.error(e);
			ResponseVO responseVO = new ResponseVO();
			responseVO.setPassed(false);
			responseVO.setMgs("Failed to activate user for user id: "+userid);
			responseList.add(responseVO);
		} finally {
			CurrentSession.closeSession();
		}
		return responseList;
	}

	@NonSecureMethod
	@GET
	@Path("/duplicateUserId/{userId}")
	@Produces("application/json")
	public List<ResponseVO> duplicateUserId(@PathParam("userId")String userid) {
		List<ResponseVO> responseList = new ArrayList<ResponseVO>();
		try {
			CurrentSession.openSession();
			InvenioUserMgr invenioUserMgr = (InvenioUserMgr) ServiceLocator.get().getObjectManager(InvenioUserMgr.class);
			List<InvenioUser> invenioUserList = invenioUserMgr.findInvenioUserByUserId(userid);
			if (invenioUserList != null && !invenioUserList.isEmpty()) {
				ResponseVO responseVO = new ResponseVO();
				responseVO.setPassed(false);
				responseVO.setMgs("User id: "+userid+" already in use");
				responseList.add(responseVO);
				return responseList;
			}
			ResponseVO responseVO = new ResponseVO();
			responseVO.setPassed(true);
			responseVO.setMgs("User id  "+userid+" does not exists");
			responseList.add(responseVO);
		} catch (Exception e) {
			logger.error(e);
			ResponseVO responseVO = new ResponseVO();
			responseVO.setPassed(false);
			responseVO.setMgs("User id: "+userid+" already in use");
			responseList.add(responseVO);
		} finally {
			CurrentSession.closeSession();
		}
		return responseList;
	}
	
	@NonSecureMethod
	@GET
	@Path("/alreadyActivatedUserId/{userId}")
	@Produces("application/json")
	public List<ResponseVO> alreadyActivatedUserId(@PathParam("userId")String userid) {
		List<ResponseVO> responseList = new ArrayList<ResponseVO>();
		try {
			CurrentSession.openSession();
			InvenioUserMgr invenioUserMgr = (InvenioUserMgr) ServiceLocator.get().getObjectManager(InvenioUserMgr.class);
			List<InvenioUser> invenioUserList = invenioUserMgr.findInvenioUserByUserId(userid);
			if (invenioUserList != null && !invenioUserList.isEmpty()) {
				ResponseVO responseVO = new ResponseVO();
				if (invenioUserList.get(0).getActiveInd() != null && invenioUserList.get(0).getActiveInd().equalsIgnoreCase("Y")) {
					responseVO.setPassed(true);
					responseVO.setMgs("User id: "+userid+" already activated");
				} else {
					responseVO.setPassed(false);
					responseVO.setMgs("User id: "+userid+" inactive");
				}
				responseList.add(responseVO);
				return responseList;
			}
			ResponseVO responseVO = new ResponseVO();
			responseVO.setPassed(false);
			responseVO.setMgs("User id  "+userid+" does not exists");
			responseList.add(responseVO);
		} catch (Exception e) {
			logger.error(e);
			ResponseVO responseVO = new ResponseVO();
			responseVO.setPassed(false);
			responseVO.setMgs("User id: "+userid+" already in use");
			responseList.add(responseVO);
		} finally {
			CurrentSession.closeSession();
		}
		return responseList;
	}

	public boolean checkDuplicateUserId(String userid) {
		try {
			CurrentSession.openSession();
			InvenioUserMgr invenioUserMgr = (InvenioUserMgr) ServiceLocator.get().getObjectManager(InvenioUserMgr.class);
			List<InvenioUser> invenioUserList = invenioUserMgr.findInvenioUserByUserId(userid);
			if (invenioUserList != null && !invenioUserList.isEmpty()) {
				return false;
			}
		} catch (Exception e) {
			logger.error(e);
		} finally {
			CurrentSession.closeSession();
		}
		return true;
	}
	
}
