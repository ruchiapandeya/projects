package com.invenio.vo;

import javax.xml.bind.annotation.XmlRootElement;

@XmlRootElement(name="items")
public class UserSecretQuestionsVO {

	private String userid;
	private String secretQuestion1;
	private String secretQuestion2;
	public String getUserid() {
		return userid;
	}
	public void setUserid(String userid) {
		this.userid = userid;
	}
	public String getSecretQuestion1() {
		return secretQuestion1;
	}
	public void setSecretQuestion1(String secretQuestion1) {
		this.secretQuestion1 = secretQuestion1;
	}
	public String getSecretQuestion2() {
		return secretQuestion2;
	}
	public void setSecretQuestion2(String secretQuestion2) {
		this.secretQuestion2 = secretQuestion2;
	}

}
