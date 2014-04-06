package com.invenio.manager;

import java.util.List;

import com.invenio.domain.InvenioUser;

public interface InvenioUserMgr {

	public InvenioUser findByPrimaryKey(Integer recordId) throws Exception;
	
	public List<InvenioUser> findAll()   throws Exception;
	
	public boolean delete(InvenioUser invenioUser)  throws Exception;
	
	public Integer add(InvenioUser invenioUser)  throws Exception;
	
	public boolean update(InvenioUser invenioUser)  throws Exception;
	
	public List<InvenioUser> findInvenioUserByUserId(String userid) throws Exception;
	
}
