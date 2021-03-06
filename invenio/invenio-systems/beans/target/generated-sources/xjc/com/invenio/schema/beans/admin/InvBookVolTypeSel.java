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
 * <p>Java class for inv-book-vol-type-sel complex type.
 * 
 * <p>The following schema fragment specifies the expected content contained within this class.
 * 
 * <pre>
 * &lt;complexType name="inv-book-vol-type-sel">
 *   &lt;complexContent>
 *     &lt;extension base="{http://www.invenio.com/schema/beans/core}pk-entity-base">
 *       &lt;sequence>
 *         &lt;element name="sub-portfolio" type="{http://www.invenio.com/schema/beans/admin}sub-portfolio"/>
 *         &lt;element name="date" type="{http://www.invenio.com/schema/beans/core}date-time"/>
 *         &lt;element name="option-id" type="{http://www.invenio.com/schema/beans/admin}option_static_data"/>
 *         &lt;element name="vol-surface-type" type="{http://www.invenio.com/schema/beans/admin}vol-surface"/>
 *         &lt;element name="intrapolation-technique" type="{http://www.invenio.com/schema/beans/admin}intrapolation-technique"/>
 *         &lt;element name="extrapolation-technique" type="{http://www.invenio.com/schema/beans/admin}extrapolation-technique"/>
 *       &lt;/sequence>
 *     &lt;/extension>
 *   &lt;/complexContent>
 * &lt;/complexType>
 * </pre>
 * 
 * 
 */
@XmlAccessorType(XmlAccessType.FIELD)
@XmlType(name = "inv-book-vol-type-sel", propOrder = {
    "subPortfolio",
    "date",
    "optionId",
    "volSurfaceType",
    "intrapolationTechnique",
    "extrapolationTechnique"
})
public class InvBookVolTypeSel
    extends PkEntityBase
    implements Serializable
{

    @XmlElement(name = "sub-portfolio", required = true)
    protected SubPortfolio subPortfolio;
    @XmlElement(required = true)
    protected Date date;
    @XmlElement(name = "option-id", required = true)
    protected OptionStaticData optionId;
    @XmlElement(name = "vol-surface-type", required = true)
    protected VolSurface volSurfaceType;
    @XmlElement(name = "intrapolation-technique", required = true)
    protected IntrapolationTechnique intrapolationTechnique;
    @XmlElement(name = "extrapolation-technique", required = true)
    protected ExtrapolationTechnique extrapolationTechnique;

    /**
     * Gets the value of the subPortfolio property.
     * 
     * @return
     *     possible object is
     *     {@link SubPortfolio }
     *     
     */
    public SubPortfolio getSubPortfolio() {
        return subPortfolio;
    }

    /**
     * Sets the value of the subPortfolio property.
     * 
     * @param value
     *     allowed object is
     *     {@link SubPortfolio }
     *     
     */
    public void setSubPortfolio(SubPortfolio value) {
        this.subPortfolio = value;
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
     * Gets the value of the volSurfaceType property.
     * 
     * @return
     *     possible object is
     *     {@link VolSurface }
     *     
     */
    public VolSurface getVolSurfaceType() {
        return volSurfaceType;
    }

    /**
     * Sets the value of the volSurfaceType property.
     * 
     * @param value
     *     allowed object is
     *     {@link VolSurface }
     *     
     */
    public void setVolSurfaceType(VolSurface value) {
        this.volSurfaceType = value;
    }

    /**
     * Gets the value of the intrapolationTechnique property.
     * 
     * @return
     *     possible object is
     *     {@link IntrapolationTechnique }
     *     
     */
    public IntrapolationTechnique getIntrapolationTechnique() {
        return intrapolationTechnique;
    }

    /**
     * Sets the value of the intrapolationTechnique property.
     * 
     * @param value
     *     allowed object is
     *     {@link IntrapolationTechnique }
     *     
     */
    public void setIntrapolationTechnique(IntrapolationTechnique value) {
        this.intrapolationTechnique = value;
    }

    /**
     * Gets the value of the extrapolationTechnique property.
     * 
     * @return
     *     possible object is
     *     {@link ExtrapolationTechnique }
     *     
     */
    public ExtrapolationTechnique getExtrapolationTechnique() {
        return extrapolationTechnique;
    }

    /**
     * Sets the value of the extrapolationTechnique property.
     * 
     * @param value
     *     allowed object is
     *     {@link ExtrapolationTechnique }
     *     
     */
    public void setExtrapolationTechnique(ExtrapolationTechnique value) {
        this.extrapolationTechnique = value;
    }

}
