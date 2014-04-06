package com.invenio.service.admin;

import com.invenio.schema.beans.admin.InvenioProduct;
import com.invenio.service.PersistenceService;


public interface InvenioProductService
		extends
		PersistenceService<InvenioProduct, com.invenio.dao.entity.admin.InvenioProduct, Integer> {

}
