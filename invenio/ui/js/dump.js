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
		
		// update paginator whenever the table is rendered (after a sort, filter, page change, etc.)

		tableRendered = function() { this.updatePaginator(); };
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

	// load JSON data
	this.loadJSONFromString(json);
	displayMessage("Grid loaded with: " + this.getRowCount() + " row(s)"); 
	this.initializeGrid();
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

