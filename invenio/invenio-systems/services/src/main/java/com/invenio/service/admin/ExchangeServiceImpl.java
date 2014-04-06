package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.ExchangeConverter;
import com.invenio.dao.repository.admin.ExchangeRepository;
import com.invenio.schema.beans.admin.Exchange;
import com.invenio.service.AbstractPersistenceService;

@Service
public class ExchangeServiceImpl extends AbstractPersistenceService<Exchange, ExchangeConverter, com.invenio.dao.entity.admin.Exchange, Integer, ExchangeRepository>
		implements ExchangeService {

	@Autowired
	public ExchangeServiceImpl(ExchangeConverter coverter, ExchangeRepository repository) {
		super(coverter, repository);
	}
}
