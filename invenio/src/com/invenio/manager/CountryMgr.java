package com.invenio.manager;

import java.util.List;

import com.invenio.domain.Country;

public interface CountryMgr {

	public Country findByPrimaryKey(Integer countryId) throws Exception;
	
	public List<Country> findAll()   throws Exception;
	
	public boolean delete(Country country)  throws Exception;
	
	public Integer add(Country country)  throws Exception;
	
	public Country update(Country country)  throws Exception;
	
}
