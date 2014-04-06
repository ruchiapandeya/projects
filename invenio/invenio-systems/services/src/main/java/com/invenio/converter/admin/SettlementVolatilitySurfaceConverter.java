package com.invenio.converter.admin;

import org.dozer.Mapper;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.SettlementVolatilitySurface;

@Component
public class SettlementVolatilitySurfaceConverter extends AbstractConverter<SettlementVolatilitySurface, com.invenio.dao.entity.admin.SettlementVolatilitySurface> {

	@Autowired
	public SettlementVolatilitySurfaceConverter(Mapper mapper) {
		super(mapper, SettlementVolatilitySurface.class, com.invenio.dao.entity.admin.SettlementVolatilitySurface.class);
	}
}
