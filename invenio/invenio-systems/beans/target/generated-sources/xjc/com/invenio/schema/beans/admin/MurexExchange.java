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
 * <p>Java class for murex-exchange complex type.
 * 
 * <p>The following schema fragment specifies the expected content contained within this class.
 * 
 * <pre>
 * &lt;complexType name="murex-exchange">
 *   &lt;complexContent>
 *     &lt;extension base="{http://www.invenio.com/schema/beans/core}pk-entity-base">
 *       &lt;sequence>
 *         &lt;element name="murex-exchange-name" type="{http://www.w3.org/2001/XMLSchema}string"/>
 *         &lt;element name="murex-exchange-desc" type="{http://www.w3.org/2001/XMLSchema}string"/>
 *       &lt;/sequence>
 *     &lt;/extension>
 *   &lt;/complexContent>
 * &lt;/complexType>
 * </pre>
 * 
 * 
 */
@XmlAccessorType(XmlAccessType.FIELD)
@XmlType(name = "murex-exchange", propOrder = {
    "murexExchangeName",
    "murexExchangeDesc"
})
public class MurexExchange
    extends PkEntityBase
    implements Serializable
{

    @XmlElement(name = "murex-exchange-name", required = true)
    protected String murexExchangeName;
    @XmlElement(name = "murex-exchange-desc", required = true)
    protected String murexExchangeDesc;

    /**
     * Gets the value of the murexExchangeName property.
     * 
     * @return
     *     possible object is
     *     {@link String }
     *     
     */
    public String getMurexExchangeName() {
        return murexExchangeName;
    }

    /**
     * Sets the value of the murexExchangeName property.
     * 
     * @param value
     *     allowed object is
     *     {@link String }
     *     
     */
    public void setMurexExchangeName(String value) {
        this.murexExchangeName = value;
    }

    /**
     * Gets the value of the murexExchangeDesc property.
     * 
     * @return
     *     possible object is
     *     {@link String }
     *     
     */
    public String getMurexExchangeDesc() {
        return murexExchangeDesc;
    }

    /**
     * Sets the value of the murexExchangeDesc property.
     * 
     * @param value
     *     allowed object is
     *     {@link String }
     *     
     */
    public void setMurexExchangeDesc(String value) {
        this.murexExchangeDesc = value;
    }

}
