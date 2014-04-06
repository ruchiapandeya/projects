package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.BbgOvdvMoneynesswise;
import com.invenio.service.admin.BbgOvdvMoneynesswiseService;

@Path("/bbg-ovdv-moneynesswise")
@Service
public class BbgOvdvMoneynesswiseController extends
		AbstractController<BbgOvdvMoneynesswise, com.invenio.dao.entity.admin.BbgOvdvMoneynesswise, Integer, BbgOvdvMoneynesswiseService> {

	@Autowired
	public BbgOvdvMoneynesswiseController(BbgOvdvMoneynesswiseService service) {
		super("bbg-ovdv-moneynesswise", service);
	}
}
