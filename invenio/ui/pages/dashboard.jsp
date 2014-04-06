<!DOCTYPE html>

<!--
/*
 * Copyright (c) 2011 Webismymind SPRL
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://editablegrid.net/license
 */
-->
	
	
<html>
	<head>
		<jsp:include page="header.jsp" />
		<!-- include javascript and css files for the EditableGrid library -->
		<script src="../js/editablegrid-2.0.1.js"></script>
		<link rel="stylesheet" href="../css/editablegrid-2.0.1.css" type="text/css" media="screen">

		<!-- include javascript and css files for jQuery, needed for the datepicker and autocomplete extensions -->
		<script src="../extensions/jquery/jquery-1.6.4.min.js" ></script>
		<script src="../extensions/jquery/jquery-ui-1.8.16.custom.min.js" ></script>
		<link rel="stylesheet" href="../extensions/jquery/jquery-ui-1.8.16.custom.css" type="text/css" media="screen">
		
		<!-- include javascript and css files for the autocomplete extension -->
		<script src="../extensions/autocomplete/autocomplete.js" ></script>
		<link rel="stylesheet" href="../extensions/autocomplete/autocomplete.css" type="text/css" media="screen">

		<!-- Uncomment this if you want to use the first variant of the autocomplete instead of the official one from jQuery UI -->
		<!--
		<script src="../extensions/autocomplete_variant_1/jquery.autocomplete.min.js" ></script>
		<script src="../extensions/autocomplete_variant_1/autocomplete.js" ></script>
		<link rel="stylesheet" href="../extensions/autocomplete_variant_1/jquery.autocomplete.css" type="text/css" media="screen">
		!-->

		<!-- Uncomment this if you want to use the second variant of the autocomplete instead of the official one from jQuery UI -->
		<!--
		<script src="../extensions/autocomplete_variant_2/jquery.autocomplete.min.js" ></script>
		<script src="../extensions/autocomplete_variant_2/autocomplete.js" ></script>
		<link rel="stylesheet" href="../extensions/autocomplete_variant_2/jquery.autocomplete.css" type="text/css" media="screen">
		!-->

		<!-- include javascript an	d css files -->
		<script src="../js/dump.js" ></script>
		<script type="text/javascript">
			window.onload = function() { 
				//editableGrid.onloadJSON("../data/vol_dump.json"); 
			}; 
		</script>
		<script>
			function getJsonData(path) {
				xmlhttp = new XMLHttpRequest();
				xmlhttp.open("GET", path, false);
				xmlhttp.send(null);
				return xmlhttp.responseText;
			}
		</script>
		<script>
			var service_context_path = "/invenio/services/dumpService/dumps/";
			var dump_service_map = {};
			dump_service_map['vol_dump'] = 'getVolDump';
			dump_service_map['fut_dump'] = 'getFutDump';
			dump_service_map['opt_dump'] = 'getOptDump';
			dump_service_map['m_us_dump'] = 'getMUSDump';
			
			var dump_metadata_map = {};
			dump_metadata_map['vol_dump'] = '{\"metadata\":[\n\t{\"name\":\"volSurfaceType\",\"label\":\"VOl SURFACE TYPE\",\"datatype\":\"string\",\"bar\":true,\"editable\":false,\"values\":null},\n\t{\"name\":\"product\",\"label\":\"PRODUCT\",\"datatype\":\"string\",\"bar\":true,\"editable\":false,\"values\":null},\n\t{\"name\":\"start\",\"label\":\"START\",\"datatype\":\"decimal\",\"bar\":true,\"editable\":false,\"values\":null},\n\t{\"name\":\"step\",\"label\":\"STEP\",\"datatype\":\"decimal\",\"bar\":true,\"editable\":false,\"values\":null},\n\t{\"name\":\"extrapolate\",\"label\":\"EXTRAPOLATE\",\"datatype\":\"string\",\"bar\":true,\"editable\":false,\"values\":null},\n\t{\"name\":\"multiple\",\"label\":\"MULTIPLE\",\"datatype\":\"decimal\",\"bar\":true,\"editable\":false,\"values\":null},\n\t{\"name\":\"code\",\"label\":\"CODE\",\"datatype\":\"string\",\"bar\":true,\"editable\":false,\"values\":null},\n\t{\"name\":\"futureRef\",\"label\":\"FUTURE REF\",\"datatype\":\"string\",\"bar\":true,\"editable\":false,\"values\":null},\n\t{\"name\":\"optionsRef\",\"label\":\"OPTIONS REF\",\"datatype\":\"string\",\"bar\":true,\"editable\":false,\"values\":null},\n\t{\"name\":\"expiryDate\",\"label\":\"EXPIRY DATE\",\"datatype\":\"date\",\"bar\":true,\"editable\":false,\"values\":null}\n],\n\n\"data\":\"\"}';
			dump_metadata_map['fut_dump'] = '{\"metadata\":[\n\t{\"name\":\"instrument\",\"label\":\"INSTRUMENT\",\"datatype\":\"string\",\"bar\":true,\"editable\":false,\"values\":null},\n\t{\"name\":\"bookValue\",\"label\":\"BOOK VALUE\",\"datatype\":\"decimal\",\"bar\":true,\"editable\":false,\"values\":null},\n\t{\"name\":\"netPos\",\"label\":\"NET POS\",\"datatype\":\"decimal\",\"bar\":true,\"editable\":false,\"values\":null},\n\t{\"name\":\"futPrice\",\"label\":\"FUT PRICE\",\"datatype\":\"decimal\",\"bar\":true,\"editable\":false,\"values\":null},\n\t{\"name\":\"contract\",\"label\":\"CONTRACT\",\"datatype\":\"string\",\"bar\":true,\"editable\":false,\"values\":null},\n\t{\"name\":\"futSettlement\",\"label\":\"FUT SETTLEMENT\",\"datatype\":\"decimal\",\"bar\":true,\"editable\":false,\"values\":null},\n\t{\"name\":\"adaptedDelta\",\"label\":\"ADAPTED DELTA\",\"datatype\":\"decimal\",\"bar\":true,\"editable\":false,\"values\":null},\n\t{\"name\":\"gammaSmt\",\"label\":\"GAMMA SMT\",\"datatype\":\"decimal\",\"bar\":true,\"editable\":false,\"values\":null},\n\t{\"name\":\"theta\",\"label\":\"THETA\",\"datatype\":\"decimal\",\"bar\":true,\"editable\":false,\"values\":null},\n\t{\"name\":\"vega\",\"label\":\"VEGA\",\"datatype\":\"decimal\",\"bar\":true,\"editable\":false,\"values\":null}\n],\n\n\"data\":\"\"}';
			dump_metadata_map['opt_dump'] = '{\"metadata\":[\n\t{\"name\":\"instrument\",\"label\":\"INSTRUMENT\",\"datatype\":\"string\",\"bar\":true,\"editable\":true,\"values\":null},\n\t{\"name\":\"activeLots\",\"label\":\"ACTIVE LOTS\",\"datatype\":\"integer\",\"bar\":true,\"editable\":true,\"values\":null},\n\t{\"name\":\"month\",\"label\":\"MONTH\",\"datatype\":\"integer\",\"bar\":true,\"editable\":true,\"values\":null},\n\t{\"name\":\"strike\",\"label\":\"STRIKE\",\"datatype\":\"decimal\",\"bar\":true,\"editable\":true,\"values\":null},\n\t{\"name\":\"cp\",\"label\":\"CP\",\"datatype\":\"decimal\",\"bar\":true,\"editable\":false,\"values\":null},\n\t{\"name\":\"prem\",\"label\":\"PREM\",\"datatype\":\"decimal\",\"bar\":true,\"editable\":true,\"values\":null},\n\t{\"name\":\"origLots\",\"label\":\"ORIG LOTS\",\"decimal\":\"integer\",\"bar\":true,\"editable\":true,\"values\":null},\n\t{\"name\":\"portfolio\",\"label\":\"PORTFOLIO\",\"datatype\":\"string\",\"bar\":true,\"editable\":true,\"values\":null},\n\t{\"name\":\"multiple\",\"label\":\"MULTIPLE\",\"datatype\":\"decimal\",\"bar\":true,\"editable\":true,\"values\":null},\n\t{\"name\":\"lotsForPivot\",\"label\":\"LOTS FOR PIVOT\",\"datatype\":\"decimal\",\"bar\":true,\"editable\":false,\"values\":null},\n\t{\"name\":\"counterparty\",\"label\":\"COUNTER PARTY\",\"datatype\":\"string\",\"bar\":true,\"editable\":true,\"values\":null},\n\t{\"name\":\"duplicated\",\"label\":\"DUPLICATED\",\"datatype\":\"string\",\"bar\":true,\"editable\":true,\"values\":null},\n\t{\"name\":\"internal\",\"label\":\"INTERNAL\",\"datatype\":\"string\",\"bar\":true,\"editable\":true,\"values\":null},\n\t{\"name\":\"trn\",\"label\":\"TRN\",\"datatype\":\"string\",\"bar\":true,\"editable\":true,\"values\":null},\n\t{\"name\":\"trnDate\",\"label\":\"TRN DATE\",\"datatype\":\"date\",\"bar\":true,\"editable\":false,\"values\":null},\n\t{\"name\":\"buySell\",\"label\":\"BUY\x2FSELL\",\"datatype\":\"string\",\"bar\":true,\"editable\":true,\"values\":null},\n\t{\"name\":\"initialQty\",\"label\":\"INITIAL QTY\",\"datatype\":\"integer\",\"bar\":true,\"editable\":true,\"values\":null},\n\t{\"name\":\"contractMaturity\",\"label\":\"CONTRACT MATURITY\",\"datatype\":\"string\",\"bar\":true,\"editable\":true,\"values\":null},\n\t{\"name\":\"callPut\",\"label\":\"CALL PUT\",\"datatype\":\"string\",\"bar\":true,\"editable\":true,\"values\":null},\n\t{\"name\":\"stlPrm\",\"label\":\"STL PRM\",\"datatype\":\"decimal\",\"bar\":true,\"editable\":false,\"values\":null},\n\t{\"name\":\"counterpartLabel\",\"label\":\"COUNTERPART LABEL\",\"datatype\":\"string\",\"bar\":true,\"editable\":true,\"values\":null},\n\t{\"name\":\"liveQty\",\"label\":\"LIVE QTY\",\"datatype\":\"integer\",\"bar\":true,\"editable\":true,\"values\":null}\n],\n\n\"data\":\"\"}';
			dump_metadata_map['m_us_dump'] = '{\"metadata\":[\n\t{\"name\":\"instrument\",\"label\":\"INSTRUMENT\",\"datatype\":\"string\",\"bar\":true,\"editable\":false,\"values\":null},\n\t{\"name\":\"strikeCode\",\"label\":\"STRIKE CODE\",\"datatype\":\"string\",\"bar\":true,\"editable\":false,\"values\":null},\n\t{\"name\":\"marketValue\",\"label\":\"MARKET VALUE\",\"datatype\":\"decimal\",\"bar\":true,\"editable\":false,\"values\":null},\n\t{\"name\":\"bookValue\",\"label\":\"BOOK VALUE\",\"datatype\":\"decimal\",\"bar\":true,\"editable\":false,\"values\":null},\n\t{\"name\":\"marketUs\",\"label\":\"MARKET US\",\"datatype\":\"decimal\",\"bar\":true,\"editable\":false,\"values\":null},\n\t{\"name\":\"strikePrice\",\"label\":\"STRIKE PRICE\",\"datatype\":\"decimal\",\"bar\":true,\"editable\":false,\"values\":null},\n\t{\"name\":\"strikeTotal\",\"label\":\"STRIKE TOTAL\",\"datatype\":\"decimal\",\"bar\":true,\"editable\":false,\"values\":null},\n\t{\"name\":\"marketValCall\",\"label\":\"MARKET VAL CALL\",\"datatype\":\"decimal\",\"bar\":true,\"editable\":false,\"values\":null},\n\t{\"name\":\"marketCalPut\",\"label\":\"MARKET CAL PUT\",\"datatype\":\"decimal\",\"bar\":true,\"editable\":false,\"values\":null},\n\t{\"name\":\"instrumentDisplay\",\"label\":\"INSTRUMENT DISPLAY\",\"datatype\":\"string\",\"bar\":true,\"editable\":false,\"values\":null},\n\t{\"name\":\"optionsExpiryDate\",\"label\":\"OPTIONS EXPIRY DATE\",\"datatype\":\"date\",\"bar\":true,\"editable\":false,\"values\":null}\n],\n\n\"data\":\"\"}';
			
			var dump_title_map = {};
			dump_title_map['vol_dump'] = 'VOL_DUMP';
			dump_title_map['fut_dump'] = 'FUT_DUMP';
			dump_title_map['opt_dump'] = 'OPT_DUMP';
			dump_title_map['m_us_dump'] = 'M_US_DUMP';
			
			function showDump(dump) {
				document.getElementById("grids").style.display="block";
				document.getElementById("dump_title").innerHTML=dump_title_map[dump];
				var serviceJson = getJsonData(service_context_path + dump_service_map[dump]);
				eval("var vol_dump_json = build_" + dump + "_json(serviceJson);");
				editableGrid.onloadJSON(vol_dump_json);
			}
			
			function build_vol_dump_json(jsonString) {
				var templateJsonValue = "{'id':'0','values':{'volSurfaceType':'xyz','product':'','start':'','step':'','extrapolate':'','multiple':'','code':'','futureRef':'','optionsRef':'','expiryDate':'17\/04\/2012'}}";
				var jsonArray = [];
				var json = eval('(' + jsonString + ')');
				for(var i=0;i<json.items.length;i++){
			        var obj = json.items[i];
			        var templateJson = eval('(' + templateJsonValue + ')');
			        templateJson.id = obj.volDumpId;
			        templateJson.values.volSurfaceType = obj.volSurfaceType;
			        templateJson.values.product = obj.product;
			        templateJson.values.start = obj.start;
			        templateJson.values.step = obj.step;
			        templateJson.values.extrapolate = obj.extrapolate;
			        templateJson.values.multiple = obj.multiple;
			        templateJson.values.code = obj.code;
			        templateJson.values.futureRef = obj.futureRef;
			        templateJson.values.optionsRef = obj.optionsRef;
			        templateJson.values.expiryDate = obj.expiryDate;
			        jsonArray.push(templateJson);
			    }
				var gridsJson = eval('(' + dump_metadata_map['vol_dump'] + ')');
				gridsJson.data = jsonArray;
				return gridsJson;
			}
			
			function build_fut_dump_json(jsonString) {
				var templateJsonValue = "{'id':'0','values':{'instrument':'','bookValue':'','netPos':'','futPrice':'','contract':'','futSettlement':'','adaptedDelta':'','gammaSmt':'','theta':'','vega':''}}";
				var jsonArray = [];
				var json = eval('(' + jsonString + ')');
				for(var i=0;i<json.items.length;i++){
			        var obj = json.items[i];
			        var templateJson = eval('(' + templateJsonValue + ')');
			        templateJson.id = obj.futDumpId;
			        templateJson.values.instrument = obj.instrumentCode;
			        templateJson.values.bookValue = obj.bookValue;
			        templateJson.values.netPos = obj.netPos;
			        templateJson.values.futPrice = obj.futPrice;
			        templateJson.values.contract = obj.contract;
			        templateJson.values.futSettlement = obj.futSettlement;
			        templateJson.values.adaptedDelta = obj.adaptedDelta;
			        templateJson.values.gammaSmt = obj.gammaSmt;
			        templateJson.values.theta = obj.theta;
			        templateJson.values.vega = obj.vega;
			        jsonArray.push(templateJson);
			    }
				var gridsJson = eval('(' + dump_metadata_map['fut_dump'] + ')');
				gridsJson.data = jsonArray;
				return gridsJson;
			}
			
			function build_opt_dump_json(jsonString) {
				var templateJsonValue = "{'id':'0','values':{'instrument':'','activeLots':'','month':'','strike':'','cp':'','prem':'','origLots':'','portfolio':'','multiple':'','lotsForPivot':'', 'counterparty':'','duplicated':'','internal':'','trn':'','trnDate':'','buySell':'','initialQty':'','contractMaturity':'','callPut':'','stlPrm':'','counterpartLabel':'','liveQty':''}}";
				var jsonArray = [];
				var json = eval('(' + jsonString + ')');
				for(var i=0;i<json.items.length;i++){
			        var obj = json.items[i];
			        var templateJson = eval('(' + templateJsonValue + ')');
			        templateJson.id = obj.volDumpId;
			        templateJson.values.instrument = obj.instrumentCode;
			        templateJson.values.activeLots = obj.activeLots;
			        templateJson.values.month = obj.month;
			        templateJson.values.strike = obj.strike;
			        templateJson.values.cp = obj.CP;
			        templateJson.values.prem = obj.prem;
			        templateJson.values.origLots = obj.origLots;
			        templateJson.values.portfolio = obj.portfolio;
			        templateJson.values.multiple = obj.multiple;
			        templateJson.values.lotsForPivot = obj.lotsForPivot;
			        templateJson.values.counterparty = obj.counterparty;
			        templateJson.values.duplicated = obj.duplicated;
			        templateJson.values.internal = obj.internal;
			        templateJson.values.trn = obj.trn;
			        templateJson.values.trnDate = obj.trnDate;
			        templateJson.values.buySell = obj.buySell;
			        templateJson.values.initialQty = obj.initialQty;
			        templateJson.values.contractMaturity = obj.contractMaturity;
			        templateJson.values.callPut = obj.callPut;
			        templateJson.values.stlPrm = obj.stlPrm;
			        templateJson.values.counterpartLabel = obj.stlPrm;
			        templateJson.values.liveQty=obj.liveQty;
			        jsonArray.push(templateJson);
			    }
				var gridsJson = eval('(' + dump_metadata_map['opt_dump'] + ')');
				gridsJson.data = jsonArray;
				return gridsJson;
			}
			
			function build_m_us_dump_json(jsonString) {
				var templateJsonValue = "{'id':'0','values':{'instrument':'','strikeCode':'','marketValue':'','bookValue':'','marketUs':'','strikePrice':'','strikeTotal':'','marketValCall':'','marketCalPut':'','instrumentDisplay':'','optionsExpiryDate':''}}";
				var jsonArray = [];
				var json = eval('(' + jsonString + ')');
				for(var i=0;i<json.items.length;i++){
			        var obj = json.items[i];
			        var templateJson = eval('(' + templateJsonValue + ')');
			        templateJson.id = obj.MUsDumpId;
			        templateJson.values.instrument = obj.instrumentCode;
			        templateJson.values.strikeCode = obj.strikeCode;
			        templateJson.values.marketValue = obj.marketValue;
			        templateJson.values.bookValue = obj.bookValue;
			        templateJson.values.marketUs = obj.marketUs;
			        templateJson.values.strikePrice = obj.strikePrice;
			        templateJson.values.strikeTotal = obj.strikeTotal;
			        templateJson.values.marketValCall = obj.marketValCall;
			        templateJson.values.marketCalPut = obj.marketCalPut;
			        templateJson.values.instrumentDisplay = obj.instrumentDisplay;
			        templateJson.values.optionsExpiryDate = obj.optionsExpiryDate;
			        jsonArray.push(templateJson);
			    }
				var gridsJson = eval('(' + dump_metadata_map['m_us_dump'] + ')');
				gridsJson.data = jsonArray;
				return gridsJson;
			}
			
			/*This method is only for testing purpose when one wants to use local json*/
			function buildXXX_json_grids(jsonString) {
				var data = getJsonData("../data/m_us_dump.json");
				var json = eval('(' + data + ')');
				return json;
			}
			
		</script>
	</head>
	
        <body>
	    <section>
		<div class="buttons">
		    <button class="action blue" onClick="showDump('vol_dump')"><span class="label">VOL_DUMP</span></button>
		    <button class="action red" onClick="showDump('fut_dump')"><span class="label">FUT_DUMP</span></button>
		    <button class="action green" onClick="showDump('opt_dump')"><span class="label">OPT_DUMP</span></button>
		    <button class="action blue" onClick="showDump('m_us_dump')"><span class="label">M_US_DUMP</span></button>
		</div>
		<div id="grids" style="display:none">
		<div id="dump_title" class="buttons_no_padding">
                    
		</div>
		<div class="buttons tiptip">
			<jsp:include page="filter.jsp" />
		<!-- Feedback message zone -->
		<div id="message"></div>
		<br/>
		<!--  Number of rows per page and bars in chart -->
		<div id="pagecontrol">
		    <label for="pagecontrol">Rows per page: </label>
		    <select id="pagesize" name="pagesize">
                        <option value="5">5</option>
                        <option value="10">10</option>
			<option value="15">15</option>
			<option value="20">20</option>
			<option value="25">25</option>
			<option value="30">30</option>
			<option value="40">40</option>
			<option value="50">50</option>
		    </select>	
		</div>
			
		<!-- Grid filter -->
		<label for="filter">Filter :</label>
		    <input type="text" id="filter"/>
			
		<!-- Grid contents -->
		<div id="tablecontent" style="overflow-x: scroll;overflow-y: hidden;">
		</div>
			
		<!-- Paginator control -->
		<div id="paginator"></div>
		</div>
		</div>
	    </section>
		<jsp:include page="footer.jsp" />
	</body>

</html>
