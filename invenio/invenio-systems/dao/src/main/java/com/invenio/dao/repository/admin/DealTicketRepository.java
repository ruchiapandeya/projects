package com.invenio.dao.repository.admin;

import java.util.List;

import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.query.Param;

import com.invenio.dao.entity.admin.DealTicket;
import com.invenio.dao.repository.VersionedRepository;

public interface DealTicketRepository extends VersionedRepository<DealTicket, Integer> {

	@Query("select d FROM com.invenio.dao.entity.admin.DealTicket d WHERE d.versionRef = :versionRef AND d.versionNumber = (SELECT MAX(d.versionNumber) FROM com.invenio.dao.entity.admin.DealTicket d WHERE d.versionRef = :versionRef) order by d.versionNumber desc")
	public DealTicket findLatest(@Param("versionRef") String versionRef);
	
	@Override
	@Query("select d FROM com.invenio.dao.entity.admin.DealTicket d WHERE d.versionRef = :versionRef order by d.versionNumber desc")
	public List<DealTicket> findAllVersions(@Param("versionRef") String versionRef);
	
	@Override
	@Query("select d FROM com.invenio.dao.entity.admin.DealTicket d WHERE d.versionNumber = (SELECT MAX(dt.versionNumber) FROM com.invenio.dao.entity.admin.DealTicket dt WHERE d.versionRef = dt.versionRef)")
	public List<DealTicket> findAllLatest();
		
	public DealTicket findById(Integer id);
}
