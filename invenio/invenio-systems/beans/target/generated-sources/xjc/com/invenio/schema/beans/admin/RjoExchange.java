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
 * <p>Java class for rjo-exchange complex type.
 * 
 * <p>The following schema fragment specifies the expected content contained within this class.
 * 
 * <pre>
 * &lt;complexType name="rjo-exchange">
 *   &lt;complexContent>
 *     &lt;extension base="{http://www.invenio.com/schema/beans/core}pk-entity-base">
 *       &lt;sequence>
 *         &lt;element name="rjo-exchange-name" type="{http://www.w3.org/2001/XMLSchema}string"/>
 *         &lt;element name="rjo-exchange-desc" type="{http://www.w3.org/2001/XMLSchema}string"/>
 *       &lt;/sequence>
 *     &lt;/extension>
 *   &lt;/complexContent>
 * &lt;/complexType>
 * </pre>
 * 
 * 
 */
@XmlAccessorType(XmlAccessType.FIELD)
@XmlType(name = "rjo-exchange", propOrder = {
    "rjoExchangeName",
    "rjoExchangeDesc"
})
public class RjoExchange
    extends PkEntityBase
    implements Serializable
{

    @XmlElement(name = "rjo-exchange-name", required = true)
    protected String rjoExchangeName;
    @XmlElement(name = "rjo-exchange-desc", required = true)
    protected String rjoExchangeDesc;

    /**
     * Gets the value of the rjoExchangeName property.
     * 
     * @return
     *     possible object is
     *     {@link String }
     *     
     */
    public String getRjoExchangeName() {
        return rjoExchangeName;
    }

    /**
     * Sets the value of the rjoExchangeName property.
     * 
     * @param value
     *     allowed object is
     *     {@link String }
     *     
     */
    public void setRjoExchangeName(String value) {
        this.rjoExchangeName = value;
    }

    /**
     * Gets the value of the rjoExchangeDesc property.
     * 
     * @return
     *     possible object is
     *     {@link String }
     *     
     */
    public String getRjoExchangeDesc() {
        return rjoExchangeDesc;
    }

    /**
     * Sets the value of the rjoExchangeDesc property.
     * 
     * @param value
     *     allowed object is
     *     {@link String }
     *     
     */
    public void setRjoExchangeDesc(String value) {
        this.rjoExchangeDesc = value;
    }

}
