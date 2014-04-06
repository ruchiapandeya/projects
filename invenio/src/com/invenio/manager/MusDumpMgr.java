package com.invenio.manager;

import java.util.List;

import com.invenio.domain.MUsDump;

public interface MusDumpMgr {

	public MUsDump findByPrimaryKey(Integer optDumpId) throws Exception;
	
	public List<MUsDump> findAll()   throws Exception;
	
	public boolean delete(MUsDump musDump)  throws Exception;
	
	public Integer add(MUsDump musDump)  throws Exception;
	
	public boolean update(MUsDump musDump)  throws Exception;
	
}
