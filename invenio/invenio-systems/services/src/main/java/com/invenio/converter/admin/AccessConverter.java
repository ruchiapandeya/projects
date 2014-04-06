package com.invenio.converter.admin;

import org.dozer.Mapper;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.Access;

@Component
public class AccessConverter extends AbstractConverter<Access, com.invenio.dao.entity.admin.Access> {

	@Autowired
	public AccessConverter(Mapper mapper) {
		super(mapper, Access.class, com.invenio.dao.entity.admin.Access.class);
	}
}
