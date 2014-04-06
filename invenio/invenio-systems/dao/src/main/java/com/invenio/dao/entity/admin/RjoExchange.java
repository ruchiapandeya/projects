package com.invenio.dao.entity.admin;

import javax.persistence.Entity;

import com.invenio.dao.entity.AbstractPkEntity;

@Entity
public class RjoExchange extends AbstractPkEntity {

	/**
	 * 
	 */
	private static final long serialVersionUID = -8606664390804156320L;
	private String rjoExchangeName;
	private String rjoExchangeDesc;
	public String getRjoExchangeName() {
		return rjoExchangeName;
	}
	public void setRjoExchangeName(String rjoExchangeName) {
		this.rjoExchangeName = rjoExchangeName;
	}
	public String getRjoExchangeDesc() {
		return rjoExchangeDesc;
	}
	public void setRjoExchangeDesc(String rjoExchangeDesc) {
		this.rjoExchangeDesc = rjoExchangeDesc;
	}

}
