package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.XtradersExchangeConverter;
import com.invenio.dao.repository.admin.XtradersExchangeRepository;
import com.invenio.schema.beans.admin.XtradersExchange;
import com.invenio.service.AbstractPersistenceService;

@Service
public class XtradersExchangeServiceImpl extends AbstractPersistenceService<XtradersExchange, XtradersExchangeConverter, com.invenio.dao.entity.admin.XtradersExchange, Integer, XtradersExchangeRepository>
		implements XtradersExchangeService {

	@Autowired
	public XtradersExchangeServiceImpl(XtradersExchangeConverter coverter, XtradersExchangeRepository repository) {
		super(coverter, repository);
	}
}
