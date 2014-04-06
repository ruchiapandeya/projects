package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.BloombergProduct;
import com.invenio.service.admin.BloombergProductService;

@Path("/bloomberg-product")
@Service
public class BloombergProductController extends
		AbstractController<BloombergProduct, com.invenio.dao.entity.admin.BloombergProduct, Integer, BloombergProductService> {

	@Autowired
	public BloombergProductController(BloombergProductService service) {
		super("bloomberg-product", service);
	}
}
