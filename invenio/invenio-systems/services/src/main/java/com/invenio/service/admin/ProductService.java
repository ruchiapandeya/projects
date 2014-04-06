package com.invenio.service.admin;

import com.invenio.schema.beans.admin.Product;
import com.invenio.service.PersistenceService;


public interface ProductService extends PersistenceService<Product, com.invenio.dao.entity.admin.Product, Integer> {

}
