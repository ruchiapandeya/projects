package com.invenio.service.admin;

import java.math.BigDecimal;
import java.math.BigInteger;
import java.text.DateFormat;
import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.Date;
import java.util.List;

import javax.persistence.EntityManager;
import javax.persistence.PersistenceContext;
import javax.persistence.TypedQuery;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.util.CollectionUtils;
import org.springframework.util.StringUtils;

import com.invenio.converter.VersionInfoConverter;
import com.invenio.converter.admin.DealTicketConverter;
import com.invenio.dao.entity.admin.Product;
import com.invenio.dao.repository.admin.AccumulationFrequencyRepository;
import com.invenio.dao.repository.admin.ActionTypeRepository;
import com.invenio.dao.repository.admin.AveragingFrequencyRepository;
import com.invenio.dao.repository.admin.DealTicketRepository;
import com.invenio.dao.repository.admin.DerivativeTypeRepository;
import com.invenio.dao.repository.admin.QuantoTypeRepository;
import com.invenio.schema.beans.admin.DealTicket;
import com.invenio.schema.beans.core.DealTicketRequest;
import com.invenio.schema.beans.core.FilterElement;
import com.invenio.schema.beans.core.FilterElementList;
import com.invenio.schema.beans.core.FilterElementRange;
import com.invenio.schema.beans.core.FilterElementSimple;
import com.invenio.schema.beans.core.FilterRequest;
import com.invenio.service.AbstractVersionedPersistenceService;

@Service
public class DealTicketServiceImpl extends AbstractVersionedPersistenceService<DealTicket, DealTicketConverter, com.invenio.dao.entity.admin.DealTicket, Integer, DealTicketRepository>
		implements DealTicketService {

	@PersistenceContext
	private EntityManager entityManager;
	
	private final DerivativeTypeRepository derivativeTypeRepository;
	private final ActionTypeRepository actionTypeRepository;
	private final AveragingFrequencyRepository averagingFrequencyRepository;
	private final AccumulationFrequencyRepository accumulationFrequencyRepository;
	private final QuantoTypeRepository quantoTypeRepository;
	
	@Autowired
	public DealTicketServiceImpl(DealTicketConverter coverter, VersionInfoConverter versionInfoConverter, 
			DealTicketRepository repository, ActionTypeRepository actionTypeRepository,
			AveragingFrequencyRepository averagingFrequencyRepository,
			AccumulationFrequencyRepository accumulationFrequencyRepository,
			DerivativeTypeRepository derivativeTypeRepository,
			QuantoTypeRepository quantoTypeRepository) {
		super(coverter, versionInfoConverter, repository);
		this.actionTypeRepository = actionTypeRepository;
		this.averagingFrequencyRepository = averagingFrequencyRepository;
		this.accumulationFrequencyRepository = accumulationFrequencyRepository;
		this.derivativeTypeRepository = derivativeTypeRepository;
		this.quantoTypeRepository = quantoTypeRepository;
	}
	
	@Override
	public List<DealTicket> filter(FilterRequest filterRequest) {
		String sqlStatementPre = "select dt from com.invenio.dao.entity.admin.DealTicket dt where dt.versionNumber = (SELECT MAX(d.versionNumber) FROM com.invenio.dao.entity.admin.DealTicket d WHERE dt.versionRef = d.versionRef)";
		String sqlStatement = "";
		
		// get all Simple hints
		for (FilterElement element : filterRequest.getSimpleHints()) {
			String value = ((FilterElementSimple) element).getValue();
			if(StringUtils.isEmpty(value)) {
				continue;
			}
			if(element.getKey().equals("vol-override")) {
				sqlStatement += " and dt.volOverride = '" + value + "'";
			} else if(element.getKey().equals("correl-override")) {
				sqlStatement += " and dt.correlOverride = '" + value + "'";
			} else if(element.getKey().equals("reconed-with-clearer")) {
				sqlStatement += " and dt.reconedWithClearer = '" + value + "'";
			} else if(element.getKey().equals("expiry-processed")) {
				sqlStatement += " and dt.expiryProcessed = '" + value + "'";
			} else if(element.getKey().equals("brokerage-paid")) {
				sqlStatement += " and dt.brokeragePaid = '" + value + "'";
			} else if(element.getKey().equals("execution-broker")) {
				sqlStatement += " and dt.executionBroker LIKE '%" + value + "%'";
			} else if(element.getKey().equals("clearing-broker")) {
				sqlStatement += " and dt.clearingBroker LIKE '%" + value + "%'";
			}
		}
		
		// get all range hints
		for (FilterElementRange element: filterRequest.getRangeHints()) {
			String fromValue = ((FilterElementRange) element).getFromValue();
			String toValue = ((FilterElementRange) element).getToValue();
			if(element.getKey().equals("date-range")) {
				if(!StringUtils.isEmpty(fromValue)) {
					sqlStatement += " and dt.systemDate >= '" + fromValue + "'";
				}
				if(!StringUtils.isEmpty(toValue)) {
					sqlStatement += " and dt.systemDate <= '" + fromValue + "'";
				}
			} else if(element.getKey().equals("excel-date-range")) {
				if(!StringUtils.isEmpty(fromValue)) {
					sqlStatement += " and dt.dateTime >= '" + fromValue + "'";
				}
				if(!StringUtils.isEmpty(toValue)) {
					sqlStatement += " and dt.dateTime <= '" + fromValue + "'";
				}
			}
		}
		
		// get all list hints
		for (FilterElementList element: filterRequest.getListHints()) {
			if(element.getKey().equals("product")) {
				sqlStatement += " and dt.product.id in (";
					for (String value: ((FilterElementList) element).getValues()) {
						sqlStatement += value + ",";
					}
					if (sqlStatement.lastIndexOf(',') > -1) {
						sqlStatement = sqlStatement.substring(0, sqlStatement.length()-1);
					}
					sqlStatement += ") ";
			} else if(element.getKey().equals("sub-product1")) {
				sqlStatement += " and dt.subProduct1 in (";
					for (String value: ((FilterElementList) element).getValues()) {
						sqlStatement += value + ",";
					}
					if (sqlStatement.lastIndexOf(',') > -1) {
						sqlStatement = sqlStatement.substring(0, sqlStatement.length()-1);
					}
					sqlStatement += ") ";
			} else if(element.getKey().equals("sub-product2")) {
				sqlStatement += " and dt.subProduct2 in (";
					for (String value: ((FilterElementList) element).getValues()) {
						sqlStatement += value + ",";
					}
					if (sqlStatement.lastIndexOf(',') > -1) {
						sqlStatement = sqlStatement.substring(0, sqlStatement.length()-1);
					}
					sqlStatement += ") ";
			} else if(element.getKey().equals("contract-id1")) {
				sqlStatement += " and dt.contractId1 in (";
					for (String value: ((FilterElementList) element).getValues()) {
						sqlStatement += value + ",";
					}
					if (sqlStatement.lastIndexOf(',') > -1) {
						sqlStatement = sqlStatement.substring(0, sqlStatement.length()-1);
					}
					sqlStatement += ") ";
			} else if(element.getKey().equals("contract-id2")) {
				sqlStatement += " and dt.contractId2 in (";
					for (String value: ((FilterElementList) element).getValues()) {
						sqlStatement += value + ",";
					}
					if (sqlStatement.lastIndexOf(',') > -1) {
						sqlStatement = sqlStatement.substring(0, sqlStatement.length()-1);
					}
					sqlStatement += ") ";
			} else if(element.getKey().equals("trade-id")) {
				sqlStatement += " and dt.tradeId in (";
					for (String value: ((FilterElementList) element).getValues()) {
						sqlStatement += value + ",";
					}
					if (sqlStatement.lastIndexOf(',') > -1) {
						sqlStatement = sqlStatement.substring(0, sqlStatement.length()-1);
					}
					sqlStatement += ") ";
			} else if(element.getKey().equals("parent-trade-id")) {
				sqlStatement += " and dt.parentTradeId in (";
					for (String value: ((FilterElementList) element).getValues()) {
						sqlStatement += value + ",";
					}
					if (sqlStatement.lastIndexOf(',') > -1) {
						sqlStatement = sqlStatement.substring(0, sqlStatement.length()-1);
					}
					sqlStatement += ") ";
			} else if(element.getKey().equals("portfolio")) {
				sqlStatement += " and dt.portfolio in (";
					for (String value: ((FilterElementList) element).getValues()) {
						sqlStatement += value + ",";
					}
					if (sqlStatement.lastIndexOf(',') > -1) {
						sqlStatement = sqlStatement.substring(0, sqlStatement.length()-1);
					}
					sqlStatement += ") ";
			} else if(element.getKey().equals("sub-portfolio")) {
				sqlStatement += " and dt.subPortfolio in (";
					for (String value: ((FilterElementList) element).getValues()) {
						sqlStatement += value + ",";
					}
					if (sqlStatement.lastIndexOf(',') > -1) {
						sqlStatement = sqlStatement.substring(0, sqlStatement.length()-1);
					}
					sqlStatement += ") ";
			} else if(element.getKey().equals("strategy-name")) {
				sqlStatement += " and dt.strategyName in (";
					for (String value: ((FilterElementList) element).getValues()) {
						sqlStatement += value + ",";
					}
					if (sqlStatement.lastIndexOf(',') > -1) {
						sqlStatement = sqlStatement.substring(0, sqlStatement.length()-1);
					}
					sqlStatement += ") ";
			} else if(element.getKey().equals("derivative-type")) {
				sqlStatement += " and dt.derivativeType.id in (";
					for (String value: ((FilterElementList) element).getValues()) {
						sqlStatement += value + ",";
					}
					if (sqlStatement.lastIndexOf(',') > -1) {
						sqlStatement = sqlStatement.substring(0, sqlStatement.length()-1);
					}
					sqlStatement += ") ";
			} else if(element.getKey().equals("counterparty-parent")) {
				sqlStatement += " and dt.counterpartyParent in (";
					for (String value: ((FilterElementList) element).getValues()) {
						sqlStatement += value + ",";
					}
					if (sqlStatement.lastIndexOf(',') > -1) {
						sqlStatement = sqlStatement.substring(0, sqlStatement.length()-1);
					}
					sqlStatement += ") ";
			} else if(element.getKey().equals("counterparty-bu")) {
				sqlStatement += " and dt.counterpartyBu in (";
					for (String value: ((FilterElementList) element).getValues()) {
						sqlStatement += value + ",";
					}
					if (sqlStatement.lastIndexOf(',') > -1) {
						sqlStatement = sqlStatement.substring(0, sqlStatement.length()-1);
					}
					sqlStatement += ") ";
			} else if(element.getKey().equals("counterparty-entity")) {
				sqlStatement += " and dt.counterpartyEntity in (";
					for (String value: ((FilterElementList) element).getValues()) {
						sqlStatement += value + ",";
					}
					if (sqlStatement.lastIndexOf(',') > -1) {
						sqlStatement = sqlStatement.substring(0, sqlStatement.length()-1);
					}
					sqlStatement += ") ";
			} else if(element.getKey().equals("channel")) {
				sqlStatement += " and dt.channel in (";
					for (String value: ((FilterElementList) element).getValues()) {
						sqlStatement += value + ",";
					}
					if (sqlStatement.lastIndexOf(',') > -1) {
						sqlStatement = sqlStatement.substring(0, sqlStatement.length()-1);
					}
					sqlStatement += ") ";
			}
		}
		
		sqlStatement = sqlStatementPre + sqlStatement;
		
		System.out.println("stmt: \t" + sqlStatement);
		TypedQuery<com.invenio.dao.entity.admin.DealTicket> filterQuery = entityManager.createQuery(sqlStatement, com.invenio.dao.entity.admin.DealTicket.class);
		List<DealTicket> filterResults = converter.convertFrom(filterQuery.getResultList());
		if(CollectionUtils.isEmpty(filterResults)) {
			filterResults = new ArrayList<DealTicket>();
		}
		System.out.println("size: " + filterResults.size());
		return filterResults;
	}
	
	@Override
	public void insert(DealTicketRequest dealTicketRequest) throws ParseException {
		com.invenio.dao.entity.admin.DealTicket dealTicket = new com.invenio.dao.entity.admin.DealTicket();
		// get all Simple hints
		for (FilterElement element : dealTicketRequest.getSimpleHints()) {
			String value = ((FilterElementSimple) element).getValue();
			if (StringUtils.isEmpty(value)) {
				continue;
			}
			
			if (element.getKey().equals("product")) {
				Product product = new Product();
				product.setId(Integer.parseInt(value));
				dealTicket.setProduct(product);
			} else if (element.getKey().equals("derivative-type")) {
				dealTicket.setDerivativeType(derivativeTypeRepository.findByDerivativeType(value));
			} else if (element.getKey().equals("action-type")) {
				dealTicket.setActionType(actionTypeRepository.findByActionType(value));
			} else if (element.getKey().equals("quanto-type")) {
				dealTicket.setQuantoType(quantoTypeRepository.findByQuantoType(value));
			} else if (element.getKey().equals("accumulation-frequency")) {
				dealTicket.setAccumulationFrequency(accumulationFrequencyRepository.findByFrequencyType(value));
			} else if (element.getKey().equals("averaging-frequency")) {
				dealTicket.setAveragingFrequency(averagingFrequencyRepository.findByFrequencyType(value));
			} else if (element.getKey().equals("strike")) {
				dealTicket.setStrike(new BigDecimal(value));
			} else if (element.getKey().equals("original-lots")) {
				dealTicket.setOriginalLots(new BigDecimal(value));
			} else if (element.getKey().equals("original-premium")) {
				dealTicket.setOriginalPremium(new BigDecimal(value));
			} else if (element.getKey().equals("vol-override-value")) {
				dealTicket.setVolOverrideValue(new BigDecimal(value));
			} else if (element.getKey().equals("correl-override-value")) {
				dealTicket.setCorrelOverrideValue(new BigDecimal(value));
			} else if (element.getKey().equals("ref-futures-price")) {
				dealTicket.setRefFuturesPrice(new BigDecimal(value));
			} else if (element.getKey().equals("barrier1")) {
				dealTicket.setBarrier1(new BigDecimal(value));
			} else if (element.getKey().equals("barrier2")) {
				dealTicket.setBarrier2(new BigDecimal(value));
			} else if (element.getKey().equals("active-lots")) {
				dealTicket.setActiveLots(new BigDecimal(value));
			} else if (element.getKey().equals("exercised-lots")) {
				dealTicket.setExercisedLots(new BigDecimal(value));
			} else if (element.getKey().equals("abandoned-lots")) {
				dealTicket.setAbandonedLots(new BigDecimal(value));
			} else if (element.getKey().equals("got-assigned-lots")) {
				dealTicket.setGotAssignedLots(new BigDecimal(value));
			} else if (element.getKey().equals("average-till-now")) {
				dealTicket.setAverageTillNow(new BigDecimal(value));
			} else if (element.getKey().equals("accumulation-till-now")) {
				dealTicket.setAccumulationTillNow(new BigDecimal(value));
			} else if (element.getKey().equals("rebate")) {
				dealTicket.setRebate(new BigDecimal(value));
			} else if (element.getKey().equals("brokerage-accrued")) {
				dealTicket.setBrokerageAccrued(new BigDecimal(value));
			} else if (element.getKey().equals("portfolio")) {
				dealTicket.setPortfolio(value);
			} else if (element.getKey().equals("sub-portfolio")) {
				dealTicket.setSubPortfolio(value);
			} else if (element.getKey().equals("sub-product1")) {
				dealTicket.setSubProduct1(value);
			} else if (element.getKey().equals("sub-product2")) {
				dealTicket.setSubProduct2(value);
			} else if (element.getKey().equals("created-by")) {
				dealTicket.setCreatedBy(value);
			} else if (element.getKey().equals("brokerage-comment")) {
				dealTicket.setBrokerageComment(value);
			} else if (element.getKey().equals("brokerage-rate")) {
				dealTicket.setBrokerageRate(value);
			} else if (element.getKey().equals("execution-broker")) {
				dealTicket.setExecutionBroker(value);
			} else if (element.getKey().equals("clearing-broker")) {
				dealTicket.setClearingBroker(value);
			} else if (element.getKey().equals("counterparty-entity")) {
				dealTicket.setCounterpartyEntity(value);
			} else if (element.getKey().equals("counterparty-bu")) {
				dealTicket.setCounterpartyBu(value);
			} else if (element.getKey().equals("counterparty-parent")) {
				dealTicket.setCounterpartyParent(value);
			} else if (element.getKey().equals("brokerage-paid")) {
				dealTicket.setBrokeragePaid(value.charAt(0));
			} else if (element.getKey().equals("expiry-processed")) {
				dealTicket.setExpiryProcessed(value.charAt(0));
			} else if (element.getKey().equals("vol-override")) {
				dealTicket.setVolOverride(value.charAt(0));
			} else if (element.getKey().equals("correl-override")) {
				dealTicket.setCorrelOverride(value.charAt(0));
			} else if (element.getKey().equals("barrier1-obs-start")) {
				DateFormat format = new SimpleDateFormat("dd-MM-YYYY");
				dealTicket.setBarrier1ObsStart(format.parse(value));
			} else if (element.getKey().equals("barrier2-obs-start")) {
				DateFormat format = new SimpleDateFormat("dd-MM-YYYY");
				dealTicket.setBarrier2ObsStart(format.parse(value));
			} else if (element.getKey().equals("barrier1-obs-end-date")) {
				DateFormat format = new SimpleDateFormat("dd-MM-YYYY");
				dealTicket.setBarrier1ObsEndDate(format.parse(value));
			} else if (element.getKey().equals("barrier2-obs-end-date")) {
				DateFormat format = new SimpleDateFormat("dd-MM-YYYY");
				dealTicket.setBarrier2ObsEndDate(format.parse(value));
			} else if (element.getKey().equals("averaging-start-date")) {
				DateFormat format = new SimpleDateFormat("dd-MM-YYYY");
				dealTicket.setAveragingStartDate(format.parse(value));
			} else if (element.getKey().equals("averaging-end-date")) {
				DateFormat format = new SimpleDateFormat("dd-MM-YYYY");
				dealTicket.setAveragingEndDate(format.parse(value));
			} else if (element.getKey().equals("accumulation-start-date")) {
				DateFormat format = new SimpleDateFormat("dd-MM-YYYY");
				dealTicket.setAccumulationStartDate(format.parse(value));
			} else if (element.getKey().equals("accumulation-end-date")) {
				DateFormat format = new SimpleDateFormat("dd-MM-YYYY");
				dealTicket.setAccumulationEndDate(format.parse(value));
			} else if (element.getKey().equals("date-time")) {
				DateFormat format = new SimpleDateFormat("dd-MM-YYYY");
				dealTicket.setDateTime(format.parse(value));
			}
			dealTicket.setSystemDate(new Date());
			dealTicket.setParentTradeId(0);
			dealTicket.setTradeId(0);
		}
		DealTicket dTicket = save(converter.convertFrom(dealTicket));
		//update the tradeId as pk
		dTicket.setTradeId(BigInteger.valueOf(dTicket.getId()));
		repository.save(converter.convertTo(dTicket));
	}
}
