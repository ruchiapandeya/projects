package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.XtradersExchange;
import com.invenio.service.admin.XtradersExchangeService;

@Path("/xtraders-exchange")
@Service
public class XtradersExchangeController extends
		AbstractController<XtradersExchange, com.invenio.dao.entity.admin.XtradersExchange, Integer, XtradersExchangeService> {

	@Autowired
	public XtradersExchangeController(XtradersExchangeService service) {
		super("xtraders-exchange", service);
	}
}
