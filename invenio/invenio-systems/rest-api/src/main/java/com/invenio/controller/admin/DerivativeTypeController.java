package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.DerivativeType;
import com.invenio.service.admin.DerivativeTypeService;

@Path("/derivative-type")
@Service
public class DerivativeTypeController extends
		AbstractController<DerivativeType, com.invenio.dao.entity.admin.DerivativeType, Integer, DerivativeTypeService> {

	@Autowired
	public DerivativeTypeController(DerivativeTypeService service) {
		super("derivative-type", service);
	}
}
