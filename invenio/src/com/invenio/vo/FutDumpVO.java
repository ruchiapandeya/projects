package com.invenio.vo;

import javax.xml.bind.annotation.XmlRootElement;

@XmlRootElement(name="items")
public class FutDumpVO {

	private String futDumpId;
	private String instrumentId;
	private String instrumentName;
	private String instrumentCode;
	private String bookValue;
	private String netPos;
	private String futPrice;
	private String contract;
	private String futSettlement;
	private String adaptedDelta;
	private String gammaSmt;
	private String theta;
	private String vega;
	
	public String getFutDumpId() {
		return futDumpId;
	}
	public void setFutDumpId(String futDumpId) {
		this.futDumpId = futDumpId;
	}
	
	public String getBookValue() {
		return bookValue;
	}
	public void setBookValue(String bookValue) {
		this.bookValue = bookValue;
	}
	public String getNetPos() {
		return netPos;
	}
	public void setNetPos(String netPos) {
		this.netPos = netPos;
	}
	public String getFutPrice() {
		return futPrice;
	}
	public void setFutPrice(String futPrice) {
		this.futPrice = futPrice;
	}
	public String getContract() {
		return contract;
	}
	public void setContract(String contract) {
		this.contract = contract;
	}
	public String getFutSettlement() {
		return futSettlement;
	}
	public void setFutSettlement(String futSettlement) {
		this.futSettlement = futSettlement;
	}
	public String getAdaptedDelta() {
		return adaptedDelta;
	}
	public void setAdaptedDelta(String adaptedDelta) {
		this.adaptedDelta = adaptedDelta;
	}
	public String getGammaSmt() {
		return gammaSmt;
	}
	public void setGammaSmt(String gammaSmt) {
		this.gammaSmt = gammaSmt;
	}
	public String getTheta() {
		return theta;
	}
	public void setTheta(String theta) {
		this.theta = theta;
	}
	public String getVega() {
		return vega;
	}
	public void setVega(String vega) {
		this.vega = vega;
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
	
}
