package com.invenio.logic;

import java.util.Properties;

import javax.mail.Message;
import javax.mail.MessagingException;
import javax.mail.PasswordAuthentication;
import javax.mail.Session;
import javax.mail.Transport;
import javax.mail.internet.InternetAddress;
import javax.mail.internet.MimeMessage;
import javax.mail.internet.MimeMessage.RecipientType;

public class MailLogic {
	public static final String MAIL_AS_ADMIN = "admin@invenio.com";
	public static final String MAIL_AS_NOREPLY = "no-reply@invenio.com";
	public static final String MAIL_AS_WELCOME = "welcome@invenio.com";
	public static final String MAIL_AS_SUPPORT = "support@invenio.com";
	public static final String MAIL_AS_FEEDBACK = "feedback@invenio.com";
	
	public static final String WELCOME_NOTE_PLAIN = "Welcome to the Invenio Portal, use the following link to activate your profile." + 
			"Note: The password to activate is sent in another mail for security reasons. ";
	public static final String WELCOME_NOTE_HTML = "<b>Welcome</b> to the <i>Invenio</i> Portal, here you can do blah, blah....<br> " +
				"Refer <a href=\"http://www.thinkon.emr.com/intro\">Here</a> for more info";
	

	public static void mailPasswordReset(String[] toAddress, String body) throws MessagingException {
		mail(MAIL_AS_ADMIN, toAddress, new String[0], "Invenio: Password reset request - act now", body);
	}
	
	public static void mailWelcomeNote(String[] toAddress, String body) throws MessagingException {
		mail(MAIL_AS_ADMIN, toAddress, new String[0], "Welcome to the Invenio Community", body);
	}
	
	public static void mail(String fromAddress, String[] toAddress, String[] ccAddress, String subject, String body) throws MessagingException {
		Message message = new MimeMessage(getSession());

		if (toAddress != null) {
			for (int toCount = 0; toCount < toAddress.length; toCount++) {
				message.addRecipient(RecipientType.TO, new InternetAddress(toAddress[toCount]));
			}
		}
		
		if (ccAddress != null) {
			for (int ccCount = 0; ccCount < ccAddress.length; ccCount++) {
				message.addRecipient(RecipientType.CC, new InternetAddress(ccAddress[ccCount]));
			}
		}
		
		message.addFrom(new InternetAddress[] { new InternetAddress(fromAddress) });

		message.setSubject(subject);
		message.setContent(body, "text/plain");

		Transport.send(message);
	}

	private static Session getSession() {
		Authenticator authenticator = new Authenticator();

		Properties properties = new Properties();
		properties.setProperty("mail.smtp.submitter", authenticator.getPasswordAuthentication().getUserName());
		properties.setProperty("mail.smtp.auth", "true");

		properties.setProperty("mail.smtp.host", "thinkon.emr.com");
		properties.setProperty("mail.smtp.port", "25");

		return Session.getInstance(properties, authenticator);
	}

	private static class Authenticator extends javax.mail.Authenticator {
		private PasswordAuthentication authentication;

		public Authenticator() {
			String username = "thinkon";
			String password = "thinkon365";
			authentication = new PasswordAuthentication(username, password);
		}

		protected PasswordAuthentication getPasswordAuthentication() {
			return authentication;
		}
	}
}
