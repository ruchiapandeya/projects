package com.emr.auth;

import java.security.MessageDigest;
import java.security.NoSuchAlgorithmException;

public class InvenioCrypt {
	
	public static String getEncryptedHash(String password) throws NoSuchAlgorithmException {
		String passwordHash = "";
		MessageDigest messageDigest = MessageDigest.getInstance("MD5");
		messageDigest.update(password.getBytes());
		 
        byte byteData[] = messageDigest.digest();
 
        StringBuffer hexString = new StringBuffer();
    	for (int i=0;i<byteData.length;i++) {
    		String hex=Integer.toHexString(0xff & byteData[i]);
   	     	if(hex.length()==1) hexString.append('0');
   	     	hexString.append(hex);
    	}
    	passwordHash = hexString.toString();
    	
		return passwordHash;
	}

}
