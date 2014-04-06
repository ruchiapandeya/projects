package com.invenio.dao.entity.admin;

import java.util.Date;

import javax.persistence.Entity;

import com.invenio.dao.entity.AbstractPkEntity;

@Entity
public class OptionPrice extends AbstractPkEntity {

	/**
	 * 
	 */
	private static final long serialVersionUID = 1490271305924659L;

	private String name;
	private Date date;
	private Double bbgSettlementPrice;
	private Double exchangeSettlementPrice;
	public String getName() {
		return name;
	}
	public void setName(String name) {
		this.name = name;
	}
	public Date getDate() {
		return date;
	}
	public void setDate(Date date) {
		this.date = date;
	}
	public Double getBbgSettlementPrice() {
		return bbgSettlementPrice;
	}
	public void setBbgSettlementPrice(Double bbgSettlementPrice) {
		this.bbgSettlementPrice = bbgSettlementPrice;
	}
	public Double getExchangeSettlementPrice() {
		return exchangeSettlementPrice;
	}
	public void setExchangeSettlementPrice(Double exchangeSettlementPrice) {
		this.exchangeSettlementPrice = exchangeSettlementPrice;
	}	
}
