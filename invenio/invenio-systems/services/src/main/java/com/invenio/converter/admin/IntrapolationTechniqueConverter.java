package com.invenio.converter.admin;

import org.dozer.Mapper;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.IntrapolationTechnique;

@Component
public class IntrapolationTechniqueConverter extends AbstractConverter<IntrapolationTechnique, com.invenio.dao.entity.admin.IntrapolationTechnique> {

	@Autowired
	public IntrapolationTechniqueConverter(Mapper mapper) {
		super(mapper, IntrapolationTechnique.class, com.invenio.dao.entity.admin.IntrapolationTechnique.class);
	}
}
