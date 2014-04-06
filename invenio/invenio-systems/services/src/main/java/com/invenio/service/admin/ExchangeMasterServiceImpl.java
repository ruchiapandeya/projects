package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.ExchangeMasterConverter;
import com.invenio.dao.repository.admin.ExchangeMasterRepository;
import com.invenio.schema.beans.admin.ExchangeMaster;
import com.invenio.service.AbstractPersistenceService;

@Service
public class ExchangeMasterServiceImpl extends AbstractPersistenceService<ExchangeMaster, ExchangeMasterConverter, com.invenio.dao.entity.admin.ExchangeMaster, Integer, ExchangeMasterRepository>
		implements ExchangeMasterService {

	@Autowired
	public ExchangeMasterServiceImpl(ExchangeMasterConverter coverter, ExchangeMasterRepository repository) {
		super(coverter, repository);
	}
}
