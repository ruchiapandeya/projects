package com.invenio.converter.admin;

import org.dozer.Mapper;
import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.RjoExchange;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

@Component
public class RjoExchangeConverter extends AbstractConverter<RjoExchange, com.invenio.dao.entity.admin.RjoExchange> {

	@Autowired
	public RjoExchangeConverter(Mapper mapper) {
		super(mapper, RjoExchange.class, com.invenio.dao.entity.admin.RjoExchange.class);
	}
}
