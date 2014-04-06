var service_context_path = "/invenio/rest-api";

function readFileContents(path) {
	xmlhttp = new XMLHttpRequest();
	xmlhttp.open("GET", path, false);
	xmlhttp.send(null);
	if(xmlhttp.status != 200 && xmlhttp.status != 204) {
		displayMessage('An error occurred while getting the data, please try again.', 'error');
	}
	return xmlhttp.responseText;
}
			
function getJsonData(path) {
	xmlhttp = new XMLHttpRequest();
	xmlhttp.open("GET", path, false);
	xmlhttp.send(null);
	if(xmlhttp.status != 200 && xmlhttp.status != 204) {
		displayMessage('An error occurred while getting the data, please try again.', 'error');
	}
	return xmlhttp.responseText;
}

/*
this function will parse the template json defined in ../data/<object>.json file with the service response.
The assumption is we should have the same keys in template json as in service reponse. The *.json file will
have all the information related to the display text, fields to show, the datatype etc. Not all the fields 
from services will be shown, only the ones listed in *.json file will is  used for the display. Any specific customization 
should be done by extending or resuing the utils.
*/
function parseAndPopulateJson(objectJson, responseJson, fieldsArray) {
	var clonedObjectJson = cloneJson(objectJson);
	var gridJson = clonedObjectJson['grid-json'];
	var jsonArray = [];
	var refMap = prepareRefMap(clonedObjectJson['refs']);
	var fieldMap = prepareFieldMap(gridJson.metadata);
	for(var i=0;i<responseJson.length;i++){
		var obj = responseJson[i];
	    var templateJson = cloneJson(gridJson.data);
	    templateJson.id = obj.id;
		for (var key in templateJson.values) {
			//alert(key)
			if(fieldsArray != null && ($.inArray(key, fieldsArray) < 1)) {
				continue;
			}
			if($.inArray(key, fieldsArray) && obj.hasOwnProperty(key)) {
				var value = obj[key];
				if(fieldMap[key].datatype == "date") {
					if(value != "") {
						value = new Date(value).toJSON().slice(0,10);
						if(value.indexOf("-") != -1) {
							var dateArray = value.split("-");
							value = dateArray[2] + "/" + dateArray[1] + "/" + dateArray[0];
						}
					}
				} 
				else if(refMap.hasOwnProperty(key)) {
					var ref = refMap[key];
					var refResponse = getJsonData(service_context_path + ref['service-path'] + "/findAll");
					var json = stringToJson(refResponse);
					var values = {};
					for ( var index = 0; index < json.length; index++) {
						var valueObject = json[index];
						values[valueObject[ref['id-field']]] = valueObject[ref['display-field']];
					}
					fieldMap[key].values = values;
					value = value[ref['id-field']];
				}
				templateJson.values[key] = value;
			} else {
				templateJson.values[key] = '';
			}
        }
		if(templateJson.values.hasOwnProperty("action")) {
			templateJson.values['action'] = getRowAction(obj.id);
		}
		jsonArray.push(templateJson);
    }
	gridJson.data = jsonArray;
	return gridJson;
}

function prepareFieldMap(metaData) {
	var fieldMap = {};
	for ( var index = 0; index < metaData.length; index++) {
		var field = metaData[index];
		fieldMap[field.name] = field;
    }
	return fieldMap;
}

function prepareRefMap(refs) {
	var refMap = {};
	if(refs != null) {
		var fields = refs.fields;
		for ( var index = 0; index < fields.length; index++) {
			var field = fields[index];
			refMap[field.name] = field;
	    }
	}
	return refMap;
}

function cloneJson(originalJson) {
	return stringToJson(jsonToString(originalJson));
}

function stringToJson(stringJson) {
	return JSON.parse(stringJson);
}

function jsonToString(json) {
	return JSON.stringify(json);
}

function sortJson(jsonObject, field) {
	if(Object.keys(jsonObject).length === 0) {
		return jsonObject;
	}
	jsonObject.sort(function(a,b) {
		if(a[field] == b[field])
	        return 0;
	    if(a[field] < b[field])
	        return 1;
	    if(a[field] > b[field])
	        return -1;
	});
	return jsonObject;
}

function getRowAction(id) {
	alert("No action available")
}