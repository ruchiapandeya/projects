package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.BrokerageCallsignConverter;
import com.invenio.dao.repository.admin.BrokerageCallsignRepository;
import com.invenio.schema.beans.admin.BrokerageCallsign;
import com.invenio.service.AbstractPersistenceService;

@Service
public class BrokerageCallsignServiceImpl extends AbstractPersistenceService<BrokerageCallsign, BrokerageCallsignConverter, com.invenio.dao.entity.admin.BrokerageCallsign, Integer, BrokerageCallsignRepository>
		implements BrokerageCallsignService {

	@Autowired
	public BrokerageCallsignServiceImpl(BrokerageCallsignConverter coverter, BrokerageCallsignRepository repository) {
		super(coverter, repository);
	}
}
