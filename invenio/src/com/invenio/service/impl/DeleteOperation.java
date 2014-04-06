package com.invenio.service.impl;

import java.lang.reflect.Method;

import org.apache.log4j.Logger;
import org.hibernate.HibernateException;
import org.hibernate.Session;

import com.invenio.service.Operation;
/**
 * 
 * @author girishbabu
 * <p>
 * This class is an implementation for hibernate delete operation.
 */
public class DeleteOperation implements Operation {

	private Logger logger = Logger.getLogger(DeleteOperation.class);
	public Object executeMethod(Object[] objs, Method method,
			Session session) {
		try {
			session.delete(objs[0]);
		} catch (HibernateException e) {
			logger.error("DeleteOperation:executeMethod() -- Exception occurred ",e);
			logger.debug("DeleteOperation:executeMethod() -- END");
			return false;
		}
		return true;
	}

}
