package com.invenio.dao.entity.admin;

import javax.persistence.Entity;

import com.invenio.dao.entity.AbstractPkEntity;

@Entity
public class OptionsXtrader extends AbstractPkEntity {

	/**
	 * 
	 */
	private static final long serialVersionUID = -8606664390804156320L;
	private String optionsName;
	private String optionsDesc;
	public String getOptionsName() {
		return optionsName;
	}
	public void setOptionsName(String optionsName) {
		this.optionsName = optionsName;
	}
	public String getOptionsDesc() {
		return optionsDesc;
	}
	public void setOptionsDesc(String optionsDesc) {
		this.optionsDesc = optionsDesc;
	}
	
}
