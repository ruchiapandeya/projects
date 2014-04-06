package com.invenio.service.impl;

import java.lang.reflect.Method;

import org.apache.log4j.Logger;
import org.hibernate.Session;

import com.invenio.service.Operation;

public class FindAllOperation implements Operation {
	
	private static Logger logger = Logger.getLogger(FindAllOperation.class);

	public Object executeMethod(Object[] objs, Method method, Session session) {
		try {//Gets the return type and casts it to the domain class by removing class string from it
			sun.reflect.generics.reflectiveObjects.ParameterizedTypeImpl typeImpl =  (sun.reflect.generics.reflectiveObjects.ParameterizedTypeImpl) method.getGenericReturnType();
			String callerClass = (typeImpl.getActualTypeArguments()[0]).toString().replaceFirst("class ", "");
			Class classObj = Class.forName(callerClass);
			return session.createCriteria((Class) classObj).list();
		} catch (Exception e) {
			logger.error("FindAllOperation:executeMethod() -- Exception ",e);
		} 
		return null;
	}

}
