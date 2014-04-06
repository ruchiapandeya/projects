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
		<link rel="stylesheet" type="text/css" href="../css/grid.css" media="screen"/>
		<script type="text/javascript">
			window.onload = function() { 
				//editableGrid.onloadJSON("../data/vol_dump.json"); 
			}; 
		</script>
		<script>
			function readFileContents(path) {
				xmlhttp = new XMLHttpRequest();
				xmlhttp.open("GET", path, false);
				xmlhttp.send(null);
				return xmlhttp.responseText;
			}
		</script>
		<script>
			var dump_title_map = {};
			dump_title_map['vol_dump'] = 'VOL_DUMP';
			dump_title_map['m_us_dump'] = 'M_US_DUMP';
			dump_title_map['opt_dump'] = 'OPT_DUMP';
			dump_title_map['fut_dump'] = 'FUT_DUMP';
			
			function showDump(dump) {
				document.getElementById("grids").style.display="block";
				document.getElementById("dump_title").innerHTML=dump_title_map[dump];
				var json = readFileContents("../data/" + dump + ".json");
				editableGrid.onloadJSON(json);
			}
		</script>
	</head>
	
	<body>
		<section>
			<div class="buttons">
				<button class="action blue" onClick="showDump('vol_dump')"><span class="label">VOL_DUMP</span></button>
			    <button class="action red" onClick="showDump('m_us_dump')"><span class="label">M_US_DUMP</span></button>
			    <button class="action green" onClick="showDump('opt_dump')"><span class="label">OPT_DUMP</span></button>
			    <button class="action blue" onClick="showDump('fut_dump')"><span class="label">FUT_DUMP</span></button>
			</div>
			<div id="grids" style="display:none">
			<div id="dump_title" class="buttons_no_padding">
			</div>
			<div class="buttons tiptip">
				<a href="javascript:editableGrid.createnew(0)" class="button" title=".icon3 - Add"><span class="icon icon3"></span></a>
				<a href="#" class="button" title=".icon186 - Trash Can"><span class="icon icon186"></span></a>
				<a href="#" class="button" title=".icon188 - Undo"><span class="icon icon188"></span></a>
			</<div>
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
				<div id="tablecontent"></div>
			
				<!-- Paginator control -->
				<div id="paginator"></div>
				
			</div>
		</section>
		<jsp:include page="footer.jsp" />
	</body>

</html>
