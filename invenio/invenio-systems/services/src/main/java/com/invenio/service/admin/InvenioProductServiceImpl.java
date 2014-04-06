package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.InvenioProductConverter;
import com.invenio.dao.repository.admin.InvenioProductRepository;
import com.invenio.schema.beans.admin.InvenioProduct;
import com.invenio.service.AbstractPersistenceService;

@Service
public class InvenioProductServiceImpl
		extends
		AbstractPersistenceService<InvenioProduct, InvenioProductConverter, com.invenio.dao.entity.admin.InvenioProduct, Integer, InvenioProductRepository>
		implements InvenioProductService {

	@Autowired
	public InvenioProductServiceImpl(InvenioProductConverter coverter,
			InvenioProductRepository repository) {
		super(coverter, repository);
	}
}
