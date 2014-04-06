package com.invenio.dao.entity.admin;

import java.math.BigDecimal;
import java.util.Date;

import javax.persistence.Entity;
import javax.persistence.JoinColumn;
import javax.persistence.OneToOne;

import com.invenio.dao.entity.AbstractPkEntity;

@Entity
public class FutureContract extends AbstractPkEntity {

	/**
	 * 
	 */
	private static final long serialVersionUID = -5079505883485313471L;
	
	@OneToOne
	@JoinColumn(name = "invenio_product")
	private InvenioProduct invenioProduct;
	private String futId;
	private Date firstTradingDay;
	private Date lastTradingDay;
	private Date firstNoticeDay;
	private Date firstDeliveryDay;
	private Date lastDeliveryDay;
	private BigDecimal futureSettlementReferencePrice;

	public InvenioProduct getInvenioProduct() {
		return invenioProduct;
	}

	public void setInvenioProduct(InvenioProduct invenioProduct) {
		this.invenioProduct = invenioProduct;
	}

	public String getFutId() {
		return futId;
	}

	public void setFutId(String futId) {
		this.futId = futId;
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

	public Date getFirstNoticeDay() {
		return firstNoticeDay;
	}

	public void setFirstNoticeDay(Date firstNoticeDay) {
		this.firstNoticeDay = firstNoticeDay;
	}

	public Date getFirstDeliveryDay() {
		return firstDeliveryDay;
	}

	public void setFirstDeilveryDay(Date firstDeliveryDay) {
		this.firstDeliveryDay = firstDeliveryDay;
	}

	public Date getLastDeliveryDay() {
		return lastDeliveryDay;
	}

	public void setLastDeliveryDay(Date lastDeliveryDay) {
		this.lastDeliveryDay = lastDeliveryDay;
	}

	public BigDecimal getFutureSettlementReferencePrice() {
		return futureSettlementReferencePrice;
	}

	public void setFutureSettlementReferencePrice(
			BigDecimal futureSettlementReferencePrice) {
		this.futureSettlementReferencePrice = futureSettlementReferencePrice;
	}
}
