package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.ExecutionBrokerConverter;
import com.invenio.dao.repository.admin.ExecutionBrokerRepository;
import com.invenio.schema.beans.admin.ExecutionBroker;
import com.invenio.service.AbstractPersistenceService;

@Service
public class ExecutionBrokerServiceImpl extends AbstractPersistenceService<ExecutionBroker, ExecutionBrokerConverter, com.invenio.dao.entity.admin.ExecutionBroker, Integer, ExecutionBrokerRepository>
		implements ExecutionBrokerService {

	@Autowired
	public ExecutionBrokerServiceImpl(ExecutionBrokerConverter coverter, ExecutionBrokerRepository repository) {
		super(coverter, repository);
	}
}
