package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.BrokerageCallsign;
import com.invenio.service.admin.BrokerageCallsignService;

@Path("/brokerage-callsign")
@Service
public class BrokerageCallsignController extends
		AbstractController<BrokerageCallsign, com.invenio.dao.entity.admin.BrokerageCallsign, Integer, BrokerageCallsignService> {

	@Autowired
	public BrokerageCallsignController(BrokerageCallsignService service) {
		super("brokerage-callsign", service);
	}
}
