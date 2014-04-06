package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.InvBookVolTypeFixed;
import com.invenio.service.admin.InvBookVolTypeFixedService;

@Path("/inv-book-vol-type-fixed")
@Service
public class InvBookVolTypeFixedController extends
		AbstractController<InvBookVolTypeFixed, com.invenio.dao.entity.admin.InvBookVolTypeFixed, Integer, InvBookVolTypeFixedService> {

	@Autowired
	public InvBookVolTypeFixedController(InvBookVolTypeFixedService service) {
		super("inv-book-vol-type-fixed", service);
	}
}
