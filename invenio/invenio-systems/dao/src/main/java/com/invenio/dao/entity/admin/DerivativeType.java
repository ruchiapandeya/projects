package com.invenio.dao.entity.admin;

import javax.persistence.Entity;

import com.invenio.dao.entity.AbstractPkEntity;

@Entity
public class DerivativeType extends AbstractPkEntity {

	/**
	 * 
	 */
	private static final long serialVersionUID = -8606664390804156320L;
	private String derivativeType;
	public String getDerivativeType() {
		return derivativeType;
	}
	public void setDerivativeType(String derivativeType) {
		this.derivativeType = derivativeType;
	}

}
