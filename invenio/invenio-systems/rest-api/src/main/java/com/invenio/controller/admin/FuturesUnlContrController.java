package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.FuturesUnlContr;
import com.invenio.service.admin.FuturesUnlContrService;

@Path("/futures-unl-contr")
@Service
public class FuturesUnlContrController extends
		AbstractController<FuturesUnlContr, com.invenio.dao.entity.admin.FuturesUnlContr, Integer, FuturesUnlContrService> {

	@Autowired
	public FuturesUnlContrController(FuturesUnlContrService service) {
		super("futures-unl-contr", service);
	}
}
