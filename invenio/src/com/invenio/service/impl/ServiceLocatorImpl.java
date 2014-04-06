package com.invenio.service.impl;

import java.lang.reflect.Proxy;

import org.apache.log4j.Logger;
/**
 * 
 * @author girishbabu
 * <P>
 * This class is implementation for CRUD interface locator, to get instance of it.
 */
public class ServiceLocatorImpl implements com.invenio.service.DomainService {
	private static Logger logger = Logger.getLogger(ServiceLocatorImpl.class);
	
	public Object getObjectManager(Class objectManager) {
		Object object = Proxy.newProxyInstance(objectManager.getClassLoader(), new Class[]{objectManager},new InvocationHandlerImpl());
		return object;
	}
	
}
