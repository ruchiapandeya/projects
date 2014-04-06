package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.InvenioBookCorrelationSurface;
import com.invenio.service.admin.InvenioBookCorrelationSurfaceService;

@Path("/invenio-book-correlation-surface")
@Service
public class InvenioBookCorrelationSurfaceController extends
		AbstractController<InvenioBookCorrelationSurface, com.invenio.dao.entity.admin.InvenioBookCorrelationSurface, Integer, InvenioBookCorrelationSurfaceService> {

	@Autowired
	public InvenioBookCorrelationSurfaceController(InvenioBookCorrelationSurfaceService service) {
		super("invenio-book-correlation-surface", service);
	}
}
