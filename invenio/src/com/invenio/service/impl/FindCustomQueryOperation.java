package com.invenio.service.impl;

import java.lang.reflect.Method;

import org.apache.log4j.Logger;
import org.hibernate.Query;
import org.hibernate.Session;

import com.invenio.service.Operation;
/**
 * 
 * @author girishbabu
 * <P>
 * This class is an implementation of find by custom column query.
 */
public class FindCustomQueryOperation implements Operation {

	private Logger logger = Logger.getLogger(FindCustomQueryOperation.class);
	public Object executeMethod(Object[] objs, Method method, Session session) {
		Query query = null;
		try {
			query = session.getNamedQuery(method.getName());

			if(objs != null){
				if(objs.length > 0) {
					for (int i = 0; i < objs.length; i++) {
						query.setParameter(i, objs[i]);	
					}
				}
			}
			query.setCacheable(true);
		} catch (Exception e) {
			logger.error("FindCustomQueryOperation:executeMethod() -- Exception occurred",e);
		}
		return query.list();
	}


}
