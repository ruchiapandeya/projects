package com.invenio.converter.admin;

import org.dozer.Mapper;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.ExchangeMaster;

@Component
public class ExchangeMasterConverter extends AbstractConverter<ExchangeMaster, com.invenio.dao.entity.admin.ExchangeMaster> {

	@Autowired
	public ExchangeMasterConverter(Mapper mapper) {
		super(mapper, ExchangeMaster.class, com.invenio.dao.entity.admin.ExchangeMaster.class);
	}
}
