package com.invenio.converter.admin;

import org.dozer.Mapper;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.ExchangeCallsign;

@Component
public class ExchangeCallsignConverter extends AbstractConverter<ExchangeCallsign, com.invenio.dao.entity.admin.ExchangeCallsign> {

	@Autowired
	public ExchangeCallsignConverter(Mapper mapper) {
		super(mapper, ExchangeCallsign.class, com.invenio.dao.entity.admin.ExchangeCallsign.class);
	}
}
