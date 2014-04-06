package com.invenio.manager;

import java.util.List;

import com.invenio.domain.VolDump;

public interface VolDumpMgr {

	public VolDump findByPrimaryKey(Integer volDumpId) throws Exception;
	
	public List<VolDump> findAll()   throws Exception;
	
	public boolean delete(VolDump volDump)  throws Exception;
	
	public Integer add(VolDump volDump)  throws Exception;
	
	public boolean update(VolDump volDump)  throws Exception;
	
}
