package com.invenio.dao.entity.admin;

import java.math.BigDecimal;

import javax.persistence.Entity;
import javax.persistence.JoinColumn;
import javax.persistence.OneToOne;

import com.invenio.dao.entity.AbstractPkEntity;

@Entity
public class InvVolParam extends AbstractPkEntity {

	/**
	 * 
	 */
	private static final long serialVersionUID = -9204591135765724245L;

	@OneToOne
	@JoinColumn(name = "invenio_product")
	private InvenioProduct invenioProduct;
	private String opt;
	@OneToOne
	@JoinColumn(name = "surface_type")
	private VolSurface surfaceType;
	private String ladderMetadateSource;
	private BigDecimal expirationDate;
	private BigDecimal startingStrikeExch;
	private BigDecimal strikeJumpExch;
	private BigDecimal endingStrikeExch;
	private BigDecimal strikeJumpInv;
	private BigDecimal endingStrikeInv;
	private BigDecimal intrapolationTechnique;
	private BigDecimal extrapolationTechnique;
	private String atm1P1;
	private String atm1P2;
	private String atm1P3;
	private String atm1P4;
	private String atm1P5;
	private String atm2P1;
	private String atm2P2;
	private String atm2P3;
	private String atm2P4;
	private String atm2P5;
	private String atm2P6;
	private String atm2P7;
	private String volPathP1;
	private String volPathP2;
	private String volPathP3;
	private String volPathP4;
	private String volPathP5;
	private String volPathP6;
	private String volPathP7;
	private String volPathP8;
	private String volPathP9;
	private String volPathP10;
	private String volPathP11;
	private String volPathP12;
	private String misc1P1;
	private String misc1P2;
	private String misc1P3;
	private String misc1P4;
	private String misc1P5;
	private String misc1P6;
	private String misc1P7;
	private String misc1P8;
	private String misc1P9;
	private String misc1P10;
	private String misc1P11;
	private String misc1P12;
	private String misc2P1;
	private String misc2P2;
	private String misc2P3;
	private String misc2P4;
	private String misc2P5;
	private String misc2P6;
	private String misc2P7;
	private String misc2P8;
	private String misc2P9;
	private String misc2P10;
	private String misc2P11;
	private String misc2P12;
	private String misc3P1;
	private String misc3P2;
	private String misc3P3;
	private String misc3P4;
	private String misc3P5;
	private String misc3P6;
	private String misc3P7;
	private String misc3P8;
	private String misc3P9;
	private String misc3P10;
	private String misc3P11;
	private String misc3P12;
	private String misc4P1;
	private String misc4P2;
	private String misc4P3;
	private String misc4P4;
	private String misc4P5;
	private String misc4P6;
	private String misc4P7;
	private String misc4P8;
	private String misc4P9;
	private String misc4P10;
	private String misc4P11;
	private String misc4P12;
	private String misc5P1;
	private String misc5P2;
	private String misc5P3;
	private String misc5P4;
	private String misc5P5;
	private String misc5P6;
	private String misc5P7;
	private String misc5P8;
	private String misc5P9;
	private String misc5P10;
	private String misc5P11;
	private String misc5P12;

	public InvenioProduct getInvenioProduct() {
		return invenioProduct;
	}

	public void setInvenioProduct(InvenioProduct invenioProduct) {
		this.invenioProduct = invenioProduct;
	}

	public String getOpt() {
		return opt;
	}

	public void setOpt(String opt) {
		this.opt = opt;
	}

	public VolSurface getSurfaceType() {
		return surfaceType;
	}

	public void setSurfaceType(VolSurface surfaceType) {
		this.surfaceType = surfaceType;
	}

	public String getLadderMetadateSource() {
		return ladderMetadateSource;
	}

	public void setLadderMetadateSource(String ladderMetadateSource) {
		this.ladderMetadateSource = ladderMetadateSource;
	}

	public BigDecimal getExpirationDate() {
		return expirationDate;
	}

	public void setExpirationDate(BigDecimal expirationDate) {
		this.expirationDate = expirationDate;
	}

	public BigDecimal getStartingStrikeExch() {
		return startingStrikeExch;
	}

	public void setStartingStrikeExch(BigDecimal startingStrikeExch) {
		this.startingStrikeExch = startingStrikeExch;
	}

	public BigDecimal getStrikeJumpExch() {
		return strikeJumpExch;
	}

	public void setStrikeJumpExch(BigDecimal strikeJumpExch) {
		this.strikeJumpExch = strikeJumpExch;
	}

	public BigDecimal getEndingStrikeExch() {
		return endingStrikeExch;
	}

	public void setEndingStrikeExch(BigDecimal endingStrikeExch) {
		this.endingStrikeExch = endingStrikeExch;
	}

	public BigDecimal getStrikeJumpInv() {
		return strikeJumpInv;
	}

	public void setStrikeJumpInv(BigDecimal strikeJumpInv) {
		this.strikeJumpInv = strikeJumpInv;
	}

	public BigDecimal getEndingStrikeInv() {
		return endingStrikeInv;
	}

	public void setEndingStrikeInv(BigDecimal endingStrikeInv) {
		this.endingStrikeInv = endingStrikeInv;
	}

	public BigDecimal getIntrapolationTechnique() {
		return intrapolationTechnique;
	}

	public void setIntrapolationTechnique(BigDecimal intrapolationTechnique) {
		this.intrapolationTechnique = intrapolationTechnique;
	}

	public BigDecimal getExtrapolationTechnique() {
		return extrapolationTechnique;
	}

	public void setExtrapolationTechnique(BigDecimal extrapolationTechnique) {
		this.extrapolationTechnique = extrapolationTechnique;
	}

	public String getAtm1P1() {
		return atm1P1;
	}

	public void setAtm1P1(String atm1p1) {
		atm1P1 = atm1p1;
	}

	public String getAtm1P2() {
		return atm1P2;
	}

	public void setAtm1P2(String atm1p2) {
		atm1P2 = atm1p2;
	}

	public String getAtm1P3() {
		return atm1P3;
	}

	public void setAtm1P3(String atm1p3) {
		atm1P3 = atm1p3;
	}

	public String getAtm1P4() {
		return atm1P4;
	}

	public void setAtm1P4(String atm1p4) {
		atm1P4 = atm1p4;
	}

	public String getAtm1P5() {
		return atm1P5;
	}

	public void setAtm1P5(String atm1p5) {
		atm1P5 = atm1p5;
	}

	public String getAtm2P1() {
		return atm2P1;
	}

	public void setAtm2P1(String atm2p1) {
		atm2P1 = atm2p1;
	}

	public String getAtm2P2() {
		return atm2P2;
	}

	public void setAtm2P2(String atm2p2) {
		atm2P2 = atm2p2;
	}

	public String getAtm2P3() {
		return atm2P3;
	}

	public void setAtm2P3(String atm2p3) {
		atm2P3 = atm2p3;
	}

	public String getAtm2P4() {
		return atm2P4;
	}

	public void setAtm2P4(String atm2p4) {
		atm2P4 = atm2p4;
	}

	public String getAtm2P5() {
		return atm2P5;
	}

	public void setAtm2P5(String atm2p5) {
		atm2P5 = atm2p5;
	}

	public String getAtm2P6() {
		return atm2P6;
	}

	public void setAtm2P6(String atm2p6) {
		atm2P6 = atm2p6;
	}

	public String getAtm2P7() {
		return atm2P7;
	}

	public void setAtm2P7(String atm2p7) {
		atm2P7 = atm2p7;
	}

	public String getVolPathP1() {
		return volPathP1;
	}

	public void setVolPathP1(String volPathP1) {
		this.volPathP1 = volPathP1;
	}

	public String getVolPathP2() {
		return volPathP2;
	}

	public void setVolPathP2(String volPathP2) {
		this.volPathP2 = volPathP2;
	}

	public String getVolPathP3() {
		return volPathP3;
	}

	public void setVolPathP3(String volPathP3) {
		this.volPathP3 = volPathP3;
	}

	public String getVolPathP4() {
		return volPathP4;
	}

	public void setVolPathP4(String volPathP4) {
		this.volPathP4 = volPathP4;
	}

	public String getVolPathP5() {
		return volPathP5;
	}

	public void setVolPathP5(String volPathP5) {
		this.volPathP5 = volPathP5;
	}

	public String getVolPathP6() {
		return volPathP6;
	}

	public void setVolPathP6(String volPathP6) {
		this.volPathP6 = volPathP6;
	}

	public String getVolPathP7() {
		return volPathP7;
	}

	public void setVolPathP7(String volPathP7) {
		this.volPathP7 = volPathP7;
	}

	public String getVolPathP8() {
		return volPathP8;
	}

	public void setVolPathP8(String volPathP8) {
		this.volPathP8 = volPathP8;
	}

	public String getVolPathP9() {
		return volPathP9;
	}

	public void setVolPathP9(String volPathP9) {
		this.volPathP9 = volPathP9;
	}

	public String getVolPathP10() {
		return volPathP10;
	}

	public void setVolPathP10(String volPathP10) {
		this.volPathP10 = volPathP10;
	}

	public String getVolPathP11() {
		return volPathP11;
	}

	public void setVolPathP11(String volPathP11) {
		this.volPathP11 = volPathP11;
	}

	public String getVolPathP12() {
		return volPathP12;
	}

	public void setVolPathP12(String volPathP12) {
		this.volPathP12 = volPathP12;
	}

	public String getMisc1P1() {
		return misc1P1;
	}

	public void setMisc1P1(String misc1p1) {
		misc1P1 = misc1p1;
	}

	public String getMisc1P2() {
		return misc1P2;
	}

	public void setMisc1P2(String misc1p2) {
		misc1P2 = misc1p2;
	}

	public String getMisc1P3() {
		return misc1P3;
	}

	public void setMisc1P3(String misc1p3) {
		misc1P3 = misc1p3;
	}

	public String getMisc1P4() {
		return misc1P4;
	}

	public void setMisc1P4(String misc1p4) {
		misc1P4 = misc1p4;
	}

	public String getMisc1P5() {
		return misc1P5;
	}

	public void setMisc1P5(String misc1p5) {
		misc1P5 = misc1p5;
	}

	public String getMisc1P6() {
		return misc1P6;
	}

	public void setMisc1P6(String misc1p6) {
		misc1P6 = misc1p6;
	}

	public String getMisc1P7() {
		return misc1P7;
	}

	public void setMisc1P7(String misc1p7) {
		misc1P7 = misc1p7;
	}

	public String getMisc1P8() {
		return misc1P8;
	}

	public void setMisc1P8(String misc1p8) {
		misc1P8 = misc1p8;
	}

	public String getMisc1P9() {
		return misc1P9;
	}

	public void setMisc1P9(String misc1p9) {
		misc1P9 = misc1p9;
	}

	public String getMisc1P10() {
		return misc1P10;
	}

	public void setMisc1P10(String misc1p10) {
		misc1P10 = misc1p10;
	}

	public String getMisc1P11() {
		return misc1P11;
	}

	public void setMisc1P11(String misc1p11) {
		misc1P11 = misc1p11;
	}

	public String getMisc1P12() {
		return misc1P12;
	}

	public void setMisc1P12(String misc1p12) {
		misc1P12 = misc1p12;
	}

	public String getMisc2P1() {
		return misc2P1;
	}

	public void setMisc2P1(String misc2p1) {
		misc2P1 = misc2p1;
	}

	public String getMisc2P2() {
		return misc2P2;
	}

	public void setMisc2P2(String misc2p2) {
		misc2P2 = misc2p2;
	}

	public String getMisc2P3() {
		return misc2P3;
	}

	public void setMisc2P3(String misc2p3) {
		misc2P3 = misc2p3;
	}

	public String getMisc2P4() {
		return misc2P4;
	}

	public void setMisc2P4(String misc2p4) {
		misc2P4 = misc2p4;
	}

	public String getMisc2P5() {
		return misc2P5;
	}

	public void setMisc2P5(String misc2p5) {
		misc2P5 = misc2p5;
	}

	public String getMisc2P6() {
		return misc2P6;
	}

	public void setMisc2P6(String misc2p6) {
		misc2P6 = misc2p6;
	}

	public String getMisc2P7() {
		return misc2P7;
	}

	public void setMisc2P7(String misc2p7) {
		misc2P7 = misc2p7;
	}

	public String getMisc2P8() {
		return misc2P8;
	}

	public void setMisc2P8(String misc2p8) {
		misc2P8 = misc2p8;
	}

	public String getMisc2P9() {
		return misc2P9;
	}

	public void setMisc2P9(String misc2p9) {
		misc2P9 = misc2p9;
	}

	public String getMisc2P10() {
		return misc2P10;
	}

	public void setMisc2P10(String misc2p10) {
		misc2P10 = misc2p10;
	}

	public String getMisc2P11() {
		return misc2P11;
	}

	public void setMisc2P11(String misc2p11) {
		misc2P11 = misc2p11;
	}

	public String getMisc2P12() {
		return misc2P12;
	}

	public void setMisc2P12(String misc2p12) {
		misc2P12 = misc2p12;
	}

	public String getMisc3P1() {
		return misc3P1;
	}

	public void setMisc3P1(String misc3p1) {
		misc3P1 = misc3p1;
	}

	public String getMisc3P2() {
		return misc3P2;
	}

	public void setMisc3P2(String misc3p2) {
		misc3P2 = misc3p2;
	}

	public String getMisc3P3() {
		return misc3P3;
	}

	public void setMisc3P3(String misc3p3) {
		misc3P3 = misc3p3;
	}

	public String getMisc3P4() {
		return misc3P4;
	}

	public void setMisc3P4(String misc3p4) {
		misc3P4 = misc3p4;
	}

	public String getMisc3P5() {
		return misc3P5;
	}

	public void setMisc3P5(String misc3p5) {
		misc3P5 = misc3p5;
	}

	public String getMisc3P6() {
		return misc3P6;
	}

	public void setMisc3P6(String misc3p6) {
		misc3P6 = misc3p6;
	}

	public String getMisc3P7() {
		return misc3P7;
	}

	public void setMisc3P7(String misc3p7) {
		misc3P7 = misc3p7;
	}

	public String getMisc3P8() {
		return misc3P8;
	}

	public void setMisc3P8(String misc3p8) {
		misc3P8 = misc3p8;
	}

	public String getMisc3P9() {
		return misc3P9;
	}

	public void setMisc3P9(String misc3p9) {
		misc3P9 = misc3p9;
	}

	public String getMisc3P10() {
		return misc3P10;
	}

	public void setMisc3P10(String misc3p10) {
		misc3P10 = misc3p10;
	}

	public String getMisc3P11() {
		return misc3P11;
	}

	public void setMisc3P11(String misc3p11) {
		misc3P11 = misc3p11;
	}

	public String getMisc3P12() {
		return misc3P12;
	}

	public void setMisc3P12(String misc3p12) {
		misc3P12 = misc3p12;
	}

	public String getMisc4P1() {
		return misc4P1;
	}

	public void setMisc4P1(String misc4p1) {
		misc4P1 = misc4p1;
	}

	public String getMisc4P2() {
		return misc4P2;
	}

	public void setMisc4P2(String misc4p2) {
		misc4P2 = misc4p2;
	}

	public String getMisc4P3() {
		return misc4P3;
	}

	public void setMisc4P3(String misc4p3) {
		misc4P3 = misc4p3;
	}

	public String getMisc4P4() {
		return misc4P4;
	}

	public void setMisc4P4(String misc4p4) {
		misc4P4 = misc4p4;
	}

	public String getMisc4P5() {
		return misc4P5;
	}

	public void setMisc4P5(String misc4p5) {
		misc4P5 = misc4p5;
	}

	public String getMisc4P6() {
		return misc4P6;
	}

	public void setMisc4P6(String misc4p6) {
		misc4P6 = misc4p6;
	}

	public String getMisc4P7() {
		return misc4P7;
	}

	public void setMisc4P7(String misc4p7) {
		misc4P7 = misc4p7;
	}

	public String getMisc4P8() {
		return misc4P8;
	}

	public void setMisc4P8(String misc4p8) {
		misc4P8 = misc4p8;
	}

	public String getMisc4P9() {
		return misc4P9;
	}

	public void setMisc4P9(String misc4p9) {
		misc4P9 = misc4p9;
	}

	public String getMisc4P10() {
		return misc4P10;
	}

	public void setMisc4P10(String misc4p10) {
		misc4P10 = misc4p10;
	}

	public String getMisc4P11() {
		return misc4P11;
	}

	public void setMisc4P11(String misc4p11) {
		misc4P11 = misc4p11;
	}

	public String getMisc4P12() {
		return misc4P12;
	}

	public void setMisc4P12(String misc4p12) {
		misc4P12 = misc4p12;
	}

	public String getMisc5P1() {
		return misc5P1;
	}

	public void setMisc5P1(String misc5p1) {
		misc5P1 = misc5p1;
	}

	public String getMisc5P2() {
		return misc5P2;
	}

	public void setMisc5P2(String misc5p2) {
		misc5P2 = misc5p2;
	}

	public String getMisc5P3() {
		return misc5P3;
	}

	public void setMisc5P3(String misc5p3) {
		misc5P3 = misc5p3;
	}

	public String getMisc5P4() {
		return misc5P4;
	}

	public void setMisc5P4(String misc5p4) {
		misc5P4 = misc5p4;
	}

	public String getMisc5P5() {
		return misc5P5;
	}

	public void setMisc5P5(String misc5p5) {
		misc5P5 = misc5p5;
	}

	public String getMisc5P6() {
		return misc5P6;
	}

	public void setMisc5P6(String misc5p6) {
		misc5P6 = misc5p6;
	}

	public String getMisc5P7() {
		return misc5P7;
	}

	public void setMisc5P7(String misc5p7) {
		misc5P7 = misc5p7;
	}

	public String getMisc5P8() {
		return misc5P8;
	}

	public void setMisc5P8(String misc5p8) {
		misc5P8 = misc5p8;
	}

	public String getMisc5P9() {
		return misc5P9;
	}

	public void setMisc5P9(String misc5p9) {
		misc5P9 = misc5p9;
	}

	public String getMisc5P10() {
		return misc5P10;
	}

	public void setMisc5P10(String misc5p10) {
		misc5P10 = misc5p10;
	}

	public String getMisc5P11() {
		return misc5P11;
	}

	public void setMisc5P11(String misc5p11) {
		misc5P11 = misc5p11;
	}

	public String getMisc5P12() {
		return misc5P12;
	}

	public void setMisc5P12(String misc5p12) {
		misc5P12 = misc5p12;
	}

}
