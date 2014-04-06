//
// This file was generated by the JavaTM Architecture for XML Binding(JAXB) Reference Implementation, v2.2.6 
// See <a href="http://java.sun.com/xml/jaxb">http://java.sun.com/xml/jaxb</a> 
// Any modifications to this file will be lost upon recompilation of the source schema. 
// Generated on: 2013.08.02 at 10:31:10 PM PDT 
//


package com.invenio.schema.beans.admin;

import java.io.Serializable;
import java.math.BigDecimal;
import java.util.Date;
import javax.xml.bind.annotation.XmlAccessType;
import javax.xml.bind.annotation.XmlAccessorType;
import javax.xml.bind.annotation.XmlElement;
import javax.xml.bind.annotation.XmlType;
import com.invenio.schema.beans.core.PkEntityBase;


/**
 * <p>Java class for vol-dump complex type.
 * 
 * <p>The following schema fragment specifies the expected content contained within this class.
 * 
 * <pre>
 * &lt;complexType name="vol-dump">
 *   &lt;complexContent>
 *     &lt;extension base="{http://www.invenio.com/schema/beans/core}pk-entity-base">
 *       &lt;sequence>
 *         &lt;element name="vol-surface" type="{http://www.invenio.com/schema/beans/admin}vol-surface"/>
 *         &lt;element name="product" type="{http://www.w3.org/2001/XMLSchema}string"/>
 *         &lt;element name="start" type="{http://www.w3.org/2001/XMLSchema}decimal"/>
 *         &lt;element name="step" type="{http://www.w3.org/2001/XMLSchema}decimal"/>
 *         &lt;element name="extrapolate" type="{http://www.w3.org/2001/XMLSchema}string"/>
 *         &lt;element name="multiple" type="{http://www.w3.org/2001/XMLSchema}decimal"/>
 *         &lt;element name="code" type="{http://www.w3.org/2001/XMLSchema}string"/>
 *         &lt;element name="future-ref" type="{http://www.w3.org/2001/XMLSchema}string"/>
 *         &lt;element name="options-ref" type="{http://www.w3.org/2001/XMLSchema}string"/>
 *         &lt;element name="expiry-date" type="{http://www.invenio.com/schema/beans/core}date-time"/>
 *       &lt;/sequence>
 *     &lt;/extension>
 *   &lt;/complexContent>
 * &lt;/complexType>
 * </pre>
 * 
 * 
 */
@XmlAccessorType(XmlAccessType.FIELD)
@XmlType(name = "vol-dump", propOrder = {
    "volSurface",
    "product",
    "start",
    "step",
    "extrapolate",
    "multiple",
    "code",
    "futureRef",
    "optionsRef",
    "expiryDate"
})
public class VolDump
    extends PkEntityBase
    implements Serializable
{

    @XmlElement(name = "vol-surface", required = true)
    protected VolSurface volSurface;
    @XmlElement(required = true)
    protected String product;
    @XmlElement(required = true)
    protected BigDecimal start;
    @XmlElement(required = true)
    protected BigDecimal step;
    @XmlElement(required = true)
    protected String extrapolate;
    @XmlElement(required = true)
    protected BigDecimal multiple;
    @XmlElement(required = true)
    protected String code;
    @XmlElement(name = "future-ref", required = true)
    protected String futureRef;
    @XmlElement(name = "options-ref", required = true)
    protected String optionsRef;
    @XmlElement(name = "expiry-date", required = true)
    protected Date expiryDate;

    /**
     * Gets the value of the volSurface property.
     * 
     * @return
     *     possible object is
     *     {@link VolSurface }
     *     
     */
    public VolSurface getVolSurface() {
        return volSurface;
    }

    /**
     * Sets the value of the volSurface property.
     * 
     * @param value
     *     allowed object is
     *     {@link VolSurface }
     *     
     */
    public void setVolSurface(VolSurface value) {
        this.volSurface = value;
    }

    /**
     * Gets the value of the product property.
     * 
     * @return
     *     possible object is
     *     {@link String }
     *     
     */
    public String getProduct() {
        return product;
    }

    /**
     * Sets the value of the product property.
     * 
     * @param value
     *     allowed object is
     *     {@link String }
     *     
     */
    public void setProduct(String value) {
        this.product = value;
    }

    /**
     * Gets the value of the start property.
     * 
     * @return
     *     possible object is
     *     {@link BigDecimal }
     *     
     */
    public BigDecimal getStart() {
        return start;
    }

    /**
     * Sets the value of the start property.
     * 
     * @param value
     *     allowed object is
     *     {@link BigDecimal }
     *     
     */
    public void setStart(BigDecimal value) {
        this.start = value;
    }

    /**
     * Gets the value of the step property.
     * 
     * @return
     *     possible object is
     *     {@link BigDecimal }
     *     
     */
    public BigDecimal getStep() {
        return step;
    }

    /**
     * Sets the value of the step property.
     * 
     * @param value
     *     allowed object is
     *     {@link BigDecimal }
     *     
     */
    public void setStep(BigDecimal value) {
        this.step = value;
    }

    /**
     * Gets the value of the extrapolate property.
     * 
     * @return
     *     possible object is
     *     {@link String }
     *     
     */
    public String getExtrapolate() {
        return extrapolate;
    }

    /**
     * Sets the value of the extrapolate property.
     * 
     * @param value
     *     allowed object is
     *     {@link String }
     *     
     */
    public void setExtrapolate(String value) {
        this.extrapolate = value;
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

    /**
     * Gets the value of the code property.
     * 
     * @return
     *     possible object is
     *     {@link String }
     *     
     */
    public String getCode() {
        return code;
    }

    /**
     * Sets the value of the code property.
     * 
     * @param value
     *     allowed object is
     *     {@link String }
     *     
     */
    public void setCode(String value) {
        this.code = value;
    }

    /**
     * Gets the value of the futureRef property.
     * 
     * @return
     *     possible object is
     *     {@link String }
     *     
     */
    public String getFutureRef() {
        return futureRef;
    }

    /**
     * Sets the value of the futureRef property.
     * 
     * @param value
     *     allowed object is
     *     {@link String }
     *     
     */
    public void setFutureRef(String value) {
        this.futureRef = value;
    }

    /**
     * Gets the value of the optionsRef property.
     * 
     * @return
     *     possible object is
     *     {@link String }
     *     
     */
    public String getOptionsRef() {
        return optionsRef;
    }

    /**
     * Sets the value of the optionsRef property.
     * 
     * @param value
     *     allowed object is
     *     {@link String }
     *     
     */
    public void setOptionsRef(String value) {
        this.optionsRef = value;
    }

    /**
     * Gets the value of the expiryDate property.
     * 
     * @return
     *     possible object is
     *     {@link Date }
     *     
     */
    public Date getExpiryDate() {
        return expiryDate;
    }

    /**
     * Sets the value of the expiryDate property.
     * 
     * @param value
     *     allowed object is
     *     {@link Date }
     *     
     */
    public void setExpiryDate(Date value) {
        this.expiryDate = value;
    }

}
