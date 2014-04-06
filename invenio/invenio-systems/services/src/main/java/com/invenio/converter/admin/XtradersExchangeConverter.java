package com.invenio.converter.admin;

import org.dozer.Mapper;
import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.XtradersExchange;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

@Component
public class XtradersExchangeConverter extends AbstractConverter<XtradersExchange, com.invenio.dao.entity.admin.XtradersExchange> {

	@Autowired
	public XtradersExchangeConverter(Mapper mapper) {
		super(mapper, XtradersExchange.class, com.invenio.dao.entity.admin.XtradersExchange.class);
	}
}
