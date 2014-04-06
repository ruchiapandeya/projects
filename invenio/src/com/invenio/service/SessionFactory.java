package com.invenio.service;

import org.hibernate.Session;
/**
 * 
 * @author girishbabu
 * <p>
 * Interface for session factory.
 */
public interface SessionFactory {
	
	public Session newSession() throws Exception;
	
	public org.hibernate.SessionFactory getSessionFactory() throws Exception;

}
