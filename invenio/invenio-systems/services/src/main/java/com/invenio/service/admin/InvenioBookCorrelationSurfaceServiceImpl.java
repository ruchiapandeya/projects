package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.InvenioBookCorrelationSurfaceConverter;
import com.invenio.dao.repository.admin.InvenioBookCorrelationSurfaceRepository;
import com.invenio.schema.beans.admin.InvenioBookCorrelationSurface;
import com.invenio.service.AbstractPersistenceService;

@Service
public class InvenioBookCorrelationSurfaceServiceImpl extends AbstractPersistenceService<InvenioBookCorrelationSurface, InvenioBookCorrelationSurfaceConverter, com.invenio.dao.entity.admin.InvenioBookCorrelationSurface, Integer, InvenioBookCorrelationSurfaceRepository>
		implements InvenioBookCorrelationSurfaceService {

	@Autowired
	public InvenioBookCorrelationSurfaceServiceImpl(InvenioBookCorrelationSurfaceConverter coverter, InvenioBookCorrelationSurfaceRepository repository) {
		super(coverter, repository);
	}
}
