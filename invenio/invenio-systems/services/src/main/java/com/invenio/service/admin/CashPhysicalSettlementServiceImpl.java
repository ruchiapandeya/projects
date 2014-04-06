package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.CashPhysicalSettlementConverter;
import com.invenio.dao.repository.admin.CashPhysicalSettlementRepository;
import com.invenio.schema.beans.admin.CashPhysicalSettlement;
import com.invenio.service.AbstractPersistenceService;

@Service
public class CashPhysicalSettlementServiceImpl extends AbstractPersistenceService<CashPhysicalSettlement, CashPhysicalSettlementConverter, com.invenio.dao.entity.admin.CashPhysicalSettlement, Integer, CashPhysicalSettlementRepository>
		implements CashPhysicalSettlementService {

	@Autowired
	public CashPhysicalSettlementServiceImpl(CashPhysicalSettlementConverter coverter, CashPhysicalSettlementRepository repository) {
		super(coverter, repository);
	}
}
