package com.invenio.service;

import com.invenio.service.impl.ServiceLocatorImpl;
/**
 * 
 * @author girishbabu
 * This class gets the service locator impl class's instance, 
 * which inturn will get CRUD manager interface's instance.
 */
public class ServiceLocator {
	private static ServiceLocatorImpl serviceLocatorImpl;
	
	/**
	 * Method gets and returns service location implementation.
	 * @return
	 */
	public static ServiceLocatorImpl get() {
		if(serviceLocatorImpl == null)
			serviceLocatorImpl = new ServiceLocatorImpl();
		return serviceLocatorImpl;
	}
}
