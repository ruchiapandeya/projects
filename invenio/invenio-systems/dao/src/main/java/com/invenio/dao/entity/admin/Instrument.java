package com.invenio.dao.entity.admin;

import java.math.BigDecimal;

import javax.persistence.Entity;
import javax.persistence.Table;

import com.invenio.dao.entity.AbstractPkEntity;

@Entity
@Table(name="INSTRUMENT")
public class Instrument extends AbstractPkEntity {

	/**
	 * 
	 */
	private static final long serialVersionUID = -2015731531963743736L;
	private String name;
	private String code;
	private String portfolio;
	private String maturity;
	private BigDecimal startValue;
	private BigDecimal endValue;
	private BigDecimal multiple;
	
	public String getName() {
		return name;
	}
	public void setName(String name) {
		this.name = name;
	}
	public String getCode() {
		return code;
	}
	public void setCode(String code) {
		this.code = code;
	}
	public String getPortfolio() {
		return portfolio;
	}
	public void setPortfolio(String portfolio) {
		this.portfolio = portfolio;
	}
	public String getMaturity() {
		return maturity;
	}
	public void setMaturity(String maturity) {
		this.maturity = maturity;
	}
	public BigDecimal getStartValue() {
		return startValue;
	}
	public void setStartValue(BigDecimal startValue) {
		this.startValue = startValue;
	}
	public BigDecimal getEndValue() {
		return endValue;
	}
	public void setEndValue(BigDecimal endValue) {
		this.endValue = endValue;
	}
	public BigDecimal getMultiple() {
		return multiple;
	}
	public void setMultiple(BigDecimal multiple) {
		this.multiple = multiple;
	}
}
