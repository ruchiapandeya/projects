package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.BrokerageMasterConverter;
import com.invenio.dao.repository.admin.BrokerageMasterRepository;
import com.invenio.schema.beans.admin.BrokerageMaster;
import com.invenio.service.AbstractPersistenceService;

@Service
public class BrokerageMasterServiceImpl extends AbstractPersistenceService<BrokerageMaster, BrokerageMasterConverter, com.invenio.dao.entity.admin.BrokerageMaster, Integer, BrokerageMasterRepository>
		implements BrokerageMasterService {

	@Autowired
	public BrokerageMasterServiceImpl(BrokerageMasterConverter coverter, BrokerageMasterRepository repository) {
		super(coverter, repository);
	}
}
