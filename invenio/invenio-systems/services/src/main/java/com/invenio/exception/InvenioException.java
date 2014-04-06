package com.invenio.exception;

public class InvenioException extends RuntimeException {

	/**
	 * 
	 */
	private static final long serialVersionUID = 1247786708379279116L;
	
	public InvenioException(String message) {
		super(message);
	}
	
	public InvenioException(String message, Throwable throwable) {
		super(message, throwable);
	}
	
	public InvenioException(Throwable throwable) {
		super(throwable);
	}

}
