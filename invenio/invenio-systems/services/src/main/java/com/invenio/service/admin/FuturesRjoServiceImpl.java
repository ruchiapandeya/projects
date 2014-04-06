package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.FuturesRjoConverter;
import com.invenio.dao.repository.admin.FuturesRjoRepository;
import com.invenio.schema.beans.admin.FuturesRjo;
import com.invenio.service.AbstractPersistenceService;

@Service
public class FuturesRjoServiceImpl extends AbstractPersistenceService<FuturesRjo, FuturesRjoConverter, com.invenio.dao.entity.admin.FuturesRjo, Integer, FuturesRjoRepository>
		implements FuturesRjoService {

	@Autowired
	public FuturesRjoServiceImpl(FuturesRjoConverter coverter, FuturesRjoRepository repository) {
		super(coverter, repository);
	}
}
