package com.invenio.converter.admin;

import org.dozer.Mapper;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.ActionType;

@Component
public class ActionTypeConverter extends AbstractConverter<ActionType, com.invenio.dao.entity.admin.ActionType> {

	@Autowired
	public ActionTypeConverter(Mapper mapper) {
		super(mapper, ActionType.class, com.invenio.dao.entity.admin.ActionType.class);
	}
}
