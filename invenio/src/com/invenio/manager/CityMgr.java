package com.invenio.manager;

import java.util.List;

import com.invenio.domain.City;
import com.invenio.domain.InvenioUser;

public interface CityMgr{

	public City findByPrimaryKey(Integer cityId) throws Exception;
	
	public List<City> findAll()   throws Exception;
	
	public boolean delete(City city)  throws Exception;
	
	public Integer add(City city)  throws Exception;
	
	public InvenioUser update(City city)  throws Exception;
	
	public List<City> findCityByStateId(Integer stateId) throws Exception;
	
}
