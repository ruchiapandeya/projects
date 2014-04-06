package com.invenio.converter.admin;

import org.dozer.Mapper;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.BrokerageMaster;

@Component
public class BrokerageMasterConverter extends AbstractConverter<BrokerageMaster, com.invenio.dao.entity.admin.BrokerageMaster> {

	@Autowired
	public BrokerageMasterConverter(Mapper mapper) {
		super(mapper, BrokerageMaster.class, com.invenio.dao.entity.admin.BrokerageMaster.class);
	}
}
