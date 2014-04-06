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
<link rel="stylesheet" href="../css/editablegrid-2.0.1.css"
	type="text/css" media="screen">
<script src="../js/invenio/core-lib.js"></script>
<script src="../js/invenio/form-lib.js"></script>
<!-- include javascript and css files for jQuery, needed for the datepicker and autocomplete extensions -->
<script src="../extensions/jquery/jquery-1.6.4.min.js"></script>
<script src="../extensions/jquery/jquery-ui-1.8.16.custom.min.js"></script>
<link rel="stylesheet"
	href="../extensions/jquery/jquery-ui-1.8.16.custom.css" type="text/css"
	media="screen">

<!-- include javascript and css files for the autocomplete extension -->
<script src="../extensions/autocomplete/autocomplete.js"></script>
<link rel="stylesheet"
	href="../extensions/autocomplete/autocomplete.css" type="text/css"
	media="screen">

<!-- include javascript an	d css files -->
<script src="../js/editable-grid.js"></script>
<link rel="stylesheet" href="../css/form.css?v=2">
<link rel="stylesheet" type="text/css" href="../css/grid.css"
	media="screen" />
<link rel="stylesheet" href="../css/form.css?v=2">
<link rel="stylesheet" href="../css/tabbed-style.css" type="text/css"
	media="screen" />
<link rel="stylesheet" href="../extensions/chosen/chosen.css" />
<script src="../extensions/chosen/chosen.jquery.js"
	type="text/javascript"></script>
<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
<!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
<style type="text/css">
.submit {
	float: right;
}

fieldset {
	border: none;
	margin: 0 auto;
	width: 90%;
	height: auto;
}

.elements {
	padding: 5px;
}

.tabbed-form-label {
	width: 12em;
	float: left;
}

.web_dialog_overlay {
	position: fixed;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	height: 100%;
	width: 100%;
	margin: 0;
	padding: 0;
	background: #000000;
	opacity: .15;
	filter: alpha(opacity =         25);
	-moz-opacity: .25;
	z-index: 101;
	display: none;
}

.web_dialog {
	display: none;
	position: fixed;
	top: 24%;
	left: 40%;
	margin-left: -190px;
	margin-top: -100px;
	background-color: #ffffff;
	padding: 0px;
	z-index: 102;
	font-family: Verdana;
	font-size: 10pt;
}

table {
	max-width: 98%;
	background-color: transparent;
	border-collapse: collapse;
	border-spacing: 0;
}

.table {
	width: 100%;
	margin-bottom: 20px;
}

.table th,.table td {
	padding: 8px;
	line-height: 20px;
	text-align: left;
	vertical-align: top;
	border-top: 1px solid #dddddd;
}

.table td a {
	text-decoration: underline;
}

.table th {
	font-weight: bold;
}

.table tbody+tbody {
	border-top: 2px solid #dddddd;
}

.table .table {
	background-color: #ffffff;
}

.table-condensed th,.table-condensed td {
	padding: 4px 5px;
}

.table-bordered {
	border: 1px solid #dddddd;
	border-collapse: separate;
	*border-collapse: collapse;
	border-left: 0;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
}

.table-bordered th,.table-bordered td {
	border-left: 1px solid #dddddd;
}

.table-striped tbody>tr:nth-child(odd)>td,.table-striped tbody>tr:nth-child(odd)>th
	{
	background-color: #f9f9f9;
}

.table tbody tr.warning>td {
	background-color: #fcf8e3;
}

.table tbody tr.info>td {
	background-color: #d9edf7;
}

.links_style {
	font-size: 12px;
	padding-bottom: 4px;
	padding-left: 10px;
	line-height: 20px;
}
</style>
<script type="text/javascript">
	$(document).ready(function() {
		$("#btnShowSimple").click(function(e) {
			ShowDialog(false);
			e.preventDefault();
		});

		$("#btnClose-view").click(function(e) {
			HideDialog();
			e.preventDefault();
		});
		
		$("#btnClose-edit").click(function(e) {
			HideDialog();
			e.preventDefault();
		});

		$("#btnSubmit").click(function(e) {
			HideDialog();
			e.preventDefault();
		});
	});

	function ShowDialog(modal) {
		$("#overlay").show();
		$("#dialog").fadeIn(300);

		if (modal) {
			$("#overlay").unbind("click");
		} else {
			$("#overlay").click(function(e) {
				HideDialog();
			});
		}
	}

	function HideDialog() {
		$("#overlay").hide();
		$("#dialog").fadeOut(400);
	}
</script>
<script type="text/javascript">
	window.onload = function() {
		//editableGrid.onloadJSON(); 
	};
</script>
<script>
	var service_context_path = "/invenio/rest-api";
	var service_path = service_context_path + "/deal-ticket";
	var currentDataJson = {};
	var current_filter_request = "";

	function showFilteredRecords(filterRequest) {
		if (filterRequest != "") {
			current_filter_request = filterRequest;
			var servicePath = service_path + "/filter";
			$
					.ajax({
						url : servicePath,
						type : "POST",
						dataType : "json",
						contentType : "application/json",
						data : jsonToString(current_filter_request),
						success : function(data) {
							displayGridRecords(data);
						},
						error : function(request, textStatus, errorThrown) {
							var errorMessage = "Oops..!!! something went wrong, deal ticket update failed, please try again.";
							if (!(/^<html>/).test(request.responseText)) {
								errorMessage = "Error: " + request.responseText;
							}
							displayMessage(errorMessage, 'error');
						}
					});
		} else {
			displayGridRecords();
		}
	}

	function init() {
		//fetch the search filter option
		//product
		var productElement = document.getElementById("product");
		var subProduct1Element = document.getElementById("sub-product1");
		var subProduct2Element = document.getElementById("sub-product2");
		//get the service json response
		var responseString = getJsonData(service_context_path
				+ "/product/findAll");
		var jsonResponse = stringToJson(responseString);
		for ( var index = 0; index < jsonResponse.length; index++) {
			var obj = jsonResponse[index];
			productElement.appendChild(new Option(obj['id'], obj['id'], ""));
			subProduct1Element
					.appendChild(new Option(obj['id'], obj['id'], ""));
			subProduct2Element
					.appendChild(new Option(obj['id'], obj['id'], ""));
		}
		//portfolio
		var portfolio = document.getElementById("portfolio");
		var subPortfolio = document.getElementById("sub-portfolio");
		//get the service json response
		responseString = getJsonData(service_context_path
				+ "/portfolio/findAll");
		jsonResponse = stringToJson(responseString);
		for ( var index = 0; index < jsonResponse.length; index++) {
			var obj = jsonResponse[index];
			portfolio.appendChild(new Option(obj['portfolio_name'], obj['id'],
					""));
			subPortfolio.appendChild(new Option(obj['portfolio_name'],
					obj['id'], ""));
		}
		//derivative type
		var derivativeTypeElement = document.getElementById("derivative-type");
		//get the service json response
		responseString = getJsonData(service_context_path
				+ "/derivative-type/findAll");
		jsonResponse = stringToJson(responseString);
		for ( var index = 0; index < jsonResponse.length; index++) {
			var obj = jsonResponse[index];
			derivativeTypeElement.appendChild(new Option(obj['derivativetype'],
					obj['id'], ""));
		}
		//initialize multiselect dropdown
		var config = {
			'.chzn-select' : {},
			'.chzn-select-deselect' : {
				allow_single_deselect : true
			},
			'.chzn-select-no-single' : {
				disable_search_threshold : 10
			},
			'.chzn-select-no-results' : {
				no_results_text : 'Oops, nothing found!'
			},
			'.chzn-select-width' : {
				width : "95%"
			}
		};
		for ( var selector in config) {
			$(selector).chosen(config[selector]);
		}
		displayGridRecords();
	}

	function displayGridRecords(data) {
		data = typeof data !== 'undefined' ? data : {};
		//get the displayable grid json
		var responseJson = data;
		//get the type json object
		var objectJsonText = readFileContents('../data/deal-ticket/deal-ticket.json');
		var objectJson = eval('(' + objectJsonText + ')');
		//sort the json
		responseJson = sortJson(responseJson, objectJson.info['sort-field']);
		var adminJson = parseAndPopulateJson(objectJson, responseJson);
		editableGrid.onloadJSON(adminJson);
	}

	function filterQueryResults() {
		var elements = $('#search-filter-form')[0].elements;
		var filterRequestObj = {};
		var simpleHints = [];
		var rangeHints = [];
		var listHints = [];
		var rangeHintsObj = {};
		for ( var index = 0; index < elements.length; index++) {
			var element = elements[index];
			if (element.id == "" || element.value == "") {
				continue;
			}
			switch (element.type) {
			case "text": {
				if ((/^input-date/).test(element.className)) {
					var name = element.name;
					var hint = {};
					if (rangeHintsObj.hasOwnProperty(name)) {
						hint = rangeHintsObj[name];
					} else {
						hint['key'] = name;
					}
					if (element.id == (name + ".from-value")) {
						var date = new Date(element.value).toJSON()
								.slice(0, 10);
						hint['from-value'] = date;
					} else if (element.id == (name + ".to-value")) {
						var date = new Date(element.value).toJSON()
								.slice(0, 10);
						hint['to-value'] = date;
					}
					rangeHintsObj[name] = hint;
				} else {
					var hint = {};
					hint['key'] = element.id;
					hint['value'] = element.value;
					simpleHints.push(hint);
				}
				break;
			}
			case "select-one": {
				var hint = {};
				hint['key'] = element.id;
				hint['value'] = element.value;
				simpleHints.push(hint);
				break;
			}
			case "select-multiple": {
				var hint = {};
				hint['key'] = element.id;
				hint['values'] = $("#" + element.id).val();
				listHints.push(hint);
				break;
			}
			}
		}
		for ( var key in rangeHintsObj) {
			rangeHints.push(rangeHintsObj[key]);
		}
		if (simpleHints.length > 0) {
			filterRequestObj['simple-hints'] = simpleHints;
		}
		if (rangeHints.length > 0) {
			filterRequestObj['range-hints'] = rangeHints;
		}
		if (listHints.length > 0) {
			filterRequestObj['list-hints'] = listHints;
		}
		showFilteredRecords(filterRequestObj);
	}

	function closeFilterForm() {
		document.getElementById("ac-1").checked = false;
	}

	function resetFilterForm() {
		current_filter_request = "";
		document.getElementById("search-filter-form").reset();
	}

	function parseAndPopulateJson(objectJson, responseJson) {
		var gridJson = cloneJson(objectJson['grid-json']);
		var jsonArray = [];
		for ( var i = 0; i < responseJson.length; i++) {
			var obj = responseJson[i];
			var templateJson = cloneJson(gridJson.data);
			templateJson.id = obj.id;
			if (obj.hasOwnProperty('trade-id')) {
				templateJson.values['trade-id'] = obj['trade-id'];
			}
			if (obj.hasOwnProperty('parent-trade-id')) {
				templateJson.values['parent-trade-id'] = obj['parent-trade-id'];
			}
			if (obj.hasOwnProperty('vol-override')) {
				templateJson.values['vol-override'] = obj['vol-override'];
			}
			if (obj.hasOwnProperty('product')) {
				templateJson.values['product'] = obj['product']['id'];
			}
			if (obj.hasOwnProperty('portfolio')) {
				templateJson.values['portfolio'] = obj['portfolio'];
			}
			if (obj.hasOwnProperty('quanto-type')) {
				templateJson.values['quanto-type'] = obj['quanto-type']['quanto-type'];
			}
			if (obj.hasOwnProperty('accumulation-frequency')) {
				templateJson.values['accumulation-frequency'] = obj['accumulation-frequency']['frequency-type'];
			}
			if (obj.hasOwnProperty('sub-portfolio')) {
				templateJson.values['sub-portfolio'] = obj['sub-portfolio'];
			}
			if (obj.hasOwnProperty('ref-futures-price')) {
				templateJson.values['ref-futures-price'] = obj['ref-futures-price'];
			}
			if (templateJson.values.hasOwnProperty("action")) {
				templateJson.values['action'] = getRowAction(obj.id);
			}
			jsonArray.push(templateJson);
		}
		gridJson.data = jsonArray;
		return gridJson;
	}

	function getRowAction(id) {
		return "<a id='edit-link-"
				+ id
				+ "' href='javascript:showRowDetail(this, "
				+ id
				+ ")' id='btnShowSimple'>Edit</a> | <a id='version-link-"
				+ id
				+ "' href='javascript:showVersions(this, "
				+ id
				+ ")' id='btnShowSimple' style='text-decoration: none'>Versions</a>";
	}

	function showVersions(obj, id) {
		var responseString = getJsonData(service_path + "/findById/" + id);
		currentDataJson = stringToJson(responseString);
		buildVersionsView(currentDataJson['version-ref']);
		ShowDialog(false);
	}
	
	function showRowDetail(obj, id) {
		var responseString = getJsonData(service_path + "/findById/" + id);
		currentDataJson = stringToJson(responseString);
		buildEditableForm(id, currentDataJson);
		ShowDialog(false);
	}

	var is_loading_image_active = false;
	function toggleLoadingImage(id) {
		if (is_loading_image_active) {
			document.getElementById("loading-image-" + id).style.display = "none";
			document.getElementById("edit-link-" + id).style.display = "block";
			is_loading_image_active = false;
		} else {
			document.getElementById("loading-image-" + id).style.display = "block";
			document.getElementById("edit-link-" + id).style.display = "none";
			is_loading_image_active = true;
		}
	}

	function activatePopupTabs() {
		// When the document loads do everything inside here ...
		$(document).ready(function() {
			// When a link is clicked
			$("a.tab").click(function() {
				// switch all tabs off
				$(".active").removeClass("active");

				// switch this tab on
				$(this).addClass("active");

				// slide all content up
				$(".content").slideUp();

				// slide this content up
				var content_show = $(this).attr("title");
				$("#" + content_show).slideDown();

			});

		});
	}

	function buildVersionsView(ref) {
		//cleanup any element from the existing forms
		var infoDiv = document.getElementById("info-div");
		infoDiv.innerHTML = "";
		var dataContainerDiv = document.getElementById("data-container-div");
		dataContainerDiv.innerHTML = "";
		/* <table width="100%" border=0 style="background: #F1F1F1; border: 1px solid #D2D2D2;"> */
		var layoutTable = document.createElement("table");
		layoutTable.id = "layoutTable";
		layoutTable.width = "100%";
		//layoutTable.setAttribute("style", "background: #F1F1F1; border: 1px solid #D2D2D2;");
		var layoutRow = document.createElement("tr");
		//version link column
		var linkCol = document.createElement("td");
		linkCol.width = "28%";
		linkCol.height = "500px";
		linkCol.setAttribute("valign", "top");
		linkCol.setAttribute("style", "background: #F1F1F1; border: 1px solid #D2D2D2; padding-top: 20px;");
		var versionLinkDiv = document.createElement("div");
		versionLinkDiv.id = "version-link-div";
		versionLinkDiv.setAttribute("style", "height: 500px; overflow-x: scroll;overflow-y: scroll;");
		var versionsResponse = getJsonData(service_path + "/versions/info/" + ref);
		var versionsJson = stringToJson(versionsResponse);
		for ( var versionIndex = 0; versionIndex < versionsJson.length; versionIndex++) {
			var obj = versionsJson[versionIndex];
			var versionLink = document.createElement("a");
			versionLink.href = "javascript: buildVersionDetail(" + obj['id'] + ")";
			versionLink.className = "links_style";
			versionLink.innerHTML = new Date(obj['version-timestamp']).toJSON().slice(0,10) + " (" + obj['version-number'] + ")";
			versionLink.innerHTML = versionLink.innerHTML + "<br>";
			versionLinkDiv.appendChild(versionLink);
		}
		linkCol.appendChild(versionLinkDiv);
		layoutRow.appendChild(linkCol);
		//version details column
		var detailCol = document.createElement("td");
		detailCol.width = "72%";
		detailCol.setAttribute("style", "background: #F1F1F1; border: 1px solid #D2D2D2;");
		var versionContentDiv = document.createElement("div");
		versionContentDiv.id = "version-content-div";
		detailCol.appendChild(versionContentDiv);
		layoutRow.appendChild(detailCol);
		layoutTable.appendChild(layoutRow);
		dataContainerDiv.appendChild(layoutTable);
		activateButtons("view");
	}

	function buildVersionDetail(id) {
		var formJsonText = readFileContents("../data/deal-ticket/deal-ticket-form.json");
		var formMetaDataJson = stringToJson(formJsonText);
		var versionResponse = getJsonData(service_path + "/findById/" + id);
		var dataJson = stringToJson(versionResponse);
		//cleanup any element from the existing forms
		var versionContentDiv = document.getElementById("version-content-div");
		versionContentDiv.innerHTML = "";
		var tabMenuDiv = document.createElement("ul");
		tabMenuDiv.id = "tabs";
		tabMenuDiv.className = "tabs";
		versionContentDiv.appendChild(tabMenuDiv);
		var firstTabLink = false;
		var versionDetailDiv = document.createElement("div");
		versionDetailDiv.id = "version-detail-div";
		versionContentDiv.appendChild(versionDetailDiv);
		for ( var index = 0; index < formMetaDataJson.layout.length; index++) {
			var tab = formMetaDataJson.layout[index].tab;
			//create the tab menu element
			/* <li><a href="#" title="content_1" class="tab active">Topics</a></li> */
			var tabMenuElement = document.createElement("li");
			var tabMenuLink = document.createElement("a");
			tabMenuLink.href = "#";
			tabMenuLink.title = tab.id;

			var menuLinkText = document.createTextNode(tab.label);
			tabMenuLink.appendChild(menuLinkText);
			tabMenuElement.appendChild(tabMenuLink);
			tabMenuDiv.appendChild(tabMenuElement);

			//create the tab content div
			/* <div id="content_1" class="content">
			<form action="#" class="signUp">
			<fieldset>
			<div id="content_1-div"> */
			var tabbedDiv = document.createElement("div");
			tabbedDiv.id = tab.id;
			tabbedDiv.className = "content";
			tabbedDiv.style.border = "0px";
			if (!firstTabLink) {
				tabMenuLink.className = "tab active";
				tabbedDiv.style.display = "block";
				firstTabLink = true;
			} else {
				tabMenuLink.className = "tab";
				tabbedDiv.style.display = "none";
			}
			var tabbedTable = document.createElement("table");
			tabbedTable.id = tab.id + "-table";
			tabbedTable.className = "table table-bordered table-striped";
			tabbedTable.style = "clear: both;";
			tabbedDiv.appendChild(tabbedTable);
			/* <table id="user" class="table table-bordered table-striped" style="clear: both;"> */
			//create the elements
			var fields = tab.fields;
			for ( var fieldIndex = 0; fieldIndex < fields.length; fieldIndex++) {
				var fieldRow = document.createElement("tr");
				/* <td style="color: #0f60c4;">Username</td>
				<td class="">Pandeya</td> */
				var field = fields[fieldIndex];
				var value = "";
				switch (field.type) {
				case "select-one": {
					if (dataJson.hasOwnProperty(field.id)) {
						value = dataJson[field.id][field['option-ref']['display-field']];
					}
					break;
				} case "date": {
					if (dataJson.hasOwnProperty(field.id)) {
						value = new Date(dataJson[field.id]).toJSON().slice(0, 10);
					}
					break;
				} default: {
					if (dataJson.hasOwnProperty(field.id)) {
						value = dataJson[field.id];
					}
					break;
				}
				}
				var fieldLabelColumn = document.createElement("td");
				fieldLabelColumn.style = "color: #0f60c4;";
				fieldLabelColumn.innerHTML = field.label;
				fieldRow.appendChild(fieldLabelColumn);
				var fieldValueColumn = document.createElement("td");
				fieldValueColumn.className = "";
				fieldValueColumn.innerHTML = value;
				fieldRow.appendChild(fieldValueColumn);
				tabbedTable.appendChild(fieldRow);
			}
			versionDetailDiv.appendChild(tabbedDiv);
		}
		//update info div
		var newDate = new Date();
		newDate.setTime(dataJson['version-timestamp']);
		dateString = newDate.toUTCString();
		var infoDiv = document.getElementById("info-div");
		infoDiv.innerHTML = "";
		/* <span style="color: #777;">Updated Date: 22/3/2013 | By: Rakesh</span> */
		infoDiv.style.color = "#777";
		infoDiv.innerHTML = "Updated By: " + dataJson['version-by'] + " | " + "Date: " + dateString;
		activatePopupTabs();
	}
	
	function activateButtons(mode) {
		if(mode == "view") {
			document.getElementById("view-mode-buttons").style.display = "block";
			document.getElementById("edit-mode-buttons").style.display = "none";
		} else if(mode == "edit") {
			document.getElementById("view-mode-buttons").style.display = "none";
			document.getElementById("edit-mode-buttons").style.display = "block";
		}
	}
	
	function buildEditableForm(id, dataJson) {
		var formJsonText = readFileContents("../data/deal-ticket/deal-ticket-form.json");
		var formMetaDataJson = stringToJson(formJsonText);
		//cleanup any element from the existing forms
		var infoDiv = document.getElementById("info-div");
		infoDiv.innerHTML = "";
		var dataContainerDiv = document.getElementById("data-container-div");
		dataContainerDiv.innerHTML = "";
		var tabMenuDiv = document.createElement("ul");
		tabMenuDiv.id = "tabs";
		tabMenuDiv.className = "tabs";
		dataContainerDiv.appendChild(tabMenuDiv);
		var firstTabLink = false;
		var formId = "deal-ticket";
		var form = document.createElement("form");
		form.id = formId;
		form.name = formId;
		form.className = "signUp";
		dataContainerDiv.appendChild(form);
		for ( var index = 0; index < formMetaDataJson.layout.length; index++) {
			var tab = formMetaDataJson.layout[index].tab;
			//create the tab menu element
			/* <li><a href="#" title="content_1" class="tab active">Topics</a></li> */
			var tabMenuElement = document.createElement("li");
			var tabMenuLink = document.createElement("a");
			tabMenuLink.href = "#";
			tabMenuLink.title = tab.id;

			var menuLinkText = document.createTextNode(tab.label);
			tabMenuLink.appendChild(menuLinkText);
			tabMenuElement.appendChild(tabMenuLink);
			tabMenuDiv.appendChild(tabMenuElement);

			//create the tab content div
			/* <div id="content_1" class="content">
			<form action="#" class="signUp">
			<fieldset>
			<div id="content_1-div"> */
			var tabbedDiv = document.createElement("div");
			tabbedDiv.id = tab.id;
			tabbedDiv.className = "content";
			if (!firstTabLink) {
				tabMenuLink.className = "tab active";
				tabbedDiv.style.display = "block";
				firstTabLink = true;
			} else {
				tabMenuLink.className = "tab";
				tabbedDiv.style.display = "none";
			}

			var fieldsetElement = document.createElement("fieldset");
			tabbedDiv.appendChild(fieldsetElement);
			//create the form field elements
			var fields = tab.fields;
			for ( var fieldIndex = 0; fieldIndex < fields.length; fieldIndex++) {
				var field = fields[fieldIndex];
				switch (field.type) {
				case "text": {
					fieldsetElement.appendChild(buildInputText(field.id,
							field.name, field.label, dataJson[field.id],
							formId, field.visible, field.editable));
					break;
				}
				case "number": {
					fieldsetElement.appendChild(buildInputTextNumber(field.id,
							field.name, field.label, dataJson[field.id],
							formId, field.visible, field.editable));
					break;
				}
				case "decimal": {
					fieldsetElement.appendChild(buildInputTextDecimal(field.id,
							field.name, field.label, dataJson[field.id],
							formId, field.visible, field.editable));
					break;
				}
				case "select-one": {
					var refResponse = getJsonData(service_context_path
							+ field['option-ref']['service-path'] + "/findAll");
					var options = mapToFormListValues(
							stringToJson(refResponse),
							field['option-ref']['id-field'],
							field['option-ref']['display-field']);
					var value = "";
					if (dataJson.hasOwnProperty(field.id)) {
						value = dataJson[field.id][field['option-ref']['id-field']];
					}
					fieldsetElement.appendChild(buildSelectBox(field.id,
							field.name, field.label, options, value, formId,
							field.visible, field.editable));
					break;
				}
				case "radio": {
					fieldsetElement.appendChild(buildRadioButton(field.id,
							field.name, field.label, field.option,
							dataJson[field.id], formId, field.visible,
							field.editable));
					break;
				}
				case "date": {
					fieldsetElement.appendChild(buildInputTextDate(field.id,
							field.name, field.label, dataJson[field.id],
							formId, field.visible, field.editable));
					break;
				}
				}
			}
			dataContainerDiv.appendChild(tabbedDiv);
			$(function() {
				$(".input-date").datepicker();
			});
		}
		//update info div
		var infoDiv = document.getElementById("info-div");
		infoDiv.innerHTML = "";
		activateButtons("edit");
		activatePopupTabs();
	}

	function reset() {
		buildEditableForm(currentDataJson.id, currentDataJson);
	}

	function save() {
		var elements = $('#deal-ticket')[0].elements;
		var requestObj = {};
		requestObj['id'] = currentDataJson.id;
		for ( var index = 0; index < elements.length; index++) {
			var element = elements[index];
			switch (element.type) {
			case "select-one": {
				if (element.value != "") {
					requestObj[element.name] = {};
					requestObj[element.name]['id'] = element.value;
				}
				break;
			}
			case "text": {
				if ((/^input-date/).test(element.className)) {
					if (element.value != "") {
						//increment the date as the date is 1 day behind when received by rest-api
						var date = new Date(element.value);
						requestObj[element.name] = date;
					}
				} else {
					requestObj[element.name] = element.value;
				}
				break;
			}
			case "radio": {
				requestObj[element.name] = $(
						'input[name=' + element.name + ']:checked').val();
				break;
			}
			default: {
				requestObj[element.name] = element.value;
				break;
			}
			}
		}
		var servicePath = service_path + "/update";
		$
				.ajax({
					url : servicePath,
					type : "PUT",
					dataType : "json",
					contentType : "application/json",
					data : jsonToString(requestObj),
					success : function() {
						refresh();
						HideDialog();
						displayMessage('Successfully updated the deal ticket.');
					},
					error : function(request, textStatus, errorThrown) {
						HideDialog();
						var errorMessage = "Oops..!!! something went wrong, deal ticket update failed, please try again.";
						if (!(/^<html>/).test(request.responseText)) {
							errorMessage = "Error: " + request.responseText;
						}
						displayMessage(errorMessage, 'error');
					}
				});
	}

	function refresh() {
		showFilteredRecords(current_filter_request);
	}
</script>
<script>
	$(function() {
		$(".input-date").datepicker();
	});
</script>
</head>

<body onLoad="init()">
	<section>
		<div id="grids">
			<div id="admin_title" class="buttons_no_padding">DEAL TICKET</div>
			<div class="buttons tiptip">
				<div class="ac-container">
					<input id="ac-1" name="accordion-1" type="checkbox" hidden="hidden" />
					<label for="ac-1">Search Filter</label>
					<article class="ac-small" style="overflow: auto">
						<form id="search-filter-form" class="filter_table" method="post">
							<table border=0>
								<tr>
									<td>
										<div>Vol Override</div>
										<div>
											<select id="vol-override" name="vol-override"
												data-placeholder="Choose..." class="chzn-select"
												style="width: 140px; margin-left: -3%;">
												<option value="">-- Select</option>
												<option value="Y">Yes</option>
												<option value="N">No</option>
											</select>
										</div>
									</td>
									<td>
										<div>Correl Override</div>
										<div>
											<select id="correl-override" name="correl-override"
												data-placeholder="Choose..." class="chzn-select"
												style="width: 140px; margin-left: -3%;">
												<option value="">-- Select</option>
												<option value="Y">Yes</option>
												<option value="N">No</option>
											</select>
										</div>
									</td>
									<td>
										<div>Reconned with clearer</div>
										<div>
											<select id="reconed-with-clearer" name="reconed-with-clearer"
												data-placeholder="Choose..." class="chzn-select"
												style="width: 140px; margin-left: -3%;">
												<option value="">-- Select</option>
												<option value="Y">Yes</option>
												<option value="N">No</option>
											</select>
										</div>
									</td>
									<td>
										<div>Expiry Processed</div>
										<div>
											<select id="expiry-processed" name="expiry-processed"
												data-placeholder="Choose..." class="chzn-select"
												style="width: 140px; margin-left: -3%;">
												<option value="">-- Select</option>
												<option value="Y">Yes</option>
												<option value="N">No</option>
											</select>
										</div>
									</td>
									<td>
										<div>Brokerage Paid</div>
										<div>
											<select id="brokerage-paid" name="brokerage-paid"
												data-placeholder="Choose..." class="chzn-select"
												style="width: 140px; margin-left: -3%;">
												<option value="">-- Select</option>
												<option value="Y">Yes</option>
												<option value="N">No</option>
											</select>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div>Execution Broker</div>
										<div>
											<input id="execution-broker" name="execution-broker"
												type="text" class="input-field" style="width: 150px;" />
										</div>
									</td>
									<td>
										<div>Clearing Broker</div>
										<div>
											<input id="clearing-broker" name="clearing-broker"
												type="text" class="input-field" style="width: 150px;" />
										</div>
									</td>
									<td colspan=3>
										<table border=0 width="100%">
											<tr>
												<td>

													<div>Date range</div>
													<div>
														<span>Start Date</span> <input id="date-range.from-value"
															name="date-range" type="text" class="input-date" readonly /><br>
														<br> <span>End Date&nbsp;&nbsp;&nbsp;</span><input
															id="date-range.to-value" name="date-range" type="text"
															class="input-date" readonly />
													</div>
												<td>
													<div>Excel date range</div>
													<div>
														<span>Start Date</span> <input
															id="excel-date-range.from-value" name="excel-date-range"
															type="text" class="input-date" readonly /><br> <br>
														<span>End Date&nbsp;&nbsp;</span> <input
															id="excel-date-range.to-value" name="excel-date-range"
															type="text" class="input-date" readonly />
													</div>
												</td>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td>
										<div>Product</div>
										<div>
											<select id="product" name="product"
												data-placeholder="Choose..." class="chzn-select" multiple
												style="width: 150px;">
												<option value=""></option>
											</select>
										</div>
									</td>
									<td>
										<div>Sub Product 1</div>
										<div>
											<select id="sub-product1" name="sub-product1"
												data-placeholder="Choose..." class="chzn-select" multiple
												style="width: 150px;">
												<option value=""></option>
											</select>
										</div>
									</td>
									<td>
										<div>Sub Product 2</div>
										<div>
											<select id="sub-product2" name="sub-product2"
												data-placeholder="Choose..." class="chzn-select" multiple
												style="width: 150px;">
												<option value=""></option>
											</select>
										</div>
									</td>
									<td>
										<div>Contract Id 1</div>
										<div>
											<select id="contract-id1" name="contract-id1"
												data-placeholder="Choose..." class="chzn-select" multiple
												style="width: 150px;">
												<option value=""></option>
											</select>
										</div>
									</td>
									<td>
										<div>Contract Id 2</div>
										<div>
											<select id="contract-id2" name="contract-id2"
												data-placeholder="Choose..." class="chzn-select" multiple
												style="width: 150px;">
												<option value=""></option>
											</select>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div>Trade Id</div>
										<div>
											<select id="trade-id" name="trade-id"
												data-placeholder="Choose..." class="chzn-select" multiple
												style="width: 150px;">
												<option value=""></option>
											</select>
										</div>
									</td>
									<td>
										<div>Parent Trade Id</div>
										<div>
											<select id="parent-trade-id" name="parent-trade-id"
												data-placeholder="Choose..." class="chzn-select" multiple
												style="width: 150px;">
												<option value=""></option>
											</select>
										</div>
									</td>
									<td>
										<div>Portfolio</div>
										<div>
											<select id="portfolio" name="portfolio"
												data-placeholder="Choose..." class="chzn-select" multiple
												style="width: 150px;">
												<option value=""></option>
											</select>
										</div>
									</td>
									<td>
										<div>Sub-Portfolio</div>
										<div>
											<select id="sub-portfolio" name="sub-portfolio"
												data-placeholder="Choose..." class="chzn-select" multiple
												style="width: 150px;">
												<option value=""></option>
											</select>
										</div>
									</td>
									<td>
										<div>Strategy</div>
										<div>
											<select id="strategy-name" name="strategy-name"
												data-placeholder="Choose..." class="chzn-select" multiple
												style="width: 150px;">
												<option value=""></option>
											</select>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div>Derivative Type</div>
										<div>
											<select id="derivative-type" name="derivative-type"
												data-placeholder="Choose..." class="chzn-select" multiple
												style="width: 150px;">
												<option value=""></option>
											</select>
										</div>
									</td>
									<td>
										<div>Counterparty Parent</div>
										<div>
											<select id="counterparty-parent" name="counterparty-parent"
												data-placeholder="Choose..." class="chzn-select" multiple
												style="width: 150px;">
												<option value=""></option>
											</select>
										</div>
									</td>
									<td>
										<div>Counterparty BU</div>
										<div>
											<select id="counterparty-parent" name="counterparty-parent"
												data-placeholder="Choose..." class="chzn-select" multiple
												style="width: 150px;">
												<option value=""></option>
											</select>
										</div>
									</td>
									<td>
										<div>Counterparty Entity</div>
										<div>
											<select id="counterparty-entity" name="counterparty-entity"
												data-placeholder="Choose..." class="chzn-select" multiple
												style="width: 150px;">
												<option value=""></option>
											</select>
										</div>
									</td>
									<td>
										<div>Channel</div>
										<div>
											<select id="channel" name="channel"
												data-placeholder="Channel..." class="chzn-select" multiple
												style="width: 150px;">
												<option value=""></option>
											</select>
										</div>
									</td>
								</tr>
							</table>
						</form>
						<div style="float: right; margin-right: 7%;">
							<button class="action red" onClick="javascript:closeFilterForm()">
								<span class="label">Close</span>
							</button>
							<button class="action blue"
								onClick="javascript:resetFilterForm()">
								<span class="label">Reset</span>
							</button>
							<button class="action green"
								onClick="javascript:filterQueryResults()">
								<span class="label">Filter</span>
							</button>
							<br>
						</div>
					</article>
				</div>
				<a href="javascript:refresh()" class="button"
					title=".icon188 - Undo"><span class="icon icon188"></span></a><br>
				<br>
				<div>
					<!-- Feedback message zone -->
					<div id="message"></div>
					<br /> Number of rows per page and bars in chart
					<div id="pagecontrol">
						<label for="pagecontrol">Rows per page: </label> <select
							id="pagesize" name="pagesize">
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
					<label for="filter">Filter :</label> <input type="text" id="filter" />

					<!-- Grid contents -->
					<div id="tablecontent"></div>

					<!-- Paginator control -->
					<div id="paginator"></div>
				</div>
			</div>
		</div>
	</section>
	<!-- This section is for popup -->
	<div id="overlay" class="web_dialog_overlay"></div>

	<div id="dialog" class="web_dialog">
		<div id="tabbed_box" class="tabbed_box">
			<div class="tabbed_area" id="tabbed_area">
				<div id="info-div">
				</div>
				<ul id="view-mode-buttons" class="form_buttons" style="float: right; display : none;">
					<li>
						<button class="action red" id="btnClose-view">
							<span class="label">Close</span>
						</button>
					</li>
				</ul>
				<ul id="edit-mode-buttons" class="form_buttons" style="float: right; display: none;">
					<li>
						<button class="action red" id="btnClose-edit">
							<span class="label">Close</span>
						</button>
					</li>
					<li>
						<button class="action blue" onClick="reset()">
							<span class="label">Reset</span>
						</button>
					</li>
					<li>
						<button class="action green" onClick="save()">
							<span class="label">Save</span>
						</button>
					</li>
				</ul>
				<div id="data-container-div"></div>
			</div>
		</div>
	</div>
	<jsp:include page="footer.jsp" />
</body>

</html>
