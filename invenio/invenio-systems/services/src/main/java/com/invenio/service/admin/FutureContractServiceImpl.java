package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.FutureContractConverter;
import com.invenio.dao.repository.admin.FutureContractRepository;
import com.invenio.schema.beans.admin.FutureContract;
import com.invenio.service.AbstractPersistenceService;

@Service
public class FutureContractServiceImpl extends AbstractPersistenceService<FutureContract, FutureContractConverter, com.invenio.dao.entity.admin.FutureContract, Integer, FutureContractRepository>
		implements FutureContractService {

	@Autowired
	public FutureContractServiceImpl(FutureContractConverter coverter, FutureContractRepository repository) {
		super(coverter, repository);
	}
}
