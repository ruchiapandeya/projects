package com.invenio.converter.admin;

import org.dozer.Mapper;
import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.FuturesUnlContr;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

@Component
public class FuturesUnlContrConverter extends AbstractConverter<FuturesUnlContr, com.invenio.dao.entity.admin.FuturesUnlContr> {

	@Autowired
	public FuturesUnlContrConverter(Mapper mapper) {
		super(mapper, FuturesUnlContr.class, com.invenio.dao.entity.admin.FuturesUnlContr.class);
	}
}
