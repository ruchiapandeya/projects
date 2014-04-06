package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.ExecutionTypeConverter;
import com.invenio.dao.repository.admin.ExecutionTypeRepository;
import com.invenio.schema.beans.admin.ExecutionType;
import com.invenio.service.AbstractPersistenceService;

@Service
public class ExecutionTypeServiceImpl extends AbstractPersistenceService<ExecutionType, ExecutionTypeConverter, com.invenio.dao.entity.admin.ExecutionType, Integer, ExecutionTypeRepository>
		implements ExecutionTypeService {

	@Autowired
	public ExecutionTypeServiceImpl(ExecutionTypeConverter coverter, ExecutionTypeRepository repository) {
		super(coverter, repository);
	}
}
