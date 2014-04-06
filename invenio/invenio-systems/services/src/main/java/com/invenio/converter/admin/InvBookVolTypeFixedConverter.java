package com.invenio.converter.admin;

import org.dozer.Mapper;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.InvBookVolTypeFixed;

@Component
public class InvBookVolTypeFixedConverter extends AbstractConverter<InvBookVolTypeFixed, com.invenio.dao.entity.admin.InvBookVolTypeFixed> {

	@Autowired
	public InvBookVolTypeFixedConverter(Mapper mapper) {
		super(mapper, InvBookVolTypeFixed.class, com.invenio.dao.entity.admin.InvBookVolTypeFixed.class);
	}
}
