package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.IntrapolationTechnique;
import com.invenio.service.admin.IntrapolationTechniqueService;

@Path("/intrapolation-technique")
@Service
public class IntrapolationTechniqueController extends
		AbstractController<IntrapolationTechnique, com.invenio.dao.entity.admin.IntrapolationTechnique, Integer, IntrapolationTechniqueService> {

	@Autowired
	public IntrapolationTechniqueController(IntrapolationTechniqueService service) {
		super("intrapolation-technique", service);
	}
}
