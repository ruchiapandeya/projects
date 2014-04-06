package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.OptionsRjo;
import com.invenio.service.admin.OptionsRjoService;

@Path("/options-rjo")
@Service
public class OptionsRjoController extends
		AbstractController<OptionsRjo, com.invenio.dao.entity.admin.OptionsRjo, Integer, OptionsRjoService> {

	@Autowired
	public OptionsRjoController(OptionsRjoService service) {
		super("options-rjo", service);
	}
}
