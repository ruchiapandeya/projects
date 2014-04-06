package com.invenio.dao.repository.admin;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.query.Param;

import com.invenio.dao.entity.admin.Instrument;

public interface InstrumentRepository extends JpaRepository<Instrument, Integer> {

	@Query("FROM com.invenio.dao.entity.admin.Instrument i WHERE i.code = :code")
	Instrument findByCode(@Param("code") String code);
}
