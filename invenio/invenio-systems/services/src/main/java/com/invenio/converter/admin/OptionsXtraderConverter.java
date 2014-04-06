package com.invenio.converter.admin;

import org.dozer.Mapper;
import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.OptionsXtrader;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

@Component
public class OptionsXtraderConverter extends AbstractConverter<OptionsXtrader, com.invenio.dao.entity.admin.OptionsXtrader> {

	@Autowired
	public OptionsXtraderConverter(Mapper mapper) {
		super(mapper, OptionsXtrader.class, com.invenio.dao.entity.admin.OptionsXtrader.class);
	}
}
