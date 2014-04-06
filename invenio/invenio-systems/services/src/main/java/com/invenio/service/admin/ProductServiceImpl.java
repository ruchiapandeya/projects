package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.ProductConverter;
import com.invenio.dao.repository.admin.ProductRepository;
import com.invenio.schema.beans.admin.Product;
import com.invenio.service.AbstractPersistenceService;

@Service
public class ProductServiceImpl extends AbstractPersistenceService<Product, ProductConverter, com.invenio.dao.entity.admin.Product, Integer, ProductRepository>
		implements ProductService {

	@Autowired
	public ProductServiceImpl(ProductConverter coverter, ProductRepository repository) {
		super(coverter, repository);
	}
}
