package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.MurexExchangeConverter;
import com.invenio.dao.repository.admin.MurexExchangeRepository;
import com.invenio.schema.beans.admin.MurexExchange;
import com.invenio.service.AbstractPersistenceService;

@Service
public class MurexExchangeServiceImpl extends AbstractPersistenceService<MurexExchange, MurexExchangeConverter, com.invenio.dao.entity.admin.MurexExchange, Integer, MurexExchangeRepository>
		implements MurexExchangeService {

	@Autowired
	public MurexExchangeServiceImpl(MurexExchangeConverter coverter, MurexExchangeRepository repository) {
		super(coverter, repository);
	}
}
