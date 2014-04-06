package com.invenio.controller.admin;

import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.Instrument;
import com.invenio.service.admin.InstrumentService;

@Path("/instrument")
@Service
public class InstrumentController extends
		AbstractController<Instrument, com.invenio.dao.entity.admin.Instrument, Integer, InstrumentService> {

	@Autowired
	public InstrumentController(InstrumentService service) {
		super("instrument", service);
	}
}
