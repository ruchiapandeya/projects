package com.invenio.converter.admin;

import org.dozer.Mapper;
import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.FuturesRjo;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

@Component
public class FuturesRjoConverter extends AbstractConverter<FuturesRjo, com.invenio.dao.entity.admin.FuturesRjo> {

	@Autowired
	public FuturesRjoConverter(Mapper mapper) {
		super(mapper, FuturesRjo.class, com.invenio.dao.entity.admin.FuturesRjo.class);
	}
}
