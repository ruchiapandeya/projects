package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.AccumulationFrequency;
import com.invenio.service.admin.AccumulationFrequencyService;

@Path("/accumulation-frequency")
@Service
public class AccumulationFrequencyController extends
		AbstractController<AccumulationFrequency, com.invenio.dao.entity.admin.AccumulationFrequency, Integer, AccumulationFrequencyService> {

	@Autowired
	public AccumulationFrequencyController(AccumulationFrequencyService service) {
		super("accumulation-frequency", service);
	}
}
