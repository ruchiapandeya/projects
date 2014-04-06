package com.invenio.vo;

import javax.xml.bind.annotation.XmlRootElement;

@XmlRootElement(name="items")
public class VolDumpVO {
	private String volDumpId;

	private String volSurfaceId;
	private String volSurfaceType;
	
	private String product;
	private String start;
	private String step;
	private String extrapolate;
	private String multiple;
	private String code;
	private String futureRef;
	private String optionsRef;
	private String expiryDate;
	
	public String getVolSurfaceId() {
		return volSurfaceId;
	}
	public void setVolSurfaceId(String volSurfaceId) {
		this.volSurfaceId = volSurfaceId;
	}
	public String getVolSurfaceType() {
		return volSurfaceType;
	}
	public void setVolSurfaceType(String volSurfaceType) {
		this.volSurfaceType = volSurfaceType;
	}
	public String getVolDumpId() {
		return volDumpId;
	}
	public void setVolDumpId(String volDumpId) {
		this.volDumpId = volDumpId;
	}
	public String getProduct() {
		return product;
	}
	public void setProduct(String product) {
		this.product = product;
	}
	public String getStart() {
		return start;
	}
	public void setStart(String start) {
		this.start = start;
	}
	public String getStep() {
		return step;
	}
	public void setStep(String step) {
		this.step = step;
	}
	public String getExtrapolate() {
		return extrapolate;
	}
	public void setExtrapolate(String extrapolate) {
		this.extrapolate = extrapolate;
	}
	public String getMultiple() {
		return multiple;
	}
	public void setMultiple(String multiple) {
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
	public String getExpiryDate() {
		return expiryDate;
	}
	public void setExpiryDate(String expiryDate) {
		this.expiryDate = expiryDate;
	}
}
