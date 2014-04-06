package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.AveragingFrequencyConverter;
import com.invenio.dao.repository.admin.AveragingFrequencyRepository;
import com.invenio.schema.beans.admin.AveragingFrequency;
import com.invenio.service.AbstractPersistenceService;

@Service
public class AveragingFrequencyServiceImpl extends AbstractPersistenceService<AveragingFrequency, AveragingFrequencyConverter, com.invenio.dao.entity.admin.AveragingFrequency, Integer, AveragingFrequencyRepository>
		implements AveragingFrequencyService {

	@Autowired
	public AveragingFrequencyServiceImpl(AveragingFrequencyConverter coverter, AveragingFrequencyRepository repository) {
		super(coverter, repository);
	}
}
