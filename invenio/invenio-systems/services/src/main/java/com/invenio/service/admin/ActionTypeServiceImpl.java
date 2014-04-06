package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.ActionTypeConverter;
import com.invenio.dao.repository.admin.ActionTypeRepository;
import com.invenio.schema.beans.admin.ActionType;
import com.invenio.service.AbstractPersistenceService;

@Service
public class ActionTypeServiceImpl extends AbstractPersistenceService<ActionType, ActionTypeConverter, com.invenio.dao.entity.admin.ActionType, Integer, ActionTypeRepository>
		implements ActionTypeService {

	@Autowired
	public ActionTypeServiceImpl(ActionTypeConverter coverter, ActionTypeRepository repository) {
		super(coverter, repository);
	}
}
