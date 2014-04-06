package com.invenio.dao.entity.admin;

import javax.persistence.Entity;

import com.invenio.dao.entity.AbstractPkEntity;

@Entity
public class ExchangeExerciseType extends AbstractPkEntity {

	/**
	 * 
	 */
	private static final long serialVersionUID = -549215507989898497L;
	
	private String exchangeExerciseTypeName;
	public String getExchangeExerciseTypeName() {
		return exchangeExerciseTypeName;
	}
	public void setExchangeExerciseTypeName(String exchangeExerciseTypeName) {
		this.exchangeExerciseTypeName = exchangeExerciseTypeName;
	}

}
