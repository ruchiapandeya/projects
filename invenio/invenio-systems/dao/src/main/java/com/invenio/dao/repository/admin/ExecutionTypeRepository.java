package com.invenio.dao.repository.admin;

import org.springframework.data.jpa.repository.JpaRepository;

import com.invenio.dao.entity.admin.ExecutionType;

public interface ExecutionTypeRepository extends JpaRepository<ExecutionType, Integer> {

}
