package com.invenio.dao.entity.admin;

import javax.persistence.Entity;

import com.invenio.dao.entity.AbstractPkEntity;

@Entity
public class Exchange extends AbstractPkEntity {

	/**
	 * 
	 */
	private static final long serialVersionUID = -8606664390804156320L;
	private String exchangeName;
	private String exchangeDesc;
	public String getExchangeName() {
		return exchangeName;
	}
	public void setExchangeName(String exchangeName) {
		this.exchangeName = exchangeName;
	}
	public String getExchangeDesc() {
		return exchangeDesc;
	}
	public void setExchangeDesc(String exchangeDesc) {
		this.exchangeDesc = exchangeDesc;
	}

}
