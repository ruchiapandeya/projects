package com.invenio.vo;

import java.math.BigDecimal;

import javax.xml.bind.annotation.XmlRootElement;

@XmlRootElement(name="items")
public class InstrumentVO {

	private Integer instrumentId;
	private String instrumentName;
	private String instrumentCode;
	public Integer getInstrumentId() {
		return instrumentId;
	}
	public void setInstrumentId(Integer instrumentId) {
		this.instrumentId = instrumentId;
	}
	public String getInstrumentName() {
		return instrumentName;
	}
	public void setInstrumentName(String instrumentName) {
		this.instrumentName = instrumentName;
	}
	public String getInstrumentCode() {
		return instrumentCode;
	}
	public void setInstrumentCode(String instrumentCode) {
		this.instrumentCode = instrumentCode;
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
	private String portfolio;
	private String maturity;
	private BigDecimal startValue;
	private BigDecimal endValue;
	private BigDecimal multiple;
}
