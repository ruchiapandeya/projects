package com.invenio.dao.repository.admin;

import org.springframework.data.jpa.repository.JpaRepository;

import com.invenio.dao.entity.admin.AccumulationFrequency;

public interface AccumulationFrequencyRepository extends JpaRepository<AccumulationFrequency, Integer> {

	public AccumulationFrequency findByFrequencyType (String frequencyType);
}
