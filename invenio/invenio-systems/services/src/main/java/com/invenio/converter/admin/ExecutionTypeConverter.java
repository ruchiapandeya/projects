package com.invenio.converter.admin;

import org.dozer.Mapper;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.ExecutionType;

@Component
public class ExecutionTypeConverter extends AbstractConverter<ExecutionType, com.invenio.dao.entity.admin.ExecutionType> {

	@Autowired
	public ExecutionTypeConverter(Mapper mapper) {
		super(mapper, ExecutionType.class, com.invenio.dao.entity.admin.ExecutionType.class);
	}
}
