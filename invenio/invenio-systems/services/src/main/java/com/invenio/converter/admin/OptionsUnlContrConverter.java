package com.invenio.converter.admin;

import org.dozer.Mapper;
import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.OptionsUnlContr;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

@Component
public class OptionsUnlContrConverter extends AbstractConverter<OptionsUnlContr, com.invenio.dao.entity.admin.OptionsUnlContr> {

	@Autowired
	public OptionsUnlContrConverter(Mapper mapper) {
		super(mapper, OptionsUnlContr.class, com.invenio.dao.entity.admin.OptionsUnlContr.class);
	}
}
