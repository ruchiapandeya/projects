package com.invenio.dao.entity.admin;

import java.math.BigDecimal;
import java.util.Date;

import javax.persistence.Entity;
import javax.persistence.JoinColumn;
import javax.persistence.OneToOne;

import com.invenio.dao.entity.AbstractVersionedEntity;

@Entity
public class DealTicket extends AbstractVersionedEntity {

	private static final long serialVersionUID = 4442678100065487353L;
	
	private Integer tradeId;
	private Integer parentTradeId;
	
	@OneToOne
	@JoinColumn(name="product_id")
	private Product product;
	
	@OneToOne
	@JoinColumn(name="derivative_type_id")
	private DerivativeType derivativeType;
	
	@OneToOne
	@JoinColumn(name="action_type_id")
	private ActionType actionType;
	
	@OneToOne
	@JoinColumn(name="quanto_type_id")
	private QuantoType quantoType;
	
	@OneToOne
	@JoinColumn(name="accumulation_frequency_id", insertable=true, updatable=true)
	private AccumulationFrequency accumulationFrequency;
	
	@OneToOne
	@JoinColumn(name="averaging_frequency_id", insertable=true, updatable=true)
	private AveragingFrequency averagingFrequency;
	
	private BigDecimal strike;
	private BigDecimal originalLots;
	private BigDecimal originalPremium;
	private BigDecimal volOverrideValue;
	private BigDecimal correlOverrideValue;
	private BigDecimal refFuturesPrice;
	private BigDecimal barrier1;
	private BigDecimal barrier2;
	private BigDecimal activeLots;
	private BigDecimal exercisedLots;
	private BigDecimal abandonedLots;
	private BigDecimal gotAssignedLots;
	private BigDecimal averageTillNow;
	private BigDecimal accumulationTillNow;
	private BigDecimal rebate;
	private BigDecimal brokerageAccrued;
	private String portfolio; 
	private String subPortfolio; 
	private String strategyName;
	private String subProduct1;
	private String subProduct2;
	private String reconedCompletedBy;
	private String createdBy;
	private String brokerageComment;
	private String brokerageRate;
	private String clearingBroker;
	private String executionBroker;
	private String counterpartyEntity;
	private String counterpartyBu;
	private String counterpartyParent;
	private Character reconedWithClearer;
	private Character brokeragePaid;
	private Character expiryProcessed;
	private Character volOverride;
	private Character correlOverride;
	private Date barrier1ObsStart;
	private Date barrier2ObsStart;
	private Date barrier1ObsEndDate;
	private Date barrier2ObsEndDate;
	private Date averagingStartDate;
	private Date averagingEndDate;
	private Date accumulationStartDate;
	private Date accumulationEndDate;
	private Date dateTime;
	private Date systemDate;
	private Date modifiedTime;
	private Date reconDate;
	private Date reconTimeStamp;
	public Integer getTradeId() {
		return tradeId;
	}
	public void setTradeId(Integer tradeId) {
		this.tradeId = tradeId;
	}
	public Integer getParentTradeId() {
		return parentTradeId;
	}
	public void setParentTradeId(Integer parentTradeId) {
		this.parentTradeId = parentTradeId;
	}
	public Product getProduct() {
		return product;
	}
	public void setProduct(Product product) {
		this.product = product;
	}
	public DerivativeType getDerivativeType() {
		return derivativeType;
	}
	public void setDerivativeType(DerivativeType derivativeType) {
		this.derivativeType = derivativeType;
	}
	public ActionType getActionType() {
		return actionType;
	}
	public void setActionType(ActionType actionType) {
		this.actionType = actionType;
	}
	public QuantoType getQuantoType() {
		return quantoType;
	}
	public void setQuantoType(QuantoType quantoType) {
		this.quantoType = quantoType;
	}
	public AccumulationFrequency getAccumulationFrequency() {
		return accumulationFrequency;
	}
	public void setAccumulationFrequency(AccumulationFrequency frequency) {
		this.accumulationFrequency = frequency;
	}
	public AveragingFrequency getAveragingFrequency() {
		return averagingFrequency;
	}
	public void setAveragingFrequency(AveragingFrequency frequency) {
		this.averagingFrequency = frequency;
	}
	public BigDecimal getStrike() {
		return strike;
	}
	public void setStrike(BigDecimal strike) {
		this.strike = strike;
	}
	public BigDecimal getOriginalLots() {
		return originalLots;
	}
	public void setOriginalLots(BigDecimal originalLots) {
		this.originalLots = originalLots;
	}
	public BigDecimal getOriginalPremium() {
		return originalPremium;
	}
	public void setOriginalPremium(BigDecimal originalPremium) {
		this.originalPremium = originalPremium;
	}
	public BigDecimal getVolOverrideValue() {
		return volOverrideValue;
	}
	public void setVolOverrideValue(BigDecimal volOverrideValue) {
		this.volOverrideValue = volOverrideValue;
	}
	public BigDecimal getCorrelOverrideValue() {
		return correlOverrideValue;
	}
	public void setCorrelOverrideValue(BigDecimal correlOverrideValue) {
		this.correlOverrideValue = correlOverrideValue;
	}
	public BigDecimal getRefFuturesPrice() {
		return refFuturesPrice;
	}
	public void setRefFuturesPrice(BigDecimal refFuturesPrice) {
		this.refFuturesPrice = refFuturesPrice;
	}
	public BigDecimal getBarrier1() {
		return barrier1;
	}
	public void setBarrier1(BigDecimal barrier1) {
		this.barrier1 = barrier1;
	}
	public BigDecimal getBarrier2() {
		return barrier2;
	}
	public void setBarrier2(BigDecimal barrier2) {
		this.barrier2 = barrier2;
	}
	public BigDecimal getActiveLots() {
		return activeLots;
	}
	public void setActiveLots(BigDecimal activeLots) {
		this.activeLots = activeLots;
	}
	public BigDecimal getExercisedLots() {
		return exercisedLots;
	}
	public void setExercisedLots(BigDecimal exercisedLots) {
		this.exercisedLots = exercisedLots;
	}
	public BigDecimal getAbandonedLots() {
		return abandonedLots;
	}
	public void setAbandonedLots(BigDecimal abandonedLots) {
		this.abandonedLots = abandonedLots;
	}
	public BigDecimal getGotAssignedLots() {
		return gotAssignedLots;
	}
	public void setGotAssignedLots(BigDecimal gotAssignedLots) {
		this.gotAssignedLots = gotAssignedLots;
	}
	public BigDecimal getAverageTillNow() {
		return averageTillNow;
	}
	public void setAverageTillNow(BigDecimal averageTillNow) {
		this.averageTillNow = averageTillNow;
	}
	public BigDecimal getAccumulationTillNow() {
		return accumulationTillNow;
	}
	public void setAccumulationTillNow(BigDecimal accumulationTillNow) {
		this.accumulationTillNow = accumulationTillNow;
	}
	public BigDecimal getRebate() {
		return rebate;
	}
	public void setRebate(BigDecimal rebate) {
		this.rebate = rebate;
	}
	public BigDecimal getBrokerageAccrued() {
		return brokerageAccrued;
	}
	public void setBrokerageAccrued(BigDecimal brokerageAccrued) {
		this.brokerageAccrued = brokerageAccrued;
	}
	public String getPortfolio() {
		return portfolio;
	}
	public void setPortfolio(String portfolio) {
		this.portfolio = portfolio;
	}
	public String getSubPortfolio() {
		return subPortfolio;
	}
	public void setSubPortfolio(String subPortfolio) {
		this.subPortfolio = subPortfolio;
	}
	public String getStrategyName() {
		return strategyName;
	}
	public void setStrategyName(String strategyName) {
		this.strategyName = strategyName;
	}
	public String getSubProduct1() {
		return subProduct1;
	}
	public void setSubProduct1(String subProduct1) {
		this.subProduct1 = subProduct1;
	}
	public String getSubProduct2() {
		return subProduct2;
	}
	public void setSubProduct2(String subProduct2) {
		this.subProduct2 = subProduct2;
	}
	public String getReconedCompletedBy() {
		return reconedCompletedBy;
	}
	public void setReconedCompletedBy(String reconedCompletedBy) {
		this.reconedCompletedBy = reconedCompletedBy;
	}
	public String getCreatedBy() {
		return createdBy;
	}
	public void setCreatedBy(String createdBy) {
		this.createdBy = createdBy;
	}
	public String getBrokerageComment() {
		return brokerageComment;
	}
	public void setBrokerageComment(String brokerageComment) {
		this.brokerageComment = brokerageComment;
	}
	public String getBrokerageRate() {
		return brokerageRate;
	}
	public void setBrokerageRate(String brokerageRate) {
		this.brokerageRate = brokerageRate;
	}
	public String getClearingBroker() {
		return clearingBroker;
	}
	public void setClearingBroker(String clearingBroker) {
		this.clearingBroker = clearingBroker;
	}
	public String getExecutionBroker() {
		return executionBroker;
	}
	public void setExecutionBroker(String executionBroker) {
		this.executionBroker = executionBroker;
	}
	public String getCounterpartyEntity() {
		return counterpartyEntity;
	}
	public void setCounterpartyEntity(String counterpartyEntity) {
		this.counterpartyEntity = counterpartyEntity;
	}
	public String getCounterpartyBu() {
		return counterpartyBu;
	}
	public void setCounterpartyBu(String counterpartyBu) {
		this.counterpartyBu = counterpartyBu;
	}
	public String getCounterpartyParent() {
		return counterpartyParent;
	}
	public void setCounterpartyParent(String counterpartyParent) {
		this.counterpartyParent = counterpartyParent;
	}
	public Character getReconedWithClearer() {
		return reconedWithClearer;
	}
	public void setReconedWithClearer(Character reconedWithClearer) {
		this.reconedWithClearer = reconedWithClearer;
	}
	public Character getBrokeragePaid() {
		return brokeragePaid;
	}
	public void setBrokeragePaid(Character brokeragePaid) {
		this.brokeragePaid = brokeragePaid;
	}
	public Character getExpiryProcessed() {
		return expiryProcessed;
	}
	public void setExpiryProcessed(Character expiryProcessed) {
		this.expiryProcessed = expiryProcessed;
	}
	public Character getVolOverride() {
		return volOverride;
	}
	public void setVolOverride(Character volOverride) {
		this.volOverride = volOverride;
	}
	public Character getCorrelOverride() {
		return correlOverride;
	}
	public void setCorrelOverride(Character correlOverride) {
		this.correlOverride = correlOverride;
	}
	public Date getBarrier1ObsStart() {
		return barrier1ObsStart;
	}
	public void setBarrier1ObsStart(Date barrier1ObsStart) {
		this.barrier1ObsStart = barrier1ObsStart;
	}
	public Date getBarrier2ObsStart() {
		return barrier2ObsStart;
	}
	public void setBarrier2ObsStart(Date barrier2ObsStart) {
		this.barrier2ObsStart = barrier2ObsStart;
	}
	public Date getBarrier1ObsEndDate() {
		return barrier1ObsEndDate;
	}
	public void setBarrier1ObsEndDate(Date barrier1ObsEndDate) {
		this.barrier1ObsEndDate = barrier1ObsEndDate;
	}
	public Date getBarrier2ObsEndDate() {
		return barrier2ObsEndDate;
	}
	public void setBarrier2ObsEndDate(Date barrier2ObsEndDate) {
		this.barrier2ObsEndDate = barrier2ObsEndDate;
	}
	public Date getAveragingStartDate() {
		return averagingStartDate;
	}
	public void setAveragingStartDate(Date averagingStartDate) {
		this.averagingStartDate = averagingStartDate;
	}
	public Date getAveragingEndDate() {
		return averagingEndDate;
	}
	public Date getAccumulationStartDate() {
		return accumulationStartDate;
	}
	public void setAccumulationStartDate(Date accumulationStartDate) {
		this.accumulationStartDate = accumulationStartDate;
	}
	public Date getAccumulationEndDate() {
		return accumulationEndDate;
	}
	public void setAccumulationEndDate(Date accumulationEndDate) {
		this.accumulationEndDate = accumulationEndDate;
	}
	public Date getDateTime() {
		return dateTime;
	}
	public void setDateTime(Date dateTime) {
		this.dateTime = dateTime;
	}
	public Date getSystemDate() {
		return systemDate;
	}
	public void setSystemDate(Date systemDate) {
		this.systemDate = systemDate;
	}
	public Date getModifiedTime() {
		return modifiedTime;
	}
	public void setModifiedTime(Date modifiedTime) {
		this.modifiedTime = modifiedTime;
	}
	public Date getReconDate() {
		return reconDate;
	}
	public void setReconDate(Date reconDate) {
		this.reconDate = reconDate;
	}
	public Date getReconTimeStamp() {
		return reconTimeStamp;
	}
	public void setReconTimeStamp(Date reconTimeStamp) {
		this.reconTimeStamp = reconTimeStamp;
	}
	public void setAveragingEndDate(Date averagingEndDate) {
		this.averagingEndDate = averagingEndDate;
	}
}
