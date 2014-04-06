package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.VolSurfaceConverter;
import com.invenio.dao.repository.admin.VolSurfaceRepository;
import com.invenio.schema.beans.admin.VolSurface;
import com.invenio.service.AbstractPersistenceService;

@Service
public class VolSurfaceServiceImpl extends AbstractPersistenceService<VolSurface, VolSurfaceConverter, com.invenio.dao.entity.admin.VolSurface, Integer, VolSurfaceRepository>
		implements VolSurfaceService {

	@Autowired
	public VolSurfaceServiceImpl(VolSurfaceConverter coverter, VolSurfaceRepository repository) {
		super(coverter, repository);
	}
}
