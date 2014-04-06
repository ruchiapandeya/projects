package com.invenio.service.impl;

import org.apache.log4j.Logger;
import org.hibernate.HibernateException;
import org.hibernate.Query;
import org.hibernate.SQLQuery;
import org.hibernate.Session;
import org.hibernate.Transaction;

public class InvenioSession {

	private static Logger log = Logger.getLogger(InvenioSession.class);
	
	protected int concurrentSessionCount = 0;

	private Session hibSession = null;

	private Transaction transaction = null;

	public InvenioSession(Session session)
	{
		hibSession = session;
	}

	public void beginTransaction() throws Exception {
		if (transaction != null) {
			log.debug("Trying to open a transaction without commiting previous transcation");
			return;
		} else {

			try {
				transaction = hibSession.beginTransaction();
			} catch (HibernateException ex) {
				throw new Exception(ex);
			}
		}
	}

	public void commitTransaction() throws Exception {
		if (transaction == null) {
			throw new Exception("Trying to commit without beginning transaction");
		}
			try
			{
				transaction.commit();
				transaction = null;
				hibSession.flush();
			}
			catch (HibernateException ex)
			{
				log.error("Exception committing transaction", ex);
			}
	}

	public void closeTransaction()
	{
		try
		{
			if (transaction != null)
			{
				transaction.begin();
				transaction.rollback();
				transaction = null;
			}
		}
		catch (Throwable ex)
		{
			log.error("Exception closing transaction ", ex);
		}
	}

	Session getHibernateSession()
	{
		return hibSession;
	}

	Transaction getHibernateTransaction()
	{
		return transaction;
	}
	
	public Query hqlQuery(String queryString) {
		return hibSession.createQuery(queryString);
	}
	
	public SQLQuery sqlQuery(String queryString) {
		return hibSession.createSQLQuery(queryString);
	}
}
