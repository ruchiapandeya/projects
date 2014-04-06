package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.OptionContract;
import com.invenio.service.admin.OptionContractService;

@Path("/option-contract")
@Service
public class OptionContractController extends
		AbstractController<OptionContract, com.invenio.dao.entity.admin.OptionContract, Integer, OptionContractService> {

	@Autowired
	public OptionContractController(OptionContractService service) {
		super("option-contract", service);
	}
}
