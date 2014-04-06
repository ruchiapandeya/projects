package com.invenio.converter.admin;

import org.dozer.Mapper;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

import com.invenio.converter.AbstractConverter;
import com.invenio.schema.beans.admin.DealTicket;

@Component
public class DealTicketConverter extends AbstractConverter<DealTicket, com.invenio.dao.entity.admin.DealTicket> {

	@Autowired
	public DealTicketConverter(Mapper mapper) {
		super(mapper, DealTicket.class, com.invenio.dao.entity.admin.DealTicket.class);
	}
}
