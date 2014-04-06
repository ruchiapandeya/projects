package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.ClearingBroker;
import com.invenio.service.admin.ClearingBrokerService;

@Path("/clearing-broker")
@Service
public class ClearingBrokerController extends
		AbstractController<ClearingBroker, com.invenio.dao.entity.admin.ClearingBroker, Integer, ClearingBrokerService> {

	@Autowired
	public ClearingBrokerController(ClearingBrokerService service) {
		super("clearing-broker", service);
	}
}
