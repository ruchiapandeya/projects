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
 * <p>Java class for settlement_volatility_surface complex type.
 * 
 * <p>The following schema fragment specifies the expected content contained within this class.
 * 
 * <pre>
 * &lt;complexType name="settlement_volatility_surface">
 *   &lt;complexContent>
 *     &lt;extension base="{http://www.invenio.com/schema/beans/core}pk-entity-base">
 *       &lt;sequence>
 *         &lt;element name="option-id" type="{http://www.invenio.com/schema/beans/admin}option_static_data"/>
 *         &lt;element name="strike" type="{http://www.w3.org/2001/XMLSchema}decimal"/>
 *         &lt;element name="volatility" type="{http://www.w3.org/2001/XMLSchema}decimal"/>
 *         &lt;element name="dates" type="{http://www.invenio.com/schema/beans/core}date-time"/>
 *       &lt;/sequence>
 *     &lt;/extension>
 *   &lt;/complexContent>
 * &lt;/complexType>
 * </pre>
 * 
 * 
 */
@XmlAccessorType(XmlAccessType.FIELD)
@XmlType(name = "settlement_volatility_surface", propOrder = {
    "optionId",
    "strike",
    "volatility",
    "dates"
})
public class SettlementVolatilitySurface
    extends PkEntityBase
    implements Serializable
{

    @XmlElement(name = "option-id", required = true)
    protected OptionStaticData optionId;
    @XmlElement(required = true)
    protected BigDecimal strike;
    @XmlElement(required = true)
    protected BigDecimal volatility;
    @XmlElement(required = true)
    protected Date dates;

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
     * Gets the value of the strike property.
     * 
     * @return
     *     possible object is
     *     {@link BigDecimal }
     *     
     */
    public BigDecimal getStrike() {
        return strike;
    }

    /**
     * Sets the value of the strike property.
     * 
     * @param value
     *     allowed object is
     *     {@link BigDecimal }
     *     
     */
    public void setStrike(BigDecimal value) {
        this.strike = value;
    }

    /**
     * Gets the value of the volatility property.
     * 
     * @return
     *     possible object is
     *     {@link BigDecimal }
     *     
     */
    public BigDecimal getVolatility() {
        return volatility;
    }

    /**
     * Sets the value of the volatility property.
     * 
     * @param value
     *     allowed object is
     *     {@link BigDecimal }
     *     
     */
    public void setVolatility(BigDecimal value) {
        this.volatility = value;
    }

    /**
     * Gets the value of the dates property.
     * 
     * @return
     *     possible object is
     *     {@link Date }
     *     
     */
    public Date getDates() {
        return dates;
    }

    /**
     * Sets the value of the dates property.
     * 
     * @param value
     *     allowed object is
     *     {@link Date }
     *     
     */
    public void setDates(Date value) {
        this.dates = value;
    }

}