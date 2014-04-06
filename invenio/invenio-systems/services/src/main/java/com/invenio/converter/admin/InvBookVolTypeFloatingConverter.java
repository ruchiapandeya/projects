package com.invenio.converter.admin;

import org.dozer.Mapper;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.InvBookVolTypeFloating;

@Component
public class InvBookVolTypeFloatingConverter extends AbstractConverter<InvBookVolTypeFloating, com.invenio.dao.entity.admin.InvBookVolTypeFloating> {

	@Autowired
	public InvBookVolTypeFloatingConverter(Mapper mapper) {
		super(mapper, InvBookVolTypeFloating.class, com.invenio.dao.entity.admin.InvBookVolTypeFloating.class);
	}
}
