package com.invenio.converter.admin;

import org.dozer.Mapper;
import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.Product;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

@Component
public class ProductConverter extends AbstractConverter<Product, com.invenio.dao.entity.admin.Product> {

	@Autowired
	public ProductConverter(Mapper mapper) {
		super(mapper, Product.class, com.invenio.dao.entity.admin.Product.class);
	}
}
