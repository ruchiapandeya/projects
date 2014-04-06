package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.ExchangeCallsign;
import com.invenio.service.admin.ExchangeCallsignService;

@Path("/exchange-callsign")
@Service
public class ExchangeCallsignController extends
		AbstractController<ExchangeCallsign, com.invenio.dao.entity.admin.ExchangeCallsign, Integer, ExchangeCallsignService> {

	@Autowired
	public ExchangeCallsignController(ExchangeCallsignService service) {
		super("exchange-callsign", service);
	}
}
