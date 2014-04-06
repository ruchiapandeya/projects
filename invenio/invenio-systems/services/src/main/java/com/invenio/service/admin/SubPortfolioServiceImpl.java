package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.SubPortfolioConverter;
import com.invenio.dao.repository.admin.SubPortfolioRepository;
import com.invenio.schema.beans.admin.SubPortfolio;
import com.invenio.service.AbstractPersistenceService;

@Service
public class SubPortfolioServiceImpl extends AbstractPersistenceService<SubPortfolio, SubPortfolioConverter, com.invenio.dao.entity.admin.SubPortfolio, Integer, SubPortfolioRepository>
		implements SubPortfolioService {

	@Autowired
	public SubPortfolioServiceImpl(SubPortfolioConverter coverter, SubPortfolioRepository repository) {
		super(coverter, repository);
	}
}
