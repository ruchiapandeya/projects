package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.AtmConventionForExpiryConverter;
import com.invenio.dao.repository.admin.AtmConventionForExpiryRepository;
import com.invenio.schema.beans.admin.AtmConventionForExpiry;
import com.invenio.service.AbstractPersistenceService;

@Service
public class AtmConventionForExpiryServiceImpl extends AbstractPersistenceService<AtmConventionForExpiry, AtmConventionForExpiryConverter, com.invenio.dao.entity.admin.AtmConventionForExpiry, Integer, AtmConventionForExpiryRepository>
		implements AtmConventionForExpiryService {

	@Autowired
	public AtmConventionForExpiryServiceImpl(AtmConventionForExpiryConverter coverter, AtmConventionForExpiryRepository repository) {
		super(coverter, repository);
	}
}
