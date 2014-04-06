package com.invenio.vo;

import javax.xml.bind.annotation.XmlRootElement;

@XmlRootElement(name="items")
public class CountryVO {

	private String countryId;
	private String countryName;
	private String countryCode;
	
	public String getCountryId() {
		return countryId;
	}
	public void setCountryId(String countryId) {
		this.countryId = countryId;
	}
	public String getCountryName() {
		return countryName;
	}
	public void setCountryName(String countryName) {
		this.countryName = countryName;
	}
	public String getCountryCode() {
		return countryCode;
	}
	public void setCountryCode(String countryCode) {
		this.countryCode = countryCode;
	}
}
