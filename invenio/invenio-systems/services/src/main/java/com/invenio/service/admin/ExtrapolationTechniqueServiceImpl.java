package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.ExtrapolationTechniqueConverter;
import com.invenio.dao.repository.admin.ExtrapolationTechniqueRepository;
import com.invenio.schema.beans.admin.ExtrapolationTechnique;
import com.invenio.service.AbstractPersistenceService;

@Service
public class ExtrapolationTechniqueServiceImpl extends AbstractPersistenceService<ExtrapolationTechnique, ExtrapolationTechniqueConverter, com.invenio.dao.entity.admin.ExtrapolationTechnique, Integer, ExtrapolationTechniqueRepository>
		implements ExtrapolationTechniqueService {

	@Autowired
	public ExtrapolationTechniqueServiceImpl(ExtrapolationTechniqueConverter coverter, ExtrapolationTechniqueRepository repository) {
		super(coverter, repository);
	}
}
