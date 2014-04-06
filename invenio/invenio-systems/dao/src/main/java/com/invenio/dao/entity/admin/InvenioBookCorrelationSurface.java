package com.invenio.dao.entity.admin;

import java.math.BigDecimal;
import java.util.Date;

import javax.persistence.Entity;
import javax.persistence.JoinColumn;
import javax.persistence.OneToOne;

import com.invenio.dao.entity.AbstractPkEntity;

@Entity
public class InvenioBookCorrelationSurface extends AbstractPkEntity {

	/**
	 * 
	 */
	private static final long serialVersionUID = 1490271305924659L;

	@OneToOne
	@JoinColumn(name = "sub_portfolio_id")
	private SubPortfolio subPortfolio;

	
	@OneToOne
	@JoinColumn(name = "option_id1")
	private OptionStaticData optionStaticData1;
	
	@OneToOne
	@JoinColumn(name = "option_id2")
	private OptionStaticData optionStaticData2;
	
	private BigDecimal strike;

	private BigDecimal correlation;
	
	private Date dates;

	public SubPortfolio getSubPortfolio() {
		return subPortfolio;
	}

	public void setSubPortfolio(SubPortfolio subPortfolio) {
		this.subPortfolio = subPortfolio;
	}

	public OptionStaticData getOptionStaticData1() {
		return optionStaticData1;
	}

	public void setOptionStaticData1(OptionStaticData optionStaticData1) {
		this.optionStaticData1 = optionStaticData1;
	}

	public OptionStaticData getOptionStaticData2() {
		return optionStaticData2;
	}

	public void setOptionStaticData2(OptionStaticData optionStaticData2) {
		this.optionStaticData2 = optionStaticData2;
	}

	public BigDecimal getStrike() {
		return strike;
	}

	public void setStrike(BigDecimal strike) {
		this.strike = strike;
	}

	public BigDecimal getCorrelation() {
		return correlation;
	}

	public void setCorrelation(BigDecimal correlation) {
		this.correlation = correlation;
	}

	public Date getDates() {
		return dates;
	}

	public void setDates(Date dates) {
		this.dates = dates;
	}
}
