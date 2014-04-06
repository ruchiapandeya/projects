package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.DerivativeTypeConverter;
import com.invenio.dao.repository.admin.DerivativeTypeRepository;
import com.invenio.schema.beans.admin.DerivativeType;
import com.invenio.service.AbstractPersistenceService;

@Service
public class DerivativeTypeServiceImpl extends AbstractPersistenceService<DerivativeType, DerivativeTypeConverter, com.invenio.dao.entity.admin.DerivativeType, Integer, DerivativeTypeRepository>
		implements DerivativeTypeService {

	@Autowired
	public DerivativeTypeServiceImpl(DerivativeTypeConverter coverter, DerivativeTypeRepository repository) {
		super(coverter, repository);
	}
}
