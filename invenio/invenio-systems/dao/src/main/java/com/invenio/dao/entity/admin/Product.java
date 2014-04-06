package com.invenio.dao.entity.admin;

import java.math.BigDecimal;

import javax.persistence.Entity;
import javax.persistence.JoinColumn;
import javax.persistence.OneToOne;

import com.invenio.dao.entity.AbstractPkEntity;

@Entity
public class Product extends AbstractPkEntity {

	/**
	 * 
	 */
	private static final long serialVersionUID = -8606664390804156320L;
	@OneToOne
	@JoinColumn(name = "exchange")
	private Exchange exchange;
	
	@OneToOne
	@JoinColumn(name = "invenio_product")
	private InvenioProduct invenioProduct;
	
	@OneToOne
	@JoinColumn(name = "bloomberg_product")
	private BloombergProduct bloombergProduct;
	
	@OneToOne
	@JoinColumn(name = "reuters_product")
	private ReutersProduct reutersProduct;
		
	@OneToOne
	@JoinColumn(name = "xtraders_exchange")
	private XtradersExchange xtradersExchange;
		
	@OneToOne
	@JoinColumn(name = "rjo_exchange")
	private RjoExchange rjoExchange;
		
	@OneToOne
	@JoinColumn(name = "murex_exchange")
	private MurexExchange murexExchange;
	
	@OneToOne
	@JoinColumn(name = "options_unl_contr")
	private OptionsUnlContr optionsUnlContr;
	
	@OneToOne
	@JoinColumn(name = "futures_unl_contr")
	private FuturesUnlContr futuresUnlContr;
	
	@OneToOne
	@JoinColumn(name = "options_xtrader")
	private OptionsXtrader optionsXtrader;
	
	@OneToOne
	@JoinColumn(name = "futures_xtrader")
	private FuturesXtrader futuresXtrader;
	
	@OneToOne
	@JoinColumn(name = "options_rjo")
	private OptionsRjo optionsRjo;
	
	@OneToOne
	@JoinColumn(name = "futures_rjo")
	private FuturesRjo futuresRjo;
	
	@OneToOne
	@JoinColumn(name = "exchange_exercise_type")
	private ExchangeExerciseType exchangeExerciseType;
	
	@OneToOne
	@JoinColumn(name = "atm_convention_for_expiry")
	private AtmConventionForExpiry atmConventionForExpiry;
	
	@OneToOne
	@JoinColumn(name = "cash_physical_settlement")
	private CashPhysicalSettlement cashPhysicalSettlement;

	
	private BigDecimal dollarConversion;
	private Integer priceUnitQuote;
	private String currencyQuote;
	private String qtyUnitQuote;
	private BigDecimal lotsToMt;
	
	private Character contractMonthFutF;
	private Character contractMonthFutG;
	private Character contractMonthFutH;
	private Character contractMonthFutJ;
	private Character contractMonthFutK;
	private Character contractMonthFutM;
	private Character contractMonthFutN;
	private Character contractMonthFutQ;
	private Character contractMonthFutU;
	private Character contractMonthFutV;
	private Character contractMonthFutX;
	private Character contractMonthFutZ;
	private Character contractMonthOptF;
	private Character contractMonthOptG;
	private Character contractMonthOptH;
	private Character contractMonthOptJ;
	private Character contractMonthOptK;
	private Character contractMonthOptM;
	private Character contractMonthOptN;
	private Character contractMonthOptQ;
	private Character contractMonthOptU;
	private Character contractMonthOptV;
	private Character contractMonthOptX;
	private Character contractMonthOptZ;
	
	public Exchange getExchange() {
		return exchange;
	}
	public void setExchange(Exchange exchange) {
		this.exchange = exchange;
	}
	public InvenioProduct getInvenioProduct() {
		return invenioProduct;
	}
	public void setInvenioProduct(InvenioProduct invenioProduct) {
		this.invenioProduct = invenioProduct;
	}
	public BloombergProduct getBloombergProduct() {
		return bloombergProduct;
	}
	public void setBloombergProduct(BloombergProduct bloombergProduct) {
		this.bloombergProduct = bloombergProduct;
	}
	public ReutersProduct getReutersProduct() {
		return reutersProduct;
	}
	public void setReutersProduct(ReutersProduct reutersProduct) {
		this.reutersProduct = reutersProduct;
	}
	public XtradersExchange getXtradersExchange() {
		return xtradersExchange;
	}
	public void setXtradersExchange(XtradersExchange xtradersExchange) {
		this.xtradersExchange = xtradersExchange;
	}
	public RjoExchange getRjoExchange() {
		return rjoExchange;
	}
	public void setRjoExchange(RjoExchange rjoExchange) {
		this.rjoExchange = rjoExchange;
	}
	public MurexExchange getMurexExchange() {
		return murexExchange;
	}
	public void setMurexExchange(MurexExchange murexExchange) {
		this.murexExchange = murexExchange;
	}
	public OptionsUnlContr getOptionsUnlContr() {
		return optionsUnlContr;
	}
	public void setOptionsUnlContr(OptionsUnlContr optionsUnlContr) {
		this.optionsUnlContr = optionsUnlContr;
	}
	public FuturesUnlContr getFuturesUnlContr() {
		return futuresUnlContr;
	}
	public void setFuturesUnlContr(FuturesUnlContr futuresUnlContr) {
		this.futuresUnlContr = futuresUnlContr;
	}
	public OptionsXtrader getOptionsXtrader() {
		return optionsXtrader;
	}
	public void setOptionsXtrader(OptionsXtrader optionsXtrader) {
		this.optionsXtrader = optionsXtrader;
	}
	public FuturesXtrader getFuturesXtrader() {
		return futuresXtrader;
	}
	public void setFuturesXtrader(FuturesXtrader futuresXtrader) {
		this.futuresXtrader = futuresXtrader;
	}
	public OptionsRjo getOptionsRjo() {
		return optionsRjo;
	}
	public void setOptionsRjo(OptionsRjo optionsRjo) {
		this.optionsRjo = optionsRjo;
	}
	public FuturesRjo getFuturesRjo() {
		return futuresRjo;
	}
	public void setFuturesRjo(FuturesRjo futuresRjo) {
		this.futuresRjo = futuresRjo;
	}
	public ExchangeExerciseType getExchangeExerciseType() {
		return exchangeExerciseType;
	}
	public void setExchangeExerciseType(ExchangeExerciseType exchangeExerciseType) {
		this.exchangeExerciseType = exchangeExerciseType;
	}
	public AtmConventionForExpiry getAtmConventionForExpiry() {
		return atmConventionForExpiry;
	}
	public void setAtmConventionForExpiry(
			AtmConventionForExpiry atmConventionForExpiry) {
		this.atmConventionForExpiry = atmConventionForExpiry;
	}
	public CashPhysicalSettlement getCashPhysicalSettlement() {
		return cashPhysicalSettlement;
	}
	public void setCashPhysicalSettlement(
			CashPhysicalSettlement cashPhysicalSettlement) {
		this.cashPhysicalSettlement = cashPhysicalSettlement;
	}
	public BigDecimal getDollarConversion() {
		return dollarConversion;
	}
	public void setDollarConversion(BigDecimal dollarConversion) {
		this.dollarConversion = dollarConversion;
	}
	public Integer getPriceUnitQuote() {
		return priceUnitQuote;
	}
	public void setPriceUnitQuote(Integer priceUnitQuote) {
		this.priceUnitQuote = priceUnitQuote;
	}
	public String getCurrencyQuote() {
		return currencyQuote;
	}
	public void setCurrencyQuote(String currencyQuote) {
		this.currencyQuote = currencyQuote;
	}
	public String getQtyUnitQuote() {
		return qtyUnitQuote;
	}
	public void setQtyUnitQuote(String qtyUnitQuote) {
		this.qtyUnitQuote = qtyUnitQuote;
	}
	public BigDecimal getLotsToMt() {
		return lotsToMt;
	}
	public void setLotsToMt(BigDecimal lotsToMt) {
		this.lotsToMt = lotsToMt;
	}
	public Character getContractMonthFutF() {
		return contractMonthFutF;
	}
	public void setContractMonthFutF(Character contractMonthFutF) {
		this.contractMonthFutF = contractMonthFutF;
	}
	public Character getContractMonthFutG() {
		return contractMonthFutG;
	}
	public void setContractMonthFutG(Character contractMonthFutG) {
		this.contractMonthFutG = contractMonthFutG;
	}
	public Character getContractMonthFutH() {
		return contractMonthFutH;
	}
	public void setContractMonthFutH(Character contractMonthFutH) {
		this.contractMonthFutH = contractMonthFutH;
	}
	public Character getContractMonthFutJ() {
		return contractMonthFutJ;
	}
	public void setContractMonthFutJ(Character contractMonthFutJ) {
		this.contractMonthFutJ = contractMonthFutJ;
	}
	public Character getContractMonthFutK() {
		return contractMonthFutK;
	}
	public void setContractMonthFutK(Character contractMonthFutK) {
		this.contractMonthFutK = contractMonthFutK;
	}
	public Character getContractMonthFutM() {
		return contractMonthFutM;
	}
	public void setContractMonthFutM(Character contractMonthFutM) {
		this.contractMonthFutM = contractMonthFutM;
	}
	public Character getContractMonthFutN() {
		return contractMonthFutN;
	}
	public void setContractMonthFutN(Character contractMonthFutN) {
		this.contractMonthFutN = contractMonthFutN;
	}
	public Character getContractMonthFutQ() {
		return contractMonthFutQ;
	}
	public void setContractMonthFutQ(Character contractMonthFutQ) {
		this.contractMonthFutQ = contractMonthFutQ;
	}
	public Character getContractMonthFutU() {
		return contractMonthFutU;
	}
	public void setContractMonthFutU(Character contractMonthFutU) {
		this.contractMonthFutU = contractMonthFutU;
	}
	public Character getContractMonthFutV() {
		return contractMonthFutV;
	}
	public void setContractMonthFutV(Character contractMonthFutV) {
		this.contractMonthFutV = contractMonthFutV;
	}
	public Character getContractMonthFutX() {
		return contractMonthFutX;
	}
	public void setContractMonthFutX(Character contractMonthFutX) {
		this.contractMonthFutX = contractMonthFutX;
	}
	public Character getContractMonthFutZ() {
		return contractMonthFutZ;
	}
	public void setContractMonthFutZ(Character contractMonthFutZ) {
		this.contractMonthFutZ = contractMonthFutZ;
	}
	public Character getContractMonthOptF() {
		return contractMonthOptF;
	}
	public void setContractMonthOptF(Character contractMonthOptF) {
		this.contractMonthOptF = contractMonthOptF;
	}
	public Character getContractMonthOptG() {
		return contractMonthOptG;
	}
	public void setContractMonthOptG(Character contractMonthOptG) {
		this.contractMonthOptG = contractMonthOptG;
	}
	public Character getContractMonthOptH() {
		return contractMonthOptH;
	}
	public void setContractMonthOptH(Character contractMonthOptH) {
		this.contractMonthOptH = contractMonthOptH;
	}
	public Character getContractMonthOptJ() {
		return contractMonthOptJ;
	}
	public void setContractMonthOptJ(Character contractMonthOptJ) {
		this.contractMonthOptJ = contractMonthOptJ;
	}
	public Character getContractMonthOptK() {
		return contractMonthOptK;
	}
	public void setContractMonthOptK(Character contractMonthOptK) {
		this.contractMonthOptK = contractMonthOptK;
	}
	public Character getContractMonthOptM() {
		return contractMonthOptM;
	}
	public void setContractMonthOptM(Character contractMonthOptM) {
		this.contractMonthOptM = contractMonthOptM;
	}
	public Character getContractMonthOptN() {
		return contractMonthOptN;
	}
	public void setContractMonthOptN(Character contractMonthOptN) {
		this.contractMonthOptN = contractMonthOptN;
	}
	public Character getContractMonthOptQ() {
		return contractMonthOptQ;
	}
	public void setContractMonthOptQ(Character contractMonthOptQ) {
		this.contractMonthOptQ = contractMonthOptQ;
	}
	public Character getContractMonthOptU() {
		return contractMonthOptU;
	}
	public void setContractMonthOptU(Character contractMonthOptU) {
		this.contractMonthOptU = contractMonthOptU;
	}
	public Character getContractMonthOptV() {
		return contractMonthOptV;
	}
	public void setContractMonthOptV(Character contractMonthOptV) {
		this.contractMonthOptV = contractMonthOptV;
	}
	public Character getContractMonthOptX() {
		return contractMonthOptX;
	}
	public void setContractMonthOptX(Character contractMonthOptX) {
		this.contractMonthOptX = contractMonthOptX;
	}
	public Character getContractMonthOptZ() {
		return contractMonthOptZ;
	}
	public void setContractMonthOptZ(Character contractMonthOptZ) {
		this.contractMonthOptZ = contractMonthOptZ;
	}
	public static long getSerialversionuid() {
		return serialVersionUID;
	}
}
