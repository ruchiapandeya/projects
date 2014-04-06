package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.OptionsUnlContrConverter;
import com.invenio.dao.repository.admin.OptionsUnlContrRepository;
import com.invenio.schema.beans.admin.OptionsUnlContr;
import com.invenio.service.AbstractPersistenceService;

@Service
public class OptionsUnlContrServiceImpl extends AbstractPersistenceService<OptionsUnlContr, OptionsUnlContrConverter, com.invenio.dao.entity.admin.OptionsUnlContr, Integer, OptionsUnlContrRepository>
	implements OptionsUnlContrService {

	@Autowired
	public OptionsUnlContrServiceImpl(OptionsUnlContrConverter coverter, OptionsUnlContrRepository repository) {
		super(coverter, repository);
	}
}
