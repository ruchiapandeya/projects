package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.VolSurface;
import com.invenio.service.admin.VolSurfaceService;

@Path("/vol-surface")
@Service
public class VolSurfaceController extends
		AbstractController<VolSurface, com.invenio.dao.entity.admin.VolSurface, Integer, VolSurfaceService> {

	@Autowired
	public VolSurfaceController(VolSurfaceService service) {
		super("vol-surface", service);
	}
}
