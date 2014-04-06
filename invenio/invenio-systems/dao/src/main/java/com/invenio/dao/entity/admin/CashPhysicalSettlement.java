package com.invenio.dao.entity.admin;

import javax.persistence.Entity;

import com.invenio.dao.entity.AbstractPkEntity;

@Entity
public class CashPhysicalSettlement extends AbstractPkEntity {
	 /**
	 * 
	 */
	private static final long serialVersionUID = 5656094584108136816L;
	private String cashPhysicalSettlementName;
	
	public String getCashPhysicalSettlementName() {
		return cashPhysicalSettlementName;
	}
	public void setCashPhysicalSettlementName(String cashPhysicalSettlementName) {
		this.cashPhysicalSettlementName = cashPhysicalSettlementName;
	}
	
}
