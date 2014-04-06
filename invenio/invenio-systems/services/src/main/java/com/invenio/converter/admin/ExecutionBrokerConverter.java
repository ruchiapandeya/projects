package com.invenio.converter.admin;

import org.dozer.Mapper;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.ExecutionBroker;

@Component
public class ExecutionBrokerConverter extends AbstractConverter<ExecutionBroker, com.invenio.dao.entity.admin.ExecutionBroker> {

	@Autowired
	public ExecutionBrokerConverter(Mapper mapper) {
		super(mapper, ExecutionBroker.class, com.invenio.dao.entity.admin.ExecutionBroker.class);
	}
}
