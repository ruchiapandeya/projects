package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.OptionsXtraderConverter;
import com.invenio.dao.repository.admin.OptionsXtraderRepository;
import com.invenio.schema.beans.admin.OptionsXtrader;
import com.invenio.service.AbstractPersistenceService;

@Service
public class OptionsXtraderServiceImpl extends AbstractPersistenceService<OptionsXtrader, OptionsXtraderConverter, com.invenio.dao.entity.admin.OptionsXtrader, Integer, OptionsXtraderRepository>
		implements OptionsXtraderService {

	@Autowired
	public OptionsXtraderServiceImpl(OptionsXtraderConverter coverter, OptionsXtraderRepository repository) {
		super(coverter, repository);
	}
}
