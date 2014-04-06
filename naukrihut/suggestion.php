<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Naukrihut</title>
<link rel="stylesheet" type="text/css" href="css/layout.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<script type="text/javascript">
function addLoadEvent(func) {
  var oldonload = window.onload;
  if (typeof window.onload != 'function') {
    window.onload = func;
  } else {
    window.onload = function() {
      oldonload();
      func();
    }
  }
}

function prepareInputsForHints() {
	var inputs = document.getElementsByTagName("input");
	for (var i=0; i<inputs.length; i++){
		// test to see if the hint span exists first
		if (inputs[i].parentNode.getElementsByTagName("span")[0]) {
			// the span exists!  on focus, show the hint
			inputs[i].onfocus = function () {
				this.parentNode.getElementsByTagName("span")[0].style.display = "inline";
			}
			// when the cursor moves away from the field, hide the hint
			inputs[i].onblur = function () {
				this.parentNode.getElementsByTagName("span")[0].style.display = "none";
			}
		}
	}
	// repeat the same tests as above for selects
	var selects = document.getElementsByTagName("select");
	for (var k=0; k<selects.length; k++){
		if (selects[k].parentNode.getElementsByTagName("span")[0]) {
			selects[k].onfocus = function () {
				this.parentNode.getElementsByTagName("span")[0].style.display = "inline";
			}
			selects[k].onblur = function () {
				this.parentNode.getElementsByTagName("span")[0].style.display = "none";
			}
		}
	}
}
addLoadEvent(prepareInputsForHints);
</script>
<style type="text/css">


/* All form elements are within the definition list for this example */
input{border:1px solid #9999FF; height:18px;}

dl {
	font:normal 12px/15px Arial;
    position: relative;
    width: 350px;
}
dt {
    clear: both;
    float:left;
    width: 130px;
    padding: 4px 0 2px 140px;
    text-align: left;
}
dd {
    float: left;
    width: 200px;
    margin: 0 0 20px 280px;
    padding-left: 6px;
	margin-top:-24px;
}
.ie7 dd {
    float: left;
    width: 200px;
    margin: 0 0 20px 140px;
    padding-left: 6px;
	margin-top:-24px;
}

/* The hint to Hide and Show */
.hint {
   	display: none;
    position: absolute;
    right: -340px;
    width: 200px;
    margin-top: -4px;
    border: 1px solid #c93;
    padding: 10px 12px;
    /* to fix IE6, I can't just declare a background-color,
    I must do a bg image, too!  So I'm duplicating the pointer.gif
    image, and positioning it so that it doesn't show up
    within the box */
    background: #ffc url(images/pointer.gif) no-repeat -10px 5px;
}

/* The pointer image is hadded by using another span */
.hint .hint-pointer {
    position: absolute;
    left: -10px;
    top: 5px;
    width: 10px;
    height: 19px;
    background: url(images/pointer.gif) left top no-repeat;
}
#advance_rights
{
	width:182px;
	height:auto;
	margin-top:-43%;
	border:1px solid #FFCCCC; 
	float:right;
	margin-right:3px;
}
</style>
</head>
<!--[if IE 7]><body class="ie7"><![endif]-->
<body>
<!-- Header starts from here -->
<?php include "includes/header.php";?><!--header ends here-->
<!--content starts fron here-->
<div align="center"> 
<div id="content"> 
<p id="first_line" align="left">Home > Suggestion</p>
<div id="advance_search" align="left">
		<ul id="advance_bar">
			<li><font color="#FF6600" style="padding:0px 0px 0px 12px;"><strong>Suggestions</strong></font></li>
        </ul><br /><br />
     
<form id="form5"> 
<br />
<dl>
	<dt>
		<label for="firstname"><strong>Name:</strong></label>
	</dt>
	<dd>
		<input
			name="jobid"
			id="jobid"
			type="text" />
      	<span class="hint">Type Your Name.( Not Compulsory Field.)<span class="hint-pointer">&nbsp;</span></span>     
	</dd>
	<dt>
		<label for="lastname"><strong>Email:</strong></label>
	</dt>
	<dd>
		<input
			name="keyword"
			id="keyword"
			type="text" />
		<span class="hint">Type Your Email.( Compulsory Field.)<span class="hint-pointer">&nbsp;</span></span>
	</dd>
    
    <dt>
		<label for="lastname"><strong>Mobile:</strong></label>
	</dt>
    <dd>
			<input
			name="location"
			id="location"
			type="text" />
      	<span class="hint">Type Your Mobile No..( Not Compulsory Field.)<span class="hint-pointer">&nbsp;</span></span>  
    </dd>
	<dt>
		<label for="lastname"><strong>Your Message:</strong></label>
	</dt>
    <dd>
			<textarea name="message" id="message" cols="23" rows="5"></textarea>
      	<span class="hint">Type Your Suggestions Here.<span class="hint-pointer">&nbsp;</span></span>  
    </dd>
    <dt>
	<a href="#"><img src="images/submit.png" id="button_search" style="margin-left:144px; margin-top:-20px;" border="none"/></a>
    </dt>
</dl>
</form> 	
</div>



<!-- Footer starts from here -->
<?php include "includes/footer.php";?>
<!-- Footer ends here -->
</div>
</body>
</html>
