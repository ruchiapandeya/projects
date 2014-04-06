package com.invenio.dao.entity.admin;

import javax.persistence.Entity;

import com.invenio.dao.entity.AbstractPkEntity;

@Entity
public class AtmConventionForExpiry extends AbstractPkEntity {

	 /**
	 * 
	 */
	private static final long serialVersionUID = -2751121932048519966L;
	
	private String atmConventionForExpiryName;
	
	public String getAtmConventionForExpiryName() {
		return atmConventionForExpiryName;
	}
	public void setAtmConventionForExpiryName(String atmConventionForExpiryName) {
		this.atmConventionForExpiryName = atmConventionForExpiryName;
	}
	
	 
}
