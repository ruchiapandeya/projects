package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.InvBookVolTypeFixedConverter;
import com.invenio.dao.repository.admin.InvBookVolTypeFixedRepository;
import com.invenio.schema.beans.admin.InvBookVolTypeFixed;
import com.invenio.service.AbstractPersistenceService;

@Service
public class InvBookVolTypeFixedServiceImpl extends AbstractPersistenceService<InvBookVolTypeFixed, InvBookVolTypeFixedConverter, com.invenio.dao.entity.admin.InvBookVolTypeFixed, Integer, InvBookVolTypeFixedRepository>
		implements InvBookVolTypeFixedService {

	@Autowired
	public InvBookVolTypeFixedServiceImpl(InvBookVolTypeFixedConverter coverter, InvBookVolTypeFixedRepository repository) {
		super(coverter, repository);
	}
}
