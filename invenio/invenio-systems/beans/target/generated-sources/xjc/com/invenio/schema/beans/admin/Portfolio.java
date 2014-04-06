//
// This file was generated by the JavaTM Architecture for XML Binding(JAXB) Reference Implementation, v2.2.6 
// See <a href="http://java.sun.com/xml/jaxb">http://java.sun.com/xml/jaxb</a> 
// Any modifications to this file will be lost upon recompilation of the source schema. 
// Generated on: 2013.08.02 at 10:31:10 PM PDT 
//


package com.invenio.schema.beans.admin;

import java.io.Serializable;
import javax.xml.bind.annotation.XmlAccessType;
import javax.xml.bind.annotation.XmlAccessorType;
import javax.xml.bind.annotation.XmlElement;
import javax.xml.bind.annotation.XmlType;
import com.invenio.schema.beans.core.PkEntityBase;


/**
 * <p>Java class for portfolio complex type.
 * 
 * <p>The following schema fragment specifies the expected content contained within this class.
 * 
 * <pre>
 * &lt;complexType name="portfolio">
 *   &lt;complexContent>
 *     &lt;extension base="{http://www.invenio.com/schema/beans/core}pk-entity-base">
 *       &lt;sequence>
 *         &lt;element name="invenio_product" type="{http://www.invenio.com/schema/beans/admin}invenio-product"/>
 *         &lt;element name="portfolio_name" type="{http://www.w3.org/2001/XMLSchema}string"/>
 *         &lt;element name="sub_portfolio" type="{http://www.invenio.com/schema/beans/admin}sub-portfolio"/>
 *       &lt;/sequence>
 *     &lt;/extension>
 *   &lt;/complexContent>
 * &lt;/complexType>
 * </pre>
 * 
 * 
 */
@XmlAccessorType(XmlAccessType.FIELD)
@XmlType(name = "portfolio", propOrder = {
    "invenioProduct",
    "portfolioName",
    "subPortfolio"
})
public class Portfolio
    extends PkEntityBase
    implements Serializable
{

    @XmlElement(name = "invenio_product", required = true)
    protected InvenioProduct invenioProduct;
    @XmlElement(name = "portfolio_name", required = true)
    protected String portfolioName;
    @XmlElement(name = "sub_portfolio", required = true)
    protected SubPortfolio subPortfolio;

    /**
     * Gets the value of the invenioProduct property.
     * 
     * @return
     *     possible object is
     *     {@link InvenioProduct }
     *     
     */
    public InvenioProduct getInvenioProduct() {
        return invenioProduct;
    }

    /**
     * Sets the value of the invenioProduct property.
     * 
     * @param value
     *     allowed object is
     *     {@link InvenioProduct }
     *     
     */
    public void setInvenioProduct(InvenioProduct value) {
        this.invenioProduct = value;
    }

    /**
     * Gets the value of the portfolioName property.
     * 
     * @return
     *     possible object is
     *     {@link String }
     *     
     */
    public String getPortfolioName() {
        return portfolioName;
    }

    /**
     * Sets the value of the portfolioName property.
     * 
     * @param value
     *     allowed object is
     *     {@link String }
     *     
     */
    public void setPortfolioName(String value) {
        this.portfolioName = value;
    }

    /**
     * Gets the value of the subPortfolio property.
     * 
     * @return
     *     possible object is
     *     {@link SubPortfolio }
     *     
     */
    public SubPortfolio getSubPortfolio() {
        return subPortfolio;
    }

    /**
     * Sets the value of the subPortfolio property.
     * 
     * @param value
     *     allowed object is
     *     {@link SubPortfolio }
     *     
     */
    public void setSubPortfolio(SubPortfolio value) {
        this.subPortfolio = value;
    }

}
