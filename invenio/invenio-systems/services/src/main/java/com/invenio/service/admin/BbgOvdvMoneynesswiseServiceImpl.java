package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.BbgOvdvMoneynesswiseConverter;
import com.invenio.dao.repository.admin.BbgOvdvMoneynesswiseRepository;
import com.invenio.schema.beans.admin.BbgOvdvMoneynesswise;
import com.invenio.service.AbstractPersistenceService;

@Service
public class BbgOvdvMoneynesswiseServiceImpl extends AbstractPersistenceService<BbgOvdvMoneynesswise, BbgOvdvMoneynesswiseConverter, com.invenio.dao.entity.admin.BbgOvdvMoneynesswise, Integer, BbgOvdvMoneynesswiseRepository>
		implements BbgOvdvMoneynesswiseService {

	@Autowired
	public BbgOvdvMoneynesswiseServiceImpl(BbgOvdvMoneynesswiseConverter coverter, BbgOvdvMoneynesswiseRepository repository) {
		super(coverter, repository);
	}
}
