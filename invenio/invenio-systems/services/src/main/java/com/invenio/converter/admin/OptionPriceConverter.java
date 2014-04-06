package com.invenio.converter.admin;

import org.dozer.Mapper;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.OptionPrice;

@Component
public class OptionPriceConverter extends AbstractConverter<OptionPrice, com.invenio.dao.entity.admin.OptionPrice> {

	@Autowired
	public OptionPriceConverter(Mapper mapper) {
		super(mapper, OptionPrice.class, com.invenio.dao.entity.admin.OptionPrice.class);
	}
}
