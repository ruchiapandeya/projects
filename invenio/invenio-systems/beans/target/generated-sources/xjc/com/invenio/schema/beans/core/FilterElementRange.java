//
// This file was generated by the JavaTM Architecture for XML Binding(JAXB) Reference Implementation, v2.2.6 
// See <a href="http://java.sun.com/xml/jaxb">http://java.sun.com/xml/jaxb</a> 
// Any modifications to this file will be lost upon recompilation of the source schema. 
// Generated on: 2013.08.02 at 10:31:10 PM PDT 
//


package com.invenio.schema.beans.core;

import java.io.Serializable;
import javax.xml.bind.annotation.XmlAccessType;
import javax.xml.bind.annotation.XmlAccessorType;
import javax.xml.bind.annotation.XmlElement;
import javax.xml.bind.annotation.XmlType;


/**
 * <p>Java class for filter-element-range complex type.
 * 
 * <p>The following schema fragment specifies the expected content contained within this class.
 * 
 * <pre>
 * &lt;complexType name="filter-element-range">
 *   &lt;complexContent>
 *     &lt;extension base="{http://www.invenio.com/schema/beans/core}filter-element">
 *       &lt;sequence>
 *         &lt;element name="from-value" type="{http://www.w3.org/2001/XMLSchema}string"/>
 *         &lt;element name="to-value" type="{http://www.w3.org/2001/XMLSchema}string"/>
 *       &lt;/sequence>
 *     &lt;/extension>
 *   &lt;/complexContent>
 * &lt;/complexType>
 * </pre>
 * 
 * 
 */
@XmlAccessorType(XmlAccessType.FIELD)
@XmlType(name = "filter-element-range", propOrder = {
    "fromValue",
    "toValue"
})
public class FilterElementRange
    extends FilterElement
    implements Serializable
{

    @XmlElement(name = "from-value", required = true)
    protected String fromValue;
    @XmlElement(name = "to-value", required = true)
    protected String toValue;

    /**
     * Gets the value of the fromValue property.
     * 
     * @return
     *     possible object is
     *     {@link String }
     *     
     */
    public String getFromValue() {
        return fromValue;
    }

    /**
     * Sets the value of the fromValue property.
     * 
     * @param value
     *     allowed object is
     *     {@link String }
     *     
     */
    public void setFromValue(String value) {
        this.fromValue = value;
    }

    /**
     * Gets the value of the toValue property.
     * 
     * @return
     *     possible object is
     *     {@link String }
     *     
     */
    public String getToValue() {
        return toValue;
    }

    /**
     * Sets the value of the toValue property.
     * 
     * @param value
     *     allowed object is
     *     {@link String }
     *     
     */
    public void setToValue(String value) {
        this.toValue = value;
    }

}
