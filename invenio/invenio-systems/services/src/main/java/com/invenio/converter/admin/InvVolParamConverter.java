package com.invenio.converter.admin;

import org.dozer.Mapper;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.InvVolParam;

@Component
public class InvVolParamConverter extends AbstractConverter<InvVolParam, com.invenio.dao.entity.admin.InvVolParam> {

	@Autowired
	public InvVolParamConverter(Mapper mapper) {
		super(mapper, InvVolParam.class, com.invenio.dao.entity.admin.InvVolParam.class);
	}
}
