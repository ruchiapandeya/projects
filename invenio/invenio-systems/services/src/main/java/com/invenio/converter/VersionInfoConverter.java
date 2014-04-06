package com.invenio.converter;

import org.dozer.Mapper;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

import com.invenio.dao.entity.AbstractVersionedEntity;
import com.invenio.schema.beans.core.VersionInfo;

@Component
public class VersionInfoConverter extends AbstractConverter<VersionInfo, AbstractVersionedEntity> {

	@Autowired
	public VersionInfoConverter(Mapper mapper) {
		super(mapper, VersionInfo.class, AbstractVersionedEntity.class);
	}
}
