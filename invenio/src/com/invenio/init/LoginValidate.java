package com.invenio.init;

import java.io.IOException;
import java.util.List;

import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.http.Cookie;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

import com.invenio.exception.InvalidSessionException;
import com.invenio.logic.AuthLogic;
import com.invenio.logic.SessionManager;
import com.invenio.vo.ResponseVO;

public class LoginValidate extends HttpServlet {

	/**
	 * 
	 */
	private static final long serialVersionUID = 5605458991556405024L;

	protected void doGet(HttpServletRequest req, HttpServletResponse resp)
			throws ServletException, IOException {
		this.doPost(req, resp);
	}
	
	@Override
	protected void doPost(HttpServletRequest req, HttpServletResponse resp)
			throws ServletException, IOException {
		HttpSession session = req.getSession(true);

		if (req.getParameter("signout") != null) {
			String username = (String)session.getAttribute("userid");
			invalidateSession(req, resp, username, session);
		} else {
			String username = req.getParameter("userid");
			String password = req.getParameter("password");
			List<ResponseVO> validUserResponse = new AuthLogic().userProfile(username, password);
			boolean isUserValid = false;
			if (validUserResponse != null && validUserResponse.size() > 0) {
				isUserValid = validUserResponse.get(0).isPassed();
			}				
			if (isUserValid) {//Validate password here
				String encodedKey =  null;
				try {
					encodedKey = SessionManager.generateAuthenticatedToken(username, session.getId());
				} catch (InvalidSessionException e) {
					System.err.print(e);
				}
				session.setAttribute("userid", username);
				//set cookies
				Cookie cookie = new Cookie("invenio", encodedKey);
				cookie.setPath("/invenio");
				cookie.setMaxAge(-1);
				resp.addCookie(cookie);
			} else {
				invalidateSession(req, resp, username, session);
			}
		}
		RequestDispatcher dispatcher = getServletContext().getRequestDispatcher("/ui/pages/user_session.jsp");
		dispatcher.forward(req, resp);
	}

	public void invalidateSession(HttpServletRequest req,
			HttpServletResponse resp, String username, HttpSession session) {
		try {
			SessionManager.inValidSession(username, session.getId());
		} catch (Exception e) {
		}
		session.invalidate();
		Cookie[] cookies = req.getCookies();
		for (Cookie cookie : cookies) {
			if (cookie.getName().equals("invenio")) {
				cookie.setValue(null);
				resp.addCookie(cookie);
			}
		}
	}
	
}
