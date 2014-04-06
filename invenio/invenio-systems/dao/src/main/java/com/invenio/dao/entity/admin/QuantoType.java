package com.invenio.dao.entity.admin;

import javax.persistence.Entity;

import com.invenio.dao.entity.AbstractPkEntity;

@Entity
public class QuantoType extends AbstractPkEntity {

	/**
	 * 
	 */
	private static final long serialVersionUID = -8606664390804156320L;
	private String quantoType;
	public String getQuantoType() {
		return quantoType;
	}
	public void setQuantoType(String quantoType) {
		this.quantoType = quantoType;
	}
	
}
