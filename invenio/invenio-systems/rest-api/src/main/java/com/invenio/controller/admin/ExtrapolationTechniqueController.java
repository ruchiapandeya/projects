package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.ExtrapolationTechnique;
import com.invenio.service.admin.ExtrapolationTechniqueService;

@Path("/extrapolation-technique")
@Service
public class ExtrapolationTechniqueController extends
		AbstractController<ExtrapolationTechnique, com.invenio.dao.entity.admin.ExtrapolationTechnique, Integer, ExtrapolationTechniqueService> {

	@Autowired
	public ExtrapolationTechniqueController(ExtrapolationTechniqueService service) {
		super("extrapolation-technique", service);
	}
}
