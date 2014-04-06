package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.Access;
import com.invenio.service.admin.AccessService;

@Path("/access")
@Service
public class AccessController extends
		AbstractController<Access, com.invenio.dao.entity.admin.Access, Integer, AccessService> {

	@Autowired
	public AccessController(AccessService service) {
		super("access", service);
	}
}
