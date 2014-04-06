package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.RjoExchangeConverter;
import com.invenio.dao.repository.admin.RjoExchangeRepository;
import com.invenio.schema.beans.admin.RjoExchange;
import com.invenio.service.AbstractPersistenceService;

@Service
public class RjoExchangeServiceImpl extends AbstractPersistenceService<RjoExchange, RjoExchangeConverter, com.invenio.dao.entity.admin.RjoExchange, Integer, RjoExchangeRepository>
		implements RjoExchangeService {

	@Autowired
	public RjoExchangeServiceImpl(RjoExchangeConverter coverter, RjoExchangeRepository repository) {
		super(coverter, repository);
	}
}
