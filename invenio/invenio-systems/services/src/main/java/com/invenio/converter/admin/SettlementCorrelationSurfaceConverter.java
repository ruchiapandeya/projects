package com.invenio.converter.admin;

import org.dozer.Mapper;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.SettlementCorrelationSurface;

@Component
public class SettlementCorrelationSurfaceConverter extends AbstractConverter<SettlementCorrelationSurface, com.invenio.dao.entity.admin.SettlementCorrelationSurface> {

	@Autowired
	public SettlementCorrelationSurfaceConverter(Mapper mapper) {
		super(mapper, SettlementCorrelationSurface.class, com.invenio.dao.entity.admin.SettlementCorrelationSurface.class);
	}
}
