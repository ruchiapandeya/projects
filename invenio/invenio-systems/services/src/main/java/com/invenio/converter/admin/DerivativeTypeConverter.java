package com.invenio.converter.admin;

import org.dozer.Mapper;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.DerivativeType;

@Component
public class DerivativeTypeConverter extends AbstractConverter<DerivativeType, com.invenio.dao.entity.admin.DerivativeType> {

	@Autowired
	public DerivativeTypeConverter(Mapper mapper) {
		super(mapper, DerivativeType.class, com.invenio.dao.entity.admin.DerivativeType.class);
	}
}
