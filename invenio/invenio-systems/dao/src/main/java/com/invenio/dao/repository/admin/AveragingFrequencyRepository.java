package com.invenio.dao.repository.admin;

import org.springframework.data.jpa.repository.JpaRepository;

import com.invenio.dao.entity.admin.AveragingFrequency;

public interface AveragingFrequencyRepository extends JpaRepository<AveragingFrequency, Integer> {

	public AveragingFrequency findByFrequencyType (String frequencyType);
}
