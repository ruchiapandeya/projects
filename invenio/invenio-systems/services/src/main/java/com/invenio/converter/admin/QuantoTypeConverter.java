package com.invenio.converter.admin;

import org.dozer.Mapper;
import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.QuantoType;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

@Component
public class QuantoTypeConverter extends AbstractConverter<QuantoType, com.invenio.dao.entity.admin.QuantoType> {

	@Autowired
	public QuantoTypeConverter(Mapper mapper) {
		super(mapper, QuantoType.class, com.invenio.dao.entity.admin.QuantoType.class);
	}
}
