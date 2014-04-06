package com.invenio.converter.admin;

import org.dozer.Mapper;
import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.OptionsRjo;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

@Component
public class OptionsRjoConverter extends AbstractConverter<OptionsRjo, com.invenio.dao.entity.admin.OptionsRjo> {

	@Autowired
	public OptionsRjoConverter(Mapper mapper) {
		super(mapper, OptionsRjo.class, com.invenio.dao.entity.admin.OptionsRjo.class);
	}
}
