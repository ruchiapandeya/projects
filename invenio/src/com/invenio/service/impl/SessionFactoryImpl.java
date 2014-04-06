package com.invenio.service.impl;

import org.apache.log4j.Logger;
import org.hibernate.HibernateException;
import org.hibernate.Session;
import org.hibernate.cfg.AnnotationConfiguration;

import com.invenio.service.SessionFactory;
/**
 * 
 * @author girishbabu
 * <P>
 * 
 * This class is an implementation of Hibernate session factory.
 */
public class SessionFactoryImpl implements SessionFactory {

	private Logger logger = Logger.getLogger(SessionFactoryImpl.class);

	private static org.hibernate.SessionFactory factory;

	public Session newSession() throws Exception {
		try {
			Session session = getSessionFactory().openSession();
			if (!session.isConnected()) {
				logger.error("SessionFactoryImpl:newSession() -- Unable to connect to DB ");
				throw new Exception("Unable to connect to DB ");
			}
			return session;
		} catch (HibernateException e) {
			logger.error("SessionFactoryImpl:newSession() -- Unable to open new session ",e);
			throw new Exception("Unable to open new session", e);
		}
	}

	public org.hibernate.SessionFactory getSessionFactory() throws Exception {
		if (factory == null) {
			try {
				AnnotationConfiguration configuration = new AnnotationConfiguration();
				configuration.configure();
				factory = configuration.buildSessionFactory();
			} catch (Throwable e) {
				logger.error("SessionFactoryImpl:getSessionFactory() -- Unable to configure a new SessionFactory ",e);
				throw new Exception("Unable to configure a new SessionFactory", e);
			}
		}
		return factory;
	}
}
