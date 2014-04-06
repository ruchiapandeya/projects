package com.invenio.exception;

public class InvalidSessionException extends Exception {

	private static final long serialVersionUID = -3356986994597847114L;
	
	public InvalidSessionException(Throwable throwable) {
		super(throwable);
	}	
	
	
	public InvalidSessionException(String message, Throwable throwable) {
		super(message, throwable);
	}
}
