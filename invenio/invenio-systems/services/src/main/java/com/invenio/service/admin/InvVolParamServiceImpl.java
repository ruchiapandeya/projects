package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.InvVolParamConverter;
import com.invenio.dao.repository.admin.InvVolParamRepository;
import com.invenio.schema.beans.admin.InvVolParam;
import com.invenio.service.AbstractPersistenceService;

@Service
public class InvVolParamServiceImpl extends AbstractPersistenceService<InvVolParam, InvVolParamConverter, com.invenio.dao.entity.admin.InvVolParam, Integer, InvVolParamRepository>
		implements InvVolParamService {

	@Autowired
	public InvVolParamServiceImpl(InvVolParamConverter coverter, InvVolParamRepository repository) {
		super(coverter, repository);
	}
}
