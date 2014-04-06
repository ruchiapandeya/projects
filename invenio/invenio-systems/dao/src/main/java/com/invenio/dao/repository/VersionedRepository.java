package com.invenio.dao.repository;

import java.io.Serializable;
import java.util.List;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.repository.NoRepositoryBean;

import com.invenio.dao.entity.AbstractVersionedEntity;

@NoRepositoryBean
public interface VersionedRepository<E extends AbstractVersionedEntity, I extends Serializable> extends JpaRepository<E, I> {

	public E findLatest(String versionRef);
	
	public List<E> findAllVersions(String versionRef);
	
	public List<E> findAllLatest();
}
