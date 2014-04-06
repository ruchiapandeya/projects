package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.VolSurfaceGreeksConverter;
import com.invenio.dao.repository.admin.VolSurfaceGreeksRepository;
import com.invenio.schema.beans.admin.VolSurfaceGreeks;
import com.invenio.service.AbstractPersistenceService;

@Service
public class VolSurfaceGreeksServiceImpl extends AbstractPersistenceService<VolSurfaceGreeks, VolSurfaceGreeksConverter, com.invenio.dao.entity.admin.VolSurfaceGreeks, Integer, VolSurfaceGreeksRepository>
		implements VolSurfaceGreeksService {

	@Autowired
	public VolSurfaceGreeksServiceImpl(VolSurfaceGreeksConverter coverter, VolSurfaceGreeksRepository repository) {
		super(coverter, repository);
	}
}
