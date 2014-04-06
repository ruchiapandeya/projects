package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.ClearingBrokerConverter;
import com.invenio.dao.repository.admin.ClearingBrokerRepository;
import com.invenio.schema.beans.admin.ClearingBroker;
import com.invenio.service.AbstractPersistenceService;

@Service
public class ClearingBrokerServiceImpl extends AbstractPersistenceService<ClearingBroker, ClearingBrokerConverter, com.invenio.dao.entity.admin.ClearingBroker, Integer, ClearingBrokerRepository>
		implements ClearingBrokerService {

	@Autowired
	public ClearingBrokerServiceImpl(ClearingBrokerConverter coverter, ClearingBrokerRepository repository) {
		super(coverter, repository);
	}
}
