package com.invenio.converter.admin;

import org.dozer.Mapper;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.BrokerageCallsign;

@Component
public class BrokerageCallsignConverter extends AbstractConverter<BrokerageCallsign, com.invenio.dao.entity.admin.BrokerageCallsign> {

	@Autowired
	public BrokerageCallsignConverter(Mapper mapper) {
		super(mapper, BrokerageCallsign.class, com.invenio.dao.entity.admin.BrokerageCallsign.class);
	}
}
