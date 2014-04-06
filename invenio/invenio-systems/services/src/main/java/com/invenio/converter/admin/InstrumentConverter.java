package com.invenio.converter.admin;

import org.dozer.Mapper;
import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.Instrument;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

@Component
public class InstrumentConverter extends AbstractConverter<Instrument, com.invenio.dao.entity.admin.Instrument> {

	@Autowired
	public InstrumentConverter(Mapper mapper) {
		super(mapper, Instrument.class, com.invenio.dao.entity.admin.Instrument.class);
	}
}
