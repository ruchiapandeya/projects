//
// This file was generated by the JavaTM Architecture for XML Binding(JAXB) Reference Implementation, v2.2.6 
// See <a href="http://java.sun.com/xml/jaxb">http://java.sun.com/xml/jaxb</a> 
// Any modifications to this file will be lost upon recompilation of the source schema. 
// Generated on: 2013.08.02 at 10:31:10 PM PDT 
//


package com.invenio.schema.beans.core;

import java.io.Serializable;
import java.util.ArrayList;
import java.util.List;
import javax.xml.bind.annotation.XmlAccessType;
import javax.xml.bind.annotation.XmlAccessorType;
import javax.xml.bind.annotation.XmlElement;
import javax.xml.bind.annotation.XmlType;


/**
 * <p>Java class for filter-request complex type.
 * 
 * <p>The following schema fragment specifies the expected content contained within this class.
 * 
 * <pre>
 * &lt;complexType name="filter-request">
 *   &lt;complexContent>
 *     &lt;restriction base="{http://www.w3.org/2001/XMLSchema}anyType">
 *       &lt;sequence>
 *         &lt;element name="simple-hints" type="{http://www.invenio.com/schema/beans/core}filter-element-simple" maxOccurs="unbounded" minOccurs="0"/>
 *         &lt;element name="range-hints" type="{http://www.invenio.com/schema/beans/core}filter-element-range" maxOccurs="unbounded" minOccurs="0"/>
 *         &lt;element name="list-hints" type="{http://www.invenio.com/schema/beans/core}filter-element-list" maxOccurs="unbounded" minOccurs="0"/>
 *         &lt;element name="page" type="{http://www.w3.org/2001/XMLSchema}int"/>
 *         &lt;element name="page-size" type="{http://www.w3.org/2001/XMLSchema}int"/>
 *       &lt;/sequence>
 *     &lt;/restriction>
 *   &lt;/complexContent>
 * &lt;/complexType>
 * </pre>
 * 
 * 
 */
@XmlAccessorType(XmlAccessType.FIELD)
@XmlType(name = "filter-request", propOrder = {
    "simpleHints",
    "rangeHints",
    "listHints",
    "page",
    "pageSize"
})
public class FilterRequest
    implements Serializable
{

    @XmlElement(name = "simple-hints")
    protected List<FilterElementSimple> simpleHints;
    @XmlElement(name = "range-hints")
    protected List<FilterElementRange> rangeHints;
    @XmlElement(name = "list-hints")
    protected List<FilterElementList> listHints;
    protected int page;
    @XmlElement(name = "page-size")
    protected int pageSize;

    /**
     * Gets the value of the simpleHints property.
     * 
     * <p>
     * This accessor method returns a reference to the live list,
     * not a snapshot. Therefore any modification you make to the
     * returned list will be present inside the JAXB object.
     * This is why there is not a <CODE>set</CODE> method for the simpleHints property.
     * 
     * <p>
     * For example, to add a new item, do as follows:
     * <pre>
     *    getSimpleHints().add(newItem);
     * </pre>
     * 
     * 
     * <p>
     * Objects of the following type(s) are allowed in the list
     * {@link FilterElementSimple }
     * 
     * 
     */
    public List<FilterElementSimple> getSimpleHints() {
        if (simpleHints == null) {
            simpleHints = new ArrayList<FilterElementSimple>();
        }
        return this.simpleHints;
    }

    /**
     * Gets the value of the rangeHints property.
     * 
     * <p>
     * This accessor method returns a reference to the live list,
     * not a snapshot. Therefore any modification you make to the
     * returned list will be present inside the JAXB object.
     * This is why there is not a <CODE>set</CODE> method for the rangeHints property.
     * 
     * <p>
     * For example, to add a new item, do as follows:
     * <pre>
     *    getRangeHints().add(newItem);
     * </pre>
     * 
     * 
     * <p>
     * Objects of the following type(s) are allowed in the list
     * {@link FilterElementRange }
     * 
     * 
     */
    public List<FilterElementRange> getRangeHints() {
        if (rangeHints == null) {
            rangeHints = new ArrayList<FilterElementRange>();
        }
        return this.rangeHints;
    }

    /**
     * Gets the value of the listHints property.
     * 
     * <p>
     * This accessor method returns a reference to the live list,
     * not a snapshot. Therefore any modification you make to the
     * returned list will be present inside the JAXB object.
     * This is why there is not a <CODE>set</CODE> method for the listHints property.
     * 
     * <p>
     * For example, to add a new item, do as follows:
     * <pre>
     *    getListHints().add(newItem);
     * </pre>
     * 
     * 
     * <p>
     * Objects of the following type(s) are allowed in the list
     * {@link FilterElementList }
     * 
     * 
     */
    public List<FilterElementList> getListHints() {
        if (listHints == null) {
            listHints = new ArrayList<FilterElementList>();
        }
        return this.listHints;
    }

    /**
     * Gets the value of the page property.
     * 
     */
    public int getPage() {
        return page;
    }

    /**
     * Sets the value of the page property.
     * 
     */
    public void setPage(int value) {
        this.page = value;
    }

    /**
     * Gets the value of the pageSize property.
     * 
     */
    public int getPageSize() {
        return pageSize;
    }

    /**
     * Sets the value of the pageSize property.
     * 
     */
    public void setPageSize(int value) {
        this.pageSize = value;
    }

    public void setSimpleHints(List<FilterElementSimple> value) {
        this.simpleHints = null;
        List<FilterElementSimple> draftl = this.getSimpleHints();
        draftl.addAll(value);
    }

    public void setRangeHints(List<FilterElementRange> value) {
        this.rangeHints = null;
        List<FilterElementRange> draftl = this.getRangeHints();
        draftl.addAll(value);
    }

    public void setListHints(List<FilterElementList> value) {
        this.listHints = null;
        List<FilterElementList> draftl = this.getListHints();
        draftl.addAll(value);
    }

}