package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.OptionsXtrader;
import com.invenio.service.admin.OptionsXtraderService;

@Path("/options-xtrader")
@Service
public class OptionsXtraderController extends
		AbstractController<OptionsXtrader, com.invenio.dao.entity.admin.OptionsXtrader, Integer, OptionsXtraderService> {

	@Autowired
	public OptionsXtraderController(OptionsXtraderService service) {
		super("options-xtrader", service);
	}
}
