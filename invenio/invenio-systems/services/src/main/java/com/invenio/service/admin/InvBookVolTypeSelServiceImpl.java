package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.InvBookVolTypeSelConverter;
import com.invenio.dao.repository.admin.InvBookVolTypeSelRepository;
import com.invenio.schema.beans.admin.InvBookVolTypeSel;
import com.invenio.service.AbstractPersistenceService;

@Service
public class InvBookVolTypeSelServiceImpl extends AbstractPersistenceService<InvBookVolTypeSel, InvBookVolTypeSelConverter, com.invenio.dao.entity.admin.InvBookVolTypeSel, Integer, InvBookVolTypeSelRepository>
		implements InvBookVolTypeSelService {

	@Autowired
	public InvBookVolTypeSelServiceImpl(InvBookVolTypeSelConverter coverter, InvBookVolTypeSelRepository repository) {
		super(coverter, repository);
	}
}
