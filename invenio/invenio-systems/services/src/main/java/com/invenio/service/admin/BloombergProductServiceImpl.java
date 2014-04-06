package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.BloombergProductConverter;
import com.invenio.dao.repository.admin.BloombergProductRepository;
import com.invenio.schema.beans.admin.BloombergProduct;
import com.invenio.service.AbstractPersistenceService;

@Service
public class BloombergProductServiceImpl extends AbstractPersistenceService<BloombergProduct, BloombergProductConverter, com.invenio.dao.entity.admin.BloombergProduct, Integer, BloombergProductRepository>
		implements BloombergProductService {

	@Autowired
	public BloombergProductServiceImpl(BloombergProductConverter coverter, BloombergProductRepository repository) {
		super(coverter, repository);
	}
}
