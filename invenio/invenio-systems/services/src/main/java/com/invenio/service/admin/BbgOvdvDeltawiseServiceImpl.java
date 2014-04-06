package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.BbgOvdvDeltawiseConverter;
import com.invenio.dao.repository.admin.BbgOvdvDeltawiseRepository;
import com.invenio.schema.beans.admin.BbgOvdvDeltawise;
import com.invenio.service.AbstractPersistenceService;

@Service
public class BbgOvdvDeltawiseServiceImpl extends AbstractPersistenceService<BbgOvdvDeltawise, BbgOvdvDeltawiseConverter, com.invenio.dao.entity.admin.BbgOvdvDeltawise, Integer, BbgOvdvDeltawiseRepository>
		implements BbgOvdvDeltawiseService {

	@Autowired
	public BbgOvdvDeltawiseServiceImpl(BbgOvdvDeltawiseConverter coverter, BbgOvdvDeltawiseRepository repository) {
		super(coverter, repository);
	}
}
