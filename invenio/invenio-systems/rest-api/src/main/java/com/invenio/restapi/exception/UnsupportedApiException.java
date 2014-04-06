package com.invenio.restapi.exception;

import com.invenio.exception.InvenioException;

public class UnsupportedApiException extends InvenioException {

	/**
	 * 
	 */
	private static final long serialVersionUID = -719977487114198825L;
	
	private final String apiName;
	private final String resourceName;
	
	public UnsupportedApiException(String apiName, String resourceName) {
		super(String.format("%s operation is not supported for %s.", apiName, resourceName));
		this.apiName = apiName;
		this.resourceName = resourceName;
	}

	public String getApiName() {
		return apiName;
	}

	public String getResourceName() {
		return resourceName;
	}
}
