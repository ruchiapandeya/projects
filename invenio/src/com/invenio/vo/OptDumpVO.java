package com.invenio.vo;

import javax.xml.bind.annotation.XmlRootElement;

@XmlRootElement(name="items")
public class OptDumpVO {

	private String optDumpId;
	private String instrumentId;
	private String instrumentName;
	private String instrumentCode;
	private String activeLots;
	private String month;
	private String strike;
	private String CP;
	private String prem;
	private String origLots;
	private String portfolio;
	private String multiple;
	private String lotsForPivot;
	private String counterparty;
	private String duplicated;
	private String internal;
	private String trn;
	private String trnDate;
	private String buySell;
	private String initialQty;
	private String contractMaturity;
	private String callPut;
	private String stlPrm;
	private String counterpartLabel;
	private String liveQty;
	public String getOptDumpId() {
		return optDumpId;
	}
	public void setOptDumpId(String optDumpId) {
		this.optDumpId = optDumpId;
	}
	public String getActiveLots() {
		return activeLots;
	}
	public void setActiveLots(String activeLots) {
		this.activeLots = activeLots;
	}
	public String getMonth() {
		return month;
	}
	public void setMonth(String month) {
		this.month = month;
	}
	public String getInstrumentId() {
		return instrumentId;
	}
	public void setInstrumentId(String instrumentId) {
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
	public String getStrike() {
		return strike;
	}
	public void setStrike(String strike) {
		this.strike = strike;
	}
	public String getCP() {
		return CP;
	}
	public void setCP(String cP) {
		CP = cP;
	}
	public String getPrem() {
		return prem;
	}
	public void setPrem(String prem) {
		this.prem = prem;
	}
	public String getOrigLots() {
		return origLots;
	}
	public void setOrigLots(String origLots) {
		this.origLots = origLots;
	}
	public String getPortfolio() {
		return portfolio;
	}
	public void setPortfolio(String portfolio) {
		this.portfolio = portfolio;
	}
	public String getMultiple() {
		return multiple;
	}
	public void setMultiple(String multiple) {
		this.multiple = multiple;
	}
	public String getLotsForPivot() {
		return lotsForPivot;
	}
	public void setLotsForPivot(String lotsForPivot) {
		this.lotsForPivot = lotsForPivot;
	}
	public String getCounterparty() {
		return counterparty;
	}
	public void setCounterparty(String counterparty) {
		this.counterparty = counterparty;
	}
	public String getDuplicated() {
		return duplicated;
	}
	public void setDuplicated(String duplicated) {
		this.duplicated = duplicated;
	}
	public String getInternal() {
		return internal;
	}
	public void setInternal(String internal) {
		this.internal = internal;
	}
	public String getTrn() {
		return trn;
	}
	public void setTrn(String trn) {
		this.trn = trn;
	}
	public String getTrnDate() {
		return trnDate;
	}
	public void setTrnDate(String trnDate) {
		this.trnDate = trnDate;
	}
	public String getBuySell() {
		return buySell;
	}
	public void setBuySell(String buySell) {
		this.buySell = buySell;
	}
	public String getInitialQty() {
		return initialQty;
	}
	public void setInitialQty(String initialQty) {
		this.initialQty = initialQty;
	}
	public String getContractMaturity() {
		return contractMaturity;
	}
	public void setContractMaturity(String contractMaturity) {
		this.contractMaturity = contractMaturity;
	}
	public String getCallPut() {
		return callPut;
	}
	public void setCallPut(String callPut) {
		this.callPut = callPut;
	}
	public String getStlPrm() {
		return stlPrm;
	}
	public void setStlPrm(String stlPrm) {
		this.stlPrm = stlPrm;
	}
	public String getCounterpartLabel() {
		return counterpartLabel;
	}
	public void setCounterpartLabel(String counterpartLabel) {
		this.counterpartLabel = counterpartLabel;
	}
	public String getLiveQty() {
		return liveQty;
	}
	public void setLiveQty(String liveQty) {
		this.liveQty = liveQty;
	}
}
