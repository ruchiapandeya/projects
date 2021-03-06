//
// This file was generated by the JavaTM Architecture for XML Binding(JAXB) Reference Implementation, v2.2.6 
// See <a href="http://java.sun.com/xml/jaxb">http://java.sun.com/xml/jaxb</a> 
// Any modifications to this file will be lost upon recompilation of the source schema. 
// Generated on: 2013.08.02 at 10:31:10 PM PDT 
//


package com.invenio.schema.beans.admin;

import java.io.Serializable;
import java.util.Date;
import javax.xml.bind.annotation.XmlAccessType;
import javax.xml.bind.annotation.XmlAccessorType;
import javax.xml.bind.annotation.XmlElement;
import javax.xml.bind.annotation.XmlType;
import com.invenio.schema.beans.core.PkEntityBase;


/**
 * <p>Java class for bbg-ovdv-deltawise complex type.
 * 
 * <p>The following schema fragment specifies the expected content contained within this class.
 * 
 * <pre>
 * &lt;complexType name="bbg-ovdv-deltawise">
 *   &lt;complexContent>
 *     &lt;extension base="{http://www.invenio.com/schema/beans/core}pk-entity-base">
 *       &lt;sequence>
 *         &lt;element name="option-id" type="{http://www.invenio.com/schema/beans/admin}option_static_data"/>
 *         &lt;element name="date" type="{http://www.invenio.com/schema/beans/core}date-time"/>
 *         &lt;element name="a5dp" type="{http://www.w3.org/2001/XMLSchema}double"/>
 *         &lt;element name="a10dp" type="{http://www.w3.org/2001/XMLSchema}double"/>
 *         &lt;element name="a15dp" type="{http://www.w3.org/2001/XMLSchema}double"/>
 *         &lt;element name="a25dp" type="{http://www.w3.org/2001/XMLSchema}double"/>
 *         &lt;element name="a35dp" type="{http://www.w3.org/2001/XMLSchema}double"/>
 *         &lt;element name="a50d" type="{http://www.w3.org/2001/XMLSchema}double"/>
 *         &lt;element name="a35dc" type="{http://www.w3.org/2001/XMLSchema}double"/>
 *         &lt;element name="a25dc" type="{http://www.w3.org/2001/XMLSchema}double"/>
 *         &lt;element name="a15dc" type="{http://www.w3.org/2001/XMLSchema}double"/>
 *         &lt;element name="a10dc" type="{http://www.w3.org/2001/XMLSchema}double"/>
 *         &lt;element name="a5dc" type="{http://www.w3.org/2001/XMLSchema}double"/>
 *       &lt;/sequence>
 *     &lt;/extension>
 *   &lt;/complexContent>
 * &lt;/complexType>
 * </pre>
 * 
 * 
 */
@XmlAccessorType(XmlAccessType.FIELD)
@XmlType(name = "bbg-ovdv-deltawise", propOrder = {
    "optionId",
    "date",
    "a5Dp",
    "a10Dp",
    "a15Dp",
    "a25Dp",
    "a35Dp",
    "a50D",
    "a35Dc",
    "a25Dc",
    "a15Dc",
    "a10Dc",
    "a5Dc"
})
public class BbgOvdvDeltawise
    extends PkEntityBase
    implements Serializable
{

    @XmlElement(name = "option-id", required = true)
    protected OptionStaticData optionId;
    @XmlElement(required = true)
    protected Date date;
    @XmlElement(name = "a5dp", required = true, type = Double.class, nillable = true)
    protected Double a5Dp;
    @XmlElement(name = "a10dp", required = true, type = Double.class, nillable = true)
    protected Double a10Dp;
    @XmlElement(name = "a15dp", required = true, type = Double.class, nillable = true)
    protected Double a15Dp;
    @XmlElement(name = "a25dp", required = true, type = Double.class, nillable = true)
    protected Double a25Dp;
    @XmlElement(name = "a35dp", required = true, type = Double.class, nillable = true)
    protected Double a35Dp;
    @XmlElement(name = "a50d", required = true, type = Double.class, nillable = true)
    protected Double a50D;
    @XmlElement(name = "a35dc", required = true, type = Double.class, nillable = true)
    protected Double a35Dc;
    @XmlElement(name = "a25dc", required = true, type = Double.class, nillable = true)
    protected Double a25Dc;
    @XmlElement(name = "a15dc", required = true, type = Double.class, nillable = true)
    protected Double a15Dc;
    @XmlElement(name = "a10dc", required = true, type = Double.class, nillable = true)
    protected Double a10Dc;
    @XmlElement(name = "a5dc", required = true, type = Double.class, nillable = true)
    protected Double a5Dc;

    /**
     * Gets the value of the optionId property.
     * 
     * @return
     *     possible object is
     *     {@link OptionStaticData }
     *     
     */
    public OptionStaticData getOptionId() {
        return optionId;
    }

    /**
     * Sets the value of the optionId property.
     * 
     * @param value
     *     allowed object is
     *     {@link OptionStaticData }
     *     
     */
    public void setOptionId(OptionStaticData value) {
        this.optionId = value;
    }

    /**
     * Gets the value of the date property.
     * 
     * @return
     *     possible object is
     *     {@link Date }
     *     
     */
    public Date getDate() {
        return date;
    }

    /**
     * Sets the value of the date property.
     * 
     * @param value
     *     allowed object is
     *     {@link Date }
     *     
     */
    public void setDate(Date value) {
        this.date = value;
    }

    /**
     * Gets the value of the a5Dp property.
     * 
     * @return
     *     possible object is
     *     {@link Double }
     *     
     */
    public Double getA5Dp() {
        return a5Dp;
    }

    /**
     * Sets the value of the a5Dp property.
     * 
     * @param value
     *     allowed object is
     *     {@link Double }
     *     
     */
    public void setA5Dp(Double value) {
        this.a5Dp = value;
    }

    /**
     * Gets the value of the a10Dp property.
     * 
     * @return
     *     possible object is
     *     {@link Double }
     *     
     */
    public Double getA10Dp() {
        return a10Dp;
    }

    /**
     * Sets the value of the a10Dp property.
     * 
     * @param value
     *     allowed object is
     *     {@link Double }
     *     
     */
    public void setA10Dp(Double value) {
        this.a10Dp = value;
    }

    /**
     * Gets the value of the a15Dp property.
     * 
     * @return
     *     possible object is
     *     {@link Double }
     *     
     */
    public Double getA15Dp() {
        return a15Dp;
    }

    /**
     * Sets the value of the a15Dp property.
     * 
     * @param value
     *     allowed object is
     *     {@link Double }
     *     
     */
    public void setA15Dp(Double value) {
        this.a15Dp = value;
    }

    /**
     * Gets the value of the a25Dp property.
     * 
     * @return
     *     possible object is
     *     {@link Double }
     *     
     */
    public Double getA25Dp() {
        return a25Dp;
    }

    /**
     * Sets the value of the a25Dp property.
     * 
     * @param value
     *     allowed object is
     *     {@link Double }
     *     
     */
    public void setA25Dp(Double value) {
        this.a25Dp = value;
    }

    /**
     * Gets the value of the a35Dp property.
     * 
     * @return
     *     possible object is
     *     {@link Double }
     *     
     */
    public Double getA35Dp() {
        return a35Dp;
    }

    /**
     * Sets the value of the a35Dp property.
     * 
     * @param value
     *     allowed object is
     *     {@link Double }
     *     
     */
    public void setA35Dp(Double value) {
        this.a35Dp = value;
    }

    /**
     * Gets the value of the a50D property.
     * 
     * @return
     *     possible object is
     *     {@link Double }
     *     
     */
    public Double getA50D() {
        return a50D;
    }

    /**
     * Sets the value of the a50D property.
     * 
     * @param value
     *     allowed object is
     *     {@link Double }
     *     
     */
    public void setA50D(Double value) {
        this.a50D = value;
    }

    /**
     * Gets the value of the a35Dc property.
     * 
     * @return
     *     possible object is
     *     {@link Double }
     *     
     */
    public Double getA35Dc() {
        return a35Dc;
    }

    /**
     * Sets the value of the a35Dc property.
     * 
     * @param value
     *     allowed object is
     *     {@link Double }
     *     
     */
    public void setA35Dc(Double value) {
        this.a35Dc = value;
    }

    /**
     * Gets the value of the a25Dc property.
     * 
     * @return
     *     possible object is
     *     {@link Double }
     *     
     */
    public Double getA25Dc() {
        return a25Dc;
    }

    /**
     * Sets the value of the a25Dc property.
     * 
     * @param value
     *     allowed object is
     *     {@link Double }
     *     
     */
    public void setA25Dc(Double value) {
        this.a25Dc = value;
    }

    /**
     * Gets the value of the a15Dc property.
     * 
     * @return
     *     possible object is
     *     {@link Double }
     *     
     */
    public Double getA15Dc() {
        return a15Dc;
    }

    /**
     * Sets the value of the a15Dc property.
     * 
     * @param value
     *     allowed object is
     *     {@link Double }
     *     
     */
    public void setA15Dc(Double value) {
        this.a15Dc = value;
    }

    /**
     * Gets the value of the a10Dc property.
     * 
     * @return
     *     possible object is
     *     {@link Double }
     *     
     */
    public Double getA10Dc() {
        return a10Dc;
    }

    /**
     * Sets the value of the a10Dc property.
     * 
     * @param value
     *     allowed object is
     *     {@link Double }
     *     
     */
    public void setA10Dc(Double value) {
        this.a10Dc = value;
    }

    /**
     * Gets the value of the a5Dc property.
     * 
     * @return
     *     possible object is
     *     {@link Double }
     *     
     */
    public Double getA5Dc() {
        return a5Dc;
    }

    /**
     * Sets the value of the a5Dc property.
     * 
     * @param value
     *     allowed object is
     *     {@link Double }
     *     
     */
    public void setA5Dc(Double value) {
        this.a5Dc = value;
    }

}
