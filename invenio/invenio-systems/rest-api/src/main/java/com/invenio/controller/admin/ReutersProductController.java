package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.ReutersProduct;
import com.invenio.service.admin.ReutersProductService;

@Path("/reuters-product")
@Service
public class ReutersProductController extends
		AbstractController<ReutersProduct, com.invenio.dao.entity.admin.ReutersProduct, Integer, ReutersProductService> {

	@Autowired
	public ReutersProductController(ReutersProductService service) {
		super("reuters-product", service);
	}
}
