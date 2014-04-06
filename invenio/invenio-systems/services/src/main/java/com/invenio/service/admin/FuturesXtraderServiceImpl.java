package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.FuturesXtraderConverter;
import com.invenio.dao.repository.admin.FuturesXtraderRepository;
import com.invenio.schema.beans.admin.FuturesXtrader;
import com.invenio.service.AbstractPersistenceService;

@Service
public class FuturesXtraderServiceImpl
		extends
		AbstractPersistenceService<FuturesXtrader, FuturesXtraderConverter, com.invenio.dao.entity.admin.FuturesXtrader, Integer, FuturesXtraderRepository>
		implements FuturesXtraderService {

	@Autowired
	public FuturesXtraderServiceImpl(FuturesXtraderConverter coverter,
			FuturesXtraderRepository repository) {
		super(coverter, repository);
	}
}
