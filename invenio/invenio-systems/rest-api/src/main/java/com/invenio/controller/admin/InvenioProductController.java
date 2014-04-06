package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.InvenioProduct;
import com.invenio.service.admin.InvenioProductService;

@Path("/invenio-product")
@Service
public class InvenioProductController extends
		AbstractController<InvenioProduct, com.invenio.dao.entity.admin.InvenioProduct, Integer, InvenioProductService> {

	@Autowired
	public InvenioProductController(InvenioProductService service) {
		super("invenio-product", service);
	}
}
