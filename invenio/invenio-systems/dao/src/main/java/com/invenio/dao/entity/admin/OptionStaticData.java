package com.invenio.dao.entity.admin;

import java.util.Date;

import javax.persistence.Entity;
import javax.persistence.JoinColumn;
import javax.persistence.OneToOne;

import com.invenio.dao.entity.AbstractPkEntity;

@Entity
public class OptionStaticData extends AbstractPkEntity {

	/**
	 * 
	 */
	private static final long serialVersionUID = 1490271305924659L;

	@OneToOne
	@JoinColumn(name = "fut_id")
	private FutureContract futureContract;
	
	public FutureContract getFutureContract() {
		return futureContract;
	}
	public void setFutureContract(FutureContract futureContract) {
		this.futureContract = futureContract;
	}
	public String getOptionId() {
		return optionId;
	}
	public void setOptionId(String optionId) {
		this.optionId = optionId;
	}
	public Date getFirstTradingDay() {
		return firstTradingDay;
	}
	public void setFirstTradingDay(Date firstTradingDay) {
		this.firstTradingDay = firstTradingDay;
	}
	public Date getLastTradingDay() {
		return lastTradingDay;
	}
	public void setLastTradingDay(Date lastTradingDay) {
		this.lastTradingDay = lastTradingDay;
	}
	public String getFutRefAtExpiry() {
		return futRefAtExpiry;
	}
	public void setFutRefAtExpiry(String futRefAtExpiry) {
		this.futRefAtExpiry = futRefAtExpiry;
	}
	private String optionId;
	private Date firstTradingDay;
	private Date lastTradingDay;
	private String futRefAtExpiry;
	
}
