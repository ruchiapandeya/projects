package com.invenio.dao.repository.admin;

import org.springframework.data.jpa.repository.JpaRepository;

import com.invenio.dao.entity.admin.Portfolio;

public interface PortfolioRepository extends JpaRepository<Portfolio, Integer> {

}
