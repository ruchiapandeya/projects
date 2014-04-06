package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.FuturesRjo;
import com.invenio.service.admin.FuturesRjoService;

@Path("/futures-rjo")
@Service
public class FuturesRjoController extends
		AbstractController<FuturesRjo, com.invenio.dao.entity.admin.FuturesRjo, Integer, FuturesRjoService> {

	@Autowired
	public FuturesRjoController(FuturesRjoService service) {
		super("futures-rjo", service);
	}
}
