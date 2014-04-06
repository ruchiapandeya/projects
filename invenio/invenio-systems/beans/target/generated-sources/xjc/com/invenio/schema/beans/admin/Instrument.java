//
// This file was generated by the JavaTM Architecture for XML Binding(JAXB) Reference Implementation, v2.2.6 
// See <a href="http://java.sun.com/xml/jaxb">http://java.sun.com/xml/jaxb</a> 
// Any modifications to this file will be lost upon recompilation of the source schema. 
// Generated on: 2013.08.02 at 10:31:10 PM PDT 
//


package com.invenio.schema.beans.admin;

import java.io.Serializable;
import java.math.BigDecimal;
import javax.xml.bind.annotation.XmlAccessType;
import javax.xml.bind.annotation.XmlAccessorType;
import javax.xml.bind.annotation.XmlElement;
import javax.xml.bind.annotation.XmlType;
import com.invenio.schema.beans.core.PkEntityBase;


/**
 * <p>Java class for instrument complex type.
 * 
 * <p>The following schema fragment specifies the expected content contained within this class.
 * 
 * <pre>
 * &lt;complexType name="instrument">
 *   &lt;complexContent>
 *     &lt;extension base="{http://www.invenio.com/schema/beans/core}pk-entity-base">
 *       &lt;sequence>
 *         &lt;element name="name" type="{http://www.w3.org/2001/XMLSchema}string"/>
 *         &lt;element name="instrument-code" type="{http://www.w3.org/2001/XMLSchema}string"/>
 *         &lt;element name="portfolio" type="{http://www.w3.org/2001/XMLSchema}string"/>
 *         &lt;element name="portfolio-a" type="{http://www.w3.org/2001/XMLSchema}string"/>
 *         &lt;element name="maturity" type="{http://www.w3.org/2001/XMLSchema}string"/>
 *         &lt;element name="start-value" type="{http://www.w3.org/2001/XMLSchema}decimal"/>
 *         &lt;element name="end-value" type="{http://www.w3.org/2001/XMLSchema}decimal"/>
 *         &lt;element name="multiple" type="{http://www.w3.org/2001/XMLSchema}decimal"/>
 *       &lt;/sequence>
 *     &lt;/extension>
 *   &lt;/complexContent>
 * &lt;/complexType>
 * </pre>
 * 
 * 
 */
@XmlAccessorType(XmlAccessType.FIELD)
@XmlType(name = "instrument", propOrder = {
    "name",
    "instrumentCode",
    "portfolio",
    "portfolioA",
    "maturity",
    "startValue",
    "endValue",
    "multiple"
})
public class Instrument
    extends PkEntityBase
    implements Serializable
{

    @XmlElement(required = true)
    protected String name;
    @XmlElement(name = "instrument-code", required = true)
    protected String instrumentCode;
    @XmlElement(required = true)
    protected String portfolio;
    @XmlElement(name = "portfolio-a", required = true)
    protected String portfolioA;
    @XmlElement(required = true)
    protected String maturity;
    @XmlElement(name = "start-value", required = true)
    protected BigDecimal startValue;
    @XmlElement(name = "end-value", required = true)
    protected BigDecimal endValue;
    @XmlElement(required = true)
    protected BigDecimal multiple;

    /**
     * Gets the value of the name property.
     * 
     * @return
     *     possible object is
     *     {@link String }
     *     
     */
    public String getName() {
        return name;
    }

    /**
     * Sets the value of the name property.
     * 
     * @param value
     *     allowed object is
     *     {@link String }
     *     
     */
    public void setName(String value) {
        this.name = value;
    }

    /**
     * Gets the value of the instrumentCode property.
     * 
     * @return
     *     possible object is
     *     {@link String }
     *     
     */
    public String getInstrumentCode() {
        return instrumentCode;
    }

    /**
     * Sets the value of the instrumentCode property.
     * 
     * @param value
     *     allowed object is
     *     {@link String }
     *     
     */
    public void setInstrumentCode(String value) {
        this.instrumentCode = value;
    }

    /**
     * Gets the value of the portfolio property.
     * 
     * @return
     *     possible object is
     *     {@link String }
     *     
     */
    public String getPortfolio() {
        return portfolio;
    }

    /**
     * Sets the value of the portfolio property.
     * 
     * @param value
     *     allowed object is
     *     {@link String }
     *     
     */
    public void setPortfolio(String value) {
        this.portfolio = value;
    }

    /**
     * Gets the value of the portfolioA property.
     * 
     * @return
     *     possible object is
     *     {@link String }
     *     
     */
    public String getPortfolioA() {
        return portfolioA;
    }

    /**
     * Sets the value of the portfolioA property.
     * 
     * @param value
     *     allowed object is
     *     {@link String }
     *     
     */
    public void setPortfolioA(String value) {
        this.portfolioA = value;
    }

    /**
     * Gets the value of the maturity property.
     * 
     * @return
     *     possible object is
     *     {@link String }
     *     
     */
    public String getMaturity() {
        return maturity;
    }

    /**
     * Sets the value of the maturity property.
     * 
     * @param value
     *     allowed object is
     *     {@link String }
     *     
     */
    public void setMaturity(String value) {
        this.maturity = value;
    }

    /**
     * Gets the value of the startValue property.
     * 
     * @return
     *     possible object is
     *     {@link BigDecimal }
     *     
     */
    public BigDecimal getStartValue() {
        return startValue;
    }

    /**
     * Sets the value of the startValue property.
     * 
     * @param value
     *     allowed object is
     *     {@link BigDecimal }
     *     
     */
    public void setStartValue(BigDecimal value) {
        this.startValue = value;
    }

    /**
     * Gets the value of the endValue property.
     * 
     * @return
     *     possible object is
     *     {@link BigDecimal }
     *     
     */
    public BigDecimal getEndValue() {
        return endValue;
    }

    /**
     * Sets the value of the endValue property.
     * 
     * @param value
     *     allowed object is
     *     {@link BigDecimal }
     *     
     */
    public void setEndValue(BigDecimal value) {
        this.endValue = value;
    }

    /**
     * Gets the value of the multiple property.
     * 
     * @return
     *     possible object is
     *     {@link BigDecimal }
     *     
     */
    public BigDecimal getMultiple() {
        return multiple;
    }

    /**
     * Sets the value of the multiple property.
     * 
     * @param value
     *     allowed object is
     *     {@link BigDecimal }
     *     
     */
    public void setMultiple(BigDecimal value) {
        this.multiple = value;
    }

}