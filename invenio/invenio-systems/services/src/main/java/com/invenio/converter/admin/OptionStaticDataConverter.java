package com.invenio.converter.admin;

import org.dozer.Mapper;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.OptionStaticData;

@Component
public class OptionStaticDataConverter extends AbstractConverter<OptionStaticData, com.invenio.dao.entity.admin.OptionStaticData> {

	@Autowired
	public OptionStaticDataConverter(Mapper mapper) {
		super(mapper, OptionStaticData.class, com.invenio.dao.entity.admin.OptionStaticData.class);
	}
}
