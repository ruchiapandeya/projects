package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.ExchangeExerciseTypeConverter;
import com.invenio.dao.repository.admin.ExchangeExerciseTypeRepository;
import com.invenio.schema.beans.admin.ExchangeExerciseType;
import com.invenio.service.AbstractPersistenceService;

@Service
public class ExchangeExerciseTypeServiceImpl extends AbstractPersistenceService<ExchangeExerciseType, ExchangeExerciseTypeConverter, com.invenio.dao.entity.admin.ExchangeExerciseType, Integer, ExchangeExerciseTypeRepository>
		implements ExchangeExerciseTypeService {

	@Autowired
	public ExchangeExerciseTypeServiceImpl(ExchangeExerciseTypeConverter coverter, ExchangeExerciseTypeRepository repository) {
		super(coverter, repository);
	}
}
