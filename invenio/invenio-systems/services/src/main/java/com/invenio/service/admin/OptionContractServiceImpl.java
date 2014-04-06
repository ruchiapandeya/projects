package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.OptionContractConverter;
import com.invenio.dao.repository.admin.OptionContractRepository;
import com.invenio.schema.beans.admin.OptionContract;
import com.invenio.service.AbstractPersistenceService;

@Service
public class OptionContractServiceImpl extends AbstractPersistenceService<OptionContract, OptionContractConverter, com.invenio.dao.entity.admin.OptionContract, Integer, OptionContractRepository>
		implements OptionContractService {

	@Autowired
	public OptionContractServiceImpl(OptionContractConverter coverter, OptionContractRepository repository) {
		super(coverter, repository);
	}
}
