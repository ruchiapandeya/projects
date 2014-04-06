package com.invenio.manager;

import java.util.List;

import com.invenio.domain.FutDump;

public interface FutDumpMgr {

	public FutDump findByPrimaryKey(Integer optDumpId) throws Exception;
	
	public List<FutDump> findAll()   throws Exception;
	
	public boolean delete(FutDump futDump)  throws Exception;
	
	public Integer add(FutDump futDump)  throws Exception;
	
	public boolean update(FutDump futDump)  throws Exception;
	
}
