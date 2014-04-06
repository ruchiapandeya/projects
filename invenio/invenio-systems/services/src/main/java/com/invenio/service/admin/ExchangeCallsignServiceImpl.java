package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.ExchangeCallsignConverter;
import com.invenio.dao.repository.admin.ExchangeCallsignRepository;
import com.invenio.schema.beans.admin.ExchangeCallsign;
import com.invenio.service.AbstractPersistenceService;

@Service
public class ExchangeCallsignServiceImpl extends AbstractPersistenceService<ExchangeCallsign, ExchangeCallsignConverter, com.invenio.dao.entity.admin.ExchangeCallsign, Integer, ExchangeCallsignRepository>
		implements ExchangeCallsignService {

	@Autowired
	public ExchangeCallsignServiceImpl(ExchangeCallsignConverter coverter, ExchangeCallsignRepository repository) {
		super(coverter, repository);
	}
}
