package com.invenio.logic;

import java.math.BigDecimal;
import java.util.ArrayList;
import java.util.List;

import javax.jws.WebService;
import javax.ws.rs.FormParam;
import javax.ws.rs.GET;
import javax.ws.rs.POST;
import javax.ws.rs.Path;
import javax.ws.rs.Produces;

import org.apache.log4j.Logger;

import com.invenio.domain.Instrument;
import com.invenio.init.NonSecureMethod;
import com.invenio.manager.InstrumentMgr;
import com.invenio.service.ServiceLocator;
import com.invenio.service.impl.CurrentSession;
import com.invenio.service.impl.InvenioSession;
import com.invenio.vo.InstrumentVO;
import com.invenio.vo.ResponseVO;

@WebService
@Path("/admin")
@Produces("application/json")
public class AdminLogic {

	private static final Logger logger = Logger.getLogger(AdminLogic.class);
	
	@POST
	@Path("/addEditInstrument/")
	@Produces("application/json")
	public List<ResponseVO> addEditInstrument(
			@FormParam("instrumentId")String instrumentId, 
			@FormParam("instrumentName")String instrumentName,
			@FormParam("instrumentCode")String instrumentCode,
			@FormParam("portfolio")String portfolio,
			@FormParam("maturity")String maturity,
			@FormParam("startValue")String startValue,
			@FormParam("endValue")String endValue,
			@FormParam("multiple")String multiple,
			@FormParam("action")String action) {
		List<ResponseVO> responseVOList = new ArrayList<ResponseVO>();
		logger.debug("addEditInstrument -- START");
		boolean isUpdate = instrumentId != null && !instrumentId.isEmpty();

		try {
			
			InvenioSession session = CurrentSession.openSession();
			InstrumentMgr instrumentMgr = (InstrumentMgr) ServiceLocator.get().getObjectManager(InstrumentMgr.class);
			
			Instrument instrument = null;
			if (!isUpdate) {
				instrument = new Instrument();
				List<Instrument> instrumentList = instrumentMgr.findInstrumentByCode(instrumentCode);
				if (instrumentList != null && !instrumentList.isEmpty()) {
					responseVOList.add(new ResponseVO("Instrument code "+instrumentCode+" already exists. Please provide some other value for instrument code", false));
					return responseVOList;
				}
			} else {
				instrument = instrumentMgr.findByPrimaryKey(Integer.parseInt(instrumentId));
				List<Instrument> instrumentList = instrumentMgr.findInstrumentByCode(instrumentCode);
				if (instrumentList != null && !instrumentList.isEmpty() && !instrumentList.get(0).getInstrumentId().equals(Integer.parseInt(instrumentId))) {
					responseVOList.add(new ResponseVO("Instrument code "+instrumentCode+" already exists. Please provide some other value for instrument code", false));
					return responseVOList;
				}
			}
		
			instrument.setInstrumentCode(instrumentCode);
			instrument.setInstrumentName(instrumentName);
			instrument.setMaturity(maturity);
			try {
				instrument.setMultiple(new BigDecimal(multiple));
			} catch (Exception e) {
				instrument.setMultiple(null);
			}
			instrument.setPortfolio(portfolio);
			
			try {
				instrument.setStartValue(new BigDecimal(startValue));
			} catch (Exception e) {
				instrument.setStartValue(null);
			}
			try {
				instrument.setEndValue(new BigDecimal(endValue));
			} catch (Exception e) {
				instrument.setEndValue(null);
			}
			
			session.beginTransaction();
			if (!isUpdate) {
				instrumentMgr.add(instrument);
			} else {
				instrumentMgr.update(instrument);
			}
			session.commitTransaction();
			if (!isUpdate) {
				responseVOList.add(new ResponseVO("Added instrument successfully" + instrument.getInstrumentId(), true));
			} else {
				responseVOList.add(new ResponseVO("Update of instrument successful", true));
			}
		} catch (Exception e) {
			logger.error(e);
			if (!isUpdate) {
				responseVOList.add(new ResponseVO("Failed to add instrument" + e.getMessage(), false));
			} else {
				responseVOList.add(new ResponseVO("Failed to update instrument "+e.getMessage(), false));
			}
		} finally {
			CurrentSession.closeSession();
		}
		logger.debug("addEditInstrument  -- END");
		return responseVOList;
	}

	@NonSecureMethod
	@GET
	@Path("/getAllInstruments")
	@Produces("application/json")
	public List<InstrumentVO> getAllInstruments() {
		List<InstrumentVO> instrumentVOList = new ArrayList<InstrumentVO>();
		logger.debug("getAllInstruments start --");
		try {
			CurrentSession.openSession();
			InstrumentMgr instrumentMgr = (InstrumentMgr) ServiceLocator.get().getObjectManager(InstrumentMgr.class);
			List<Instrument> instrumentsList = instrumentMgr.findAll(); 
			for (Instrument instrument: instrumentsList) {
				InstrumentVO instrumentVO = new InstrumentVO();
				instrumentVO.setInstrumentId(instrument.getInstrumentId());
				instrumentVO.setInstrumentName(instrument.getInstrumentName());
				instrumentVO.setInstrumentCode(instrument.getInstrumentCode());
				instrumentVO.setMaturity(instrument.getMaturity());
				instrumentVO.setPortfolio(instrument.getPortfolio());
				if (instrument.getMultiple() != null)
					instrumentVO.setMultiple(instrument.getMultiple());
				if (instrument.getStartValue() != null)
					instrumentVO.setStartValue(instrument.getStartValue());
				if (instrument.getEndValue() != null)
					instrumentVO.setEndValue(instrument.getEndValue());
				
				instrumentVOList.add(instrumentVO);
			}
		} catch (Exception e) {
			logger.error("Failed to get all instruments", e);
		} finally {
			CurrentSession.closeSession();
		}
		return instrumentVOList;
	}
	
}
