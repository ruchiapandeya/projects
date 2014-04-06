package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.SettlementVolatilitySurfaceConverter;
import com.invenio.dao.repository.admin.SettlementVolatilitySurfaceRepository;
import com.invenio.schema.beans.admin.SettlementVolatilitySurface;
import com.invenio.service.AbstractPersistenceService;

@Service
public class SettlementVolatilitySurfaceServiceImpl extends AbstractPersistenceService<SettlementVolatilitySurface, SettlementVolatilitySurfaceConverter, com.invenio.dao.entity.admin.SettlementVolatilitySurface, Integer, SettlementVolatilitySurfaceRepository>
		implements SettlementVolatilitySurfaceService {

	@Autowired
	public SettlementVolatilitySurfaceServiceImpl(SettlementVolatilitySurfaceConverter coverter, SettlementVolatilitySurfaceRepository repository) {
		super(coverter, repository);
	}
}
