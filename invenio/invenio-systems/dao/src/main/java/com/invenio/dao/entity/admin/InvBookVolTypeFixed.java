package com.invenio.dao.entity.admin;

import java.util.Date;

import javax.persistence.Entity;
import javax.persistence.JoinColumn;
import javax.persistence.OneToOne;

import com.invenio.dao.entity.AbstractPkEntity;

@Entity
public class InvBookVolTypeFixed extends AbstractPkEntity {

	/**
	 * 
	 */
	private static final long serialVersionUID = 1490271305924659L;

	@OneToOne
	@JoinColumn(name = "option_id")
	private OptionStaticData optionStaticData;
	
	@OneToOne
	@JoinColumn(name = "sub_portfolio")
	private SubPortfolio subPortfolio;
	
	private Integer Strike;
	private Integer volatility;
	
	public Integer getStrike() {
		return Strike;
	}

	public void setStrike(Integer strike) {
		Strike = strike;
	}

	public Integer getVolatility() {
		return volatility;
	}

	public void setVolatility(Integer volatility) {
		this.volatility = volatility;
	}

	public OptionStaticData getOptionStaticData() {
		return optionStaticData;
	}

	public void setOptionStaticData(OptionStaticData optionStaticData) {
		this.optionStaticData = optionStaticData;
	}

	public SubPortfolio getSubPortfolio() {
		return subPortfolio;
	}

	public void setSubPortfolio(SubPortfolio subPortfolio) {
		this.subPortfolio = subPortfolio;
	}

	public Date getDate() {
		return date;
	}

	public void setDate(Date date) {
		this.date = date;
	}

	private Date date;
}
