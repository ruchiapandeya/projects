package com.invenio.converter.admin;

import org.dozer.Mapper;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.ExtrapolationTechnique;

@Component
public class ExtrapolationTechniqueConverter extends AbstractConverter<ExtrapolationTechnique, com.invenio.dao.entity.admin.ExtrapolationTechnique> {

	@Autowired
	public ExtrapolationTechniqueConverter(Mapper mapper) {
		super(mapper, ExtrapolationTechnique.class, com.invenio.dao.entity.admin.ExtrapolationTechnique.class);
	}
}
