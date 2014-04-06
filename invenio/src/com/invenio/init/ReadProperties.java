package com.invenio.init;

import java.io.*;
import java.util.*;

import org.apache.log4j.Logger;

public class ReadProperties {
	
	private static Logger logger = Logger.getLogger(ReadProperties.class);
	
	private static HashMap<String, String> keyValueMap = new HashMap<String, String>();
	
	@SuppressWarnings("unused")
	private ReadProperties() {
	}
	
	public ReadProperties(String contextPath) {
		ReadProperties.initProperties(contextPath);
	}
	
	private static void initProperties(String contextPath) {
		try{
			File f = new File(contextPath+"/config.properties");
			if(f.exists()) {
				Properties pro = new Properties();
				FileInputStream in = new FileInputStream(f);
				pro.load(in);
				Set<Object> keySet = pro.keySet();
				for (Object keyObj : keySet) {
					String key = keyObj.toString();
					String p = pro.getProperty(keyObj.toString());
					keyValueMap.put(key, p);
				}
			} else {
				logger.error("Unable to find the property file at :"+contextPath);
			}
		}
		catch(IOException e){
			logger.error(e);
		}
	}
	
	public static String getValue(String key) {
		if (keyValueMap.containsKey(key)) {
			return keyValueMap.get(key);
		}
		return null;
	}
}