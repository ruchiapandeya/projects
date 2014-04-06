package com.invenio.dao.entity.admin;

import java.math.BigDecimal;
import java.util.Date;

import javax.persistence.Entity;
import javax.persistence.JoinColumn;
import javax.persistence.OneToOne;

import com.invenio.dao.entity.AbstractPkEntity;

@Entity
public class SettlementVolatilitySurface extends AbstractPkEntity {

	/**
	 * 
	 */
	private static final long serialVersionUID = 1490271305924659L;

	
	@OneToOne
	@JoinColumn(name = "option_id")
	private OptionStaticData optionStaticData;
	
	private BigDecimal strike;

	private BigDecimal volatility;
	
	private Date dates;

	public OptionStaticData getOptionStaticData() {
		return optionStaticData;
	}

	public void setOptionStaticData(OptionStaticData optionStaticData) {
		this.optionStaticData = optionStaticData;
	}

	public BigDecimal getStrike() {
		return strike;
	}

	public void setStrike(BigDecimal strike) {
		this.strike = strike;
	}

	public BigDecimal getVolatility() {
		return volatility;
	}

	public void setVolatility(BigDecimal volatility) {
		this.volatility = volatility;
	}

	public Date getDates() {
		return dates;
	}

	public void setDates(Date dates) {
		this.dates = dates;
	}
}
