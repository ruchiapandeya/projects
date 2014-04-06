package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.MurexExchange;
import com.invenio.service.admin.MurexExchangeService;

@Path("/murex-exchange")
@Service
public class MurexExchangeController extends
		AbstractController<MurexExchange, com.invenio.dao.entity.admin.MurexExchange, Integer, MurexExchangeService> {

	@Autowired
	public MurexExchangeController(MurexExchangeService service) {
		super("murex-exchange", service);
	}
}
