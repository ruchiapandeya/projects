package com.invenio.converter.admin;

import org.dozer.Mapper;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.OptionContract;

@Component
public class OptionContractConverter extends AbstractConverter<OptionContract, com.invenio.dao.entity.admin.OptionContract> {

	@Autowired
	public OptionContractConverter(Mapper mapper) {
		super(mapper, OptionContract.class, com.invenio.dao.entity.admin.OptionContract.class);
	}
}
