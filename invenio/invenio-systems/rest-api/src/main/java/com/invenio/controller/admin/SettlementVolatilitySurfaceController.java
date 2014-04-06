package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.SettlementVolatilitySurface;
import com.invenio.service.admin.SettlementVolatilitySurfaceService;

@Path("/settlement-volatility-surface")
@Service
public class SettlementVolatilitySurfaceController extends
		AbstractController<SettlementVolatilitySurface, com.invenio.dao.entity.admin.SettlementVolatilitySurface, Integer, SettlementVolatilitySurfaceService> {

	@Autowired
	public SettlementVolatilitySurfaceController(SettlementVolatilitySurfaceService service) {
		super("settlement-volatility-surface", service);
	}
}
