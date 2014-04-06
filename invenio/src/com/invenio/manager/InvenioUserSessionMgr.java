package com.invenio.manager;

import java.util.List;

import com.invenio.domain.InvenioUser;
import com.invenio.domain.InvenioUserSession;

public interface InvenioUserSessionMgr{

	public InvenioUserSession findByPrimaryKey(Integer ehrUserSessionId) throws Exception;
	
	public List<InvenioUserSession> findAll()   throws Exception;
	
	public boolean delete(InvenioUserSession ehrUserSession)  throws Exception;
	
	public Integer add(InvenioUserSession ehrUserSession)  throws Exception;
	
	public InvenioUser update(InvenioUserSession invenioUserSession)  throws Exception;
	
	public List<InvenioUserSession> findInvenioUserSessionBySessionId(String userId, String sessionId) throws Exception;
	
}
