package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.Frequency;
import com.invenio.service.admin.FrequencyService;

@Path("/frequency")
@Service
public class FrequencyController extends
		AbstractController<Frequency, com.invenio.dao.entity.admin.Frequency, Integer, FrequencyService> {

	@Autowired
	public FrequencyController(FrequencyService service) {
		super("frequency", service);
	}
}
