package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.OptionStaticDataConverter;
import com.invenio.dao.repository.admin.OptionStaticDataRepository;
import com.invenio.schema.beans.admin.OptionStaticData;
import com.invenio.service.AbstractPersistenceService;

@Service
public class OptionStaticDataServiceImpl extends AbstractPersistenceService<OptionStaticData, OptionStaticDataConverter, com.invenio.dao.entity.admin.OptionStaticData, Integer, OptionStaticDataRepository>
		implements OptionStaticDataService {

	@Autowired
	public OptionStaticDataServiceImpl(OptionStaticDataConverter coverter, OptionStaticDataRepository repository) {
		super(coverter, repository);
	}
}
