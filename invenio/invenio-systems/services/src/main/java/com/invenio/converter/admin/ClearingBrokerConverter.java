package com.invenio.converter.admin;

import org.dozer.Mapper;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.ClearingBroker;

@Component
public class ClearingBrokerConverter extends AbstractConverter<ClearingBroker, com.invenio.dao.entity.admin.ClearingBroker> {

	@Autowired
	public ClearingBrokerConverter(Mapper mapper) {
		super(mapper, ClearingBroker.class, com.invenio.dao.entity.admin.ClearingBroker.class);
	}
}
