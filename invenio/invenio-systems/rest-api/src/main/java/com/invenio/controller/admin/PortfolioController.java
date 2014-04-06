package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.Portfolio;
import com.invenio.service.admin.PortfolioService;

@Path("/portfolio")
@Service
public class PortfolioController extends
		AbstractController<Portfolio, com.invenio.dao.entity.admin.Portfolio, Integer, PortfolioService> {

	@Autowired
	public PortfolioController(PortfolioService service) {
		super("portfolio", service);
	}
}
