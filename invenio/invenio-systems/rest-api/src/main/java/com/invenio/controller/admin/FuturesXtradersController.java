package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.FuturesXtrader;
import com.invenio.service.admin.FuturesXtraderService;

@Path("/futures-xtrader")
@Service
public class FuturesXtradersController extends
		AbstractController<FuturesXtrader, com.invenio.dao.entity.admin.FuturesXtrader, Integer, FuturesXtraderService> {

	@Autowired
	public FuturesXtradersController(FuturesXtraderService service) {
		super("futures-xtrader", service);
	}
}
