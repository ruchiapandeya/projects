package com.invenio.dao.entity.admin;

import java.math.BigDecimal;
import java.util.Date;

import javax.persistence.Entity;
import javax.persistence.JoinColumn;
import javax.persistence.OneToOne;

import com.invenio.dao.entity.AbstractPkEntity;

@Entity
public class VolDump extends AbstractPkEntity {

	/**
	 * 
	 */
	private static final long serialVersionUID = 4442678100065487354L;
	@OneToOne
	@JoinColumn(name="vol_surface_id")
	private VolSurface volSurface;
	@OneToOne
	@JoinColumn(name="instrument_id")
	private Instrument instrument;
	private String product;
	private BigDecimal start;
	private BigDecimal step;
	private String extrapolate;
	private BigDecimal multiple;
	private String code;
	private String futureRef;
	private String optionsRef;
	private Date expiryDate;
	
	public VolSurface getVolSurface() {
		return volSurface;
	}
	public void setVolSurface(VolSurface volSurface) {
		this.volSurface = volSurface;
	}
	public Instrument getInstrument() {
		return instrument;
	}
	public void setInstrument(Instrument instrument) {
		this.instrument = instrument;
	}
	public String getProduct() {
		return product;
	}
	public void setProduct(String product) {
		this.product = product;
	}
	public BigDecimal getStart() {
		return start;
	}
	public void setStart(BigDecimal start) {
		this.start = start;
	}
	public BigDecimal getStep() {
		return step;
	}
	public void setStep(BigDecimal step) {
		this.step = step;
	}
	public String getExtrapolate() {
		return extrapolate;
	}
	public void setExtrapolate(String extrapolate) {
		this.extrapolate = extrapolate;
	}
	public BigDecimal getMultiple() {
		return multiple;
	}
	public void setMultiple(BigDecimal multiple) {
		this.multiple = multiple;
	}
	public String getCode() {
		return code;
	}
	public void setCode(String code) {
		this.code = code;
	}
	public String getFutureRef() {
		return futureRef;
	}
	public void setFutureRef(String futureRef) {
		this.futureRef = futureRef;
	}
	public String getOptionsRef() {
		return optionsRef;
	}
	public void setOptionsRef(String optionsRef) {
		this.optionsRef = optionsRef;
	}
	public Date getExpiryDate() {
		return expiryDate;
	}
	public void setExpiryDate(Date expiryDate) {
		this.expiryDate = expiryDate;
	}
}
