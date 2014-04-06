package com.invenio.converter.admin;

import org.dozer.Mapper;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.AccumulationFrequency;

@Component
public class AccumulationFrequencyConverter extends AbstractConverter<AccumulationFrequency, com.invenio.dao.entity.admin.AccumulationFrequency> {

	@Autowired
	public AccumulationFrequencyConverter(Mapper mapper) {
		super(mapper, AccumulationFrequency.class, com.invenio.dao.entity.admin.AccumulationFrequency.class);
	}
}
