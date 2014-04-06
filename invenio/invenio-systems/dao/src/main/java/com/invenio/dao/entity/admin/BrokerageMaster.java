package com.invenio.dao.entity.admin;

import java.math.BigDecimal;
import java.util.Date;

import javax.persistence.Entity;
import javax.persistence.JoinColumn;
import javax.persistence.OneToOne;

import com.invenio.dao.entity.AbstractPkEntity;

@Entity
public class BrokerageMaster extends AbstractPkEntity {

	private static final long serialVersionUID = 4442678100065487353L;
	
	@OneToOne
	@JoinColumn(name="exchange")
	private Exchange exchange;
	
	@OneToOne
	@JoinColumn(name="portfolio")
	private Portfolio portfolio;
	
	@OneToOne
	@JoinColumn(name="product")
	private Product product;
	
	@OneToOne
	@JoinColumn(name="executing_broker")
	private ExecutionBroker executionBroker;
	
	@OneToOne
	@JoinColumn(name="clearing_broker")
	private ClearingBroker clearingBroker;
	
	@OneToOne
	@JoinColumn(name="futures")
	private FutureContract futures;
	
	@OneToOne
	@JoinColumn(name="options")
	private OptionContract options;
	
	@OneToOne
	@JoinColumn(name="brokerage_callsign")
	private BrokerageCallsign brokerageCallsign;
	
	private String currency;
	private String specialTrade;
	private BigDecimal rate;
	private String paymentMode;
	private Character gua;
	private BigDecimal exchangeBrokerageFees;
	private BigDecimal invoiceBrokerageFees;
	private Date startDate;
	private Date endDate;
	private String comment;
	public Exchange getExchange() {
		return exchange;
	}
	public void setExchange(Exchange exchange) {
		this.exchange = exchange;
	}
	public Portfolio getPortfolio() {
		return portfolio;
	}
	public void setPortfolio(Portfolio portfolio) {
		this.portfolio = portfolio;
	}
	public Product getProduct() {
		return product;
	}
	public void setProduct(Product product) {
		this.product = product;
	}
	public ExecutionBroker getExecutionBroker() {
		return executionBroker;
	}
	public void setExecutionBroker(ExecutionBroker executionBroker) {
		this.executionBroker = executionBroker;
	}
	public ClearingBroker getClearingBroker() {
		return clearingBroker;
	}
	public void setClearingBroker(ClearingBroker clearingBroker) {
		this.clearingBroker = clearingBroker;
	}
	public FutureContract getFutures() {
		return futures;
	}
	public void setFutures(FutureContract futures) {
		this.futures = futures;
	}
	public OptionContract getOptions() {
		return options;
	}
	public void setOptions(OptionContract options) {
		this.options = options;
	}
	public BrokerageCallsign getBrokerageCallsign() {
		return brokerageCallsign;
	}
	public void setBrokerageCallsign(BrokerageCallsign brokerageCallsign) {
		this.brokerageCallsign = brokerageCallsign;
	}
	public String getCurrency() {
		return currency;
	}
	public void setCurrency(String currency) {
		this.currency = currency;
	}
	public String getSpecialTrade() {
		return specialTrade;
	}
	public void setSpecialTrade(String specialTrade) {
		this.specialTrade = specialTrade;
	}
	public BigDecimal getRate() {
		return rate;
	}
	public void setRate(BigDecimal rate) {
		this.rate = rate;
	}
	public String getPaymentMode() {
		return paymentMode;
	}
	public void setPaymentMode(String paymentMode) {
		this.paymentMode = paymentMode;
	}
	public Character getGua() {
		return gua;
	}
	public void setGua(Character gua) {
		this.gua = gua;
	}
	public BigDecimal getExchangeBrokerageFees() {
		return exchangeBrokerageFees;
	}
	public void setExchangeBrokerageFees(BigDecimal exchangeBrokerageFees) {
		this.exchangeBrokerageFees = exchangeBrokerageFees;
	}
	public BigDecimal getInvoiceBrokerageFees() {
		return invoiceBrokerageFees;
	}
	public void setInvoiceBrokerageFees(BigDecimal invoiceBrokerageFees) {
		this.invoiceBrokerageFees = invoiceBrokerageFees;
	}
	public Date getStartDate() {
		return startDate;
	}
	public void setStartDate(Date startDate) {
		this.startDate = startDate;
	}
	public Date getEndDate() {
		return endDate;
	}
	public void setEndDate(Date endDate) {
		this.endDate = endDate;
	}
	public String getComment() {
		return comment;
	}
	public void setComment(String comment) {
		this.comment = comment;
	}
}
