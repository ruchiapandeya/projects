package com.invenio.logic;

import java.util.Random;

public class RandomGenerator {

	public final static short TYPE_MIXED_CASE = 0;
	public final static short TYPE_UPPER_ONLY = 1;
	public final static short TYPE_LOWER_ONLY = 2;
	public final static Random rnd = new Random();

	static final char[] alphas = {'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z',
		'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','0','1','2','3','4','5','6','7','8','9'};

	/**
	 * Generate a random string of characters at the specified length.  The first argument (type) is a constant 
	 * TYPE_MIXED_CASE, TYPE_UPPER_ONLY, TYPE_LOWER_ONLY.  This is followed by length.  That is followed by whether or not
	 * the first character should be capitalized (regardless of lower only).  It is of course silly to use initial caps
	 * with TYPE_UPPER_ONLY.  
	 * 
	 * @param type
	 * @param length
	 * @param initialCaps
	 * @return
	 */
	public static String generateRandomString(short type,int length, boolean initialCaps) {
		int min = type == TYPE_LOWER_ONLY ? 36 : 0;
		int max = type == TYPE_UPPER_ONLY ? 26 : alphas.length;
		String generated = "";
		for (int i = 0; i < length; i++) {			
			int random = rnd.nextInt(max - min) + min;
			generated += alphas[random];
		}
		generated = initialCaps ? (""+generated.charAt(0)).toUpperCase() + generated.substring(1) : generated;
		return generated;
	}

	/**
	 * Generate a random string of characters at the specified length without the option of initial caps.  See the other method in this class.
	 * @param type
	 * @param length
	 * @return
	 */
	public static String generateRandomString(short type,int length) {
		return generateRandomString(type, length, false);
	}

}
