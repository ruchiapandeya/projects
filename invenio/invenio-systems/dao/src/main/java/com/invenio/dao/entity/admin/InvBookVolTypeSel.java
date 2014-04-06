package com.invenio.dao.entity.admin;

import java.util.Date;

import javax.persistence.Entity;
import javax.persistence.JoinColumn;
import javax.persistence.OneToOne;

import com.invenio.dao.entity.AbstractPkEntity;

@Entity
public class InvBookVolTypeSel extends AbstractPkEntity {

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
	
	@OneToOne
	@JoinColumn(name = "vol_surface_type")
	private VolSurface volSurface;
	
	@OneToOne
	@JoinColumn(name = "intrapolation_technique")
	private IntrapolationTechnique intrapolationTechnique;
	
	@OneToOne
	@JoinColumn(name = "extrapolation_technique")
	private ExtrapolationTechnique extrapolationTechnique;
	
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

	public VolSurface getVolSurface() {
		return volSurface;
	}

	public void setVolSurface(VolSurface volSurface) {
		this.volSurface = volSurface;
	}

	public IntrapolationTechnique getIntrapolationTechnique() {
		return intrapolationTechnique;
	}

	public void setIntrapolationTechnique(
			IntrapolationTechnique intrapolationTechnique) {
		this.intrapolationTechnique = intrapolationTechnique;
	}

	public ExtrapolationTechnique getExtrapolationTechnique() {
		return extrapolationTechnique;
	}

	public void setExtrapolationTechnique(
			ExtrapolationTechnique extrapolationTechnique) {
		this.extrapolationTechnique = extrapolationTechnique;
	}

	public Date getDate() {
		return date;
	}

	public void setDate(Date date) {
		this.date = date;
	}

	private Date date;
}
