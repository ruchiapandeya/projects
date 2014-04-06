package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.AccumulationFrequencyConverter;
import com.invenio.dao.repository.admin.AccumulationFrequencyRepository;
import com.invenio.schema.beans.admin.AccumulationFrequency;
import com.invenio.service.AbstractPersistenceService;

@Service
public class AccumulationFrequencyServiceImpl extends AbstractPersistenceService<AccumulationFrequency, AccumulationFrequencyConverter, com.invenio.dao.entity.admin.AccumulationFrequency, Integer, AccumulationFrequencyRepository>
		implements AccumulationFrequencyService {

	@Autowired
	public AccumulationFrequencyServiceImpl(AccumulationFrequencyConverter coverter, AccumulationFrequencyRepository repository) {
		super(coverter, repository);
	}
}
