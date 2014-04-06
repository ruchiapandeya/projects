package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.RjoExchange;
import com.invenio.service.admin.RjoExchangeService;

@Path("/rjo-exchange")
@Service
public class RjoExchangeController extends
		AbstractController<RjoExchange, com.invenio.dao.entity.admin.RjoExchange, Integer, RjoExchangeService> {

	@Autowired
	public RjoExchangeController(RjoExchangeService service) {
		super("rjo-exchange", service);
	}
}
