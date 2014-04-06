package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.ExecutionBroker;
import com.invenio.service.admin.ExecutionBrokerService;

@Path("/execution-broker")
@Service
public class ExecutionBrokerController extends
		AbstractController<ExecutionBroker, com.invenio.dao.entity.admin.ExecutionBroker, Integer, ExecutionBrokerService> {

	@Autowired
	public ExecutionBrokerController(ExecutionBrokerService service) {
		super("execution-broker", service);
	}
}
