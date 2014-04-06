package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.AveragingFrequency;
import com.invenio.service.admin.AveragingFrequencyService;

@Path("/averaging-frequency")
@Service
public class AveragingFrequencyController extends
		AbstractController<AveragingFrequency, com.invenio.dao.entity.admin.AveragingFrequency, Integer, AveragingFrequencyService> {

	@Autowired
	public AveragingFrequencyController(AveragingFrequencyService service) {
		super("averaging-frequency", service);
	}
}
