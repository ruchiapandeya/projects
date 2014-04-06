package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.OptionsRjoConverter;
import com.invenio.dao.repository.admin.OptionsRjoRepository;
import com.invenio.schema.beans.admin.OptionsRjo;
import com.invenio.service.AbstractPersistenceService;

@Service
public class OptionsRjoServiceImpl extends AbstractPersistenceService<OptionsRjo, OptionsRjoConverter, com.invenio.dao.entity.admin.OptionsRjo, Integer, OptionsRjoRepository>
		implements OptionsRjoService {

	@Autowired
	public OptionsRjoServiceImpl(OptionsRjoConverter coverter, OptionsRjoRepository repository) {
		super(coverter, repository);
	}
}
