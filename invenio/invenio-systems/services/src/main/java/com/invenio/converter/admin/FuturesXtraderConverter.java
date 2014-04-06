package com.invenio.converter.admin;

import org.dozer.Mapper;
import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.FuturesXtrader;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

@Component
public class FuturesXtraderConverter extends AbstractConverter<FuturesXtrader, com.invenio.dao.entity.admin.FuturesXtrader> {

	@Autowired
	public FuturesXtraderConverter(Mapper mapper) {
		super(mapper, FuturesXtrader.class, com.invenio.dao.entity.admin.FuturesXtrader.class);
	}
}
