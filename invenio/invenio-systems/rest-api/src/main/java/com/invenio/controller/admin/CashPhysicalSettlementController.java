package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.CashPhysicalSettlement;
import com.invenio.service.admin.CashPhysicalSettlementService;

@Path("/cash-physical-settlement")
@Service
public class CashPhysicalSettlementController extends
		AbstractController<CashPhysicalSettlement, com.invenio.dao.entity.admin.CashPhysicalSettlement, Integer, CashPhysicalSettlementService> {

	@Autowired
	public CashPhysicalSettlementController(CashPhysicalSettlementService service) {
		super("cash-physical-settlement", service);
	}
}
