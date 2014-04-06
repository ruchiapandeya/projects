package com.invenio.dao.entity.admin;

import java.math.BigDecimal;
import java.util.Date;

import javax.persistence.Entity;
import javax.persistence.JoinColumn;
import javax.persistence.OneToOne;

import com.invenio.dao.entity.AbstractPkEntity;

@Entity
public class FuturePrices extends AbstractPkEntity {

	/**
	 * 
	 */
	private static final long serialVersionUID = -6866074490673944086L;

	@OneToOne
	@JoinColumn(name = "fut_id")
	private FutureContract futureContract;
	
	private Date futureDate;
	private BigDecimal price;

	public FutureContract getFutureContract() {
		return futureContract;
	}

	public void setFutureContract(FutureContract futureContract) {
		this.futureContract = futureContract;
	}

	public Date getFutureDate() {
		return futureDate;
	}

	public void setFutureDate(Date futureDate) {
		this.futureDate = futureDate;
	}

	public BigDecimal getPrice() {
		return price;
	}

	public void setPrice(BigDecimal price) {
		this.price = price;
	}
}
