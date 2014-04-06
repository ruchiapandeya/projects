package com.invenio.manager;

import java.util.List;

import com.invenio.domain.State;

public interface StateMgr {

	public State findByPrimaryKey(Integer stateId) throws Exception;
	
	public List<State> findAll()   throws Exception;
	
	public boolean delete(State state)  throws Exception;
	
	public Integer add(State state)  throws Exception;
	
	public State update(State state)  throws Exception;

	public List<State> findStatesForCountry(Integer parseInt) throws Exception;
	
}
