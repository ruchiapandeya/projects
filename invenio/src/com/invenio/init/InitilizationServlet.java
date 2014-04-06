package com.invenio.init;

import javax.servlet.ServletConfig;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;

import com.invenio.service.impl.CurrentSession;

public class InitilizationServlet extends HttpServlet {

	/**
	 * 
	 */
	private static final long serialVersionUID = 3629571256596258880L;

	@Override
	public void init(ServletConfig config) throws ServletException {
		try {
			com.invenio.service.impl.CurrentSession.openSession();
		} catch (Exception e) {
			e.printStackTrace();
			throw new ServletException("Unable to get hibernate session");
		} finally {
			CurrentSession.closeSession();
		}
		
	}
}
