package com.invenio.manager;

import java.util.List;

import com.invenio.domain.VolSurface;

public interface VolSurfaceMgr {

	public VolSurface findByPrimaryKey(Integer volDumpId) throws Exception;
	
	public List<VolSurface> findAll()   throws Exception;
	
	public List<VolSurface> findVolSurfaceByType(String volSurfaceType)   throws Exception;
	
	public boolean delete(VolSurface volDump)  throws Exception;
	
	public Integer add(VolSurface volDump)  throws Exception;
	
	public boolean update(VolSurface volDump)  throws Exception;
	
}
