package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.FuturePricesConverter;
import com.invenio.dao.repository.admin.FuturePricesRepository;
import com.invenio.schema.beans.admin.FuturePrices;
import com.invenio.service.AbstractPersistenceService;

@Service
public class FuturePricesServiceImpl extends AbstractPersistenceService<FuturePrices, FuturePricesConverter, com.invenio.dao.entity.admin.FuturePrices, Integer, FuturePricesRepository>
		implements FuturePricesService {

	@Autowired
	public FuturePricesServiceImpl(FuturePricesConverter coverter, FuturePricesRepository repository) {
		super(coverter, repository);
	}
}
