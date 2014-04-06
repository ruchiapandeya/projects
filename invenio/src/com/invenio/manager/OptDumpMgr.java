package com.invenio.manager;

import java.util.List;

import com.invenio.domain.OptDump;

public interface OptDumpMgr {

	public OptDump findByPrimaryKey(Integer optDumpId) throws Exception;
	
	public List<OptDump> findAll()   throws Exception;
	
	public boolean delete(OptDump optDump)  throws Exception;
	
	public Integer add(OptDump optDump)  throws Exception;
	
	public boolean update(OptDump optDump)  throws Exception;
	
}
