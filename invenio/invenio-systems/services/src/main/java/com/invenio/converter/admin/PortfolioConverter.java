package com.invenio.converter.admin;

import org.dozer.Mapper;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.Portfolio;

@Component
public class PortfolioConverter extends AbstractConverter<Portfolio, com.invenio.dao.entity.admin.Portfolio> {

	@Autowired
	public PortfolioConverter(Mapper mapper) {
		super(mapper, Portfolio.class, com.invenio.dao.entity.admin.Portfolio.class);
	}
}
