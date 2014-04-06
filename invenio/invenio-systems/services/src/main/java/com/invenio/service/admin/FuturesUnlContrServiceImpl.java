package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.FuturesUnlContrConverter;
import com.invenio.dao.repository.admin.FuturesUnlContrRepository;
import com.invenio.schema.beans.admin.FuturesUnlContr;
import com.invenio.service.AbstractPersistenceService;

@Service
public class FuturesUnlContrServiceImpl extends AbstractPersistenceService<FuturesUnlContr, FuturesUnlContrConverter, com.invenio.dao.entity.admin.FuturesUnlContr, Integer, FuturesUnlContrRepository>
		implements FuturesUnlContrService {

	@Autowired
	public FuturesUnlContrServiceImpl(FuturesUnlContrConverter coverter, FuturesUnlContrRepository repository) {
		super(coverter, repository);
	}
}
