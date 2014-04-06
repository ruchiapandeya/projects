package com.invenio.dao.entity.admin;

import javax.persistence.Entity;

import com.invenio.dao.entity.AbstractPkEntity;

@Entity
public class FuturesXtrader extends AbstractPkEntity {

	/**
	 * 
	 */
	private static final long serialVersionUID = -8606664390804156320L;
	private String futuresName;
	private String futuresDesc;
	public String getFuturesName() {
		return futuresName;
	}
	public void setFuturesName(String futuresName) {
		this.futuresName = futuresName;
	}
	public String getFuturesDesc() {
		return futuresDesc;
	}
	public void setFuturesDesc(String futuresDesc) {
		this.futuresDesc = futuresDesc;
	}
	
}
