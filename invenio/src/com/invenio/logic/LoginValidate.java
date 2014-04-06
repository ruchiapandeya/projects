package com.invenio.logic;

import java.io.IOException;
import java.io.PrintWriter;
import java.util.List;

import javax.servlet.ServletException;
import javax.servlet.http.Cookie;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

import org.codehaus.jettison.json.JSONException;
import org.codehaus.jettison.json.JSONObject;

import com.invenio.exception.InvalidSessionException;
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
			resp.sendRedirect("index.jsp");
			return;
		}
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
			Cookie cookie = new Cookie("thinkon", encodedKey);
			cookie.setPath("/thinkon");
			cookie.setMaxAge(-1);
			resp.addCookie(cookie);
						
		} else {
			
			invalidateSession(req, resp, username, session);
			//resp.sendRedirect("index.jsp");
			
		}
		resp.setContentType("application/json");
		// Get the printwriter object from response to write the required json object to the output stream      
		PrintWriter out = resp.getWriter();
		// Assuming your json object is **jsonObject**, perform the following, it will return your json object  
		try {
			out.print(new JSONObject("{items:[{\"passed\":"+isUserValid+"}]}"));
		} catch (JSONException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		out.flush();

		
	}

	public void invalidateSession(HttpServletRequest req,
			HttpServletResponse resp, String username, HttpSession session) {
		try {
			SessionManager.inValidSession(username, session.getId());
		} catch (Exception e) {
		}
		
		session.setAttribute("userid", null);
		session.invalidate();
		Cookie[] cookies = req.getCookies();
		for (Cookie cookie : cookies) {
			if (cookie.getName().equals("thinkon")) {
				cookie.setPath("/thinkon");
				cookie.setValue(null);
				resp.addCookie(cookie);
			}
		}
	}
	
}
