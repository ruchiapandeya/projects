package com.invenio.manager;

import java.util.List;

import com.invenio.domain.Instrument;
import com.invenio.domain.InvenioUser;

public interface InstrumentMgr{

	public Instrument findByPrimaryKey(Integer instrumentId) throws Exception;
	
	public List<Instrument> findAll()   throws Exception;
	
	public List<Instrument> findInstrumentByCode(String instrumentCode)   throws Exception;
	
	public boolean delete(Instrument instrument)  throws Exception;
	
	public Integer add(Instrument instrument)  throws Exception;
	
	public boolean update(Instrument instrument)  throws Exception;
	
}
