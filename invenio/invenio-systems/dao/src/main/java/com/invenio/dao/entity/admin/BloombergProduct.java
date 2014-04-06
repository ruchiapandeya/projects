package com.invenio.dao.entity.admin;

import javax.persistence.Entity;

import com.invenio.dao.entity.AbstractPkEntity;

@Entity
public class BloombergProduct extends AbstractPkEntity {

	/**
	 * 
	 */
	private static final long serialVersionUID = -8606664390804156320L;
	private String bloombergProductName;
	private String bloombergProductDesc;
	public String getBloombergProductName() {
		return bloombergProductName;
	}
	public void setBloombergProductName(String bloombergProductName) {
		this.bloombergProductName = bloombergProductName;
	}
	public String getBloombergProductDesc() {
		return bloombergProductDesc;
	}
	public void setBloombergProductDesc(String bloombergProductDesc) {
		this.bloombergProductDesc = bloombergProductDesc;
	}

}
