package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.ExecutionType;
import com.invenio.service.admin.ExecutionTypeService;

@Path("/execution-type")
@Service
public class ExecutionTypeController extends
		AbstractController<ExecutionType, com.invenio.dao.entity.admin.ExecutionType, Integer, ExecutionTypeService> {

	@Autowired
	public ExecutionTypeController(ExecutionTypeService service) {
		super("execution-type", service);
	}
}
