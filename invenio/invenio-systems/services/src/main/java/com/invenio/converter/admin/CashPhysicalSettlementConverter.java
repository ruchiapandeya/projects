package com.invenio.converter.admin;

import org.dozer.Mapper;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.CashPhysicalSettlement;

@Component
public class CashPhysicalSettlementConverter extends AbstractConverter<CashPhysicalSettlement, com.invenio.dao.entity.admin.CashPhysicalSettlement> {

	@Autowired
	public CashPhysicalSettlementConverter(Mapper mapper) {
		super(mapper, CashPhysicalSettlement.class, com.invenio.dao.entity.admin.CashPhysicalSettlement.class);
	}
}
