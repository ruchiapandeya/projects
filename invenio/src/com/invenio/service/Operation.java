package com.invenio.service;

import java.lang.reflect.Method;

import org.hibernate.Session;
/**
 * 
 * @author girishbabu
 * This interface is generic hibernate operation structure. 
 * All CRUD operations in DAL layer will extend it.
 */
public interface Operation {
	
	public Object executeMethod(Object[] objs, Method method, Session session);
	
}
