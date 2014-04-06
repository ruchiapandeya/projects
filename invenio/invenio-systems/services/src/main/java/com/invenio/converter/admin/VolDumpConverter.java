package com.invenio.converter.admin;

import org.dozer.Mapper;
import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.VolDump;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

@Component
public class VolDumpConverter extends AbstractConverter<VolDump, com.invenio.dao.entity.admin.VolDump> {

	@Autowired
	public VolDumpConverter(Mapper mapper) {
		super(mapper, VolDump.class, com.invenio.dao.entity.admin.VolDump.class);
	}
}
