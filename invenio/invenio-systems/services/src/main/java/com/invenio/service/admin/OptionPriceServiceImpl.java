package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.OptionPriceConverter;
import com.invenio.dao.repository.admin.OptionPriceRepository;
import com.invenio.schema.beans.admin.OptionPrice;
import com.invenio.service.AbstractPersistenceService;

@Service
public class OptionPriceServiceImpl extends AbstractPersistenceService<OptionPrice, OptionPriceConverter, com.invenio.dao.entity.admin.OptionPrice, Integer, OptionPriceRepository>
		implements OptionPriceService {

	@Autowired
	public OptionPriceServiceImpl(OptionPriceConverter coverter, OptionPriceRepository repository) {
		super(coverter, repository);
	}
}
