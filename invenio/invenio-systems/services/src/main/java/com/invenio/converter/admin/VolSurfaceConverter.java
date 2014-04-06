package com.invenio.converter.admin;

import org.dozer.Mapper;
import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.VolSurface;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

@Component
public class VolSurfaceConverter extends AbstractConverter<VolSurface, com.invenio.dao.entity.admin.VolSurface> {

	@Autowired
	public VolSurfaceConverter(Mapper mapper) {
		super(mapper, VolSurface.class, com.invenio.dao.entity.admin.VolSurface.class);
	}
}
