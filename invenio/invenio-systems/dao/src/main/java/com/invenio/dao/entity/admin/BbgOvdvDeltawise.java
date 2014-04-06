package com.invenio.dao.entity.admin;

import java.util.Date;

import javax.persistence.Entity;
import javax.persistence.JoinColumn;
import javax.persistence.OneToOne;

import com.invenio.dao.entity.AbstractPkEntity;

@Entity
public class BbgOvdvDeltawise extends AbstractPkEntity {

	/**
	 * 
	 */
	private static final long serialVersionUID = 1490271305924659L;

	@OneToOne
	@JoinColumn(name = "option_id")
	private OptionStaticData optionStaticData;
	
	private Date date;
	private Double a5dp;
	private Double a10dp;
	private Double a15dp;
	private Double a25dp;
	private Double a35dp;
	private Double a50d;
	private Double a35dc;
	private Double a25dc;
	private Double a15dc;
	private Double a10dc;
	private Double a5dc;
	public OptionStaticData getOptionStaticData() {
		return optionStaticData;
	}
	public void setOptionStaticData(OptionStaticData optionStaticData) {
		this.optionStaticData = optionStaticData;
	}
	public Date getDate() {
		return date;
	}
	public void setDate(Date date) {
		this.date = date;
	}
	public Double getA5dp() {
		return a5dp;
	}
	public void setA5dp(Double a5dp) {
		this.a5dp = a5dp;
	}
	public Double getA10dp() {
		return a10dp;
	}
	public void setA10dp(Double a10dp) {
		this.a10dp = a10dp;
	}
	public Double getA15dp() {
		return a15dp;
	}
	public void setA15dp(Double a15dp) {
		this.a15dp = a15dp;
	}
	public Double getA25dp() {
		return a25dp;
	}
	public void setA25dp(Double a25dp) {
		this.a25dp = a25dp;
	}
	public Double getA35dp() {
		return a35dp;
	}
	public void setA35dp(Double a35dp) {
		this.a35dp = a35dp;
	}
	public Double getA50d() {
		return a50d;
	}
	public void setA50d(Double a50d) {
		this.a50d = a50d;
	}
	public Double getA35dc() {
		return a35dc;
	}
	public void setA35dc(Double a35dc) {
		this.a35dc = a35dc;
	}
	public Double getA25dc() {
		return a25dc;
	}
	public void setA25dc(Double a25dc) {
		this.a25dc = a25dc;
	}
	public Double getA15dc() {
		return a15dc;
	}
	public void setA15dc(Double a15dc) {
		this.a15dc = a15dc;
	}
	public Double getA10dc() {
		return a10dc;
	}
	public void setA10dc(Double a10dc) {
		this.a10dc = a10dc;
	}
	public Double getA5dc() {
		return a5dc;
	}
	public void setA5dc(Double a5dc) {
		this.a5dc = a5dc;
	}
}
