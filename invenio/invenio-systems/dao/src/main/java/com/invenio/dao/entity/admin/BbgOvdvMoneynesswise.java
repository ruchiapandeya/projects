package com.invenio.dao.entity.admin;

import java.util.Date;

import javax.persistence.Entity;
import javax.persistence.JoinColumn;
import javax.persistence.OneToOne;

import com.invenio.dao.entity.AbstractPkEntity;

@Entity
public class BbgOvdvMoneynesswise extends AbstractPkEntity {

	/**
	 * 
	 */
	private static final long serialVersionUID = 1490271305924659L;

	@OneToOne
	@JoinColumn(name = "option_id")
	private OptionStaticData optionStaticData;
	
	private Date date;
	private Double a80;
	private Double a90;
	private Double a95;
	private Double a975;
	private Double a100;
	private Double a1025;
	private Double a105;
	private Double a110;
	private Double a120;
	private Double a150;
	private Double a200;
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
	public Double getA80() {
		return a80;
	}
	public void setA80(Double a80) {
		this.a80 = a80;
	}
	public Double getA90() {
		return a90;
	}
	public void setA90(Double a90) {
		this.a90 = a90;
	}
	public Double getA95() {
		return a95;
	}
	public void setA95(Double a95) {
		this.a95 = a95;
	}
	public Double getA975() {
		return a975;
	}
	public void setA975(Double a975) {
		this.a975 = a975;
	}
	public Double getA100() {
		return a100;
	}
	public void setA100(Double a100) {
		this.a100 = a100;
	}
	public Double getA1025() {
		return a1025;
	}
	public void setA1025(Double a1025) {
		this.a1025 = a1025;
	}
	public Double getA105() {
		return a105;
	}
	public void setA105(Double a105) {
		this.a105 = a105;
	}
	public Double getA110() {
		return a110;
	}
	public void setA110(Double a110) {
		this.a110 = a110;
	}
	public Double getA120() {
		return a120;
	}
	public void setA120(Double a120) {
		this.a120 = a120;
	}
	public Double getA150() {
		return a150;
	}
	public void setA150(Double a150) {
		this.a150 = a150;
	}
	public Double getA200() {
		return a200;
	}
	public void setA200(Double a200) {
		this.a200 = a200;
	}
}
