package com.invenio.dao.repository.admin;

import org.springframework.data.jpa.repository.JpaRepository;

import com.invenio.dao.entity.admin.BloombergProduct;

public interface BloombergProductRepository extends JpaRepository<BloombergProduct, Integer> {

}