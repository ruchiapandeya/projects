package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.VolSurfaceGreeks;
import com.invenio.service.admin.VolSurfaceGreeksService;

@Path("/vol-surface-greeks")
@Service
public class VolSurfaceGreeksController extends
		AbstractController<VolSurfaceGreeks, com.invenio.dao.entity.admin.VolSurfaceGreeks, Integer, VolSurfaceGreeksService> {

	@Autowired
	public VolSurfaceGreeksController(VolSurfaceGreeksService service) {
		super("vol-surface-greeks", service);
	}
}
