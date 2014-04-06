package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.InvBookVolTypeSel;
import com.invenio.service.admin.InvBookVolTypeSelService;

@Path("/inv-book-vol-type-sel")
@Service
public class InvBookVolTypeSelController extends
		AbstractController<InvBookVolTypeSel, com.invenio.dao.entity.admin.InvBookVolTypeSel, Integer, InvBookVolTypeSelService> {

	@Autowired
	public InvBookVolTypeSelController(InvBookVolTypeSelService service) {
		super("inv-book-vol-type-sel", service);
	}
}
