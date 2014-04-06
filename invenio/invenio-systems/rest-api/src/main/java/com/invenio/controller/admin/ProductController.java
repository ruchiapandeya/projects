package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.Product;
import com.invenio.service.admin.ProductService;

@Path("/product")
@Service
public class ProductController extends
		AbstractController<Product, com.invenio.dao.entity.admin.Product, Integer, ProductService> {

	@Autowired
	public ProductController(ProductService service) {
		super("product", service);
	}
}
