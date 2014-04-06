package com.invenio.dao.entity.admin;

import java.util.Date;

import javax.persistence.Entity;
import javax.persistence.JoinColumn;
import javax.persistence.OneToOne;

import com.invenio.dao.entity.AbstractPkEntity;

@Entity
public class InvBookVolTypeFloating extends AbstractPkEntity {

	/**
	 * 
	 */
	private static final long serialVersionUID = 1490271305924659L;

	@OneToOne
	@JoinColumn(name = "option_id")
	private OptionStaticData optionStaticData;
	
	@OneToOne
	@JoinColumn(name = "sub_portfolio")
	private SubPortfolio subPortfolio;
	
	public OptionStaticData getOptionStaticData() {
		return optionStaticData;
	}

	public void setOptionStaticData(OptionStaticData optionStaticData) {
		this.optionStaticData = optionStaticData;
	}

	public SubPortfolio getSubPortfolio() {
		return subPortfolio;
	}

	public void setSubPortfolio(SubPortfolio subPortfolio) {
		this.subPortfolio = subPortfolio;
	}

	public Date getDate() {
		return date;
	}

	public void setDate(Date date) {
		this.date = date;
	}

	private Date date;
	private Double atmf3pPutskew;
	private Double atmf3pAtm;
	private Double atmf3pCallskew;
	private Double atmf5pP1;
	private Double atmf5pP2;
	private Double atmf5pP3;
	private Double atmf5pP4;
	private Double atmf5pP5;
	private Double atmf7pP1;
	private Double atmf7pP2;
	private Double atmf7pP3;
	private Double atmf7pP4;
	private Double atmf7pP5;
	private Double atmf7pP6;
	private Double atmf7pP7;

	public Double getAtmf3pPutskew() {
		return atmf3pPutskew;
	}

	public void setAtmf3pPutskew(Double atmf3pPutskew) {
		this.atmf3pPutskew = atmf3pPutskew;
	}

	public Double getAtmf3pAtm() {
		return atmf3pAtm;
	}

	public void setAtmf3pAtm(Double atmf3pAtm) {
		this.atmf3pAtm = atmf3pAtm;
	}

	public Double getAtmf3pCallskew() {
		return atmf3pCallskew;
	}

	public void setAtmf3pCallskew(Double atmf3pCallskew) {
		this.atmf3pCallskew = atmf3pCallskew;
	}

	public Double getAtmf5pP1() {
		return atmf5pP1;
	}

	public void setAtmf5pP1(Double atmf5pP1) {
		this.atmf5pP1 = atmf5pP1;
	}

	public Double getAtmf5pP2() {
		return atmf5pP2;
	}

	public void setAtmf5pP2(Double atmf5pP2) {
		this.atmf5pP2 = atmf5pP2;
	}

	public Double getAtmf5pP3() {
		return atmf5pP3;
	}

	public void setAtmf5pP3(Double atmf5pP3) {
		this.atmf5pP3 = atmf5pP3;
	}

	public Double getAtmf5pP4() {
		return atmf5pP4;
	}

	public void setAtmf5pP4(Double atmf5pP4) {
		this.atmf5pP4 = atmf5pP4;
	}

	public Double getAtmf5pP5() {
		return atmf5pP5;
	}

	public void setAtmf5pP5(Double atmf5pP5) {
		this.atmf5pP5 = atmf5pP5;
	}

	public Double getAtmf7pP1() {
		return atmf7pP1;
	}

	public void setAtmf7pP1(Double atmf7pP1) {
		this.atmf7pP1 = atmf7pP1;
	}

	public Double getAtmf7pP2() {
		return atmf7pP2;
	}

	public void setAtmf7pP2(Double atmf7pP2) {
		this.atmf7pP2 = atmf7pP2;
	}

	public Double getAtmf7pP3() {
		return atmf7pP3;
	}

	public void setAtmf7pP3(Double atmf7pP3) {
		this.atmf7pP3 = atmf7pP3;
	}

	public Double getAtmf7pP4() {
		return atmf7pP4;
	}

	public void setAtmf7pP4(Double atmf7pP4) {
		this.atmf7pP4 = atmf7pP4;
	}

	public Double getAtmf7pP5() {
		return atmf7pP5;
	}

	public void setAtmf7pP5(Double atmf7pP5) {
		this.atmf7pP5 = atmf7pP5;
	}

	public Double getAtmf7pP6() {
		return atmf7pP6;
	}

	public void setAtmf7pP6(Double atmf7pP6) {
		this.atmf7pP6 = atmf7pP6;
	}

	public Double getAtmf7pP7() {
		return atmf7pP7;
	}

	public void setAtmf7pP7(Double atmf7pP7) {
		this.atmf7pP7 = atmf7pP7;
	}
}
