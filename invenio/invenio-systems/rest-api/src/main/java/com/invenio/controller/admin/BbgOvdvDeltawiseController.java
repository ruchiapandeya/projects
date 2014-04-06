package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.BbgOvdvDeltawise;
import com.invenio.service.admin.BbgOvdvDeltawiseService;

@Path("/bbg-ovdv-deltawise")
@Service
public class BbgOvdvDeltawiseController extends
		AbstractController<BbgOvdvDeltawise, com.invenio.dao.entity.admin.BbgOvdvDeltawise, Integer, BbgOvdvDeltawiseService> {

	@Autowired
	public BbgOvdvDeltawiseController(BbgOvdvDeltawiseService service) {
		super("bbg-ovdv-deltawise", service);
	}
}
