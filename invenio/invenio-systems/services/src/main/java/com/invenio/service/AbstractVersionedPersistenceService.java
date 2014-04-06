package com.invenio.service;

import java.io.Serializable;
import java.util.ArrayList;
import java.util.List;
import java.util.UUID;

import org.springframework.security.core.context.SecurityContextHolder;
import org.springframework.security.core.userdetails.User;
import org.springframework.transaction.annotation.Transactional;

import com.invenio.converter.Converter;
import com.invenio.converter.VersionInfoConverter;
import com.invenio.dao.entity.AbstractVersionedEntity;
import com.invenio.dao.repository.VersionedRepository;
import com.invenio.schema.beans.core.VersionInfo;
import com.invenio.schema.beans.core.VersionedEntityBase;
import com.invenio.service.exception.InvalidOperationException;
import com.invenio.service.exception.StaleDataException;

@Transactional(readOnly = true)
public abstract class AbstractVersionedPersistenceService<T extends VersionedEntityBase, C extends Converter<T, E>, E extends AbstractVersionedEntity, I extends Serializable, R extends VersionedRepository<E, I>>
		extends AbstractPersistenceService<T, C, E, I, R> implements
		VersionedPersistenceService<T, E, I> {

	protected final Converter<T, E> converter;
	protected final VersionInfoConverter versionInfoConverter;
	protected final R repository;

	public AbstractVersionedPersistenceService(Converter<T, E> converter, VersionInfoConverter versionInfoConverter, R repository) {
		super(converter, repository);
		this.versionInfoConverter = versionInfoConverter;
		this.converter = converter;
		this.repository = repository;
	}

	@Override
	public List<T> findAll() {
		return converter.convertFrom(repository.findAllLatest());
	}
	
	@Override
	public T findLatest(String versionRef) {
		E entity = repository.findLatest(versionRef);
		return converter.convertFrom(entity);
	}

	@Override
	public List<VersionInfo> findAllVersionsInfo(String versionRef) {
		List<VersionInfo> versionInfoList = new ArrayList<VersionInfo>();
		List<E> list = repository.findAllVersions(versionRef);
		for (E entity : list) {
			versionInfoList.add(versionInfoConverter.convertFrom(entity));
		}
		return versionInfoList;
	}
	
	@Override
	public List<T> findAllVersions(String versionRef) {
		List<E> list = repository.findAllVersions(versionRef);
		return converter.convertFrom(list);
	}

	@Transactional(readOnly = false)
	@SuppressWarnings("all")
	@Override
	public T save(T obj) {
		if(obj.getId() > 0) {
			throw new InvalidOperationException("Error while performing save operation, can't create an existing entity.");
		}
		obj.setVersionRef(UUID.randomUUID().toString());
		obj.setVersionNumber(0);
		User user = (User) SecurityContextHolder.getContext().getAuthentication().getPrincipal();
		obj.setVersionBy(user.getUsername());
		return super.save(obj);
	}

	@Override
	@SuppressWarnings("all")
	@Transactional(readOnly = false)
	public T update(T obj) {
		if(obj.getId() < 1) {
			throw new InvalidOperationException("Error while performing update operation, only existing objects can be updated.");
		}
		String versionRef = obj.getVersionRef();
		E savedEntity = repository.findOne((I) new Integer(obj.getId()));
		E latestEntity = repository.findLatest(savedEntity.getVersionRef());
		if(latestEntity.getVersionNumber() > savedEntity.getVersionNumber()) {
			throw new StaleDataException("The record you are trying to update is stale and has moved ahead by " + (latestEntity.getVersionNumber() - savedEntity.getVersionNumber()) + " update(s).");
		}
		obj.setId(0);
		obj.setVersionRef(latestEntity.getVersionRef());
		obj.setVersionNumber(latestEntity.getVersionNumber() + 1);
		User user = (User) SecurityContextHolder.getContext().getAuthentication().getPrincipal();
		obj.setVersionBy(user.getUsername());
		E entity = repository.save(converter.convertTo(obj));
		return converter.convertFrom(entity);
	}
}