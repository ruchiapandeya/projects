package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.ReutersProductConverter;
import com.invenio.dao.repository.admin.ReutersProductRepository;
import com.invenio.schema.beans.admin.ReutersProduct;
import com.invenio.service.AbstractPersistenceService;

@Service
public class ReutersProductServiceImpl extends AbstractPersistenceService<ReutersProduct, ReutersProductConverter, com.invenio.dao.entity.admin.ReutersProduct, Integer, ReutersProductRepository>
		implements ReutersProductService {

	@Autowired
	public ReutersProductServiceImpl(ReutersProductConverter coverter, ReutersProductRepository repository) {
		super(coverter, repository);
	}
}
