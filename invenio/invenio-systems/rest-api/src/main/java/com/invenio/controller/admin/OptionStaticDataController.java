package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.OptionStaticData;
import com.invenio.service.admin.OptionStaticDataService;

@Path("/option-static-data")
@Service
public class OptionStaticDataController extends
		AbstractController<OptionStaticData, com.invenio.dao.entity.admin.OptionStaticData, Integer, OptionStaticDataService> {

	@Autowired
	public OptionStaticDataController(OptionStaticDataService service) {
		super("option-static-data", service);
	}
}
