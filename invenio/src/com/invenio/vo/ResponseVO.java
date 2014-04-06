package com.invenio.vo;

import javax.xml.bind.annotation.XmlRootElement;

@XmlRootElement(name="items")
public class ResponseVO {

	private String generatedId;
	private String mgs;
	private String httpCode;
	private boolean isPassed;
	
	public ResponseVO(String generatedId, String mgs, String httpCode,
			boolean isPassed) {
		this.generatedId = generatedId;
		this.mgs = mgs;
		this.httpCode = httpCode;
		this.isPassed = isPassed;
	}
	
	public ResponseVO(String mgs, boolean isPassed) {
		this.mgs = mgs;
		this.isPassed = isPassed;
	}
	
	
	public ResponseVO() {
		
	}

	public String getMgs() {
		return mgs;
	}
	public void setMgs(String mgs) {
		this.mgs = mgs;
	}
	public String getHttpCode() {
		return httpCode;
	}
	public void setHttpCode(String httpCode) {
		this.httpCode = httpCode;
	}
	public boolean isPassed() {
		return isPassed;
	}
	public void setPassed(boolean isPassed) {
		this.isPassed = isPassed;
	}
	public String getGeneratedId() {
		return generatedId;
	}
	public void setGeneratedId(String generatedId) {
		this.generatedId = generatedId;
	}
}
