package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.VolDumpConverter;
import com.invenio.dao.repository.admin.VolDumpRepository;
import com.invenio.schema.beans.admin.VolDump;
import com.invenio.service.AbstractPersistenceService;

@Service
public class VolDumpServiceImpl extends AbstractPersistenceService<VolDump, VolDumpConverter, com.invenio.dao.entity.admin.VolDump, Integer, VolDumpRepository>
		implements VolDumpService {

	@Autowired
	public VolDumpServiceImpl(VolDumpConverter coverter, VolDumpRepository repository) {
		super(coverter, repository);
	}
}
