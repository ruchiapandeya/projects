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
 * <p>Java class for options-rjo complex type.
 * 
 * <p>The following schema fragment specifies the expected content contained within this class.
 * 
 * <pre>
 * &lt;complexType name="options-rjo">
 *   &lt;complexContent>
 *     &lt;extension base="{http://www.invenio.com/schema/beans/core}pk-entity-base">
 *       &lt;sequence>
 *         &lt;element name="options-name" type="{http://www.w3.org/2001/XMLSchema}string"/>
 *         &lt;element name="options-desc" type="{http://www.w3.org/2001/XMLSchema}string"/>
 *       &lt;/sequence>
 *     &lt;/extension>
 *   &lt;/complexContent>
 * &lt;/complexType>
 * </pre>
 * 
 * 
 */
@XmlAccessorType(XmlAccessType.FIELD)
@XmlType(name = "options-rjo", propOrder = {
    "optionsName",
    "optionsDesc"
})
public class OptionsRjo
    extends PkEntityBase
    implements Serializable
{

    @XmlElement(name = "options-name", required = true)
    protected String optionsName;
    @XmlElement(name = "options-desc", required = true)
    protected String optionsDesc;

    /**
     * Gets the value of the optionsName property.
     * 
     * @return
     *     possible object is
     *     {@link String }
     *     
     */
    public String getOptionsName() {
        return optionsName;
    }

    /**
     * Sets the value of the optionsName property.
     * 
     * @param value
     *     allowed object is
     *     {@link String }
     *     
     */
    public void setOptionsName(String value) {
        this.optionsName = value;
    }

    /**
     * Gets the value of the optionsDesc property.
     * 
     * @return
     *     possible object is
     *     {@link String }
     *     
     */
    public String getOptionsDesc() {
        return optionsDesc;
    }

    /**
     * Sets the value of the optionsDesc property.
     * 
     * @param value
     *     allowed object is
     *     {@link String }
     *     
     */
    public void setOptionsDesc(String value) {
        this.optionsDesc = value;
    }

}
