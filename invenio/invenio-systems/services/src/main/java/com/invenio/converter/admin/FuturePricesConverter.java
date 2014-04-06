package com.invenio.converter.admin;

import org.dozer.Mapper;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.FuturePrices;

@Component
public class FuturePricesConverter extends AbstractConverter<FuturePrices, com.invenio.dao.entity.admin.FuturePrices> {

	@Autowired
	public FuturePricesConverter(Mapper mapper) {
		super(mapper, FuturePrices.class, com.invenio.dao.entity.admin.FuturePrices.class);
	}
}
