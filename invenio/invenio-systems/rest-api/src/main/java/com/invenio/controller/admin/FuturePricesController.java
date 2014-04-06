package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.FuturePrices;
import com.invenio.service.admin.FuturePricesService;

@Path("/future-prices")
@Service
public class FuturePricesController extends
		AbstractController<FuturePrices, com.invenio.dao.entity.admin.FuturePrices, Integer, FuturePricesService> {

	@Autowired
	public FuturePricesController(FuturePricesService service) {
		super("future-prices", service);
	}
}
