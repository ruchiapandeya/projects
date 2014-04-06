package com.invenio.service.impl;

import java.io.Serializable;
import java.lang.reflect.Method;

import org.apache.log4j.Logger;
import org.hibernate.Session;

import com.invenio.service.Operation;
/**
 * 
 * @author girishbabu
 * <p>
 * This class is implementation of hibernate find by primary key operation.
 */
public class FindByPKOperation implements Operation {
	
	private static Logger logger = Logger.getLogger(FindByPKOperation.class);
	
	public Object executeMethod(Object[] objs, Method method, Session session) {
		try {
			;
			return session.load((Class)method.getReturnType(), (Serializable)objs[0]);
		} catch (Exception e) {
			logger.error("FindByPKOperation:executeMethod() -- Exception ",e);
		} 
		return null;
	}
}
