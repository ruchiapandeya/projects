package com.invenio.service;

import java.io.Serializable;
import java.util.List;

import com.invenio.dao.entity.AbstractPkEntity;
import com.invenio.schema.beans.core.PkEntityBase;

public interface PersistenceService<T extends PkEntityBase, E extends AbstractPkEntity, I extends Serializable> {

	public T findById(I id);

	public List<T> findAll();

	public T save(T entity);
	
	public List<T> saveAll(List<T> list);

	public T update(T obj);
	
	public List<T> updateAll(List<T> list);
	
	public void delete(T entity);
}
