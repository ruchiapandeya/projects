package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.ExchangeMaster;
import com.invenio.service.admin.ExchangeMasterService;

@Path("/exchange-master")
@Service
public class ExchangeMasterController extends
		AbstractController<ExchangeMaster, com.invenio.dao.entity.admin.ExchangeMaster, Integer, ExchangeMasterService> {

	@Autowired
	public ExchangeMasterController(ExchangeMasterService service) {
		super("exchange-master", service);
	}
}
