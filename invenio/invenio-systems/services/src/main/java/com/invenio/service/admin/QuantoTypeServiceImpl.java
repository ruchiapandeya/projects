package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.QuantoTypeConverter;
import com.invenio.dao.repository.admin.QuantoTypeRepository;
import com.invenio.schema.beans.admin.QuantoType;
import com.invenio.service.AbstractPersistenceService;

@Service
public class QuantoTypeServiceImpl extends AbstractPersistenceService<QuantoType, QuantoTypeConverter, com.invenio.dao.entity.admin.QuantoType, Integer, QuantoTypeRepository>
		implements QuantoTypeService {

	@Autowired
	public QuantoTypeServiceImpl(QuantoTypeConverter coverter, QuantoTypeRepository repository) {
		super(coverter, repository);
	}
}
