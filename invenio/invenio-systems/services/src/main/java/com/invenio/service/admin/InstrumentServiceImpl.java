package com.invenio.service.admin;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.converter.admin.InstrumentConverter;
import com.invenio.dao.repository.admin.InstrumentRepository;
import com.invenio.schema.beans.admin.Instrument;
import com.invenio.service.AbstractPersistenceService;

@Service
public class InstrumentServiceImpl extends AbstractPersistenceService<Instrument, InstrumentConverter, com.invenio.dao.entity.admin.Instrument, Integer, InstrumentRepository>
		implements InstrumentService {

	@Autowired
	public InstrumentServiceImpl(InstrumentConverter coverter, InstrumentRepository repository) {
		super(coverter, repository);
	}

	@Override
	public Instrument findByCode(String code) {
		com.invenio.dao.entity.admin.Instrument instrument = repository.findByCode(code);
		return converter.convertFrom(instrument);
	}
}
