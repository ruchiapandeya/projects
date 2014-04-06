package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.SettlementCorrelationSurfaceConverter;
import com.invenio.dao.repository.admin.SettlementCorrelationSurfaceRepository;
import com.invenio.schema.beans.admin.SettlementCorrelationSurface;
import com.invenio.service.AbstractPersistenceService;

@Service
public class SettlementCorrelationSurfaceServiceImpl extends AbstractPersistenceService<SettlementCorrelationSurface, SettlementCorrelationSurfaceConverter, com.invenio.dao.entity.admin.SettlementCorrelationSurface, Integer, SettlementCorrelationSurfaceRepository>
		implements SettlementCorrelationSurfaceService {

	@Autowired
	public SettlementCorrelationSurfaceServiceImpl(SettlementCorrelationSurfaceConverter coverter, SettlementCorrelationSurfaceRepository repository) {
		super(coverter, repository);
	}
}
