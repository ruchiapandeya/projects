package com.invenio.dao.entity.admin;

import javax.persistence.Entity;

import com.invenio.dao.entity.AbstractPkEntity;

@Entity
public class BrokerageCallsign extends AbstractPkEntity {

	/**
	 * 
	 */
	private static final long serialVersionUID = -8606664390804156320L;
	private String name;
	private String description;
	public String getName() {
		return name;
	}
	public void setName(String name) {
		this.name = name;
	}
	public String getDescription() {
		return description;
	}
	public void setDescription(String description) {
		this.description = description;
	}
}
