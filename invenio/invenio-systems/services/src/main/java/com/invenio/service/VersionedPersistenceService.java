package com.invenio.service;

import java.io.Serializable;
import java.util.List;

import com.invenio.dao.entity.AbstractVersionedEntity;
import com.invenio.schema.beans.core.VersionInfo;
import com.invenio.schema.beans.core.VersionedEntityBase;

public interface VersionedPersistenceService<T extends VersionedEntityBase, E extends AbstractVersionedEntity, I extends Serializable>
		extends PersistenceService<T, E, I> {

	public T findLatest(String versionRef);

	public List<VersionInfo> findAllVersionsInfo(String versionRef);
	
	public List<T> findAllVersions(String versionRef);
}