package com.invenio.dao.entity.admin;

import javax.persistence.Entity;
import javax.persistence.JoinColumn;
import javax.persistence.OneToOne;

import com.invenio.dao.entity.AbstractPkEntity;

@Entity
public class Portfolio extends AbstractPkEntity {
	/**
	 * 
	 */
	private static final long serialVersionUID = -5842716821060765939L;

	@OneToOne
	@JoinColumn(name = "invenio_product")
	private InvenioProduct invenioProduct;
	private String portfolioName;
	
	@OneToOne
	@JoinColumn(name = "sub_portfolio")
	private SubPortfolio subPortfolio;

	public SubPortfolio getSubPortfolio() {
		return subPortfolio;
	}

	public void setSubPortfolio(SubPortfolio subPortfolio) {
		this.subPortfolio = subPortfolio;
	}

	public InvenioProduct getInvenioProduct() {
		return invenioProduct;
	}

	public void setInvenioProduct(InvenioProduct invenioProduct) {
		this.invenioProduct = invenioProduct;
	}

	public String getPortfolioName() {
		return portfolioName;
	}

	public void setPortfolioName(String portfolioName) {
		this.portfolioName = portfolioName;
	}

}
