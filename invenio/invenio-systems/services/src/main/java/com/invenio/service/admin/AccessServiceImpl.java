package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.AccessConverter;
import com.invenio.dao.repository.admin.AccessRepository;
import com.invenio.schema.beans.admin.Access;
import com.invenio.service.AbstractPersistenceService;

@Service
public class AccessServiceImpl extends AbstractPersistenceService<Access, AccessConverter, com.invenio.dao.entity.admin.Access, Integer, AccessRepository>
		implements AccessService {

	@Autowired
	public AccessServiceImpl(AccessConverter coverter, AccessRepository repository) {
		super(coverter, repository);
	}
}
