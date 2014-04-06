package com.invenio.controller.admin;


import java.text.ParseException;
import java.util.List;

import javax.ws.rs.Consumes;
import javax.ws.rs.POST;
import javax.ws.rs.Path;
import javax.ws.rs.Produces;
import javax.ws.rs.core.MediaType;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractVersionedController;
import com.invenio.schema.beans.admin.DealTicket;
import com.invenio.schema.beans.core.DealTicketRequest;
import com.invenio.schema.beans.core.FilterRequest;
import com.invenio.service.admin.DealTicketService;

@Path("/deal-ticket")
@Service
public class DealTicketController extends
		AbstractVersionedController<DealTicket, com.invenio.dao.entity.admin.DealTicket, Integer, DealTicketService> {

	@Autowired
	public DealTicketController(DealTicketService service) {
		super("deal-ticket", service);
	}
	
	@POST
	@Path("filter")
	@Consumes(MediaType.APPLICATION_JSON)
	@Produces(MediaType.APPLICATION_JSON)
	public List<DealTicket> filter(FilterRequest filterRequest) {
		return service.filter(filterRequest);
	}
	
	@POST
	@Path("insert")
	@Consumes(MediaType.APPLICATION_JSON)
	@Produces(MediaType.APPLICATION_JSON)
	public void insert(DealTicketRequest dealTicketRequest) throws ParseException {
		service.insert(dealTicketRequest);
	}
}
