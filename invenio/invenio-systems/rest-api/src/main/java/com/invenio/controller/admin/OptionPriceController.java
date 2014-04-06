package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.OptionPrice;
import com.invenio.service.admin.OptionPriceService;

@Path("/option-price")
@Service
public class OptionPriceController extends
		AbstractController<OptionPrice, com.invenio.dao.entity.admin.OptionPrice, Integer, OptionPriceService> {

	@Autowired
	public OptionPriceController(OptionPriceService service) {
		super("option-price", service);
	}
}
