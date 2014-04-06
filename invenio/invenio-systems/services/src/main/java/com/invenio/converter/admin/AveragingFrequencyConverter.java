package com.invenio.converter.admin;

import org.dozer.Mapper;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.AveragingFrequency;

@Component
public class AveragingFrequencyConverter extends AbstractConverter<AveragingFrequency, com.invenio.dao.entity.admin.AveragingFrequency> {

	@Autowired
	public AveragingFrequencyConverter(Mapper mapper) {
		super(mapper, AveragingFrequency.class, com.invenio.dao.entity.admin.AveragingFrequency.class);
	}
}
