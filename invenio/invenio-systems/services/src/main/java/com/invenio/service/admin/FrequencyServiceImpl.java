package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.FrequencyConverter;
import com.invenio.dao.repository.admin.FrequencyRepository;
import com.invenio.schema.beans.admin.Frequency;
import com.invenio.service.AbstractPersistenceService;

@Service
public class FrequencyServiceImpl extends AbstractPersistenceService<Frequency, FrequencyConverter, com.invenio.dao.entity.admin.Frequency, Integer, FrequencyRepository>
		implements FrequencyService {

	@Autowired
	public FrequencyServiceImpl(FrequencyConverter coverter, FrequencyRepository repository) {
		super(coverter, repository);
	}
}
