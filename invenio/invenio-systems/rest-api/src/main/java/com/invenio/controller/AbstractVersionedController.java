package com.invenio.controller;

import java.io.Serializable;
import java.util.List;

import javax.ws.rs.Consumes;
import javax.ws.rs.GET;
import javax.ws.rs.POST;
import javax.ws.rs.Path;
import javax.ws.rs.PathParam;
import javax.ws.rs.Produces;
import javax.ws.rs.core.MediaType;

import com.invenio.dao.entity.AbstractVersionedEntity;
import com.invenio.restapi.exception.UnsupportedApiException;
import com.invenio.schema.beans.core.VersionInfo;
import com.invenio.schema.beans.core.VersionedEntityBase;
import com.invenio.service.VersionedPersistenceService;

public abstract class AbstractVersionedController<T extends VersionedEntityBase, E extends AbstractVersionedEntity, I extends Serializable, S extends VersionedPersistenceService<T, E, I>>
		extends
		AbstractController<T, E, I, VersionedPersistenceService<T, E, I>> {

	protected final S service;

	public AbstractVersionedController(String resourceName, S service) {
		super(resourceName, service);
		this.service = service;
	}

	@GET
	@Path("findAll")
	@Produces(MediaType.APPLICATION_JSON)
	public List<T> findAll() {
		return service.findAll();
	}
	
	@GET
	@Path("version/ref/{ref}")
	@Produces(MediaType.APPLICATION_JSON)
	public T findByVersionRef(@PathParam("ref") String versionRef) {
		return service.findLatest(versionRef);
	}

	@GET
	@Path("versions/info/{ref}")
	@Produces(MediaType.APPLICATION_JSON)
	public List<VersionInfo> findVersionsInfo(@PathParam("ref") String versionRef) {
		return service.findAllVersionsInfo(versionRef);
	}
	
	@GET
	@Path("versions/{ref}")
	@Produces(MediaType.APPLICATION_JSON)
	public List<T> findVersions(@PathParam("ref") String versionRef) {
		return service.findAllVersions(versionRef);
	}

	@POST
	@Path("save")
	@Consumes(MediaType.APPLICATION_JSON)
	public void save(T obj) {
		throw new UnsupportedApiException("save", resourceName);
	}

	@POST
	@Path("saveAll")
	@Consumes(MediaType.APPLICATION_JSON)
	public void saveAll(List<T> list) {
		throw new UnsupportedApiException("saveAll", resourceName);
	}
}
