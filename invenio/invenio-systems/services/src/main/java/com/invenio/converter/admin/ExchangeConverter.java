package com.invenio.converter.admin;

import org.dozer.Mapper;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.Exchange;

@Component
public class ExchangeConverter extends AbstractConverter<Exchange, com.invenio.dao.entity.admin.Exchange> {

	@Autowired
	public ExchangeConverter(Mapper mapper) {
		super(mapper, Exchange.class, com.invenio.dao.entity.admin.Exchange.class);
	}
}
