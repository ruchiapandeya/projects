package com.invenio.logic;

import java.math.BigDecimal;
import java.util.ArrayList;
import java.util.Date;
import java.util.List;

import javax.jws.WebService;
import javax.ws.rs.FormParam;
import javax.ws.rs.GET;
import javax.ws.rs.POST;
import javax.ws.rs.Path;
import javax.ws.rs.PathParam;
import javax.ws.rs.Produces;

import org.apache.log4j.Logger;
import org.eclipse.jetty.util.log.Log;

import com.invenio.domain.FutDump;
import com.invenio.domain.Instrument;
import com.invenio.domain.MUsDump;
import com.invenio.domain.OptDump;
import com.invenio.domain.VolDump;
import com.invenio.domain.VolSurface;
import com.invenio.manager.FutDumpMgr;
import com.invenio.manager.InstrumentMgr;
import com.invenio.manager.MusDumpMgr;
import com.invenio.manager.OptDumpMgr;
import com.invenio.manager.VolDumpMgr;
import com.invenio.manager.VolSurfaceMgr;
import com.invenio.service.ServiceLocator;
import com.invenio.service.impl.CurrentSession;
import com.invenio.service.impl.InvenioSession;
import com.invenio.vo.FutDumpVO;
import com.invenio.vo.M_US_DumpVO;
import com.invenio.vo.OptDumpVO;
import com.invenio.vo.ResponseVO;
import com.invenio.vo.VolDumpVO;

@WebService
@Path("/dumps")
@Produces("application/json")
public class DumpLogic {

	private static final Logger logger = Logger.getLogger(DumpLogic.class);
	private static final String CREATE_ACTION_STR = "create";
	private static final String UPDATE_ACTION_STR = "update";
	private static final String REMOVE_ACTION_STR = "remove";

	@POST
	@Path("/createUpdateVolDump")
	@Produces("application/json")
	public List<ResponseVO> createUpdateVolDump(
			@FormParam("volDumpId") String volDumpId,
			@FormParam("volSurface") String volSurface,
			@FormParam("extrapolate") String extrapolate,
			@FormParam("multiple") String multiple,
			@FormParam("start") String start, @FormParam("step") String step,
			@FormParam("product") String product,
			@FormParam("code") String code,
			@FormParam("futureRef") String futureRef,
			@FormParam("optionsRef") String optionsRef,
			@FormParam("expiryDate") String expiryDate) {
		List<ResponseVO> reponseVOList = new ArrayList<ResponseVO>();
		logger.debug("createUpdateVolDump -- START");
		try {
			VolDumpMgr volDumpMgr = (VolDumpMgr) ServiceLocator.get()
					.getObjectManager(VolDumpMgr.class);

			boolean isVolDumpId = volDumpId != null && !volDumpId.equals("");
			boolean isVolSurface = volSurface != null && !volSurface.equals("");
			boolean isUpdate = isVolDumpId;

			if (!isUpdate && !isVolSurface) {
				reponseVOList.add(new ResponseVO(
						"Volume surface type is required.", false));
				return reponseVOList;
			}

			InvenioSession session = CurrentSession.openSession();
			session.beginTransaction();
			VolSurfaceMgr volSurfaceMgr = (VolSurfaceMgr) ServiceLocator.get()
					.getObjectManager(VolSurfaceMgr.class);
			List<VolSurface> volumeSurfaceList = volSurfaceMgr
					.findVolSurfaceByType(volSurface);
			VolSurface volSurfaceObj = null;
			if (volumeSurfaceList != null && !volumeSurfaceList.isEmpty()) {
				volSurfaceObj = volumeSurfaceList.get(0);
			} else {
				volSurfaceObj = new VolSurface();
				volSurfaceObj.setVolSurfaceType(volSurface);
				volSurfaceMgr.add(volSurfaceObj);
			}

			VolDump volDump = null;
			if (!isUpdate) {
				volDump = new VolDump();
			} else {
				volDump = volDumpMgr.findByPrimaryKey(Integer
						.parseInt(volDumpId));
			}

			volDump.setCode(code);
			try {
				volDump.setExpiryDate(UtilLogic.parseDate(expiryDate));
			} catch (Exception e) {
				reponseVOList.add(new ResponseVO("Unable to set expiry date."
						+ e.getMessage(), false));
				return reponseVOList;
			}

			volDump.setExtrapolate(extrapolate);

			volDump.setFutureRef(futureRef);
			try {
				volDump.setMultiple(new BigDecimal(multiple));
			} catch (Exception e) {
				reponseVOList
						.add(new ResponseVO("Unable to set multiple value."
								+ e.getMessage(), false));
				return reponseVOList;
			}
			volDump.setOptionsRef(optionsRef);
			volDump.setProduct(product);
			try {
				volDump.setStart(new BigDecimal(start));
			} catch (Exception e) {
				reponseVOList.add(new ResponseVO("Unable to set start value."
						+ e.getMessage(), false));
				return reponseVOList;
			}
			try {
				volDump.setStep(new BigDecimal(step));
			} catch (Exception e) {
				reponseVOList.add(new ResponseVO("Unable to set step value."
						+ e.getMessage(), false));
				return reponseVOList;
			}
			volDump.setVolSurface(volSurfaceObj);

			if (!isUpdate) {
				volDumpMgr.add(volDump);
			} else {
				volDumpMgr.update(volDump);
			}
			session.commitTransaction();

			if (!isUpdate) {
				reponseVOList.add(new ResponseVO("VolDump added successfully.",
						true));
			} else {
				reponseVOList.add(new ResponseVO(
						"VolDump update is successful.", true));
			}
		} catch (Exception e) {
			logger.error("Exception in createUpdateVolDump: ", e);
		} finally {
			CurrentSession.closeSession();
			logger.debug("createUpdateVolDump --  END");
		}
		return reponseVOList;
	}

	@POST
	@Path("/getVolDumpFilter")
	@Produces("application/json")
	public List<VolDumpVO> getVolDumpFilter(
			@FormParam("volDumpId") String volDumpId,
			@FormParam("volSurface") String volSurface,
			@FormParam("product") String product,
			@FormParam("code") String code,
			@FormParam("futureRef") String futureRef,
			@FormParam("optionsRef") String optionsRef,
			@FormParam("expiryDate") String expiryDate,
			@FormParam("action") String action) {
		List<VolDumpVO> volDumpVOList = new ArrayList<VolDumpVO>();
		logger.debug("getVolDumpFilter start --");
		try {

			boolean isVolDumpId = volDumpId != null && !volDumpId.equals("");
			boolean isVolSurface = volSurface != null && !volSurface.equals("");
			boolean isProduct = product != null && !product.equals("");
			boolean isCode = code != null && !code.equals("");
			boolean isFutureRef = futureRef != null && !futureRef.equals("");
			boolean isOptionsRef = optionsRef != null && !optionsRef.equals("");
			boolean isExpiryDate = expiryDate != null && !expiryDate.equals("");

			if (!isVolDumpId && !isVolSurface && !isProduct && !isCode
					&& !isFutureRef && !isOptionsRef && !isExpiryDate) {
				return volDumpVOList;
			}

			String hqlVolDump = "SELECT vd FROM com.invenio.domain.VolDump vd WHERE ";
			if (isVolDumpId) {
				hqlVolDump += " vd.volDumpId = " + volDumpId;
				if (isVolSurface || isProduct || isCode || isFutureRef
						|| isOptionsRef || isExpiryDate) {
					hqlVolDump += " AND ";
				}
			}

			if (isVolSurface) {
				if (volSurface.indexOf(",") < 0) {
					hqlVolDump += " vd.volSurface.volSurfaceType = '"
							+ volSurface + "' ";
				} else {
					hqlVolDump += " vd.volSurface.volSurfaceType IN ('"
							+ volSurface.replaceAll(",", "','") + "') ";
				}
				if (isProduct || isCode || isFutureRef || isOptionsRef
						|| isExpiryDate) {
					hqlVolDump += " AND ";
				}
			}

			if (isProduct) {
				if (product.indexOf(",") < 0) {
					hqlVolDump += " vd.product = '" + product + "' ";
				} else {
					hqlVolDump += " vd.product IN ('"
							+ product.replaceAll(",", "','") + "') ";
				}
				if (isCode || isFutureRef || isOptionsRef || isExpiryDate) {
					hqlVolDump += " AND ";
				}
			}

			if (isCode) {
				if (code.indexOf(",") < 0) {
					hqlVolDump += " vd.code = '" + code + "' ";
				} else {
					hqlVolDump += " vd.code IN ('"
							+ code.replaceAll(",", "','") + "') ";
				}
				if (isFutureRef || isOptionsRef || isExpiryDate) {
					hqlVolDump += " AND ";
				}
			}

			if (isFutureRef) {
				if (futureRef.indexOf(",") < 0) {
					hqlVolDump += " vd.futureRef = '" + futureRef + "' ";
				} else {
					hqlVolDump += " vd.futureRef IN ('"
							+ futureRef.replaceAll(",", "','") + "') ";
				}
				if (isOptionsRef || isExpiryDate) {
					hqlVolDump += " AND ";
				}
			}

			if (isOptionsRef) {
				if (optionsRef.indexOf(",") < 0) {
					hqlVolDump += " vd.optionsRef = '" + optionsRef + "' ";
				} else {
					hqlVolDump += " vd.optionsRef IN ('"
							+ optionsRef.replaceAll(",", "','") + "') ";
				}
				if (isExpiryDate) {
					hqlVolDump += " AND ";
				}
			}

			if (isExpiryDate) {
				if (expiryDate.indexOf(",") < 0) {
					hqlVolDump += " vd.expiryDate = '" + expiryDate + "' ";
				} else {
					hqlVolDump += " vd.expiryDate IN ('"
							+ expiryDate.replaceAll(",", "','") + "') ";
				}
			}
			logger.debug("Generated HQL : " + hqlVolDump);
			InvenioSession session = CurrentSession.openSession();

			List<VolDump> volDumpList = (List<VolDump>) session.hqlQuery(
					hqlVolDump).list();

			if (volDumpList != null && !volDumpList.isEmpty()) {
				for (VolDump volDump : volDumpList) {
					VolDumpVO volDumpVO = new VolDumpVO();
					volDumpVO.setVolDumpId(volDump.getVolDumpId().toString());

					volDumpVO.setVolSurfaceId(volDump.getVolSurface()
							.getVolSurfaceId().toString());
					volDumpVO.setVolSurfaceType(volDump.getVolSurface()
							.getVolSurfaceType());
					volDumpVO.setCode(volDump.getCode());
					if (volDump.getExpiryDate() != null) {
						volDumpVO.setExpiryDate(volDump.getExpiryDate()
								.toString());
					}
					volDumpVO.setExtrapolate(volDump.getExtrapolate());
					if (volDump.getMultiple() != null) {
						volDumpVO.setMultiple(volDump.getMultiple().toString());
					}

					volDumpVO.setFutureRef(volDump.getFutureRef());
					volDumpVO.setOptionsRef(volDump.getOptionsRef());
					volDumpVO.setProduct(volDump.getProduct());
					if (volDump.getStart() != null) {
						volDumpVO.setStart(volDump.getStart().toString());
					}
					if (volDump.getStep() != null) {
						volDumpVO.setStep(volDump.getStep().toString());
					}

					volDumpVOList.add(volDumpVO);
				}
			}

		} catch (Exception e) {
			logger.error("Exception in getVolDumpFilter: ", e);
		} finally {
			CurrentSession.closeSession();
			logger.debug("getVolDumpFilter--  end");
		}
		return volDumpVOList;
	}

	@GET
	@Path("/getVolDump")
	@Produces("application/json")
	public List<VolDumpVO> getVolDump() {
		List<VolDumpVO> volDumpVOList = new ArrayList<VolDumpVO>();
		logger.debug("getVolDump  -- start");
		try {
			CurrentSession.openSession();

			VolDumpMgr volDumpMgr = (VolDumpMgr) ServiceLocator.get()
					.getObjectManager(VolDumpMgr.class);
			List<VolDump> volDumpList = volDumpMgr.findAll();
			if (volDumpList != null && !volDumpList.isEmpty()) {
				for (VolDump volDump : volDumpList) {
					VolDumpVO volDumpVO = new VolDumpVO();
					volDumpVO.setVolDumpId(volDump.getVolDumpId().toString());

					volDumpVO.setVolSurfaceId(volDump.getVolSurface()
							.getVolSurfaceId().toString());
					volDumpVO.setVolSurfaceType(volDump.getVolSurface()
							.getVolSurfaceType());
					volDumpVO.setCode(volDump.getCode());
					if (volDump.getExpiryDate() != null) {
						volDumpVO.setExpiryDate(volDump.getExpiryDate()
								.toString());
					}
					volDumpVO.setExtrapolate(volDump.getExtrapolate());
					if (volDump.getMultiple() != null) {
						volDumpVO.setMultiple(volDump.getMultiple().toString());
					}

					volDumpVO.setFutureRef(volDump.getFutureRef());
					volDumpVO.setOptionsRef(volDump.getOptionsRef());
					volDumpVO.setProduct(volDump.getProduct());
					if (volDump.getStart() != null) {
						volDumpVO.setStart(volDump.getStart().toString());
					}
					if (volDump.getStep() != null) {
						volDumpVO.setStep(volDump.getStep().toString());
					}

					volDumpVOList.add(volDumpVO);
				}
			}
		} catch (Exception e) {
			logger.error("Exception in getting volume dump: ", e);
		} finally {
			CurrentSession.closeSession();
			logger.debug("getVolDump--  end");
		}
		return volDumpVOList;
	}

	@GET
	@Path("/deleteVolDump/{volDumpId}")
	@Produces("application/json")
	public List<ResponseVO> deleteVolDump(
			@PathParam("volDumpId") String volDumpId) {
		List<ResponseVO> responseList = new ArrayList<ResponseVO>();
		logger.debug("deleteVolDump start -- " + volDumpId);
		ResponseVO response = new ResponseVO();

		try {
			if (isInvalidId(volDumpId)) {
				response.setPassed(false);
				response.setMgs("Null/invalid id string passed: " + volDumpId);
			} else {
				// no issues, proceed
				CurrentSession.openSession();
				VolDumpMgr volDumpMgr = (VolDumpMgr) ServiceLocator.get()
						.getObjectManager(VolDumpMgr.class);
				VolDump volDump = volDumpMgr.findByPrimaryKey(Integer
						.parseInt(volDumpId));
				if (volDump.getProduct() == null) {
					logger.debug("deleteVolDump: record not found for "
							+ volDumpId);
					response.setPassed(false);
					response.setMgs("Record not found in DB for ID: "
							+ volDumpId);
				} else { // record exists
					volDumpMgr.delete(volDump);
				}
			}
		} catch (Exception e) {
			logger.error("Exception in deleting vol dump: " + volDumpId, e);
			response.setPassed(false);
			response.setMgs("Exception deleting VolDumpId: " + volDumpId + e);
		} finally {
			CurrentSession.closeSession();
			logger.debug("deleteVolDump--  end");
		}
		return responseList;
	}

	@POST
	@Path("/createUpdateFutDump")
	@Produces("application/json")
	public List<ResponseVO> createUpdateFutDump(
			@FormParam("futDumpId") String futDumpId,
			@FormParam("instrumentCode") String instrumentCode,
			@FormParam("bookValue") String bookValue,
			@FormParam("netPos") String netPos,
			@FormParam("futPrice") String futPrice,
			@FormParam("contract") String contract,
			@FormParam("futSettlement") String futSettlement,
			@FormParam("adaptedDelta") String adaptedDelta,
			@FormParam("gammaSmt") String gammaSmt,
			@FormParam("theta") String theta, @FormParam("vega") String vega) {
		List<ResponseVO> futDumpVOList = new ArrayList<ResponseVO>();
		logger.debug("createUpdateFutDump --START ");
		try {
			boolean isUpdate = futDumpId != null && !futDumpId.equals("");
			InvenioSession session = CurrentSession.openSession();
			InstrumentMgr instrumentMgr = (InstrumentMgr) ServiceLocator.get()
					.getObjectManager(InstrumentMgr.class);
			FutDumpMgr futDumpMgr = (FutDumpMgr) ServiceLocator.get()
					.getObjectManager(FutDumpMgr.class);
			Instrument instrument = null;
			List<Instrument> instrumentList = instrumentMgr
					.findInstrumentByCode(instrumentCode);
			if (instrumentList == null || instrumentList.isEmpty()) {
				futDumpVOList.add(new ResponseVO(
						"Unknown instrumentCode cannot add or update future dump: "
								+ futDumpId, false));
				return futDumpVOList;
			} else {
				instrument = instrumentList.get(0);
			}

			FutDump futDump = null;

			if (!isUpdate) {
				futDump = new FutDump();
			} else {
				futDump = futDumpMgr.findByPrimaryKey(Integer
						.parseInt(futDumpId));
			}

			futDump.setInstrument(instrument);
			try {
				if (adaptedDelta != null) {
					futDump.setAdaptedDelta(new BigDecimal(adaptedDelta));
				}
			} catch (Exception e) {
				futDumpVOList.add(new ResponseVO(
						"Unable to set adaptedDelta value: " + adaptedDelta
								+ " for futDemp " + futDumpId, false));
				return futDumpVOList;
			}
			try {
				if (bookValue != null) {
					futDump.setBookValue(new BigDecimal(bookValue));
				}
			} catch (Exception e) {
				futDumpVOList.add(new ResponseVO(
						"Unable to set bookValue value: " + adaptedDelta
								+ " for futDemp " + futDumpId, false));
				return futDumpVOList;
			}

			futDump.setContract(contract);
			try {
				if (futPrice != null) {
					futDump.setFutPrice(new BigDecimal(futPrice));
				}
			} catch (Exception e) {
				futDumpVOList.add(new ResponseVO(
						"Unable to set futPrice value: " + adaptedDelta
								+ " for futDemp " + futDumpId, false));
				return futDumpVOList;
			}
			try {
				if (futSettlement != null) {
					futDump.setFutSettlement(new BigDecimal(futSettlement));
				}
			} catch (Exception e) {
				futDumpVOList.add(new ResponseVO(
						"Unable to set futSettlement value: " + adaptedDelta
								+ " for futDemp " + futDumpId, false));
				return futDumpVOList;
			}
			try {
				if (gammaSmt != null) {
					futDump.setGammaSmt(new BigDecimal(gammaSmt));
				}
			} catch (Exception e) {
				futDumpVOList.add(new ResponseVO(
						"Unable to set gammaSmt value: " + adaptedDelta
								+ " for futDemp " + futDumpId, false));
				return futDumpVOList;
			}
			try {
				if (netPos != null) {
					futDump.setNetPos(new BigDecimal(netPos));
				}
			} catch (Exception e) {
				futDumpVOList.add(new ResponseVO("Unable to set netPos value: "
						+ adaptedDelta + " for futDemp " + futDumpId, false));
				return futDumpVOList;
			}
			try {
				if (theta != null) {
					futDump.setTheta(new BigDecimal(theta));
				}
			} catch (Exception e) {
				futDumpVOList.add(new ResponseVO("Unable to set theta value: "
						+ adaptedDelta + " for futDemp " + futDumpId, false));
				return futDumpVOList;
			}
			try {
				if (vega != null) {
					futDump.setVega(new BigDecimal(vega));
				}
			} catch (Exception e) {
				futDumpVOList.add(new ResponseVO("Unable to set vega value: "
						+ adaptedDelta + " for futDemp " + futDumpId, false));
				return futDumpVOList;
			}

			session.beginTransaction();
			if (!isUpdate) {
				futDumpId = futDumpMgr.add(futDump) + "";
			} else {
				futDumpMgr.update(futDump);
			}
			session.commitTransaction();
			if (!isUpdate) {
				futDumpVOList.add(new ResponseVO(
						"Future dump added successfully " + futDumpId, true));
			} else {
				futDumpVOList.add(new ResponseVO(
						"Future dump update successful " + futDumpId, true));
			}
		} catch (Exception e) {
			logger.error(
					"Exception in add update of future dump: " + futDumpId, e);
			futDumpVOList.add(new ResponseVO(
					"Exception in add update of future dump: " + futDumpId + e,
					false));
		} finally {
			CurrentSession.closeSession();
		}
		logger.debug("createUpdateFutDump -- END");
		return futDumpVOList;
	}

	@GET
	@Path("/getFutDump")
	@Produces("application/json")
	public List<FutDumpVO> getFutDump() {
		List<FutDumpVO> futDumpVOList = new ArrayList<FutDumpVO>();
		logger.debug("getFutDump start --");
		try {
			CurrentSession.openSession();
			FutDumpMgr futDumpMgr = (FutDumpMgr) ServiceLocator.get()
					.getObjectManager(FutDumpMgr.class);
			List<FutDump> futDumpList = futDumpMgr.findAll();
			if (futDumpList != null && !futDumpList.isEmpty()) {
				for (FutDump futDump : futDumpList) {
					FutDumpVO futDumpVO = new FutDumpVO();
					if (futDump.getAdaptedDelta() != null) {
						futDumpVO.setAdaptedDelta(futDump.getAdaptedDelta()
								.toString());
					}
					if (futDump.getBookValue() != null) {
						futDumpVO.setBookValue(futDump.getBookValue()
								.toString());
					}
					futDumpVO.setContract(futDump.getContract());
					futDumpVO.setFutDumpId(futDump.getFutDumpId().toString());
					if (futDump.getFutPrice() != null) {
						futDumpVO.setFutPrice(futDump.getFutPrice().toString());
					}
					if (futDump.getFutSettlement() != null) {
						futDumpVO.setFutSettlement(futDump.getFutSettlement()
								.toString());
					}
					if (futDump.getGammaSmt() != null) {
						futDumpVO.setGammaSmt(futDump.getGammaSmt().toString());
					}
					if (futDump.getInstrument() != null) {
						futDumpVO.setInstrumentName(futDump.getInstrument()
								.getInstrumentName());
						futDumpVO.setInstrumentCode(futDump.getInstrument()
								.getInstrumentCode());
						futDumpVO.setInstrumentId(futDump.getInstrument()
								.getInstrumentId().toString());
					}
					if (futDump.getNetPos() != null) {
						futDumpVO.setNetPos(futDump.getNetPos().toString());
					}

					if (futDump.getTheta() != null) {
						futDumpVO.setTheta(futDump.getTheta().toString());
					}
					if (futDump.getVega() != null) {
						futDumpVO.setVega(futDump.getVega().toString());
					}
					futDumpVOList.add(futDumpVO);
				}
			}

		} catch (Exception e) {
			logger.error("Exception in get future dump ", e);
		} finally {
			CurrentSession.closeSession();
		}
		logger.debug("-- getFutDump end");
		return futDumpVOList;
	}

	@POST
	@Path("/getFutDumpFilter")
	@Produces("application/json")
	public List<FutDumpVO> getFutDumpFilter(
			@FormParam("futDumpId") String futDumpId,
			@FormParam("instrument") String instrument,
			@FormParam("bookValue") String bookValue,
			@FormParam("netPos") String netPos,
			@FormParam("futPrice") String futPrice,
			@FormParam("contract") String contract,
			@FormParam("futSettlement") String futSettlement,
			@FormParam("adaptedDelta") String adaptedDelta,
			@FormParam("gammaSmt") String gammaSmt,
			@FormParam("theta") String theta, @FormParam("vega") String vega) {
		List<FutDumpVO> futDumpVOList = new ArrayList<FutDumpVO>();
		logger.debug("getFutDumpFilter -- START");
		try {

			boolean isFutDumpId = futDumpId != null && !futDumpId.isEmpty();

			boolean isInstrument = instrument != null && !instrument.isEmpty();
			boolean isBookValue = bookValue != null && !bookValue.isEmpty();
			boolean isNetPos = netPos != null && !netPos.isEmpty();
			boolean isFutPrice = futPrice != null && !futPrice.isEmpty();
			boolean isContract = contract != null && !contract.isEmpty();
			boolean isFutSettlement = futSettlement != null
					&& !futSettlement.isEmpty();

			boolean isAdaptedDelta = adaptedDelta != null
					&& !adaptedDelta.isEmpty();
			boolean isGammaSmt = gammaSmt != null && !gammaSmt.isEmpty();
			boolean isTheta = theta != null && !theta.isEmpty();

			if (!isFutDumpId && !isInstrument && !isBookValue && !isNetPos
					&& !isFutPrice && !isContract && !isFutSettlement
					&& !isAdaptedDelta && !isGammaSmt && !isTheta) {
				return futDumpVOList;
			}

			String hqlFutDump = "SELECT fd FROM com.invenio.domain.FutDump fd WHERE ";
			if (isFutDumpId) {

				hqlFutDump += " fd.futDumpId = " + futDumpId;
				if (isInstrument || isBookValue || isNetPos || isFutPrice
						|| isContract || isFutSettlement || isAdaptedDelta
						|| isGammaSmt || isTheta) {
					hqlFutDump += " AND ";
				}
			}

			if (isInstrument) {
				if (instrument.indexOf(",") < 0) {
					hqlFutDump += " fd.instrument.instrumentCode = '"
							+ instrument + "' ";
				} else {
					hqlFutDump += " fd.instrument.instrumentCode IN ('"
							+ instrument.replaceAll(",", "','") + "') ";
				}
				if (isBookValue || isNetPos || isFutPrice || isContract
						|| isFutSettlement || isAdaptedDelta || isGammaSmt
						|| isTheta) {
					hqlFutDump += " AND ";
				}
			}

			if (isBookValue) {
				if (bookValue.indexOf(",") < 0) {
					hqlFutDump += " fd.bookValue = '" + bookValue + "' ";
				} else {
					hqlFutDump += " fd.bookValue IN ('"
							+ bookValue.replaceAll(",", "','") + "') ";
				}
				if (isNetPos || isFutPrice || isContract || isFutSettlement
						|| isAdaptedDelta || isGammaSmt || isTheta) {
					hqlFutDump += " AND ";
				}
			}

			if (isNetPos) {
				if (netPos.indexOf(",") < 0) {
					hqlFutDump += " fd.netPos = '" + netPos + "' ";
				} else {
					hqlFutDump += " fd.netPos IN ('"
							+ netPos.replaceAll(",", "','") + "') ";
				}
				if (isFutPrice || isContract || isFutSettlement
						|| isAdaptedDelta || isGammaSmt || isTheta) {
					hqlFutDump += " AND ";
				}
			}

			if (isFutPrice) {
				if (futPrice.indexOf(",") < 0) {
					hqlFutDump += " fd.futPrice = '" + futPrice + "' ";
				} else {
					hqlFutDump += " fd.futPrice IN ('"
							+ futPrice.replaceAll(",", "','") + "') ";
				}
				if (isContract || isFutSettlement || isAdaptedDelta
						|| isGammaSmt || isTheta) {
					hqlFutDump += " AND ";
				}
			}

			if (isContract) {
				if (contract.indexOf(",") < 0) {
					hqlFutDump += " fd.contract = '" + contract + "' ";
				} else {
					hqlFutDump += " fd.contract IN ('"
							+ contract.replaceAll(",", "','") + "') ";
				}
				if (isFutSettlement || isAdaptedDelta || isGammaSmt || isTheta) {
					hqlFutDump += " AND ";
				}
			}

			if (isFutSettlement) {
				if (futSettlement.indexOf(",") < 0) {
					hqlFutDump += " fd.futSettlement = '" + futSettlement
							+ "' ";
				} else {
					hqlFutDump += " fd.futSettlement IN ('"
							+ futSettlement.replaceAll(",", "','") + "') ";
				}
				if (isAdaptedDelta || isGammaSmt || isTheta) {
					hqlFutDump += " AND ";
				}
			}

			if (isAdaptedDelta) {
				if (adaptedDelta.indexOf(",") < 0) {
					hqlFutDump += " fd.adaptedDelta = '" + adaptedDelta + "' ";
				} else {
					hqlFutDump += " fd.adaptedDelta IN ('"
							+ adaptedDelta.replaceAll(",", "','") + "') ";
				}
				if (isGammaSmt || isTheta) {
					hqlFutDump += " AND ";
				}
			}

			if (isGammaSmt) {
				if (gammaSmt.indexOf(",") < 0) {
					hqlFutDump += " fd.gammaSmt = '" + gammaSmt + "' ";
				} else {
					hqlFutDump += " fd.gammaSmt IN ('"
							+ gammaSmt.replaceAll(",", "','") + "') ";
				}
				if (isTheta) {
					hqlFutDump += " AND ";
				}
			}

			if (isTheta) {
				if (theta.indexOf(",") < 0) {
					hqlFutDump += " fd.theta = '" + theta + "' ";
				} else {
					hqlFutDump += " fd.theta IN ('"
							+ theta.replaceAll(",", "','") + "') ";
				}
			}

			InvenioSession session = CurrentSession.openSession();

			List<FutDump> futDumpList = session.hqlQuery(hqlFutDump).list();
			if (futDumpList != null && !futDumpList.isEmpty()) {
				for (FutDump futDump : futDumpList) {
					FutDumpVO futDumpVO = new FutDumpVO();
					if (futDump.getAdaptedDelta() != null) {
						futDumpVO.setAdaptedDelta(futDump.getAdaptedDelta()
								.toString());
					}
					if (futDump.getBookValue() != null) {
						futDumpVO.setBookValue(futDump.getBookValue()
								.toString());
					}
					futDumpVO.setContract(futDump.getContract());
					futDumpVO.setFutDumpId(futDump.getFutDumpId().toString());
					if (futDump.getFutPrice() != null) {
						futDumpVO.setFutPrice(futDump.getFutPrice().toString());
					}
					if (futDump.getFutSettlement() != null) {
						futDumpVO.setFutSettlement(futDump.getFutSettlement()
								.toString());
					}
					if (futDump.getGammaSmt() != null) {
						futDumpVO.setGammaSmt(futDump.getGammaSmt().toString());
					}
					if (futDump.getInstrument() != null) {
						futDumpVO.setInstrumentName(futDump.getInstrument()
								.getInstrumentName());
						futDumpVO.setInstrumentCode(futDump.getInstrument()
								.getInstrumentCode());
						futDumpVO.setInstrumentId(futDump.getInstrument()
								.getInstrumentId().toString());
					}
					if (futDump.getNetPos() != null) {
						futDumpVO.setNetPos(futDump.getNetPos().toString());
					}

					if (futDump.getTheta() != null) {
						futDumpVO.setTheta(futDump.getTheta().toString());
					}
					if (futDump.getVega() != null) {
						futDumpVO.setVega(futDump.getVega().toString());
					}
					futDumpVOList.add(futDumpVO);
				}
			}

		} catch (Exception e) {
			logger.error("Exception in get future dump ", e);
		} finally {
			CurrentSession.closeSession();
		}
		logger.debug("getFutDumpFilter -- END");
		return futDumpVOList;
	}

	@GET
	@Path("/deleteFutDump/{futDumpId}")
	@Produces("application/json")
	public List<ResponseVO> deleteFutDump(
			@PathParam("futDumpId") String futDumpId) {
		List<ResponseVO> responseList = new ArrayList<ResponseVO>();
		logger.debug("deleteFutDump start -- " + futDumpId);
		ResponseVO response = new ResponseVO();

		try {
			if (isInvalidId(futDumpId)) {
				response.setPassed(false);
				response.setMgs("Null/invalid id string passed: " + futDumpId);
			} else {
				// no issues, proceed
				CurrentSession.openSession();
				FutDumpMgr futDumpMgr = (FutDumpMgr) ServiceLocator.get()
						.getObjectManager(FutDumpMgr.class);
				FutDump futDump = futDumpMgr.findByPrimaryKey(Integer
						.parseInt(futDumpId));
				if (futDump.getInstrument() == null) {
					logger.debug("deleteFutDump: record not found for "
							+ futDumpId);
					response.setPassed(false);
					response.setMgs("Record not found in DB for ID: "
							+ futDumpId);
				} else { // record exists
					futDumpMgr.delete(futDump);
				}
			}
		} catch (Exception e) {
			logger.error("Exception in deleting fut dump: " + futDumpId, e);
			response.setPassed(false);
			response.setMgs("Exception deleting FutDumpId: " + futDumpId + e);
		} finally {
			CurrentSession.closeSession();
			logger.debug("deleteFutDump--  end");
		}
		return responseList;
	}

	@GET
	@Path("/getMUSDump")
	@Produces("application/json")
	public List<M_US_DumpVO> getMUSDump() {
		List<M_US_DumpVO> musDumpVOList = new ArrayList<M_US_DumpVO>();
		logger.debug("getMUSDump start --");

		try {
			CurrentSession.openSession();

			MusDumpMgr musDumpMgr = (MusDumpMgr) ServiceLocator.get()
					.getObjectManager(MusDumpMgr.class);
			List<MUsDump> musDumpList = musDumpMgr.findAll();
			if (musDumpList != null && !musDumpList.isEmpty()) {
				for (MUsDump musDump : musDumpList) {
					M_US_DumpVO musDumpVO = new M_US_DumpVO();
					musDumpVO.setMUsDumpId(musDump.getMUsDumpId().toString());

					if (musDump.getInstrument() != null) {
						musDumpVO.setInstrumentName(musDump.getInstrument()
								.getInstrumentName());
						musDumpVO.setInstrumentCode(musDump.getInstrument()
								.getInstrumentCode());
						musDumpVO.setInstrumentId(musDump.getInstrument()
								.getInstrumentId().toString());
					}
					if (musDump.getStrikeCode() != null)
						musDumpVO.setStrikeCode(musDump.getStrikeCode());
					if (musDump.getMarketValue() != null)
						musDumpVO.setMarketValue(musDump.getMarketValue()
								.toString());
					if (musDump.getBookValue() != null)
						musDumpVO.setBookValue(musDump.getBookValue()
								.toString());
					if (musDump.getMarketUs() != null)
						musDumpVO.setMarketUs(musDump.getMarketUs().toString());
					if (musDump.getStrikePrice() != null)
						musDumpVO.setStrikePrice(musDump.getStrikePrice()
								.toString());
					if (musDump.getStrikeTotal() != null)
						musDumpVO.setStrikeTotal(musDump.getStrikeTotal()
								.toString());
					if (musDump.getMarketValCall() != null)
						musDumpVO.setMarketValCall(musDump.getMarketValCall()
								.toString());
					if (musDump.getMarketCalPut() != null)
						musDumpVO.setMarketCalPut(musDump.getMarketCalPut()
								.toString());
					if (musDump.getOptionsExpiryDate() != null)
						musDumpVO.setOptionsExpiryDate(musDump
								.getOptionsExpiryDate().toString());
					if (musDump.getInstrumentDisplay() != null)
						musDumpVO.setInstrumentDisplay(musDump
								.getInstrumentDisplay());

					musDumpVOList.add(musDumpVO);
				}
			}
		} catch (Exception e) {
			logger.error("Exception in getting volume dump: ", e);
		} finally {
			CurrentSession.closeSession();
			logger.debug("getMUSDump--  end");
		}

		return musDumpVOList;
	}

	@POST
	@Path("/getMusDumpFilter")
	@Produces("application/json")
	public List<M_US_DumpVO> getMusDumpFilter(
			@FormParam("musDumpId") String musDumpId,
			@FormParam("optionsExpiryDate") String optionsExpiryDate) {
		List<M_US_DumpVO> musDumpVOList = new ArrayList<M_US_DumpVO>();
		logger.debug("getMusDumpFilter start --");
		try {

			boolean isMusDumpId = musDumpId != null && !musDumpId.equals("");
			boolean isOptionsExpiryDate = optionsExpiryDate != null
					&& !optionsExpiryDate.equals("");

			if (!isMusDumpId && !isOptionsExpiryDate) {
				return musDumpVOList;
			}

			String hqlMusDump = "SELECT md FROM com.invenio.domain.MUsDump md WHERE ";
			if (isMusDumpId) {
				hqlMusDump += " md.MUsDumpId = " + musDumpId;
				if (isOptionsExpiryDate) {
					hqlMusDump += " AND ";
				}
			}

			if (isOptionsExpiryDate) {
				if (optionsExpiryDate.indexOf(",") < 0) {
					hqlMusDump += " md.optionsExpiryDate = '"
							+ optionsExpiryDate + "' ";
				} else {
					hqlMusDump += " md.optionsExpiryDate IN ('"
							+ optionsExpiryDate.replaceAll(",", "','") + "') ";
				}
			}

			logger.debug("Generated HQL : " + hqlMusDump);
			InvenioSession session = CurrentSession.openSession();

			List<MUsDump> musDumpList = (List<MUsDump>) session.hqlQuery(
					hqlMusDump).list();

			if (musDumpList != null && !musDumpList.isEmpty()) {
				for (MUsDump musDump : musDumpList) {
					M_US_DumpVO musDumpVO = new M_US_DumpVO();
					musDumpVO.setMUsDumpId(musDump.getMUsDumpId().toString());

					if (musDump.getInstrument() != null) {
						musDumpVO.setInstrumentName(musDump.getInstrument()
								.getInstrumentName());
						musDumpVO.setInstrumentCode(musDump.getInstrument()
								.getInstrumentCode());
						musDumpVO.setInstrumentId(musDump.getInstrument()
								.getInstrumentId().toString());
					}
					if (musDump.getStrikeCode() != null)
						musDumpVO.setStrikeCode(musDump.getStrikeCode());
					if (musDump.getMarketValue() != null)
						musDumpVO.setMarketValue(musDump.getMarketValue()
								.toString());
					if (musDump.getBookValue() != null)
						musDumpVO.setBookValue(musDump.getBookValue()
								.toString());
					if (musDump.getMarketUs() != null)
						musDumpVO.setMarketUs(musDump.getMarketUs().toString());
					if (musDump.getStrikePrice() != null)
						musDumpVO.setStrikePrice(musDump.getStrikePrice()
								.toString());
					if (musDump.getStrikeTotal() != null)
						musDumpVO.setStrikeTotal(musDump.getStrikeTotal()
								.toString());
					if (musDump.getMarketValCall() != null)
						musDumpVO.setMarketValCall(musDump.getMarketValCall()
								.toString());
					if (musDump.getMarketCalPut() != null)
						musDumpVO.setMarketCalPut(musDump.getMarketCalPut()
								.toString());
					if (musDump.getOptionsExpiryDate() != null)
						musDumpVO.setOptionsExpiryDate(musDump
								.getOptionsExpiryDate().toString());
					if (musDump.getInstrumentDisplay() != null)
						musDumpVO.setInstrumentDisplay(musDump
								.getInstrumentDisplay());

					musDumpVOList.add(musDumpVO);
				}
			}

		} catch (Exception e) {
			logger.error("Exception in getMusDumpFilter: ", e);
		} finally {
			CurrentSession.closeSession();
			logger.debug("getMusDumpFilter --  end");
		}
		return musDumpVOList;
	}

	@POST
	@Path("/createUpdateMusDump")
	@Produces("application/json")
	public List<ResponseVO> createUpdateMusDump(
			@FormParam("musDumpId") String musDumpId,
			@FormParam("instrument") String instrument,
			@FormParam("strikeCode") String strikeCode,
			@FormParam("marketValue") String marketValue,
			@FormParam("bookValue") String bookValue,
			@FormParam("marketUs") String marketUs,
			@FormParam("strikePrice") String strikePrice,
			@FormParam("strikeTotal") String strikeTotal,
			@FormParam("marketValCall") String marketValCall,
			@FormParam("marketCalPut") String marketCalPut,
			@FormParam("optionsExpiryDate") String optionsExpiryDate,
			@FormParam("instrumentDisplay") String instrumentDisplay,
			@FormParam("action") String action) {
		List<ResponseVO> responseList = new ArrayList<ResponseVO>();
		logger.debug("createUpdateMusDump start --");
		try {
			ResponseVO response = new ResponseVO();
			response.setPassed(true);
			if (isValidActionString(action)) {
				response.setPassed(false);
				response.setMgs("Null/invalid action string passed");
			} else {
				if (isEmptyString(instrument)) {
					response.setPassed(false);
					response.setMgs("Null/invalid instrument string passed");
				} else {
					if (action.equalsIgnoreCase(UPDATE_ACTION_STR)) {
						if (isInvalidId(musDumpId)) {
							response.setPassed(false);
							response.setMgs("Null/invalid id string passed");
						}
					}

					if (response.isPassed()) {
						// no issues, proceed
						CurrentSession.openSession();
						MusDumpMgr musDumpMgr = (MusDumpMgr) ServiceLocator
								.get().getObjectManager(MusDumpMgr.class);
						MUsDump musDump = new MUsDump();
						musDump.setInstrument(new Instrument(instrument));

						if (!isEmptyString(strikeCode))
							musDump.setStrikeCode(strikeCode);
						try {
							if (!isInvalidId(marketValue))
								musDump.setMarketValue(BigDecimal.valueOf(Long
										.parseLong(marketValue)));
						} catch (Exception e) {
						}
						try {
							if (!isInvalidId(bookValue))
								musDump.setBookValue(BigDecimal.valueOf(Long
										.parseLong(bookValue)));
						} catch (Exception e) {
						}
						try {
							if (!isInvalidId(marketUs))
								musDump.setMarketUs(BigDecimal.valueOf(Long
										.parseLong(marketUs)));
						} catch (Exception e) {
						}
						try {
							if (!isInvalidId(strikePrice))
								musDump.setStrikePrice(BigDecimal.valueOf(Long
										.parseLong(strikePrice)));
						} catch (Exception e) {
						}
						try {
							if (!isInvalidId(strikeTotal))
								musDump.setStrikeTotal(BigDecimal.valueOf(Long
										.parseLong(strikeTotal)));
						} catch (Exception e) {
						}
						try {
							if (!isInvalidId(marketValCall))
								musDump.setMarketValCall(BigDecimal
										.valueOf(Long.parseLong(marketValCall)));
						} catch (Exception e) {
						}
						try {
							if (!isInvalidId(marketCalPut))
								musDump.setMarketCalPut(BigDecimal.valueOf(Long
										.parseLong(marketCalPut)));
						} catch (Exception e) {
						}
						if (!isEmptyString(optionsExpiryDate))
							musDump.setOptionsExpiryDate(new Date(
									optionsExpiryDate));
						if (!isEmptyString(instrumentDisplay))
							musDump.setInstrumentDisplay(instrumentDisplay);

						if (action.equalsIgnoreCase(UPDATE_ACTION_STR)) {
							musDump.setMUsDumpId(Integer.parseInt(musDumpId));
							musDumpMgr.update(musDump);
							response.setMgs("Successfully updated musDumpId: "
									+ musDumpId);
						} else {
							musDumpMgr.add(musDump);
							response.setMgs("Successfully added musDumpId: "
									+ musDump.getMUsDumpId());
						}

						response.setPassed(true);
						responseList.add(response);
					}
				}
			}

		} catch (Exception e) {
			logger.error("Exception in adding/editing MUS dump: ", e);
		} finally {
			CurrentSession.closeSession();
			logger.debug("createUpdateMusDump --  end");
		}
		return responseList;
	}

	@GET
	@Path("/deleteMUSDump/{volDumpId}")
	@Produces("application/json")
	public List<ResponseVO> deleteMUSDump(
			@PathParam("musDumpId") String musDumpId) {
		List<ResponseVO> responseList = new ArrayList<ResponseVO>();
		logger.debug("deleteMUSDump start -- " + musDumpId);
		ResponseVO response = new ResponseVO();

		try {
			if (isInvalidId(musDumpId)) {
				response.setPassed(false);
				response.setMgs("Null/invalid id string passed: " + musDumpId);
			} else {
				// no issues, proceed
				CurrentSession.openSession();
				MusDumpMgr musDumpMgr = (MusDumpMgr) ServiceLocator.get()
						.getObjectManager(MusDumpMgr.class);
				MUsDump musDump = musDumpMgr.findByPrimaryKey(Integer
						.parseInt(musDumpId));
				if (musDump.getInstrument() == null) {
					logger.debug("deleteMUSDump: record not found for "
							+ musDumpId);
					response.setPassed(false);
					response.setMgs("Record not found in DB for ID: "
							+ musDumpId);
				} else { // record exists
					musDumpMgr.delete(musDump);
				}
			}
		} catch (Exception e) {
			logger.error("Exception in deleting mus dump: " + musDumpId, e);
			response.setPassed(false);
			response.setMgs("Exception deleting MusDumpId: " + musDumpId + e);
		} finally {
			CurrentSession.closeSession();
			logger.debug("deleteMUSDump--  end");
		}
		return responseList;
	}

	@GET
	@Path("/getOptDump")
	@Produces("application/json")
	public List<OptDumpVO> getOptDump() {
		List<OptDumpVO> optDumpVOList = new ArrayList<OptDumpVO>();
		logger.debug("getOptDump start --");

		try {
			CurrentSession.openSession();

			OptDumpMgr optDumpMgr = (OptDumpMgr) ServiceLocator.get()
					.getObjectManager(OptDumpMgr.class);
			List<OptDump> optDumpList = optDumpMgr.findAll();
			if (optDumpList != null && !optDumpList.isEmpty()) {
				for (OptDump optDump : optDumpList) {
					OptDumpVO optDumpVO = new OptDumpVO();
					optDumpVO.setOptDumpId(optDump.getOptDumpId().toString());
					if (optDump.getActiveLots() != null)
						optDumpVO.setActiveLots(Integer.toString(optDump
								.getActiveLots()));
					if (optDump.getInstrument() != null) {
						optDumpVO.setInstrumentName(optDump.getInstrument()
								.getInstrumentName());
						optDumpVO.setInstrumentCode(optDump.getInstrument()
								.getInstrumentCode());
						optDumpVO.setInstrumentId(optDump.getInstrument()
								.getInstrumentId().toString());
					}
					if (optDump.getMonth() != null)
						optDumpVO.setMonth(optDump.getMonth().toString());
					if (optDump.getStrike() != null)
						optDumpVO.setStrike(optDump.getStrike().toString());
					if (optDump.getCP() != null)
						optDumpVO.setCP(optDump.getCP().toString());
					if (optDump.getPrem() != null)
						optDumpVO.setPrem(optDump.getPrem().toString());
					if (optDump.getOrigLots() != null)
						optDumpVO.setOrigLots(optDump.getOrigLots().toString());
					if (optDump.getPortfolio() != null)
						optDumpVO.setPortfolio(optDump.getPortfolio());
					if (optDump.getMultiple() != null)
						optDumpVO.setMultiple(optDump.getMultiple().toString());
					if (optDump.getLotsForPivot() != null)
						optDumpVO.setLotsForPivot(optDump.getLotsForPivot()
								.toString());
					if (optDump.getCounterparty() != null)
						optDumpVO.setCounterparty(optDump.getCounterparty());
					if (optDump.getDuplicated() != null)
						optDumpVO.setDuplicated(optDump.getDuplicated());
					if (optDump.getInternal() != null)
						optDumpVO.setInternal(optDump.getInternal());
					if (optDump.getTrn() != null)
						optDumpVO.setTrn(optDump.getTrn());
					if (optDump.getTrnDate() != null)
						optDumpVO.setTrnDate(optDump.getTrnDate().toString());
					if (optDump.getBuySell() != null)
						optDumpVO.setBuySell(optDump.getBuySell());
					if (optDump.getInitialQty() != null)
						optDumpVO.setInitialQty(optDump.getInitialQty()
								.toString());
					if (optDump.getContractMaturity() != null)
						optDumpVO.setContractMaturity(optDump
								.getContractMaturity());
					if (optDump.getCallPut() != null)
						optDumpVO.setCallPut(optDump.getCallPut());
					if (optDump.getStlPrm() != null)
						optDumpVO.setStlPrm(optDump.getStlPrm().toString());
					if (optDump.getCounterpartLabel() != null)
						optDumpVO.setCounterpartLabel(optDump
								.getCounterpartLabel());
					if (optDump.getLiveQty() != null)
						optDumpVO.setLiveQty(optDump.getLiveQty().toString());

					optDumpVOList.add(optDumpVO);
				}
			}
		} catch (Exception e) {
			logger.error("Exception in getting volume dump: ", e);
		} finally {
			CurrentSession.closeSession();
			logger.debug("getVolDump--  end");
		}
		return optDumpVOList;
	}

	@POST
	@Path("/getOptDumpFilter")
	@Produces("application/json")
	public List<OptDumpVO> getOptDumpFilter(
			@FormParam("optDumpId") String optDumpId,
			@FormParam("instrument") String instrument,
			@FormParam("month") String month,
			@FormParam("portfolio") String portfolio,
			@FormParam("trnDate") String trnDate,
			@FormParam("buySell") String buySell,
			@FormParam("callPut") String callPut,
			@FormParam("counterParty") String counterParty) {
		List<OptDumpVO> optDumpVOList = new ArrayList<OptDumpVO>();
		logger.debug("getOptDumpFilter start --");
		try {

			boolean isOptDumpId = !isEmptyString(optDumpId);
			boolean isInstrument = !isEmptyString(instrument);
			boolean isMonth = !isEmptyString(month);
			boolean isPortfolio = !isEmptyString(portfolio);
			boolean isTrnDate = !isEmptyString(trnDate);
			boolean isBuySell = !isEmptyString(buySell);
			boolean isCallPut = !isEmptyString(callPut);
			boolean isCounterParty = !isEmptyString(counterParty);

			if (!isOptDumpId && !isInstrument && !isMonth && !isPortfolio
					&& !isTrnDate && !isBuySell && !isCallPut
					&& !isCounterParty) {
				return optDumpVOList;
			}

			String hqlOptDump = "SELECT od FROM com.invenio.domain.OptDump od WHERE ";
			if (isOptDumpId) {
				hqlOptDump += " od.optDumpId = " + optDumpId;
				if (isInstrument || isMonth || isPortfolio || isTrnDate
						|| isBuySell || isCallPut || isCounterParty) {
					hqlOptDump += " AND ";
				}
			}

			if (isInstrument) {
				if (instrument.indexOf(",") < 0) {
					hqlOptDump += " od.instrument.instrumentId = '"
							+ Integer.parseInt(instrument) + "' ";
				} else {
					hqlOptDump += " od.volSurface.volSurfaceType IN ('"
							+ instrument.replaceAll(",", "','") + "') ";
				}
				if (isMonth || isPortfolio || isTrnDate || isBuySell
						|| isCallPut || isCounterParty) {
					hqlOptDump += " AND ";
				}
			}

			if (isMonth) {
				if (month.indexOf(",") < 0) {
					hqlOptDump += " od.month = '" + month + "' ";
				} else {
					hqlOptDump += " od.month IN ('"
							+ month.replaceAll(",", "','") + "') ";
				}
				if (isPortfolio || isTrnDate || isBuySell || isCallPut
						|| isCounterParty) {
					hqlOptDump += " AND ";
				}
			}

			if (isPortfolio) {
				if (portfolio.indexOf(",") < 0) {
					hqlOptDump += " od.portfolio = '" + portfolio + "' ";
				} else {
					hqlOptDump += " od.portfolio IN ('"
							+ portfolio.replaceAll(",", "','") + "') ";
				}
				if (isTrnDate || isBuySell || isCallPut || isCounterParty) {
					hqlOptDump += " AND ";
				}
			}

			if (isTrnDate) {
				if (trnDate.indexOf(",") < 0) {
					hqlOptDump += " od.trnDate = '" + trnDate + "' ";
				} else {
					hqlOptDump += " od.trnDate IN ('"
							+ trnDate.replaceAll(",", "','") + "') ";
				}
				if (isBuySell || isCallPut || isCounterParty) {
					hqlOptDump += " AND ";
				}
			}

			if (isBuySell) {
				if (buySell.indexOf(",") < 0) {
					hqlOptDump += " od.buySell = '" + buySell + "' ";
				} else {
					hqlOptDump += " od.buySell IN ('"
							+ buySell.replaceAll(",", "','") + "') ";
				}
				if (isCallPut || isCounterParty) {
					hqlOptDump += " AND ";
				}
			}

			if (isCallPut) {
				if (callPut.indexOf(",") < 0) {
					hqlOptDump += " od.callPut = '" + callPut + "' ";
				} else {
					hqlOptDump += " od.callPut IN ('"
							+ callPut.replaceAll(",", "','") + "') ";
				}
			}

			if (isCounterParty) {
				if (counterParty.indexOf(",") < 0) {
					hqlOptDump += " od.counterParty = '" + counterParty + "' ";
				} else {
					hqlOptDump += " od.counterParty IN ('"
							+ counterParty.replaceAll(",", "','") + "') ";
				}
			}
			logger.debug("Generated HQL : " + hqlOptDump);
			InvenioSession session = CurrentSession.openSession();

			List<OptDump> optDumpList = (List<OptDump>) session.hqlQuery(
					hqlOptDump).list();

			if (optDumpList != null && !optDumpList.isEmpty()) {
				for (OptDump optDump : optDumpList) {
					OptDumpVO optDumpVO = new OptDumpVO();
					optDumpVO.setOptDumpId(optDump.getOptDumpId().toString());
					if (optDump.getActiveLots() != null)
						optDumpVO.setActiveLots(Integer.toString(optDump
								.getActiveLots()));
					if (optDump.getInstrument() != null) {
						optDumpVO.setInstrumentName(optDump.getInstrument()
								.getInstrumentName());
						optDumpVO.setInstrumentCode(optDump.getInstrument()
								.getInstrumentCode());
						optDumpVO.setInstrumentId(optDump.getInstrument()
								.getInstrumentId().toString());
					}
					if (optDump.getMonth() != null)
						optDumpVO.setMonth(optDump.getMonth().toString());
					if (optDump.getStrike() != null)
						optDumpVO.setStrike(optDump.getStrike().toString());
					if (optDump.getCP() != null)
						optDumpVO.setCP(optDump.getCP().toString());
					if (optDump.getPrem() != null)
						optDumpVO.setPrem(optDump.getPrem().toString());
					if (optDump.getOrigLots() != null)
						optDumpVO.setOrigLots(optDump.getOrigLots().toString());
					if (optDump.getPortfolio() != null)
						optDumpVO.setPortfolio(optDump.getPortfolio());
					if (optDump.getMultiple() != null)
						optDumpVO.setMultiple(optDump.getMultiple().toString());
					if (optDump.getLotsForPivot() != null)
						optDumpVO.setLotsForPivot(optDump.getLotsForPivot()
								.toString());
					if (optDump.getCounterparty() != null)
						optDumpVO.setCounterparty(optDump.getCounterparty());
					if (optDump.getDuplicated() != null)
						optDumpVO.setDuplicated(optDump.getDuplicated());
					if (optDump.getInternal() != null)
						optDumpVO.setInternal(optDump.getInternal());
					if (optDump.getTrn() != null)
						optDumpVO.setTrn(optDump.getTrn());
					if (optDump.getTrnDate() != null)
						optDumpVO.setTrnDate(optDump.getTrnDate().toString());
					if (optDump.getBuySell() != null)
						optDumpVO.setBuySell(optDump.getBuySell());
					if (optDump.getInitialQty() != null)
						optDumpVO.setInitialQty(optDump.getInitialQty()
								.toString());
					if (optDump.getContractMaturity() != null)
						optDumpVO.setContractMaturity(optDump
								.getContractMaturity());
					if (optDump.getCallPut() != null)
						optDumpVO.setCallPut(optDump.getCallPut());
					if (optDump.getStlPrm() != null)
						optDumpVO.setStlPrm(optDump.getStlPrm().toString());
					if (optDump.getCounterpartLabel() != null)
						optDumpVO.setCounterpartLabel(optDump
								.getCounterpartLabel());
					if (optDump.getLiveQty() != null)
						optDumpVO.setLiveQty(optDump.getLiveQty().toString());

					optDumpVOList.add(optDumpVO);
				}
			}

		} catch (Exception e) {
			logger.error("Exception in getOptDumpFilter: ", e);
		} finally {
			CurrentSession.closeSession();
			logger.debug("getOptDumpFilter --  end");
		}
		return optDumpVOList;
	}

	@POST
	@Path("/createUpdateOptDump")
	@Produces("application/json")
	public List<ResponseVO> createUpdateOptDump(
			@FormParam("optDumpId") String optDumpId,
			@FormParam("instrument") String instrument,
			@FormParam("activeLots") String activeLots,
			@FormParam("month") String month,
			@FormParam("strike") String strike, @FormParam("cp") String cp,
			@FormParam("prem") String prem,
			@FormParam("origLots") String origLots,
			@FormParam("portfolio") String portfolio,
			@FormParam("multiple") String multiple,
			@FormParam("lotsForPivot") String lotsForPivot,
			@FormParam("counterparty") String counterparty,
			@FormParam("duplicated") String duplicated,
			@FormParam("internal") String internal,
			@FormParam("trn") String trn, @FormParam("trnDate") String trnDate,
			@FormParam("buySell") String buySell,
			@FormParam("initialQty") String initialQty,
			@FormParam("contractMaturity") String contractMaturity,
			@FormParam("callPut") String callPut,
			@FormParam("stlPrm") String stlPrm,
			@FormParam("counterpartLabel") String counterpartLabel,
			@FormParam("liveQty") String liveQty,
			@FormParam("action") String action) {
		List<ResponseVO> responseList = new ArrayList<ResponseVO>();
		logger.debug("createUpdateOptDump start --");
		try {
			ResponseVO response = new ResponseVO();
			response.setPassed(true);
			if (isValidActionString(action)) {
				response.setPassed(false);
				response.setMgs("Null/invalid action string passed");
			} else {
				if (isEmptyString(instrument)) {
					response.setPassed(false);
					response.setMgs("Null/invalid instrument string passed");
				} else {
					if (action.equalsIgnoreCase(UPDATE_ACTION_STR)) {
						if (isInvalidId(optDumpId)) {
							response.setPassed(false);
							response.setMgs("Null/invalid id string passed");
						}
					}

					if (response.isPassed()) {
						// no issues, proceed
						CurrentSession.openSession();
						OptDumpMgr optDumpMgr = (OptDumpMgr) ServiceLocator
								.get().getObjectManager(OptDumpMgr.class);
						OptDump optDump = new OptDump();
						optDump.setInstrument(new Instrument(instrument));
						if (!isInvalidId(activeLots))
							optDump.setActiveLots(Integer.parseInt(activeLots));
						if (!isInvalidId(month))
							optDump.setMonth(Integer.parseInt(month));
						try {
							if (!isInvalidId(strike))
								optDump.setStrike(BigDecimal.valueOf(Long
										.parseLong(strike)));
						} catch (Exception e) {
						}
						try {
							if (!isInvalidId(cp))
								optDump.setCP(BigDecimal.valueOf(Long
										.parseLong(cp)));
						} catch (Exception e) {
						}
						try {
							if (!isInvalidId(prem))
								optDump.setPrem(BigDecimal.valueOf(Long
										.parseLong(prem)));
						} catch (Exception e) {
						}
						try {
							if (!isInvalidId(origLots))
								optDump.setOrigLots(BigDecimal.valueOf(Long
										.parseLong(origLots)));
						} catch (Exception e) {
						}
						if (!isEmptyString(portfolio))
							optDump.setPortfolio(portfolio);
						try {
							if (!isInvalidId(multiple))
								optDump.setMultiple(BigDecimal.valueOf(Long
										.parseLong(multiple)));
						} catch (Exception e) {
						}
						try {
							if (!isInvalidId(lotsForPivot))
								optDump.setLotsForPivot(BigDecimal.valueOf(Long
										.parseLong(lotsForPivot)));
						} catch (Exception e) {
						}
						if (!isEmptyString(counterparty))
							optDump.setCounterparty(counterparty);
						if (!isEmptyString(counterparty))
							optDump.setDuplicated(duplicated);
						if (!isEmptyString(internal))
							optDump.setInternal(internal);
						if (!isEmptyString(trn))
							optDump.setTrn(trn);
						if (!isEmptyString(trnDate))
							optDump.setTrnDate(new Date(trnDate));
						if (!isEmptyString(buySell))
							optDump.setBuySell(buySell);
						try {
							if (!isInvalidId(initialQty))
								optDump.setInitialQty(Integer
										.parseInt(initialQty));
						} catch (Exception e) {
						}
						if (!isEmptyString(contractMaturity))
							optDump.setContractMaturity(contractMaturity);
						if (!isEmptyString(callPut))
							optDump.setCallPut(callPut);
						try {
							if (!isInvalidId(stlPrm))
								optDump.setStlPrm(BigDecimal.valueOf(Long
										.parseLong(stlPrm)));
						} catch (Exception e) {
						}
						if (!isEmptyString(counterpartLabel))
							optDump.setCounterpartLabel(counterpartLabel);
						try {
							if (!isInvalidId(liveQty))
								optDump.setLiveQty(Integer.parseInt(liveQty));
						} catch (Exception e) {
						}

						if (action.equalsIgnoreCase(UPDATE_ACTION_STR)) {
							optDump.setOptDumpId(Integer.parseInt(optDumpId));
							optDumpMgr.update(optDump);
							response.setMgs("Successfully updated optDumpId: "
									+ optDumpId);
						} else {
							optDumpMgr.add(optDump);
							response.setMgs("Successfully added optDumpId: "
									+ optDump.getOptDumpId());
						}

						response.setPassed(true);
						responseList.add(response);
					}
				}
			}

		} catch (Exception e) {
			logger.error("Exception in adding/editing opt dump: ", e);
		} finally {
			CurrentSession.closeSession();
			logger.debug("createUpdateOptDump--  end");
		}
		return responseList;
	}

	@GET
	@Path("/deleteOptDump/{optDumpId}")
	@Produces("application/json")
	public List<ResponseVO> deleteOptDump(
			@PathParam("optDumpId") String optDumpId) {
		List<ResponseVO> responseList = new ArrayList<ResponseVO>();
		logger.debug("deleteOptDump start -- " + optDumpId);
		ResponseVO response = new ResponseVO();

		try {
			if (isInvalidId(optDumpId)) {
				response.setPassed(false);
				response.setMgs("Null/invalid id string passed: " + optDumpId);
			} else {
				// no issues, proceed
				CurrentSession.openSession();
				OptDumpMgr optDumpMgr = (OptDumpMgr) ServiceLocator.get()
						.getObjectManager(OptDumpMgr.class);
				OptDump optDump = optDumpMgr.findByPrimaryKey(Integer
						.parseInt(optDumpId));
				if (optDump.getInstrument() == null) {
					logger.debug("deleteOptDump: record not found for "
							+ optDumpId);
					response.setPassed(false);
					response.setMgs("Record not found in DB for ID: "
							+ optDumpId);
				} else { // record exists
					optDumpMgr.delete(optDump);
				}
			}
		} catch (Exception e) {
			logger.error("Exception in deleting opt dump: " + optDumpId, e);
			response.setPassed(false);
			response.setMgs("Exception deleting OptDumpId: " + optDumpId + e);
		} finally {
			CurrentSession.closeSession();
			logger.debug("deleteOptDump--  end");
		}
		return responseList;
	}

	private static boolean isValidActionString(String action) {
		if (action != null
				&& (action.equalsIgnoreCase(CREATE_ACTION_STR)
						|| action.equalsIgnoreCase(REMOVE_ACTION_STR) || action
							.equalsIgnoreCase(UPDATE_ACTION_STR)))
			return true;
		else
			return false;
	}

	private static boolean isEmptyString(String string) {
		if (string == null || string.trim().equalsIgnoreCase(""))
			return true;
		else
			return false;
	}

	private static boolean isInvalidId(String id) {
		boolean invalid = false;
		if (id == null || id.trim().equalsIgnoreCase("")) {
			invalid = true;
		} else {
			try {
				@SuppressWarnings("unused")
				int idIntVal = Integer.parseInt(id);
			} catch (NumberFormatException nfe) {
				// set bool val
				invalid = true;
			}
		}
		return invalid;
	}
}
