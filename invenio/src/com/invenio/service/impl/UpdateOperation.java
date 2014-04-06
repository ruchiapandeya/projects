package com.invenio.service.impl;

import java.lang.reflect.Method;

import org.apache.log4j.Logger;
import org.hibernate.Session;

import com.invenio.service.Operation;
/**
 * 
 * @author girishbabu
 * <P>
 * 
 * This class is an implementation of hibernate update operation.
 */
public class UpdateOperation implements Operation{
	
	private Logger logger = Logger.getLogger(UpdateOperation.class);
	public Object executeMethod(Object[] objs, Method method, Session session) {
		try {
			session.update(objs[0]);
		} catch (Exception e) {
			logger.error("UpdateOperation:executeMethod() -- Exception occurred",e);
			return false;
		}
		return true;
	}
}
