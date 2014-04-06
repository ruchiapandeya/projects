package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.VolDump;
import com.invenio.service.admin.VolDumpService;

@Path("/vol-dump")
@Service
public class VolDumpController extends
		AbstractController<VolDump, com.invenio.dao.entity.admin.VolDump, Integer, VolDumpService> {

	@Autowired
	public VolDumpController(VolDumpService service) {
		super("vol-dump", service);
	}
}
