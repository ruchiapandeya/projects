package com.invenio.dao.entity.admin;

import java.math.BigDecimal;
import java.util.Date;

import javax.persistence.Entity;
import javax.persistence.JoinColumn;
import javax.persistence.OneToOne;

import com.invenio.dao.entity.AbstractPkEntity;

@Entity
public class ExchangeMaster extends AbstractPkEntity {

	private static final long serialVersionUID = 4442678100065487353L;
	
	@OneToOne
	@JoinColumn(name="exchange")
	private Exchange exchange;
	
	@OneToOne
	@JoinColumn(name="product")
	private Product product;
	
	@OneToOne
	@JoinColumn(name="futures")
	private FutureContract futures;
	
	@OneToOne
	@JoinColumn(name="options")
	private OptionContract options;
	
	@OneToOne
	@JoinColumn(name="exchange_callsign")
	private ExchangeCallsign exchangeCallsign;
	
	@OneToOne
	@JoinColumn(name="execution_type")
	private ExecutionType executionType;
	
	private BigDecimal actualExchangeFees;
	private BigDecimal actualExchangeClearingFees;
	private BigDecimal actualNfaFees;
	private String actualExchangeCurrency;
	private BigDecimal publishedExchangeFees;
	private BigDecimal publishedExchangeClearingFees;
	private BigDecimal publishedNfaFees;
	private String publishedExchangeCurrency;
	private BigDecimal bache;
	private String bacheCurrency;
	private BigDecimal bacheSpcl;
	private String bacheSpclCurrency;
	private BigDecimal rjObrien;
	private String rjObrienCurrency;
	private BigDecimal phillipFutures;
	private String phillipFuturesCurrency;
	private Date startDate;
	private Date endDate;
	private String comment;
	public Exchange getExchange() {
		return exchange;
	}
	public void setExchange(Exchange exchange) {
		this.exchange = exchange;
	}
	public Product getProduct() {
		return product;
	}
	public void setProduct(Product product) {
		this.product = product;
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
	public ExchangeCallsign getExchangeCallsign() {
		return exchangeCallsign;
	}
	public void setExchangeCallsign(ExchangeCallsign exchangeCallsign) {
		this.exchangeCallsign = exchangeCallsign;
	}
	public ExecutionType getExecutionType() {
		return executionType;
	}
	public void setExecutionType(ExecutionType executionType) {
		this.executionType = executionType;
	}
	public BigDecimal getActualExchangeFees() {
		return actualExchangeFees;
	}
	public void setActualExchangeFees(BigDecimal actualExchangeFees) {
		this.actualExchangeFees = actualExchangeFees;
	}
	public BigDecimal getActualExchangeClearingFees() {
		return actualExchangeClearingFees;
	}
	public void setActualExchangeClearingFees(BigDecimal actualExchangeClearingFees) {
		this.actualExchangeClearingFees = actualExchangeClearingFees;
	}
	public BigDecimal getActualNfaFees() {
		return actualNfaFees;
	}
	public void setActualNfaFees(BigDecimal actualNfaFees) {
		this.actualNfaFees = actualNfaFees;
	}
	public String getActualExchangeCurrency() {
		return actualExchangeCurrency;
	}
	public void setActualExchangeCurrency(String actualExchangeCurrency) {
		this.actualExchangeCurrency = actualExchangeCurrency;
	}
	public BigDecimal getPublishedExchangeFees() {
		return publishedExchangeFees;
	}
	public void setPublishedExchangeFees(BigDecimal publishedExchangeFees) {
		this.publishedExchangeFees = publishedExchangeFees;
	}
	public BigDecimal getPublishedExchangeClearingFees() {
		return publishedExchangeClearingFees;
	}
	public void setPublishedExchangeClearingFees(
			BigDecimal publishedExchangeClearingFees) {
		this.publishedExchangeClearingFees = publishedExchangeClearingFees;
	}
	public BigDecimal getPublishedNfaFees() {
		return publishedNfaFees;
	}
	public void setPublishedNfaFees(BigDecimal publishedNfaFees) {
		this.publishedNfaFees = publishedNfaFees;
	}
	public String getPublishedExchangeCurrency() {
		return publishedExchangeCurrency;
	}
	public void setPublishedExchangeCurrency(String publishedExchangeCurrency) {
		this.publishedExchangeCurrency = publishedExchangeCurrency;
	}
	public BigDecimal getBache() {
		return bache;
	}
	public void setBache(BigDecimal bache) {
		this.bache = bache;
	}
	public String getBacheCurrency() {
		return bacheCurrency;
	}
	public void setBacheCurrency(String bacheCurrency) {
		this.bacheCurrency = bacheCurrency;
	}
	public BigDecimal getBacheSpcl() {
		return bacheSpcl;
	}
	public void setBacheSpcl(BigDecimal bacheSpcl) {
		this.bacheSpcl = bacheSpcl;
	}
	public String getBacheSpclCurrency() {
		return bacheSpclCurrency;
	}
	public void setBacheSpclCurrency(String bacheSpclCurrency) {
		this.bacheSpclCurrency = bacheSpclCurrency;
	}
	public BigDecimal getRjObrien() {
		return rjObrien;
	}
	public void setRjObrien(BigDecimal rjObrien) {
		this.rjObrien = rjObrien;
	}
	public String getRjObrienCurrency() {
		return rjObrienCurrency;
	}
	public void setRjObrienCurrency(String rjObrienCurrency) {
		this.rjObrienCurrency = rjObrienCurrency;
	}
	public BigDecimal getPhillipFutures() {
		return phillipFutures;
	}
	public void setPhillipFutures(BigDecimal phillipFutures) {
		this.phillipFutures = phillipFutures;
	}
	public String getPhillipFuturesCurrency() {
		return phillipFuturesCurrency;
	}
	public void setPhillipFuturesCurrency(String phillipFuturesCurrency) {
		this.phillipFuturesCurrency = phillipFuturesCurrency;
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
