package com.invenio.converter.admin;

import org.dozer.Mapper;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.BbgOvdvMoneynesswise;

@Component
public class BbgOvdvMoneynesswiseConverter extends AbstractConverter<BbgOvdvMoneynesswise, com.invenio.dao.entity.admin.BbgOvdvMoneynesswise> {

	@Autowired
	public BbgOvdvMoneynesswiseConverter(Mapper mapper) {
		super(mapper, BbgOvdvMoneynesswise.class, com.invenio.dao.entity.admin.BbgOvdvMoneynesswise.class);
	}
}
