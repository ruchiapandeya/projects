package com.invenio.service.admin;

import com.invenio.schema.beans.admin.Instrument;
import com.invenio.service.PersistenceService;


public interface InstrumentService extends PersistenceService<Instrument, com.invenio.dao.entity.admin.Instrument, Integer> {

	public Instrument findByCode(String code);
}
