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
 * <p>Java class for bbg-ovdv-moneynesswise complex type.
 * 
 * <p>The following schema fragment specifies the expected content contained within this class.
 * 
 * <pre>
 * &lt;complexType name="bbg-ovdv-moneynesswise">
 *   &lt;complexContent>
 *     &lt;extension base="{http://www.invenio.com/schema/beans/core}pk-entity-base">
 *       &lt;sequence>
 *         &lt;element name="option-id" type="{http://www.invenio.com/schema/beans/admin}option_static_data"/>
 *         &lt;element name="date" type="{http://www.invenio.com/schema/beans/core}date-time"/>
 *         &lt;element name="a80" type="{http://www.w3.org/2001/XMLSchema}double"/>
 *         &lt;element name="a90" type="{http://www.w3.org/2001/XMLSchema}double"/>
 *         &lt;element name="a95" type="{http://www.w3.org/2001/XMLSchema}double"/>
 *         &lt;element name="a975" type="{http://www.w3.org/2001/XMLSchema}double"/>
 *         &lt;element name="a100" type="{http://www.w3.org/2001/XMLSchema}double"/>
 *         &lt;element name="a1025" type="{http://www.w3.org/2001/XMLSchema}double"/>
 *         &lt;element name="a105" type="{http://www.w3.org/2001/XMLSchema}double"/>
 *         &lt;element name="a110" type="{http://www.w3.org/2001/XMLSchema}double"/>
 *         &lt;element name="a120" type="{http://www.w3.org/2001/XMLSchema}double"/>
 *         &lt;element name="a150" type="{http://www.w3.org/2001/XMLSchema}double"/>
 *         &lt;element name="a200" type="{http://www.w3.org/2001/XMLSchema}double"/>
 *       &lt;/sequence>
 *     &lt;/extension>
 *   &lt;/complexContent>
 * &lt;/complexType>
 * </pre>
 * 
 * 
 */
@XmlAccessorType(XmlAccessType.FIELD)
@XmlType(name = "bbg-ovdv-moneynesswise", propOrder = {
    "optionId",
    "date",
    "a80",
    "a90",
    "a95",
    "a975",
    "a100",
    "a1025",
    "a105",
    "a110",
    "a120",
    "a150",
    "a200"
})
public class BbgOvdvMoneynesswise
    extends PkEntityBase
    implements Serializable
{

    @XmlElement(name = "option-id", required = true)
    protected OptionStaticData optionId;
    @XmlElement(required = true)
    protected Date date;
    @XmlElement(required = true, type = Double.class, nillable = true)
    protected Double a80;
    @XmlElement(required = true, type = Double.class, nillable = true)
    protected Double a90;
    @XmlElement(required = true, type = Double.class, nillable = true)
    protected Double a95;
    @XmlElement(required = true, type = Double.class, nillable = true)
    protected Double a975;
    @XmlElement(required = true, type = Double.class, nillable = true)
    protected Double a100;
    @XmlElement(required = true, type = Double.class, nillable = true)
    protected Double a1025;
    @XmlElement(required = true, type = Double.class, nillable = true)
    protected Double a105;
    @XmlElement(required = true, type = Double.class, nillable = true)
    protected Double a110;
    @XmlElement(required = true, type = Double.class, nillable = true)
    protected Double a120;
    @XmlElement(required = true, type = Double.class, nillable = true)
    protected Double a150;
    @XmlElement(required = true, type = Double.class, nillable = true)
    protected Double a200;

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
     * Gets the value of the a80 property.
     * 
     * @return
     *     possible object is
     *     {@link Double }
     *     
     */
    public Double getA80() {
        return a80;
    }

    /**
     * Sets the value of the a80 property.
     * 
     * @param value
     *     allowed object is
     *     {@link Double }
     *     
     */
    public void setA80(Double value) {
        this.a80 = value;
    }

    /**
     * Gets the value of the a90 property.
     * 
     * @return
     *     possible object is
     *     {@link Double }
     *     
     */
    public Double getA90() {
        return a90;
    }

    /**
     * Sets the value of the a90 property.
     * 
     * @param value
     *     allowed object is
     *     {@link Double }
     *     
     */
    public void setA90(Double value) {
        this.a90 = value;
    }

    /**
     * Gets the value of the a95 property.
     * 
     * @return
     *     possible object is
     *     {@link Double }
     *     
     */
    public Double getA95() {
        return a95;
    }

    /**
     * Sets the value of the a95 property.
     * 
     * @param value
     *     allowed object is
     *     {@link Double }
     *     
     */
    public void setA95(Double value) {
        this.a95 = value;
    }

    /**
     * Gets the value of the a975 property.
     * 
     * @return
     *     possible object is
     *     {@link Double }
     *     
     */
    public Double getA975() {
        return a975;
    }

    /**
     * Sets the value of the a975 property.
     * 
     * @param value
     *     allowed object is
     *     {@link Double }
     *     
     */
    public void setA975(Double value) {
        this.a975 = value;
    }

    /**
     * Gets the value of the a100 property.
     * 
     * @return
     *     possible object is
     *     {@link Double }
     *     
     */
    public Double getA100() {
        return a100;
    }

    /**
     * Sets the value of the a100 property.
     * 
     * @param value
     *     allowed object is
     *     {@link Double }
     *     
     */
    public void setA100(Double value) {
        this.a100 = value;
    }

    /**
     * Gets the value of the a1025 property.
     * 
     * @return
     *     possible object is
     *     {@link Double }
     *     
     */
    public Double getA1025() {
        return a1025;
    }

    /**
     * Sets the value of the a1025 property.
     * 
     * @param value
     *     allowed object is
     *     {@link Double }
     *     
     */
    public void setA1025(Double value) {
        this.a1025 = value;
    }

    /**
     * Gets the value of the a105 property.
     * 
     * @return
     *     possible object is
     *     {@link Double }
     *     
     */
    public Double getA105() {
        return a105;
    }

    /**
     * Sets the value of the a105 property.
     * 
     * @param value
     *     allowed object is
     *     {@link Double }
     *     
     */
    public void setA105(Double value) {
        this.a105 = value;
    }

    /**
     * Gets the value of the a110 property.
     * 
     * @return
     *     possible object is
     *     {@link Double }
     *     
     */
    public Double getA110() {
        return a110;
    }

    /**
     * Sets the value of the a110 property.
     * 
     * @param value
     *     allowed object is
     *     {@link Double }
     *     
     */
    public void setA110(Double value) {
        this.a110 = value;
    }

    /**
     * Gets the value of the a120 property.
     * 
     * @return
     *     possible object is
     *     {@link Double }
     *     
     */
    public Double getA120() {
        return a120;
    }

    /**
     * Sets the value of the a120 property.
     * 
     * @param value
     *     allowed object is
     *     {@link Double }
     *     
     */
    public void setA120(Double value) {
        this.a120 = value;
    }

    /**
     * Gets the value of the a150 property.
     * 
     * @return
     *     possible object is
     *     {@link Double }
     *     
     */
    public Double getA150() {
        return a150;
    }

    /**
     * Sets the value of the a150 property.
     * 
     * @param value
     *     allowed object is
     *     {@link Double }
     *     
     */
    public void setA150(Double value) {
        this.a150 = value;
    }

    /**
     * Gets the value of the a200 property.
     * 
     * @return
     *     possible object is
     *     {@link Double }
     *     
     */
    public Double getA200() {
        return a200;
    }

    /**
     * Sets the value of the a200 property.
     * 
     * @param value
     *     allowed object is
     *     {@link Double }
     *     
     */
    public void setA200(Double value) {
        this.a200 = value;
    }

}
