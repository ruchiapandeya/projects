package com.invenio.converter.admin;

import org.dozer.Mapper;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.InvBookVolTypeSel;

@Component
public class InvBookVolTypeSelConverter extends AbstractConverter<InvBookVolTypeSel, com.invenio.dao.entity.admin.InvBookVolTypeSel> {

	@Autowired
	public InvBookVolTypeSelConverter(Mapper mapper) {
		super(mapper, InvBookVolTypeSel.class, com.invenio.dao.entity.admin.InvBookVolTypeSel.class);
	}
}
