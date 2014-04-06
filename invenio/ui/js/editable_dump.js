/*
 * Copyright (c) 2011 Webismymind SPRL
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://editablegrid.net/license
 */

// create our editable grid

var editableGrid = new EditableGrid("GridFull", {

	enableSort: true, // true is the default, set it to false if you don't want sorting to be enabled

	editmode: "absolute", // change this to "fixed" to test out editorzone, and to "static" to get the old-school mode

	editorzoneid: "edition", // will be used only if editmode is set to "fixed"

	pageSize: 10

});



// helper function to display a message

function displayMessage(text, style) { 

	_$("message").innerHTML = "<p class='" + (style || "ok") + "'>" + text + "</p>"; 

} 



// helper function to get path of a image

function image(relativePath) {

	return "../images/" + relativePath;

}



// this will be used to render our table headers

function InfoHeaderRenderer(message) { 

	this.message = message; 

	this.infoImage = new Image();

	this.infoImage.src = image("information.png");

};



InfoHeaderRenderer.prototype = new CellRenderer();

InfoHeaderRenderer.prototype.render = function(cell, value) 

{

	if (value) {

		// here we don't use cell.innerHTML = "..." in order not to break the sorting header that has been created for us (cf. option enableSort: true)

		var link = document.createElement("a");

		link.href = "javascript:alert('" + this.message + "');";

		link.appendChild(this.infoImage);

		cell.appendChild(document.createTextNode("\u00a0\u00a0"));

		cell.appendChild(link);

	}

};



// this function will initialize our editable grid

EditableGrid.prototype.initializeGrid = function() 

{

	with (this) {
		
		/*
		setHeaderRenderer("symbol", new InfoHeaderRenderer("Note the validator used automatically when you specify your column as being of type symbol"));

		setHeaderRenderer("active", new InfoHeaderRenderer("This column tells if the the instrument is active"));

		

		getColumn("exchange").cellEditor.minWidth = 105;

		

		// use a flag image to render the selected country

		setCellRenderer("exchange", new CellRenderer({

			render: function(cell, value) { cell.innerHTML = value ? "<img src='" + image("flags/" + value.toLowerCase() + ".png") + "' alt='" + value + "'/>" : ""; }

		})); 



		// use autocomplete on firstname

		setCellEditor("symbol", new AutocompleteCellEditor({

			suggestions: ['ABC','BCA','XYZ']

		}));



		// register the function that will handle model changes

		modelChanged = function(rowIndex, columnIndex, oldValue, newValue, row) { 

			//api to update the data
			displayMessage("Value for '" + this.getColumnName(columnIndex) + "' in row " + this.getRowId(rowIndex) + " has changed from '" + oldValue + "' to '" + newValue + "'");

			if (this.getColumnName(columnIndex) == "continent") this.setValueAt(rowIndex, this.getColumnIndex("country"), ""); // if we changed the continent, reset the country

		};
		*/
		

		// update paginator whenever the table is rendered (after a sort, filter, page change, etc.)

		tableRendered = function() { this.updatePaginator(); };


		/*
		rowSelected = function(oldRowIndex, newRowIndex) {

			if (oldRowIndex < 0) displayMessage("Selected row '" + this.getRowId(newRowIndex) + "'");

			else displayMessage("Selected row has changed from '" + this.getRowId(oldRowIndex) + "' to '" + this.getRowId(newRowIndex) + "'");

		};

		// render for the action column

		setCellRenderer("action", new CellRenderer({render: function(cell, value) {

			// this action will remove the row, so first find the ID of the row containing this cell 

			var rowId = editableGrid.getRowId(cell.rowIndex);

			

			cell.innerHTML = "<a onclick=\"if (confirm('Are you sure you want to delete this intrument ? ')) { editableGrid.remove(" + cell.rowIndex + "); } \" style=\"cursor:pointer\">" +

							 "<img src=\"" + image("delete.png") + "\" border=\"0\" alt=\"delete\" title=\"Delete row\"/></a>";

			

			cell.innerHTML+= "&nbsp;<a onclick=\"editableGrid.createnew(" + cell.rowIndex + ");\" style=\"cursor:pointer\">" +

			 "<img src=\"" + image("duplicate.png") + "\" border=\"0\" alt=\"duplicate\" title=\"Duplicate row\"/></a>";

			

		}})); 
		*/
		

		// render the grid (parameters will be ignored if we have attached to an existing HTML table)

		renderGrid("tablecontent", "dump_grid", "tableid");

		

		// set active (stored) filter if any

		_$('filter').value = currentFilter ? currentFilter : '';

		

		// filter when something is typed into filter

		_$('filter').onkeyup = function() { editableGrid.filter(_$('filter').value); };

		

		// bind page size selector

		$("#pagesize").val(pageSize).change(function() { editableGrid.setPageSize($("#pagesize").val()); });

	}

};



EditableGrid.prototype.onloadXML = function(url) 

{

	// register the function that will be called when the XML has been fully loaded

	this.tableLoaded = function() { 

		displayMessage("Grid loaded with: " + this.getRowCount() + " row(s)"); 

		this.initializeGrid();

	};



	// load XML URL

	this.loadXML(url);

};



EditableGrid.prototype.onloadJSON = function(json) 

{

	// register the function that will be called when the XML has been fully loaded

	this.tableLoaded = function() { 

		displayMessage("Grid loaded with: " + this.getRowCount() + " row(s)"); 

		this.initializeGrid();

	};



	// load JSON data
	this.loadJSONFromString(json);
	displayMessage("Grid loaded with: " + this.getRowCount() + " row(s)"); 
	this.initializeGrid();
};



EditableGrid.prototype.createnew = function(rowIndex) 
{
	if(rowIndex == undefined) {
		rowIndex = 0;
	}
	// copy values from given row
	var values = new Object();
	values['volSurfaceType'] = '';
	values['product'] = '';
	values['start'] = '';
	values['step'] = '';
	values['extrapolate'] = '';
	values['multiple'] = '';
	values['code'] = '';
	values['futureRef'] = '';
	values['optionsRef'] = '';
	values['expiryDate'] = '';

	// get id for new row (max id + 1)
	var newRowId = 0;
	for (var r = 0; r < this.getRowCount(); r++) newRowId = Math.max(newRowId, parseInt(this.getRowId(r)) + 1);
	
	// add new row
	this.insertAfter(rowIndex, newRowId, values); 
};

EditableGrid.prototype.duplicate = function(rowIndex) 

{
	// copy values from given row

	var values = this.getRowValues(rowIndex);

	values['name'] = values['name'] + ' (copy)';



	// get id for new row (max id + 1)

	var newRowId = 0;

	for (var r = 0; r < this.getRowCount(); r++) newRowId = Math.max(newRowId, parseInt(this.getRowId(r)) + 1);

	

	// add new row

	this.insertAfter(rowIndex, newRowId, values); 

};



// function to render the paginator control

EditableGrid.prototype.updatePaginator = function()

{

	var paginator = $("#paginator").empty();

	var nbPages = this.getPageCount();



	// get interval

	var interval = this.getSlidingPageInterval(20);

	if (interval == null) return;

	

	// get pages in interval (with links except for the current page)

	var pages = this.getPagesInInterval(interval, function(pageIndex, isCurrent) {

		if (isCurrent) return "" + (pageIndex + 1);

		return $("<a>").css("cursor", "pointer").html(pageIndex + 1).click(function(event) { editableGrid.setPageIndex(parseInt($(this).html()) - 1); });

	});

		

	// "first" link

	var link = $("<a>").html("<img src='" + image("gofirst.png") + "'/>&nbsp;");

	if (!this.canGoBack()) link.css({ opacity : 0.4, filter: "alpha(opacity=40)" });

	else link.css("cursor", "pointer").click(function(event) { editableGrid.firstPage(); });

	paginator.append(link);



	// "prev" link

	link = $("<a>").html("<img src='" + image("prev.png") + "'/>&nbsp;");

	if (!this.canGoBack()) link.css({ opacity : 0.4, filter: "alpha(opacity=40)" });

	else link.css("cursor", "pointer").click(function(event) { editableGrid.prevPage(); });

	paginator.append(link);



	// pages

	for (p = 0; p < pages.length; p++) paginator.append(pages[p]).append(" | ");

	

	// "next" link

	link = $("<a>").html("<img src='" + image("next.png") + "'/>&nbsp;");

	if (!this.canGoForward()) link.css({ opacity : 0.4, filter: "alpha(opacity=40)" });

	else link.css("cursor", "pointer").click(function(event) { editableGrid.nextPage(); });

	paginator.append(link);



	// "last" link

	link = $("<a>").html("<img src='" + image("golast.png") + "'/>&nbsp;");

	if (!this.canGoForward()) link.css({ opacity : 0.4, filter: "alpha(opacity=40)" });

	else link.css("cursor", "pointer").click(function(event) { editableGrid.lastPage(); });

	paginator.append(link);

};

