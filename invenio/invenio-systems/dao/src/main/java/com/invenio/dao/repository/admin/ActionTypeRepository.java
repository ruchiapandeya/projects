package com.invenio.dao.repository.admin;

import org.springframework.data.jpa.repository.JpaRepository;

import com.invenio.dao.entity.admin.ActionType;

public interface ActionTypeRepository extends JpaRepository<ActionType, Integer> {

	public ActionType findByActionType (String actionType);
}
