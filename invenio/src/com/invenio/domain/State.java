package com.invenio.domain;

import static javax.persistence.GenerationType.IDENTITY;

import java.util.Set;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.FetchType;
import javax.persistence.GeneratedValue;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;
import javax.persistence.OneToMany;
import javax.persistence.Table;

@Entity
@Table(name = "state")
@NamedQueries (
@NamedQuery(name="findStatesForCountry", query="FROM com.invenio.domain.State s WHERE s.country = ?")		
)
public class State {

	@Id
	@GeneratedValue(strategy = IDENTITY)
	@Column(name = "state_id", unique = true, nullable = false)
	private Integer stateId;
	
	@Column(name = "state_name", nullable = false, length = 200)
	private String stateName;
	
	@Column(name = "state_code", nullable = false, length = 50)
	private String stateCode;
	
	@OneToMany(fetch = FetchType.LAZY, mappedBy = "state")
	private Set<City> cities;
	

	@ManyToOne(fetch = FetchType.LAZY)
	@JoinColumn(name = "country_id", nullable = false)
	private Country country;
	
	public Integer getStateId() {
		return stateId;
	}
	public void setStateId(Integer stateId) {
		this.stateId = stateId;
	}
	public String getStateName() {
		return stateName;
	}
	public void setStateName(String stateName) {
		this.stateName = stateName;
	}
	public String getStateCode() {
		return stateCode;
	}
	public void setStateCode(String stateCode) {
		this.stateCode = stateCode;
	}
	public Set<City> getCities() {
		return cities;
	}
	public void setCities(Set<City> cities) {
		this.cities = cities;
	}
	public Country getCountry() {
		return country;
	}
	public void setCountry(Country country) {
		this.country = country;
	}
}
