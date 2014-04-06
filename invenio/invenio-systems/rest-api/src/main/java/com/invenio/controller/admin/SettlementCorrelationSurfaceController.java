package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.SettlementCorrelationSurface;
import com.invenio.service.admin.SettlementCorrelationSurfaceService;

@Path("/settlement-correlation-surface")
@Service
public class SettlementCorrelationSurfaceController extends
		AbstractController<SettlementCorrelationSurface, com.invenio.dao.entity.admin.SettlementCorrelationSurface, Integer, SettlementCorrelationSurfaceService> {

	@Autowired
	public SettlementCorrelationSurfaceController(SettlementCorrelationSurfaceService service) {
		super("settlement-correlation-surface", service);
	}
}
