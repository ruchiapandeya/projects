package com.invenio.converter.admin;

import org.dozer.Mapper;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.SubPortfolio;

@Component
public class SubPortfolioConverter extends AbstractConverter<SubPortfolio, com.invenio.dao.entity.admin.SubPortfolio> {

	@Autowired
	public SubPortfolioConverter(Mapper mapper) {
		super(mapper, SubPortfolio.class, com.invenio.dao.entity.admin.SubPortfolio.class);
	}
}
