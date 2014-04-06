package com.invenio.converter.admin;

import org.dozer.Mapper;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.AtmConventionForExpiry;

@Component
public class AtmConventionForExpiryConverter extends AbstractConverter<AtmConventionForExpiry, com.invenio.dao.entity.admin.AtmConventionForExpiry> {

	@Autowired
	public AtmConventionForExpiryConverter(Mapper mapper) {
		super(mapper, AtmConventionForExpiry.class, com.invenio.dao.entity.admin.AtmConventionForExpiry.class);
	}
}
