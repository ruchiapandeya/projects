package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.PortfolioConverter;
import com.invenio.dao.repository.admin.PortfolioRepository;
import com.invenio.schema.beans.admin.Portfolio;
import com.invenio.service.AbstractPersistenceService;

@Service
public class PortfolioServiceImpl extends AbstractPersistenceService<Portfolio, PortfolioConverter, com.invenio.dao.entity.admin.Portfolio, Integer, PortfolioRepository>
		implements PortfolioService {

	@Autowired
	public PortfolioServiceImpl(PortfolioConverter coverter, PortfolioRepository repository) {
		super(coverter, repository);
	}
}
