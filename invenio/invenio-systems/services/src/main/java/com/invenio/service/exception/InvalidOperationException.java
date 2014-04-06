package com.invenio.service.exception;

import com.invenio.exception.InvenioException;

public class InvalidOperationException extends InvenioException {

	/**
	 * 
	 */
	private static final long serialVersionUID = 9160528725435036435L;
	
	public InvalidOperationException(String message) {
		super(message);
	}
}
