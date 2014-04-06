package com.invenio.converter.admin;

import org.dozer.Mapper;
import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.MurexExchange;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

@Component
public class MurexExchangeConverter extends AbstractConverter<MurexExchange, com.invenio.dao.entity.admin.MurexExchange> {

	@Autowired
	public MurexExchangeConverter(Mapper mapper) {
		super(mapper, MurexExchange.class, com.invenio.dao.entity.admin.MurexExchange.class);
	}
}
