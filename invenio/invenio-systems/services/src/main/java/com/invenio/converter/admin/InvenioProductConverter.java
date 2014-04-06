package com.invenio.converter.admin;

import org.dozer.Mapper;
import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.InvenioProduct;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

@Component
public class InvenioProductConverter extends AbstractConverter<InvenioProduct, com.invenio.dao.entity.admin.InvenioProduct> {

	@Autowired
	public InvenioProductConverter(Mapper mapper) {
		super(mapper, InvenioProduct.class, com.invenio.dao.entity.admin.InvenioProduct.class);
	}
}
