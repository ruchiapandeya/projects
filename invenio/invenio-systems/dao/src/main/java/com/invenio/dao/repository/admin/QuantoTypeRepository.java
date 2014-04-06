package com.invenio.dao.repository.admin;

import org.springframework.data.jpa.repository.JpaRepository;

import com.invenio.dao.entity.admin.QuantoType;

public interface QuantoTypeRepository extends JpaRepository<QuantoType, Integer> {

	public QuantoType findByQuantoType(String quantoType);
}
