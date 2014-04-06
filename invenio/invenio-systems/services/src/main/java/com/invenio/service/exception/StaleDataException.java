package com.invenio.service.exception;

import com.invenio.exception.InvenioException;

public class StaleDataException extends InvenioException {

	/**
	 * 
	 */
	private static final long serialVersionUID = 9160528725435036435L;
	
	public StaleDataException(String message) {
		super(message);
	}
}
