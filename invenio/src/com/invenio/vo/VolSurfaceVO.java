package com.invenio.vo;

import javax.xml.bind.annotation.XmlRootElement;

@XmlRootElement(name="items")
public class VolSurfaceVO {

	private String volSurfaceId;
	private String volSurfaceType;
	
	public String getVolSurfaceId() {
		return volSurfaceId;
	}
	public void setVolSurfaceId(String volSurfaceId) {
		this.volSurfaceId = volSurfaceId;
	}
	public String getVolSurfaceType() {
		return volSurfaceType;
	}
	public void setVolSurfaceType(String volSurfaceType) {
		this.volSurfaceType = volSurfaceType;
	}
}
