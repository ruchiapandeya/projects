package com.invenio.converter.admin;

import org.dozer.Mapper;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.BloombergProduct;

@Component
public class BloombergProductConverter extends AbstractConverter<BloombergProduct, com.invenio.dao.entity.admin.BloombergProduct> {

	@Autowired
	public BloombergProductConverter(Mapper mapper) {
		super(mapper, BloombergProduct.class, com.invenio.dao.entity.admin.BloombergProduct.class);
	}
}
