<%
	Cookie[] cookies = request.getCookies();
	boolean isValidUser = false;
	for(int loopIndex = 0; loopIndex < cookies.length; loopIndex++) { 
		if (cookies[loopIndex].getName().equals("invenio") && cookies[loopIndex].getValue() != null) {
			isValidUser = true;
		}
	}
	if(isValidUser) {
		response.sendRedirect("/invenio/ui/pages/dashboard.jsp");
	} else {
		response.sendRedirect("/invenio/ui/pages/login.jsp");
	}
%>