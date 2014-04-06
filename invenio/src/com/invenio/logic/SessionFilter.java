package com.invenio.logic;

import java.io.IOException;
import java.lang.annotation.Annotation;
import java.lang.reflect.Method;
import java.util.HashSet;
import java.util.Set;

import javax.servlet.Filter;
import javax.servlet.FilterChain;
import javax.servlet.FilterConfig;
import javax.servlet.ServletException;
import javax.servlet.ServletRequest;
import javax.servlet.ServletResponse;
import javax.servlet.http.Cookie;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;
import javax.ws.rs.Path;

import org.springframework.web.context.WebApplicationContext;
import org.springframework.web.context.support.WebApplicationContextUtils;

import com.invenio.exception.InvalidSessionException;
import com.invenio.init.NonSecureMethod;

public class SessionFilter implements Filter {

	private Set<String> nonSecureMethod = new HashSet<String>();

	@Override
	public void destroy() {
		// TODO Auto-generated method stub

	}

	@Override
	public void doFilter(ServletRequest arg0, ServletResponse arg1, FilterChain filterChain) throws IOException, ServletException {
		HttpServletRequest req = (HttpServletRequest) arg0;
		
		System.out.println(req.getRequestURI());
		String methodURI = req.getRequestURI();
		if (!nonSecureMethod(methodURI)) {

			HttpServletResponse resp = (HttpServletResponse) arg1;
			HttpSession session = req.getSession(true);
			String username = (String) session.getAttribute("userid");
			boolean isValid = false;
			Cookie[] cookies = req.getCookies();
			if (cookies != null) {
				for (Cookie cookie : cookies) {
					if (cookie.getName().equals("thinkon")) {
						try {
							isValid = SessionManager.isValidSession(username, session.getId(), cookie.getValue());
						} catch (InvalidSessionException e) {
							e.printStackTrace();
						}
					}
				}
			}

			if (!isValid) {
				try {
					SessionManager.inValidSession(username, session.getId());
				} catch (Exception e) {
				}
				session.setAttribute("userid", null);
				session.invalidate();
				if (cookies != null) {
					for (Cookie cookie : cookies) {
						if (cookie.getName().equals("thinkon")) {
							cookie.setPath("/thinkon");
							cookie.setValue(null);
							resp.addCookie(cookie);
						}
					}
				}
				resp.sendRedirect("/thinkon/index.jsp");
				return;
			}
		}
		filterChain.doFilter(arg0, arg1);
	}

	private boolean nonSecureMethod(String methodUri) {
		String[] methodTokens = methodUri.split("/");
		if (methodTokens.length > 4) {
			System.out.println("/"+methodTokens[4]+"/"+methodTokens[5]);
			if (nonSecureMethod.contains("/"+methodTokens[4]+"/"+methodTokens[5])) {
				return true;
			}
		}
		return false;
	}

	@Override
	public void init(FilterConfig arg0) throws ServletException {
		
		WebApplicationContext webApplicationContext = WebApplicationContextUtils.getWebApplicationContext(arg0.getServletContext());
		String[] beans = webApplicationContext.getBeanDefinitionNames();
		for (String beanName : beans) {
			String servicePath = "";
			Object obj = webApplicationContext.getBean(beanName);
			if (obj.getClass().getCanonicalName().startsWith("com.emr.logic")) {
				Annotation[] classAnnotations = obj.getClass().getAnnotations();
				for (Annotation annotation : classAnnotations) {
					if (annotation.annotationType().getCanonicalName().equals(Path.class.getCanonicalName())) {
						Path pathAnnotation = (Path) annotation;
						servicePath = pathAnnotation.value();
					}
				}
				
				Method[] methods = obj.getClass().getMethods();
				for (Method method : methods) {
					boolean isNonSecure = false;
					String methodPath = null;
					Annotation[] annotations = method.getAnnotations();
					for (Annotation annotation : annotations) {
						if (annotation.annotationType().getCanonicalName().equals(NonSecureMethod.class.getCanonicalName())) {
							isNonSecure = true;
						}
						
						if (annotation.annotationType().getCanonicalName().equals(Path.class.getCanonicalName())) {
							Path pathAnnotation = (Path) annotation;
							methodPath = pathAnnotation.value();
						}
					}
					
					if (isNonSecure) {
						//Add to set
						String methodName = servicePath + methodPath;
						if (methodName.indexOf("{") > 0) {
							methodName = methodName.substring(0,methodName.indexOf("{")-1);
						}
						nonSecureMethod.add(methodName);
						System.out.println(methodName);
					}
				}
				
			}
		}
	}

}
