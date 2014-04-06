function mapToFormListValues(json, idField, valueField) {
	var jsonArray = [];
	for(var i=0;i<json.length;i++){
		var obj = {};
	    obj['id'] = json[i][idField];
	    obj['display-text'] = json[i][valueField];
		jsonArray.push(obj);
    }
	return jsonArray;
}

function buildInputText(id, name, label, value, form, visible, editable, size, clazz) {
	/* <div class="elements">
	  <label for="name">Name :</label>
	  <input type="text" id="name" size="32" class="input-text" />
	</div> */
	id = typeof id !== 'undefined' ? id : "";
	name = typeof name !== 'undefined' ? name : "";
	label = typeof label !== 'undefined' ? label : "";
	value = typeof value !== 'undefined' ? value : "";
	form = typeof form !== 'undefined' ? form : "";
	visible = typeof visible !== 'undefined' ? visible : true;
	editable = typeof editable !== 'undefined' ? editable : true;
	size = typeof size !== 'undefined' ? size : "32";
	clazz = typeof clazz !== 'undefined' ? clazz : "input-text";
	
	var elementDiv = document.createElement("div");
	elementDiv.setAttribute("class", "elements");
	if(!visible) {
		elementDiv.style.display = "none";
	}
	var labelElement = document.createElement("label");
	labelElement.setAttribute("for", name);
	labelElement.className = "tabbed-form-label";
//	labelElement.style.width="10em";
//	labelElement.style.float="left";
	labelElement.innerHTML = label;
	
	var input = document.createElement("input");
	input.type = "text";
	input.id = id;
	input.name = name;
	input.value = value;
	input.size = size;
	input.setAttribute("form", form);
	input.readOnly = !editable;
	input.className = clazz;
	elementDiv.appendChild(labelElement);
	elementDiv.appendChild(input);
	return elementDiv;
}

function buildInputTextNumber(id, name, label, value, form, visible, editable, size, clazz) {
	/* <div class="elements">
	  <label for="name">Name :</label>
	  <input type="text" id="name" size="32" class="input-text" />
	</div> */
	id = typeof id !== 'undefined' ? id : "";
	name = typeof name !== 'undefined' ? name : "";
	label = typeof label !== 'undefined' ? label : "";
	value = typeof value !== 'undefined' ? value : "";
	form = typeof form !== 'undefined' ? form : "";
	editable = typeof editable !== 'undefined' ? editable : true;
	size = typeof size !== 'undefined' ? size : "32";
	clazz = typeof clazz !== 'undefined' ? clazz : "input-text";
	
	var elementDiv = document.createElement("div");
	if(!visible) {
		elementDiv.style.display = "none";
	}
	elementDiv.setAttribute("class", "elements");
	var labelElement = document.createElement("label");
	labelElement.setAttribute("for", name);
	labelElement.className = "tabbed-form-label";
//	labelElement.style.width="10em";
//	labelElement.style.float="left";
	labelElement.innerHTML = label;
	
	var input = document.createElement("input");
	input.type = "number";
	input.id = id;
	input.name = name;
	input.value = value;
	input.size = size;
	input.setAttribute("form", form);
	input.readOnly = !editable;
	input.className = clazz;
	elementDiv.appendChild(labelElement);
	elementDiv.appendChild(input);
	return elementDiv;
}

function buildInputTextDecimal(id, name, label, value, form, visible, editable, size, clazz) {
	/* <div class="elements">
	  <label for="name">Name :</label>
	  <input type="text" id="name" size="32" class="input-text" />
	</div> */
	id = typeof id !== 'undefined' ? id : "";
	name = typeof name !== 'undefined' ? name : "";
	label = typeof label !== 'undefined' ? label : "";
	value = typeof value !== 'undefined' ? value : "";
	form = typeof form !== 'undefined' ? form : "";
	editable = typeof editable !== 'undefined' ? editable : true;
	size = typeof size !== 'undefined' ? size : "32";
	clazz = typeof clazz !== 'undefined' ? clazz : "input-text";
	
	var elementDiv = document.createElement("div");
	if(!visible) {
		elementDiv.style.display = "none";
	}
	elementDiv.setAttribute("class", "elements");
	var labelElement = document.createElement("label");
	labelElement.setAttribute("for", name);
	labelElement.className = "tabbed-form-label";
//	labelElement.style.width="10em";
//	labelElement.style.float="left";
	labelElement.innerHTML = label;
	
	var input = document.createElement("input");
	input.type = "number";
	input.id = id;
	input.name = name;
	input.step = "any";
	input.value = value;
	input.size = size;
	input.setAttribute("form", form);
	input.readOnly = !editable;
	input.className = clazz;
	elementDiv.appendChild(labelElement);
	elementDiv.appendChild(input);
	return elementDiv;
}

/*
 * values should be in form of {"id":"", "display-text":""}
 */
function buildSelectBox(id, name, label, values, value, form, visible, editable, clazz) {
	/* <div class="elements">
	  <label for="question">Security Questions :</label>
	  <select class="select">
		<option value="">Choose One of Select Option </option>
		<option value="">Select Option Number 1</option>
		<option value="">Select Option Number 2</option>
		<option value="">Select Option Number 3</option>
	  </select>
	</div> */
	id = typeof id !== 'undefined' ? id : "";
	name = typeof name !== 'undefined' ? name : "";
	label = typeof label !== 'undefined' ? label : "";
	values = typeof values !== 'undefined' ? values : JSON.parse("[]");
	value = typeof value !== 'undefined' ? value : "";
	editable = typeof editable !== 'undefined' ? editable : true;
	form = typeof form !== 'undefined' ? form : "";
	clazz = typeof clazz !== 'undefined' ? clazz : "select";
	
	var elementDiv = document.createElement("div");
	if(!visible) {
		elementDiv.style.display = "none";
	}
	elementDiv.setAttribute("class", "elements");
	var labelElement = document.createElement("label");
	labelElement.setAttribute("for", name);
	labelElement.className = "tabbed-form-label";
//	labelElement.style.width="10em";
//	labelElement.style.float="left";
	labelElement.innerHTML = label;
	var input = document.createElement("select");
	input.id = id;
	input.name = name;
	input.className = clazz;
	input.setAttribute("form", form);
	input.disabled = !editable;
	input.appendChild(new Option("-- Select", "", "", true));
	var selected = false;
	for ( var index = 0; index < values.length; index++) {
		if(value == values[index].id) {
			selected = true;
		} else {
			selected = false;
		}
		input.appendChild(new Option(values[index]['display-text'], values[index]['id'], "", selected));
	}
	elementDiv.appendChild(labelElement);
	elementDiv.appendChild(input);
	return elementDiv;
}

/*
 * values should be in form of {"value":"", "display-text":""}
 */
function buildRadioButton(id, name, label, values, value, form, visible, editable, clazz) {
	/* <div class="elements">
      <label for="e-mail">Radio Button :</label>
      <input type="radio" name="gender" class="radio"/> Male </span>
	  <input type="radio" name="gender" class="radio" checked="checked"/> Female <span class="blank-space"></span>
    </div> */
	id = typeof id !== 'undefined' ? id : "";
	name = typeof name !== 'undefined' ? name : "";
	label = typeof label !== 'undefined' ? label : "";
	values = typeof values !== 'undefined' ? values : JSON.parse("[]");
	value = typeof value !== 'undefined' ? value : "";
	form = typeof form !== 'undefined' ? form : "";
	editable = typeof editable !== 'undefined' ? editable : true;
	clazz = typeof clazz !== 'undefined' ? clazz : "radio";
	
	var elementDiv = document.createElement("div");
	if(!visible) {
		elementDiv.style.display = "none";
	}
	elementDiv.setAttribute("class", "elements");
	var labelElement = document.createElement("label");
	labelElement.setAttribute("for", name);
	labelElement.className = "tabbed-form-label";
//	labelElement.style.width="10em";
//	labelElement.style.float="left";
	labelElement.innerHTML = label;
	
	elementDiv.appendChild(labelElement);
	for ( var index = 0; index < values.length; index++) {
		var input = document.createElement("input");
		input.type = "radio";
		input.id = id;
		input.name = name;
		input.className = clazz;
		input.setAttribute("form", form);
		input.disabled = !editable;
		input.value = values[index].value;
		if(value == values[index].value) {
			input.checked = "checked";
		}
		elementDiv.appendChild(input);
		var inputText = document.createTextNode(values[index]['display-text']);
		elementDiv.appendChild(inputText);
	}
	return elementDiv;
}

function buildInputTextDate(id, name, label, value, form, visible, editable, size, clazz) {
	/* <div class="elements">
	  <label for="name">Name :</label>
	  <input id="date-range.from-value" name="date-range" type="text" value="dd/mm/yy" class="input-date"/>
	</div> */
	id = typeof id !== 'undefined' ? id : "";
	name = typeof name !== 'undefined' ? name : "";
	label = typeof label !== 'undefined' ? label : "";
	value = typeof value !== 'undefined' ? value : "";
	form = typeof form !== 'undefined' ? form : "";
	editable = typeof editable !== 'undefined' ? editable : true;
	size = typeof size !== 'undefined' ? size : "20";
	clazz = typeof clazz !== 'undefined' ? clazz : "input-date";
	
	var elementDiv = document.createElement("div");
	if(!visible) {
		elementDiv.style.display = "none";
	}
	elementDiv.setAttribute("class", "elements");
	var labelElement = document.createElement("label");
	labelElement.setAttribute("for", name);
	labelElement.className = "tabbed-form-label";
//	labelElement.style.width="10em";
//	labelElement.style.float="left";
	labelElement.innerHTML = label;
	
	var input = document.createElement("input");
	input.type = "text";
	input.id = id;
	input.name = name;
	if(value != "") {
		input.value = new Date(value).toJSON().slice(0,10);
	}
	input.size = size;
	input.setAttribute("form", form);
	input.readOnly = true;
	if(editable) {
		input.className = clazz;
	} else {
		input.className = "input-text";
	}
	elementDiv.appendChild(labelElement);
	elementDiv.appendChild(input);
	return elementDiv;
}