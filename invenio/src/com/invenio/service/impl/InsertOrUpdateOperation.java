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
public class InsertOrUpdateOperation implements Operation{
	
	private Logger logger = Logger.getLogger(InsertOrUpdateOperation.class);
	public Object executeMethod(Object[] objs, Method method, Session session) {
		try {
			session.merge(objs[0]);
		} catch (Exception e) {
			logger.error("MergeOperation:executeMethod() -- Exception occurred",e);
			logger.debug("MergeOperation:executeMethod() -- End");
			return false;
		}
		return true;
	}
}
