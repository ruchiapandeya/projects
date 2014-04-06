package com.invenio.service.admin;

import java.text.ParseException;
import java.util.List;

import com.invenio.schema.beans.admin.DealTicket;
import com.invenio.schema.beans.core.DealTicketRequest;
import com.invenio.schema.beans.core.FilterRequest;
import com.invenio.service.VersionedPersistenceService;


public interface DealTicketService extends VersionedPersistenceService<DealTicket, com.invenio.dao.entity.admin.DealTicket, Integer> {

	public List<DealTicket> filter(FilterRequest filterRequest);
	
	public void insert(DealTicketRequest dealTicketRequest) throws ParseException;
}
