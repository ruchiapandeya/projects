package com.invenio.converter.admin;

import org.dozer.Mapper;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.ExchangeExerciseType;

@Component
public class ExchangeExerciseTypeConverter extends AbstractConverter<ExchangeExerciseType, com.invenio.dao.entity.admin.ExchangeExerciseType> {

	@Autowired
	public ExchangeExerciseTypeConverter(Mapper mapper) {
		super(mapper, ExchangeExerciseType.class, com.invenio.dao.entity.admin.ExchangeExerciseType.class);
	}
}
