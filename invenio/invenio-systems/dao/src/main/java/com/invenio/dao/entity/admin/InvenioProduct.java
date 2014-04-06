package com.invenio.dao.entity.admin;

import javax.persistence.Entity;

import com.invenio.dao.entity.AbstractPkEntity;

@Entity
public class InvenioProduct extends AbstractPkEntity {

	/**
	 * 
	 */
	private static final long serialVersionUID = -8606664390804156320L;
	private String invenioProductName;
	private String invenioProductDesc;
	public String getInvenioProductName() {
		return invenioProductName;
	}
	public void setInvenioProductName(String invenioProductName) {
		this.invenioProductName = invenioProductName;
	}
	public String getInvenioProductDesc() {
		return invenioProductDesc;
	}
	public void setInvenioProductDesc(String invenioProductDesc) {
		this.invenioProductDesc = invenioProductDesc;
	}

}
