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
 * <p>Java class for accumulation-frequency complex type.
 * 
 * <p>The following schema fragment specifies the expected content contained within this class.
 * 
 * <pre>
 * &lt;complexType name="accumulation-frequency">
 *   &lt;complexContent>
 *     &lt;extension base="{http://www.invenio.com/schema/beans/core}pk-entity-base">
 *       &lt;sequence>
 *         &lt;element name="frequency-type" type="{http://www.w3.org/2001/XMLSchema}string"/>
 *       &lt;/sequence>
 *     &lt;/extension>
 *   &lt;/complexContent>
 * &lt;/complexType>
 * </pre>
 * 
 * 
 */
@XmlAccessorType(XmlAccessType.FIELD)
@XmlType(name = "accumulation-frequency", propOrder = {
    "frequencyType"
})
public class AccumulationFrequency
    extends PkEntityBase
    implements Serializable
{

    @XmlElement(name = "frequency-type", required = true)
    protected String frequencyType;

    /**
     * Gets the value of the frequencyType property.
     * 
     * @return
     *     possible object is
     *     {@link String }
     *     
     */
    public String getFrequencyType() {
        return frequencyType;
    }

    /**
     * Sets the value of the frequencyType property.
     * 
     * @param value
     *     allowed object is
     *     {@link String }
     *     
     */
    public void setFrequencyType(String value) {
        this.frequencyType = value;
    }

}
