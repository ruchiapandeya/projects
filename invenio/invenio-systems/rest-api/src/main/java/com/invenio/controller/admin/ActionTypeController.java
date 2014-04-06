package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.ActionType;
import com.invenio.service.admin.ActionTypeService;

@Path("/action")
@Service
public class ActionTypeController extends
		AbstractController<ActionType, com.invenio.dao.entity.admin.ActionType, Integer, ActionTypeService> {

	@Autowired
	public ActionTypeController(ActionTypeService service) {
		super("action", service);
	}
}
