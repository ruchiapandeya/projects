package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.OptionsUnlContr;
import com.invenio.service.admin.OptionsUnlContrService;

@Path("/options-unl-contr")
@Service
public class OptionsUnlContrController extends
		AbstractController<OptionsUnlContr, com.invenio.dao.entity.admin.OptionsUnlContr, Integer, OptionsUnlContrService> {

	@Autowired
	public OptionsUnlContrController(OptionsUnlContrService service) {
		super("options-unl-contr", service);
	}
}
