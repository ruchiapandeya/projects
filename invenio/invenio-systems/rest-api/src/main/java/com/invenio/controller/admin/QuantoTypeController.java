package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.QuantoType;
import com.invenio.service.admin.QuantoTypeService;

@Path("/quanto-type")
@Service
public class QuantoTypeController extends
		AbstractController<QuantoType, com.invenio.dao.entity.admin.QuantoType, Integer, QuantoTypeService> {

	@Autowired
	public QuantoTypeController(QuantoTypeService service) {
		super("quanto-type", service);
	}
}
