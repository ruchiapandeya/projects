package com.invenio.vo;

import javax.xml.bind.annotation.XmlRootElement;

@XmlRootElement(name="items")
public class StateVO {

	private String stateId;
	private String stateName;
	private String stateCode;
	
	public String getStateId() {
		return stateId;
	}
	public void setStateId(String stateId) {
		this.stateId = stateId;
	}
	public String getStateName() {
		return stateName;
	}
	public void setStateName(String stateName) {
		this.stateName = stateName;
	}
	public String getStateCode() {
		return stateCode;
	}
	public void setStateCode(String stateCode) {
		this.stateCode = stateCode;
	}
}
