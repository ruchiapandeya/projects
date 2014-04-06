package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.IntrapolationTechniqueConverter;
import com.invenio.dao.repository.admin.IntrapolationTechniqueRepository;
import com.invenio.schema.beans.admin.IntrapolationTechnique;
import com.invenio.service.AbstractPersistenceService;

@Service
public class IntrapolationTechniqueServiceImpl extends AbstractPersistenceService<IntrapolationTechnique, IntrapolationTechniqueConverter, com.invenio.dao.entity.admin.IntrapolationTechnique, Integer, IntrapolationTechniqueRepository>
		implements IntrapolationTechniqueService {

	@Autowired
	public IntrapolationTechniqueServiceImpl(IntrapolationTechniqueConverter coverter, IntrapolationTechniqueRepository repository) {
		super(coverter, repository);
	}
}
