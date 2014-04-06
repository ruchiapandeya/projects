package com.invenio.converter.admin;

import org.dozer.Mapper;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;
import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.Frequency;

@Component
public class FrequencyConverter extends AbstractConverter<Frequency, com.invenio.dao.entity.admin.Frequency> {

	@Autowired
	public FrequencyConverter(Mapper mapper) {
		super(mapper, Frequency.class, com.invenio.dao.entity.admin.Frequency.class);
	}
}
