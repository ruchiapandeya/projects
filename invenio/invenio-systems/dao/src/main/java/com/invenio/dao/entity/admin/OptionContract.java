package com.invenio.dao.entity.admin;

import java.math.BigDecimal;
import java.util.Date;

import javax.persistence.Entity;
import javax.persistence.JoinColumn;
import javax.persistence.OneToOne;

import com.invenio.dao.entity.AbstractPkEntity;

@Entity
public class OptionContract extends AbstractPkEntity {

	/**
	 * 
	 */
	private static final long serialVersionUID = 1490271305924659L;

	@OneToOne
	@JoinColumn(name = "derivative_type")
	private DerivativeType derivativeType;
	
	@OneToOne
	@JoinColumn(name = "averaging_frequency")
	private AveragingFrequency averagingFrequency;
	
	@OneToOne
	@JoinColumn(name = "accumulation_frequency")
	private AccumulationFrequency accumulationFrequency;
	
	@OneToOne
	@JoinColumn(name = "quanto_type")
	private QuantoType quantoType;
	
	@OneToOne
	@JoinColumn(name = "option_id1")
	private OptionStaticData optionStaticData1;
	
	@OneToOne
	@JoinColumn(name = "option_id2")
	private OptionStaticData optionStaticData2;
	
	@OneToOne
	@JoinColumn(name = "sub_product1")
	private InvenioProduct invenioProduct1;
	
	@OneToOne
	@JoinColumn(name = "sub_product2")
	private InvenioProduct invenioProduct2;
	
	private String optionName;
	private BigDecimal strike;
	private Character volOverride;
	private String volOverrideVal;
	private Character correlOverride;
	private String correlOverrideVal;
	private String barrier1;
	private String barrier2;
	private Date barrier1ObsStartDate;
	private Date barrier1ObsEndDate;
	private Date barrier2ObsStartDate;
	private Date barrier2ObsEndDate;
	private String rebate;
	private Date averagingStartDate;
	private Date averagingEndDate;
	private String averageTillNow;
	private Date accumulationStartDate;
	private Date accumulationEndDate;
	private String accumulationTillNow;
	private Date maturityDate;
	public DerivativeType getDerivativeType() {
		return derivativeType;
	}
	public void setDerivativeType(DerivativeType derivativeType) {
		this.derivativeType = derivativeType;
	}
	public AveragingFrequency getAveragingFrequency() {
		return averagingFrequency;
	}
	public void setAveragingFrequency(AveragingFrequency averagingFrequency) {
		this.averagingFrequency = averagingFrequency;
	}
	public AccumulationFrequency getAccumulationFrequency() {
		return accumulationFrequency;
	}
	public void setAccumulationFrequency(AccumulationFrequency accumulationFrequency) {
		this.accumulationFrequency = accumulationFrequency;
	}
	public QuantoType getQuantoType() {
		return quantoType;
	}
	public void setQuantoType(QuantoType quantoType) {
		this.quantoType = quantoType;
	}
	public String getOptionName() {
		return optionName;
	}
	public void setOptionName(String optionName) {
		this.optionName = optionName;
	}
	public BigDecimal getStrike() {
		return strike;
	}
	public OptionStaticData getOptionStaticData1() {
		return optionStaticData1;
	}
	public void setOptionStaticData1(OptionStaticData optionStaticData1) {
		this.optionStaticData1 = optionStaticData1;
	}
	public OptionStaticData getOptionStaticData2() {
		return optionStaticData2;
	}
	public void setOptionStaticData2(OptionStaticData optionStaticData2) {
		this.optionStaticData2 = optionStaticData2;
	}
	public InvenioProduct getInvenioProduct1() {
		return invenioProduct1;
	}
	public void setInvenioProduct1(InvenioProduct invenioProduct1) {
		this.invenioProduct1 = invenioProduct1;
	}
	public InvenioProduct getInvenioProduct2() {
		return invenioProduct2;
	}
	public void setInvenioProduct2(InvenioProduct invenioProduct2) {
		this.invenioProduct2 = invenioProduct2;
	}
	public void setStrike(BigDecimal strike) {
		this.strike = strike;
	}
	public Character getVolOverride() {
		return volOverride;
	}
	public void setVolOverride(Character volOverride) {
		this.volOverride = volOverride;
	}
	public String getVolOverrideVal() {
		return volOverrideVal;
	}
	public void setVolOverrideVal(String volOverrideVal) {
		this.volOverrideVal = volOverrideVal;
	}
	public Character getCorrelOverride() {
		return correlOverride;
	}
	public void setCorrelOverride(Character correlOverride) {
		this.correlOverride = correlOverride;
	}
	public String getCorrelOverrideVal() {
		return correlOverrideVal;
	}
	public void setCorrelOverrideVal(String correlOverrideVal) {
		this.correlOverrideVal = correlOverrideVal;
	}
	public String getBarrier1() {
		return barrier1;
	}
	public void setBarrier1(String barrier1) {
		this.barrier1 = barrier1;
	}
	public String getBarrier2() {
		return barrier2;
	}
	public void setBarrier2(String barrier2) {
		this.barrier2 = barrier2;
	}
	public Date getBarrier1ObsStartDate() {
		return barrier1ObsStartDate;
	}
	public void setBarrier1ObsStartDate(Date barrier1ObsStartDate) {
		this.barrier1ObsStartDate = barrier1ObsStartDate;
	}
	public Date getBarrier1ObsEndDate() {
		return barrier1ObsEndDate;
	}
	public void setBarrier1ObsEndDate(Date barrier1ObsEndDate) {
		this.barrier1ObsEndDate = barrier1ObsEndDate;
	}
	public Date getBarrier2ObsStartDate() {
		return barrier2ObsStartDate;
	}
	public void setBarrier2ObsStartDate(Date barrier2ObsStartDate) {
		this.barrier2ObsStartDate = barrier2ObsStartDate;
	}
	public Date getBarrier2ObsEndDate() {
		return barrier2ObsEndDate;
	}
	public void setBarrier2ObsEndDate(Date barrier2ObsEndDate) {
		this.barrier2ObsEndDate = barrier2ObsEndDate;
	}
	public String getRebate() {
		return rebate;
	}
	public void setRebate(String rebate) {
		this.rebate = rebate;
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
	public void setAveragingEndDate(Date averagingEndDate) {
		this.averagingEndDate = averagingEndDate;
	}
	public String getAverageTillNow() {
		return averageTillNow;
	}
	public void setAverageTillNow(String averageTillNow) {
		this.averageTillNow = averageTillNow;
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
	public String getAccumulationTillNow() {
		return accumulationTillNow;
	}
	public void setAccumulationTillNow(String accumulationTillNow) {
		this.accumulationTillNow = accumulationTillNow;
	}
	public Date getMaturityDate() {
		return maturityDate;
	}
	public void setMaturityDate(Date maturityDate) {
		this.maturityDate = maturityDate;
	}
	public static long getSerialversionuid() {
		return serialVersionUID;
	}

	
}
