package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.InvBookVolTypeFloating;
import com.invenio.service.admin.InvBookVolTypeFloatingService;

@Path("/inv-book-vol-type-floating")
@Service
public class InvBookVolTypeFloatingController extends
		AbstractController<InvBookVolTypeFloating, com.invenio.dao.entity.admin.InvBookVolTypeFloating, Integer, InvBookVolTypeFloatingService> {

	@Autowired
	public InvBookVolTypeFloatingController(InvBookVolTypeFloatingService service) {
		super("inv-book-vol-type-floating", service);
	}
}
