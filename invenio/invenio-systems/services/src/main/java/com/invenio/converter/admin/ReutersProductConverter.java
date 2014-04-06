package com.invenio.converter.admin;

import org.dozer.Mapper;
import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.ReutersProduct;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

@Component
public class ReutersProductConverter extends AbstractConverter<ReutersProduct, com.invenio.dao.entity.admin.ReutersProduct> {

	@Autowired
	public ReutersProductConverter(Mapper mapper) {
		super(mapper, ReutersProduct.class, com.invenio.dao.entity.admin.ReutersProduct.class);
	}
}
