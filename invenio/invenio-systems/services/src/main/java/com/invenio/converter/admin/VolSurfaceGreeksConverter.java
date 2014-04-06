package com.invenio.converter.admin;

import org.dozer.Mapper;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.VolSurfaceGreeks;

@Component
public class VolSurfaceGreeksConverter extends AbstractConverter<VolSurfaceGreeks, com.invenio.dao.entity.admin.VolSurfaceGreeks> {

	@Autowired
	public VolSurfaceGreeksConverter(Mapper mapper) {
		super(mapper, VolSurfaceGreeks.class, com.invenio.dao.entity.admin.VolSurfaceGreeks.class);
	}
}
