package com.invenio.dao.entity.admin;

import javax.persistence.Entity;

import com.invenio.dao.entity.AbstractPkEntity;

@Entity
public class MurexExchange extends AbstractPkEntity {

	/**
	 * 
	 */
	private static final long serialVersionUID = -8606664390804156320L;
	private String murexExchangeName;
	private String murexExchangeDesc;
	public String getMurexExchangeName() {
		return murexExchangeName;
	}
	public void setMurexExchangeName(String murexExchangeName) {
		this.murexExchangeName = murexExchangeName;
	}
	public String getMurexExchangeDesc() {
		return murexExchangeDesc;
	}
	public void setMurexExchangeDesc(String murexExchangeDesc) {
		this.murexExchangeDesc = murexExchangeDesc;
	}

}
