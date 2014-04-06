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
		<script src="../js//invenio/core-lib.js" ></script>
		<!-- include javascript and css files for jQuery, needed for the datepicker and autocomplete extensions -->
		<script src="../extensions/jquery/jquery-1.6.4.min.js" ></script>
		<script src="../extensions/jquery/jquery-ui-1.8.16.custom.min.js" ></script>
		<link rel="stylesheet" href="../extensions/jquery/jquery-ui-1.8.16.custom.css" type="text/css" media="screen">
		
		<!-- include javascript and css files for the autocomplete extension -->
		<script src="../extensions/autocomplete/autocomplete.js" ></script>
		<link rel="stylesheet" href="../extensions/autocomplete/autocomplete.css" type="text/css" media="screen">

		<!-- include javascript an	d css files -->
		<script src="../js/editable-grid.js" ></script>
		<link rel="stylesheet" type="text/css" href="../css/grid.css" media="screen"/>
		<link rel="stylesheet" href="../css/form.css?v=2">
		<script type="text/javascript">
			window.onload = function() { 
				//editableGrid.onloadJSON("../data/vol_dump.json"); 
			}; 
		</script>
		<script>
		var service_context_path = "/invenio/rest-api";
		var currentObjectJson = null;
		var current_grid_json = null;
		
		function showAdmin(item) {
			document.getElementById("grids").style.display="block";
			//get the type json object
			var objectJsonText = readFileContents('../data/admin/' + item + '.json');
			currentObjectJson = eval('(' + objectJsonText + ')');
			current_selected_tab = item;
			document.getElementById("admin_title").innerHTML=currentObjectJson.info['display-text'];
			//get the service json response
			var responseString = getJsonData(service_context_path + currentObjectJson.info['service-path'] + "/findAll");
			if(responseString == "") {
				editableGrid.onloadJSON({});
				current_grid_json = null;
				return;
			}
			//get the displayable grid json
			var responseJson = stringToJson(responseString);
			//sort the json
			responseJson = sortJson(responseJson, currentObjectJson.info['sort-field']);
			array = ["name"];
			var adminJson = parseAndPopulateJson(currentObjectJson, responseJson);
			editableGrid.onloadJSON(adminJson);
			current_grid_json = adminJson;
		}
		
		function addNewRow() {
			var index = -1;
			if(current_grid_json == null) {
				index = 0;
			}
			editableGrid.createnew(currentObjectJson['grid-json'].data.values, index);
		}
		
		function saveAll() {
			var servicePath = service_context_path + currentObjectJson.info['service-path'] + "/saveAll";
			var templateJson = currentObjectJson['grid-json'].data.values;
			var totolRows = editableGrid.getRowCount();
			var jsonArray = [];
			for (var r = 0; r < totolRows; r++) {
				var json = eval('(' + JSON.stringify(templateJson) + ')');
				var refMap = prepareRefMap(currentObjectJson['refs']);
				var fieldMap = prepareFieldMap(currentObjectJson['grid-json'].metadata);
				var rowData = editableGrid.getRowValues(r);
				var rowId = editableGrid.getRowId(r);
				if((/^new/).test(rowId)) {
					rowId = 0;
				}
				var isNotBlank = false;
				for (var key in json) {
					if(rowData[key] != "") {
						if(fieldMap[key].datatype == "date") {
							if(rowData[key] != json[key]) {
								isNotBlank = true;
							}
							var value = rowData[key];
							if(rowData[key].indexOf("-") != -1) {
								var dateArray = rowData[key].split("-");
								value = dateArray[1] + "/" + dateArray[2] + "/" + dateArray[0];
							} else if(rowData[key].indexOf("/") != -1) {
								var dateArray = rowData[key].split("/");
								value = dateArray[1] + "/" + dateArray[0] + "/" + dateArray[2];
							}
							var date = new Date(value).toISOString();
							json[key] = date;
							continue;
						}
						if(rowData[key] != json[key]) {
							if(refMap.hasOwnProperty(key)) {
								json[key] = {};
								json[key]['id'] = rowData[key];	
							} else {
								json[key] = rowData[key];
							}
							isNotBlank = true;
						}
					} else {
						delete json[key];
					}
		        }
				if(isNotBlank) {
					json['id'] = rowId;
					jsonArray.push(json);
				}
			}
			$.ajax({  
				  url: servicePath,  
				  type: "POST",  
				  dataType: "json",  
				  contentType: "application/json",  
				  data: jsonToString(jsonArray),  
				  success: function(){              
					  refresh();
				  },  
				  error: function(request, textStatus, errorThrown){  
					  var errorMessage = "Oops..!!! something went wrong, '" + currentObjectJson.info['display-text'] + "' could not be saved, please try again.";
					  if(!(/^<html>/).test(request.responseText)) {
						  errorMessage = "Error: " + request.responseText;
					  }
					  displayMessage(errorMessage, 'error');
				  }  
				});
		}
		
		function refresh() {
			showAdmin(currentObjectJson.info['id']);
		}
		
		function deleteRow() {
			displayMessage('Delete is currently not supported, please try later.', 'warn');
		}
		
		function cancel() {
			editableGrid.onloadJSON(current_grid_json);
		}
		</script>
	</head>
	
	<body>
		<section>
			<div class="buttons tiptip" style="height:129px; width: 860px; overflow-x: hidden;overflow-y: scroll;">
				<button  class="button_large" onClick="showAdmin('access')"><span class="label">Access</span></button>
				<button  class="button_large" onClick="showAdmin('accumulation-frequency')"><span class="label">Accumulation Frequency</span></button>
				<button  class="button_large" onClick="showAdmin('action-type')"><span class="label">Action Type</span></button>
				<button  class="button_large" onClick="showAdmin('atm-convention-for-expiry')"><span class="label">ATM Convention for Expiry</span></button>
				<button  class="button_large" onClick="showAdmin('averaging-frequency')"><span class="label">Averaging Frequency</span></button>
				<button  class="button_large" onClick="showAdmin('bbg-ovdv-deltawise')"><span class="label">BBG OVDV Deltawise</span></button>
				<button  class="button_large" onClick="showAdmin('bbg-ovdv-moneynesswise')"><span class="label">BBG OVDV Moneynesswise</span></button>
				<button  class="button_large" onClick="showAdmin('bloomberg-product')"><span class="label">Bloomberg Product</span></button>
				<button  class="button_large" onClick="showAdmin('brokerage-callsign')"><span class="label">Brokerage Callsign</span></button>
				<button  class="button_large" onClick="showAdmin('brokerage-master')"><span class="label">Brokerage Master</span></button>
				<button  class="button_large" onClick="showAdmin('exchange-master')"><span class="label">Exchange Master</span></button>
				<button  class="button_large" onClick="showAdmin('cash-physical-settlement')"><span class="label">Cash Physical Statement</span></button>
				<button  class="button_large" onClick="showAdmin('clearing-broker')"><span class="label">Clearing Broker</span></button>
				<button  class="button_large" onClick="showAdmin('derivative-type')"><span class="label">Derivative Type</span></button>
				<button  class="button_large" onClick="showAdmin('exchange')"><span class="label">Exchange</span></button>
				<button  class="button_large" onClick="showAdmin('exchange-callsign')"><span class="label">Exchange Callsign</span></button>
				<button  class="button_large" onClick="showAdmin('exchange-exercise-type')"><span class="label">Exchange Exercise Type</span></button>
				<button  class="button_large" onClick="showAdmin('execution-broker')"><span class="label">Execution Broker</span></button>
				<button  class="button_large" onClick="showAdmin('execution-type')"><span class="label">Execution Type</span></button>
				<button  class="button_large" onClick="showAdmin('extrapolation-technique')"><span class="label">Extrapolation Techniques</span></button>
				<button  class="button_large" onClick="showAdmin('frequency')"><span class="label">Frequency</span></button>
				<button  class="button_large" onClick="showAdmin('future-contract')"><span class="label">Future Contracts</span></button>
				<button  class="button_large" onClick="showAdmin('future-prices')"><span class="label">Future Prices</span></button>
				<button  class="button_large" onClick="showAdmin('futures-rjo')"><span class="label">Futures Code - RJO</span></button>
				<button  class="button_large" onClick="showAdmin('futures-unl-contr')"><span class="label">Futures Underlying Contracts</span></button>
				<button  class="button_large" onClick="showAdmin('futures-xtrader')"><span class="label">Futures Code - Xtrader</span></button>
				<button  class="button_large" onClick="showAdmin('instrument')"><span class="label">Instrument</span></button>
				<button  class="button_large" onClick="showAdmin('intrapolation-technique')"><span class="label">Intrapolation Techniques</span></button>
				<button  class="button_large" onClick="showAdmin('invenio-book-correlation-surface')"><span class="label">Invenio Book-Correl Surface - Fixed</span></button>
				<button  class="button_large" onClick="showAdmin('inv-book-vol-type-fixed')"><span class="label">Invenio Book-Vol Surface - Fixed</span></button>
				<button  class="button_large" onClick="showAdmin('inv-book-vol-type-floating')"><span class="label">Invenio Book-Vol Surface - Floating</span></button>
				<button  class="button_large" onClick="showAdmin('inv-book-vol-type-sel')"><span class="label">Invenio Book-Vol Surface - Selection</span></button>
				<button  class="button_large" onClick="showAdmin('invenio-product')"><span class="label">Invenio Products</span></button>
				<button  class="button_large" onClick="showAdmin('invenio-vol-param')"><span class="label">Invenio Volatility Parameters</span></button>
				<button  class="button_large" onClick="showAdmin('murex-exchange')"><span class="label">Murex Exchange Code</span></button>
				<button  class="button_large" onClick="showAdmin('option-contract')"><span class="label">Option Contracts</span></button>
				<button  class="button_large" onClick="showAdmin('option-price')"><span class="label">Option Prices</span></button>
				<button  class="button_large" onClick="showAdmin('options-rjo')"><span class="label">Options Code - RJO</span></button>
				<button  class="button_large" onClick="showAdmin('option-static-data')"><span class="label">Options Static Data</span></button>
				<button  class="button_large" onClick="showAdmin('options-unl-contr')"><span class="label">Options Underlying Contracts</span></button>
				<button  class="button_large" onClick="showAdmin('options-xtrader')"><span class="label">Options Code - Xtrader</span></button>
				<button  class="button_large" onClick="showAdmin('portfolio')"><span class="label">Portfolio Master</span></button>
				<button  class="button_large" onClick="showAdmin('product')"><span class="label">Products Master</span></button>
				<button  class="button_large" onClick="showAdmin('quanto-type')"><span class="label">Quanto Type</span></button>
				<button  class="button_large" onClick="showAdmin('reuters-product')"><span class="label">Reuters Products Code</span></button>
				<button  class="button_large" onClick="showAdmin('rjo-exchange')"><span class="label">RJO Exchange Code</span></button>
				<button  class="button_large" onClick="showAdmin('settlement-correlation-surface')"><span class="label">Settlement Correlation Surface</span></button>
				<button  class="button_large" onClick="showAdmin('settlement-volatility-surface')"><span class="label">Settlement Volatility Surface</span></button>
				<button  class="button_large" onClick="showAdmin('sub-portfolio')"><span class="label">Sub Portfolio</span></button>
				<button  class="button_large" onClick="showAdmin('vol-dump')"><span class="label">Volatility Dumps</span></button>
				<button  class="button_large" onClick="showAdmin('vol-surface')"><span class="label">Volatility Surfaces</span></button>
				<button  class="button_large" onClick="showAdmin('vol-surface-greeks')"><span class="label">Volatility Surface Greeks</span></button>
				<button  class="button_large" onClick="showAdmin('xtraders-exchange')"><span class="label">Xtrader Exchange Code</span></button>
				
			</div>
			<div id="grids" style="display:none">
				<div id="admin_title" class="buttons_no_padding">
				</div>
			<div class="buttons tiptip">
				<a href="javascript:addNewRow()" class="button" title=".icon3 - Add"><span class="icon icon3"></span></a>
				<!-- <a href="javascript:deleteRow()" class="button" title=".icon186 - Trash Can"><span class="icon icon186"></span></a> -->
				<a href="javascript:refresh()" class="button" title=".icon188 - Undo"><span class="icon icon188"></span></a><br><br>
				<div id="right_buttons">
					<button class="action blue" onClick="saveAll()"><span class="label">Save</span></button>
					<button class="action red" onClick="cancel()"><span class="label">Cancel</span></button>
				</div>
			<div>
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
				<div id="tablecontent" style="overflow-x: scroll;overflow-y: hidden;"></div>
			
				<!-- Paginator control -->
				<div id="paginator"></div>
			</div>
			</div>
			</div>
		</section>
		<jsp:include page="footer.jsp" />
	</body>

</html>
