package com.invenio.service.impl;

import java.lang.reflect.Method;

import org.apache.log4j.Logger;
import org.hibernate.HibernateException;
import org.hibernate.Session;

import com.invenio.service.Operation;
/**
 * @author girishbabu
 *<p>
 *This class implements the Hibernate add operation.
 */
public class AddOperation implements Operation {
	
	private Logger logger = Logger.getLogger(AddOperation.class);
	
	public Object executeMethod(Object[] objs, Method method,
			Session session) {
		try {
			Object obj = session.save(objs[0]);
			return obj;
		} catch (HibernateException e) {
			logger.error("AddOperation:executeMethod() -- Exception ",e);
		}
		return null;
	}

}
