package com.invenio.logic;

import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.Date;

import org.apache.log4j.Logger;

public class UtilLogic {

	private static Logger logger = Logger.getLogger(UtilLogic.class);
	
	public static Date parseDate(String dateStr) throws ParseException {
		SimpleDateFormat sdf = new SimpleDateFormat("dd-mm-yyyy");
		return sdf.parse(dateStr);
	}
	
}
