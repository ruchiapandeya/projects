package com.invenio.converter.admin;

import org.dozer.Mapper;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.FutureContract;

@Component
public class FutureContractConverter extends AbstractConverter<FutureContract, com.invenio.dao.entity.admin.FutureContract> {

	@Autowired
	public FutureContractConverter(Mapper mapper) {
		super(mapper, FutureContract.class, com.invenio.dao.entity.admin.FutureContract.class);
	}
}
