package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.SubPortfolio;
import com.invenio.service.admin.SubPortfolioService;

@Path("/sub-portfolio")
@Service
public class SubPortfolioController extends
		AbstractController<SubPortfolio, com.invenio.dao.entity.admin.SubPortfolio, Integer, SubPortfolioService> {

	@Autowired
	public SubPortfolioController(SubPortfolioService service) {
		super("sub-portfolio", service);
	}
}
