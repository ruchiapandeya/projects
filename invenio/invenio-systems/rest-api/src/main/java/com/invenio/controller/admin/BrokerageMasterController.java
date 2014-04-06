package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.BrokerageMaster;
import com.invenio.service.admin.BrokerageMasterService;

@Path("/brokerage-master")
@Service
public class BrokerageMasterController extends
		AbstractController<BrokerageMaster, com.invenio.dao.entity.admin.BrokerageMaster, Integer, BrokerageMasterService> {

	@Autowired
	public BrokerageMasterController(BrokerageMasterService service) {
		super("brokerage-master", service);
	}
}
