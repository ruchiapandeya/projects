package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.Exchange;
import com.invenio.service.admin.ExchangeService;

@Path("/exchange")
@Service
public class ExchangeController extends
		AbstractController<Exchange, com.invenio.dao.entity.admin.Exchange, Integer, ExchangeService> {

	@Autowired
	public ExchangeController(ExchangeService service) {
		super("exchange", service);
	}
}
