package com.invenio.vo;

import javax.xml.bind.annotation.XmlRootElement;

@XmlRootElement(name="items")
public class M_US_DumpVO {

	private String MUsDumpId;
	private String instrumentId;
	private String instrumentName;
	private String instrumentCode;
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
	private String strikeCode;
	private String marketValue;
	private String bookValue;
	private String marketUs;
	private String strikePrice;
	private String strikeTotal;
	private String marketValCall;
	private String marketCalPut;
	private String optionsExpiryDate;
	private String instrumentDisplay;
	public String getMUsDumpId() {
		return MUsDumpId;
	}
	public void setMUsDumpId(String mUsDumpId) {
		MUsDumpId = mUsDumpId;
	}
	public String getStrikeCode() {
		return strikeCode;
	}
	public void setStrikeCode(String strikeCode) {
		this.strikeCode = strikeCode;
	}
	public String getMarketValue() {
		return marketValue;
	}
	public void setMarketValue(String marketValue) {
		this.marketValue = marketValue;
	}
	public String getBookValue() {
		return bookValue;
	}
	public void setBookValue(String bookValue) {
		this.bookValue = bookValue;
	}
	public String getMarketUs() {
		return marketUs;
	}
	public void setMarketUs(String marketUs) {
		this.marketUs = marketUs;
	}
	public String getStrikePrice() {
		return strikePrice;
	}
	public void setStrikePrice(String strikePrice) {
		this.strikePrice = strikePrice;
	}
	public String getStrikeTotal() {
		return strikeTotal;
	}
	public void setStrikeTotal(String strikeTotal) {
		this.strikeTotal = strikeTotal;
	}
	public String getMarketValCall() {
		return marketValCall;
	}
	public void setMarketValCall(String marketValCall) {
		this.marketValCall = marketValCall;
	}
	public String getMarketCalPut() {
		return marketCalPut;
	}
	public void setMarketCalPut(String marketCalPut) {
		this.marketCalPut = marketCalPut;
	}
	public String getOptionsExpiryDate() {
		return optionsExpiryDate;
	}
	public void setOptionsExpiryDate(String optionsExpiryDate) {
		this.optionsExpiryDate = optionsExpiryDate;
	}
	public String getInstrumentDisplay() {
		return instrumentDisplay;
	}
	public void setInstrumentDisplay(String instrumentDisplay) {
		this.instrumentDisplay = instrumentDisplay;
	}
}
