package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.InvVolParam;
import com.invenio.service.admin.InvVolParamService;

@Path("/invenio-vol-param")
@Service
public class InvVolParamController extends
		AbstractController<InvVolParam, com.invenio.dao.entity.admin.InvVolParam, Integer, InvVolParamService> {

	@Autowired
	public InvVolParamController(InvVolParamService service) {
		super("invenio-vol-param", service);
	}
}
