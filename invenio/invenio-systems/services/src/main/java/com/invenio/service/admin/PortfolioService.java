package com.invenio.service.admin;

import com.invenio.schema.beans.admin.Portfolio;
import com.invenio.service.PersistenceService;


public interface PortfolioService extends PersistenceService<Portfolio, com.invenio.dao.entity.admin.Portfolio, Integer> {

}
