package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.AtmConventionForExpiry;
import com.invenio.service.admin.AtmConventionForExpiryService;

@Path("/atm-convention-for-expiry")
@Service
public class AtmConventionForExpiryController extends
		AbstractController<AtmConventionForExpiry, com.invenio.dao.entity.admin.AtmConventionForExpiry, Integer, AtmConventionForExpiryService> {

	@Autowired
	public AtmConventionForExpiryController(AtmConventionForExpiryService service) {
		super("atm-convention-for-expiry", service);
	}
}
