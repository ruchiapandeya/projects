package com.invenio.dao.repository.admin;

import org.springframework.data.jpa.repository.JpaRepository;

import com.invenio.dao.entity.admin.DerivativeType;

public interface DerivativeTypeRepository extends JpaRepository<DerivativeType, Integer> {

	public DerivativeType findByDerivativeType(String derivativeType);
}
