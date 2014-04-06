package com.invenio.dao.entity.admin;

import javax.persistence.Entity;

import com.invenio.dao.entity.AbstractPkEntity;

@Entity
public class XtradersExchange extends AbstractPkEntity {

	/**
	 * 
	 */
	private static final long serialVersionUID = -8606664390804156320L;
	private String xtradersExchangeName;
	private String xtradersExchangeDesc;
	public String getXtradersExchangeName() {
		return xtradersExchangeName;
	}
	public void setXtradersExchangeName(String xtradersExchangeName) {
		this.xtradersExchangeName = xtradersExchangeName;
	}
	public String getXtradersExchangeDesc() {
		return xtradersExchangeDesc;
	}
	public void setXtradersExchangeDesc(String xtradersExchangeDesc) {
		this.xtradersExchangeDesc = xtradersExchangeDesc;
	}

}
