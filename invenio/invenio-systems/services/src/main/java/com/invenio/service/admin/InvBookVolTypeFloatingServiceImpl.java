package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.InvBookVolTypeFloatingConverter;
import com.invenio.dao.repository.admin.InvBookVolTypeFloatingRepository;
import com.invenio.schema.beans.admin.InvBookVolTypeFloating;
import com.invenio.service.AbstractPersistenceService;

@Service
public class InvBookVolTypeFloatingServiceImpl extends AbstractPersistenceService<InvBookVolTypeFloating, InvBookVolTypeFloatingConverter, com.invenio.dao.entity.admin.InvBookVolTypeFloating, Integer, InvBookVolTypeFloatingRepository>
		implements InvBookVolTypeFloatingService {

	@Autowired
	public InvBookVolTypeFloatingServiceImpl(InvBookVolTypeFloatingConverter coverter, InvBookVolTypeFloatingRepository repository) {
		super(coverter, repository);
	}
}
