package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.FutureContract;
import com.invenio.service.admin.FutureContractService;

@Path("/future-contract")
@Service
public class FutureContractController extends
		AbstractController<FutureContract, com.invenio.dao.entity.admin.FutureContract, Integer, FutureContractService> {

	@Autowired
	public FutureContractController(FutureContractService service) {
		super("future-contract", service);
	}
}
