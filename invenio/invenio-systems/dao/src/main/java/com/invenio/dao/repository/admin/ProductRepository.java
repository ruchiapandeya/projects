package com.invenio.dao.repository.admin;

import org.springframework.data.jpa.repository.JpaRepository;

import com.invenio.dao.entity.admin.Product;

public interface ProductRepository extends JpaRepository<Product, Integer> {

}
