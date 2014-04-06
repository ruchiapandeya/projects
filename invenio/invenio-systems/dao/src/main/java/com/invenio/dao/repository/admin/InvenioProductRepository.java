package com.invenio.dao.repository.admin;

import org.springframework.data.jpa.repository.JpaRepository;

import com.invenio.dao.entity.admin.InvenioProduct;

public interface InvenioProductRepository extends JpaRepository<InvenioProduct, Integer> {

}
