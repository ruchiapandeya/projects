package com.invenio.dao.entity;

import java.sql.Timestamp;

import javax.persistence.MappedSuperclass;

@MappedSuperclass
public abstract class AbstractVersionedEntity extends AbstractPkEntity {

	/**
	 * 
	 */
	private static final long serialVersionUID = 8245494726877289018L;
	protected String versionRef;
	protected Integer versionNumber;
	protected Timestamp versionTimestamp;
	protected String versionBy;
	
	public String getVersionRef() {
		return versionRef;
	}
	public void setVersionRef(String versionRef) {
		this.versionRef = versionRef;
	}
	public Integer getVersionNumber() {
		return versionNumber;
	}
	public void setVersionNumber(Integer versionNumber) {
		this.versionNumber = versionNumber;
	}
	public Timestamp getVersionTimestamp() {
		return versionTimestamp;
	}
	public void setVersionTimestamp(Timestamp versionTimestamp) {
		this.versionTimestamp = versionTimestamp;
	}
	public String getVersionBy() {
		return versionBy;
	}
	public void setVersionBy(String versionBy) {
		this.versionBy = versionBy;
	}
}
