package com.invenio.dao.entity.admin;

import javax.persistence.Entity;

import com.invenio.dao.entity.AbstractPkEntity;

@Entity
public class ReutersProduct extends AbstractPkEntity {

	/**
	 * 
	 */
	private static final long serialVersionUID = -8606664390804156320L;
	private String reutersProductName;
	private String reutersProductDesc;
	public String getReutersProductName() {
		return reutersProductName;
	}
	public void setReutersProductName(String reutersProductName) {
		this.reutersProductName = reutersProductName;
	}
	public String getReutersProductDesc() {
		return reutersProductDesc;
	}
	public void setReutersProductDesc(String reutersProductDesc) {
		this.reutersProductDesc = reutersProductDesc;
	}

}
