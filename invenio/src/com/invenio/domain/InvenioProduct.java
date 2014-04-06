package com.invenio.domain;

// Generated May 4, 2013 11:37:21 PM by Hibernate Tools 3.4.0.CR1

import static javax.persistence.GenerationType.IDENTITY;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.Id;
import javax.persistence.Table;

/**
 * InvenioProduct generated by hbm2java
 */
@Entity
@Table(name = "invenio_product")
public class InvenioProduct implements java.io.Serializable {

	/**
	 * 
	 */
	private static final long serialVersionUID = -8606664390804156320L;
	private Integer productId;
	private String productName;
	private String productDesc;

	public InvenioProduct() {
	}

	public InvenioProduct(Integer productId) {
		this.productId = productId;
	}
	
	@Id
	@GeneratedValue(strategy = IDENTITY)
	@Column(name = "invenio_product_id", unique = true, nullable = false)
	public Integer getProductId() {
		return this.productId;
	}

	public void setProductId(Integer productId) {
		this.productId = productId;
	}

	@Column(name = "invenio_product_name", nullable = false, length = 200)
	public String getProductName() {
		return this.productName;
	}

	public void setProductName(String productName) {
		this.productName = productName;
	}

	@Column(name = "invenio_product_desc", nullable = true, length = 1000)
	public String getProductDesc() {
		return this.productDesc;
	}

	public void setProductDesc(String productDesc) {
		this.productDesc = productDesc;
	}

}
