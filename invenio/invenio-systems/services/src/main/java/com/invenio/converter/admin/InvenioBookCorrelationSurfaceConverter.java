package com.invenio.converter.admin;

import org.dozer.Mapper;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.InvenioBookCorrelationSurface;

@Component
public class InvenioBookCorrelationSurfaceConverter extends AbstractConverter<InvenioBookCorrelationSurface, com.invenio.dao.entity.admin.InvenioBookCorrelationSurface> {

	@Autowired
	public InvenioBookCorrelationSurfaceConverter(Mapper mapper) {
		super(mapper, InvenioBookCorrelationSurface.class, com.invenio.dao.entity.admin.InvenioBookCorrelationSurface.class);
	}
}
