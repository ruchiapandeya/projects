package com.invenio.converter.admin;

import org.dozer.Mapper;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.BbgOvdvDeltawise;

@Component
public class BbgOvdvDeltawiseConverter extends AbstractConverter<BbgOvdvDeltawise, com.invenio.dao.entity.admin.BbgOvdvDeltawise> {

	@Autowired
	public BbgOvdvDeltawiseConverter(Mapper mapper) {
		super(mapper, BbgOvdvDeltawise.class, com.invenio.dao.entity.admin.BbgOvdvDeltawise.class);
	}
}
