<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Naukrihut</title>
<link rel="stylesheet" type="text/css" href="css/layout.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />

<!-- date picker related style scripts -->
	<link rel="stylesheet" href="css/datepicker.css" type="text/css" />
    <script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/datepicker.js"></script>
    <script type="text/javascript" src="js/datepicker_eye.js"></script>
   
    <script type="text/javascript" src="js/datepicker_layout.js"></script>
<!-- datepicker related style scripts -->
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


select{border:1px solid #9999FF;}
textarea{border:1px solid #9999FF;}
#checkbox input{border:1px solid #ffffff;}
#drop_box input{border:1px solid #ffffff;}

.ie7 #sizes{
	margin-left:200px;
}

/* CSS Document */


#top{
	width:200px; height:30px; 
	background:url(images/top_bar1.png) no-repeat 0 0 #FFFFFF; color:#000000;
	float:left; margin-right:0px;}
#tops{
	width:750px; height:30px; margin-left:0px;
	background:url(images/top_bar1.png)  0 0 #FFFFFF; color:#000000;
	float:left; margin-right:0px;}
#list{width:750px; height:auto; border:2px solid #FFCCCC; margin-left:223px; padding-bottom:10px;}
#buttons{width:750px; height:50px; background:#FFFFCC; margin-top:20px; border-bottom:1px solid #FFFF66;}
.ie7 #buttons{width:750px; height:30px; background:#FFFFCC; margin-top:5px; border-bottom:1px solid #FFFF99;}
#job_responses{width:200px; height:400px; float:left; border:2px solid #FFCCCC; margin-left:2px;}
#search_in{margin-left:-30px;}
.ie7 #search_in{margin-left:10px;}
#keyword{margin-left:-30px; padding-top:-10px;}
.ie7 #keyword{margin-left:10px; margin-top:-10px;}
.ie7 #keyword p{margin-top:-5px;}
#mid{padding:0px 20px 10px 0px; width:auto;}
#mids{padding-bottom:30px;}
#style{padding-right:10px;}
#hover li a{color:#FFFFFF;}
#hover li a:hover{color:#000000;}
#delete_refresh{margin-left:-270px; padding-top:3px;}
.ie7 #delete_refresh{ margin-right:179px; border:none;}
#title{
	float: left;
	width: 700px;
	height: auto;
	margin: 0;
	padding: 20px 0 0 10px;
	list-style: none;
	line-height: normal;
	margin-top:-30px;
	border-bottom:1px solid #FFFF66;
	
}
.ie7 #title{
	float: left;
	width: 700px;
	height: auto;
	margin: 0;
	padding: 20px 0 0 10px;
	list-style: none;
	line-height: normal;
	margin-top:-10px;
	
}
#title li
{	
	display: block;
	float: left;
}
/*----BODY1 PANEL----*/
#tnt_pagination {
	display:block;
	text-align:left;
	height:22px;
	line-height:21px;
	clear:both;
	padding-top:3px;
	font-family:Arial, Helvetica, sans-serif;
	font-size:12px;
	font-weight:normal;
	margin-left:200px;
	padding:10px 0px 0px 0px;
}
#title p{padding-top:5px;}
.ie7 #title p{padding-top:0px;}

.ie7 #tnt_pagination {
	display:block;
	text-align:left;
	height:22px;
	line-height:21px;
	clear:both;
	padding-top:13px;
	font-family:Arial, Helvetica, sans-serif;
	font-size:12px;
	font-weight:normal;
	margin-left:200px;
}

#tnt_pagination a:link, #tnt_pagination a:visited{
	padding:7px;
	padding-top:2px;
	padding-bottom:2px;
	border:1px solid #EBEBEB;
	margin-left:10px;
	text-decoration:none;
	background-color:#F5F5F5;
	color:#0072bc;
	width:22px;
	font-weight:normal;
}

#tnt_pagination a:hover {
	background-color:#DDEEFF;
	border:1px solid #BBDDFF;
	color:#0072BC;	
}

#tnt_pagination .active_tnt_link {
	padding:7px;
	padding-top:2px;
	padding-bottom:2px;
	border:1px solid #BBDDFF;
	margin-left:10px;
	text-decoration:none;
	background-color:#DDEEFF;
	color:#0072BC;
	cursor:default;
}

#tnt_pagination .disabled_tnt_pagination {
	padding:7px;
	padding-top:2px;
	padding-bottom:2px;
	border:1px solid #EBEBEB;
	margin-left:10px;
	text-decoration:none;
	background-color:#F5F5F5;
	color:#D7D7D7;
	cursor:default;
}
.move{margin-left:-20px;}
.ie7 .move{margin-left:10px;}
#folder{padding:10px 0px 10px 10px;}
.ie7 #folder{padding:0px 0px 10px 10px;}
#name{margin-top:0px; padding-left:25px; color:#FF6600}
.ie7 #name{margin-top:0px; padding-left:25px; color:#FF6600}
-->
</style>
</head>
<!--[if IE 7]><body class="ie7"><![endif]-->
<body>
<!-- Header starts from here -->
<?php include "includes/header_employer.php";?> 
<div align="center"> 
<div id="content" align="left">       
	<div id="job_responses">
		<div id="top" ><font color="#993399"><strong> &nbsp;&nbsp; Inbox (10)</strong></font></div>
        <form  action="" method="post" style="background:#FFFFCC; padding-bottom:10px; border-bottom:2px solid #FFCCCC;">
        <p style="padding-left:10px;">Show Application That Match On:</p>
		<ul id="keyword">
       
            <p><input type="checkbox" name="" id="" /> Qualification</p>
            <p><input type="checkbox" name="" id="" /> Job Experience</p>
            <p><input type="checkbox" name="" id="" /> Pref. Job Location</p>
            <p><input type="checkbox" name="" id="" /> Industry</p>
            
        </li>
        </ul>
        
        <a href="#"><img src="images/refine_result.png"  style="margin-left:10px; margin-top:7px;" border="none" /></a><br />
     </form>  
     <div id="folder">
     <a href="#"><img src="images/folder.png" border="none" /> Unmatched Resume (2)</a><br />
     <a href="#"><img src="images/folder.png"  border="none"/> Shortlisted Resume (0)</a><br />
     <a href="#"><img src="images/folder.png" border="none" /> On-Hold Resume (2)</a><br />
     <a href="#"><img src="images/folder.png"  border="none"/> Rejected Resume (0)</a><br />
     <a href="#"><img src="images/folder.png" border="none" /> Selected Resume (0)</a><br />
     
     </div>
	</div>
    <div id="list">
    <div id="tops"><strong style="color:#993399;"> &nbsp;&nbsp;Urgently Required .Net Developer <font color="#FF9900">(Responses)</font>
    <font style="font-size:10px; margin-left:200px;">Date of Posting: 02-07-2011 | <font color="#FF9900">Active</font></font>
            
            </strong></div>
    
		<div id="buttons">
        	
    		<ul style="margin-left:0px;">
            
        	<li class="move">
            	<font style="font-size:11px; color:#993399; margin-right:"><strong>Move to </strong></font> 
                
                <select size="1" name="FunctionalArea" style="width:100px;">
                	<option value="">-Select- </option>
                	<option value="">Unmacthed </option>
        			<option value="">Shortlisted </option> 
	    			<option value="">On-Hold</option> 
        			<option value="">Rejected</option> 
                    <option value="">Selected</option> 
    			</select> 

        	</li>    
        	<li style="margin-top:-10px;">
            <a href="#" style="margin-left:580px;"><img src="images/delete_button.png"  title="Delete" border="none"/></a>
            <a href="#"><img src="images/refersh.png"  title="Refresh" border="none"/></a>
            </li>
        </ul>
    </div>
    
    <ul id="title">
    	<p id="mid"  style="margin-left:0px;"><input type="checkbox" id="style"  style="margin-right:1%;" /><a href="#"><strong>.Net Developer and Php.Net Developer and Php.Net Developer and Php </strong></a>	
        </p>
       <li>
        <font size="-3"><p id="name"><strong>Jai Kumar Singh</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:350px;">Email Id: <strong>devanker_shah@gmail.com</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:350px;">Phone: <strong>9810286676</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:350px;">Date Of Birth / Gender: <strong>22-08-1984/ Male</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:350px;">Email Id: <strong>devanker_shah@gmail.com</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:350px;">Current Location: <strong>Noida</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:350px;">Pre. Location: <strong>Delhi/NCR</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:350px;">Status: <strong>Full Time</strong></p></font>
      </li>
      <li>
        <font size="-3"><p style="padding:0px 0px 0px 24px; width:300px;">Current Role: <strong>Software Engineer</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:300px;">Current Company: <strong>HCL</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:300px;">Functional Area: <strong>ITES/BPO/Custmer Service.</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:300px;">Industry: <strong>BPO/ITES</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:300px;">Total Experience: <strong> 3 Year(s) 5 Month(s)</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:300px;">Annual Salary: <strong>Rs. 4.5 Lac(s)</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:300px;">Highest Degree: <strong>B.tech(Electronics)</strong></p></font>
      </li><br />
      <li style="float:right; margin-right:9%;">&nbsp;&nbsp;&nbsp;<a href="#"><img src="images/send_mail.png" border="none" /></a><a href="#"><img src="images/download_button.png" border="none" /></a></li>
    </ul>
    
    <ul id="title">
    <p id="mid"  style="margin-left:0px;"><input type="checkbox" id="style"  style="margin-right:1%;" /><a href="#"><strong>.Net Developer and C++</strong></a></p>
       <li>
        <font size="-3"><p id="name"><strong>Jai Kumar Singh</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:350px;">Email Id: <strong>devanker_shah@gmail.com</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:350px;">Phone: <strong>9810286676</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:350px;">Date Of Birth / Gender: <strong>22-08-1984/ Male</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:350px;">Email Id: <strong>devanker_shah@gmail.com</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:350px;">Current Location: <strong>Noida</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:350px;">Pre. Location: <strong>Delhi/NCR</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:350px;">Status: <strong>Full Time</strong></p></font>
      </li>
      <li>
        <font size="-3"><p style="padding:0px 0px 0px 24px; width:300px;">Current Role: <strong>Software Engineer</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:300px;">Current Company: <strong>HCL</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:300px;">Functional Area: <strong>ITES/BPO/Custmer Service.</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:300px;">Industry: <strong>BPO/ITES</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:300px;">Total Experience: <strong> 3 Year(s) 5 Month(s)</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:300px;">Annual Salary: <strong>Rs. 4.5 Lac(s)</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:300px;">Highest Degree: <strong>B.tech(Electronics)</strong></p></font>
      </li><br />
      <li style="float:right; margin-right:9%;"><a href="#">&nbsp;&nbsp;&nbsp;<img src="images/send_mail.png" border="none" /></a><a href="#"><img src="images/download_button.png" border="none" /></a></li>
    </ul>
     <ul id="title">
     <p id="mid"  style="margin-left:0px;"><input type="checkbox" id="style"  style="margin-right:1%;" /><a href="#"><strong>.Net Developer and C++</strong></a></p>
       <li>
        <font size="-3"><p id="name"><strong>Jai Kumar Singh</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:350px;">Email Id: <strong>devanker_shah@gmail.com</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:350px;">Phone: <strong>9810286676</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:350px;">Date Of Birth / Gender: <strong>22-08-1984/ Male</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:350px;">Email Id: <strong>devanker_shah@gmail.com</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:350px;">Current Location: <strong>Noida</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:350px;">Pre. Location: <strong>Delhi/NCR</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:350px;">Status: <strong>Full Time</strong></p></font>
      </li>
      <li>
        <font size="-3"><p style="padding:0px 0px 0px 24px; width:300px;">Current Role: <strong>Software Engineer</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:300px;">Current Company: <strong>HCL</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:300px;">Functional Area: <strong>ITES/BPO/Custmer Service.</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:300px;">Industry: <strong>BPO/ITES</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:300px;">Total Experience: <strong> 3 Year(s) 5 Month(s)</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:300px;">Annual Salary: <strong>Rs. 4.5 Lac(s)</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:300px;">Highest Degree: <strong>B.tech(Electronics)</strong></p></font>
      </li><br />
      <li style="float:right; margin-right:9%;"><a href="#">&nbsp;&nbsp;&nbsp;<img src="images/send_mail.png" border="none" /></a><a href="#"><img src="images/download_button.png" border="none" /></a></li>
    </ul>
    <ul id="title">
    <p id="mid"  style="margin-left:0px;"><input type="checkbox" id="style"  style="margin-right:1%;" /><a href="#"><strong>.Net Developer and C++</strong></a></p>
       <li>
        <font size="-3"><p id="name"><strong>Jai Kumar Singh</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:350px;">Email Id: <strong>devanker_shah@gmail.com</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:350px;">Phone: <strong>9810286676</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:350px;">Date Of Birth / Gender: <strong>22-08-1984/ Male</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:350px;">Email Id: <strong>devanker_shah@gmail.com</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:350px;">Current Location: <strong>Noida</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:350px;">Pre. Location: <strong>Delhi/NCR</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:350px;">Status: <strong>Full Time</strong></p></font>
      </li>
      <li>
        <font size="-3"><p style="padding:0px 0px 0px 24px; width:300px;">Current Role: <strong>Software Engineer</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:300px;">Current Company: <strong>HCL</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:300px;">Functional Area: <strong>ITES/BPO/Custmer Service.</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:300px;">Industry: <strong>BPO/ITES</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:300px;">Total Experience: <strong> 3 Year(s) 5 Month(s)</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:300px;">Annual Salary: <strong>Rs. 4.5 Lac(s)</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:300px;">Highest Degree: <strong>B.tech(Electronics)</strong></p></font>
      </li><br />
      <li style="float:right; margin-right:9%;"><a href="#">&nbsp;&nbsp;&nbsp;<img src="images/send_mail.png" border="none" /></a><a href="#"><img src="images/download_button.png" border="none" /></a></li>
    </ul>
    <ul id="title">
    <p id="mid"  style="margin-left:0px;"><input type="checkbox" id="style"  style="margin-right:1%;" /><a href="#"><strong>.Net Developer and C++</strong></a></p>
       <li>
        <font size="-3"><p id="name"><strong>Jai Kumar Singh</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:350px;">Email Id: <strong>devanker_shah@gmail.com</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:350px;">Phone: <strong>9810286676</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:350px;">Date Of Birth / Gender: <strong>22-08-1984/ Male</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:350px;">Email Id: <strong>devanker_shah@gmail.com</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:350px;">Current Location: <strong>Noida</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:350px;">Pre. Location: <strong>Delhi/NCR</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:350px;">Status: <strong>Full Time</strong></p></font>
      </li>
      <li>
        <font size="-3"><p style="padding:0px 0px 0px 24px; width:300px;">Current Role: <strong>Software Engineer</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:300px;">Current Company: <strong>HCL</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:300px;">Functional Area: <strong>ITES/BPO/Custmer Service.</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:300px;">Industry: <strong>BPO/ITES</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:300px;">Total Experience: <strong> 3 Year(s) 5 Month(s)</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:300px;">Annual Salary: <strong>Rs. 4.5 Lac(s)</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:300px;">Highest Degree: <strong>B.tech(Electronics)</strong></p></font>
      </li><br />
      <li style="float:right; margin-right:9%;"><a href="#">&nbsp;&nbsp;&nbsp;<img src="images/send_mail.png" border="none" /></a><a href="#"><img src="images/download_button.png" border="none" /></a></li>
    </ul>
    <ul id="title">
    <p id="mid"  style="margin-left:0px;"><input type="checkbox" id="style"  style="margin-right:1%;" /><a href="#"><strong>.Net Developer and C++</strong></a></p>
       <li>
        <font size="-3"><p id="name"><strong>Jai Kumar Singh</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:350px;">Email Id: <strong>devanker_shah@gmail.com</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:350px;">Phone: <strong>9810286676</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:350px;">Date Of Birth / Gender: <strong>22-08-1984/ Male</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:350px;">Email Id: <strong>devanker_shah@gmail.com</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:350px;">Current Location: <strong>Noida</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:350px;">Pre. Location: <strong>Delhi/NCR</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:350px;">Status: <strong>Full Time</strong></p></font>
      </li>
      <li>
        <font size="-3"><p style="padding:0px 0px 0px 24px; width:300px;">Current Role: <strong>Software Engineer</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:300px;">Current Company: <strong>HCL</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:300px;">Functional Area: <strong>ITES/BPO/Custmer Service.</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:300px;">Industry: <strong>BPO/ITES</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:300px;">Total Experience: <strong> 3 Year(s) 5 Month(s)</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:300px;">Annual Salary: <strong>Rs. 4.5 Lac(s)</strong></p>
        <p style="margin-top:-10px; padding-left:25px; width:300px;">Highest Degree: <strong>B.tech(Electronics)</strong></p></font>
      </li><br />
      <li style="float:right; margin-right:9%;"><a href="#">&nbsp;&nbsp;&nbsp;<img src="images/send_mail.png" border="none" /></a><a href="#"><img src="images/download_button.png" border="none" /></a></li>
    </ul>
   

    
    
		<div id="tnt_pagination">
<span class="disabled_tnt_pagination">Prev</span><span class="active_tnt_link">1</span><a href="#2">2</a><a href="#3">3</a><a href="#4">4</a><a href="#5">5</a><a href="#6">6</a><a href="#7">7</a><a href="#8">8</a><a href="#9">9</a><a href="#10">10</a><a href="#forwaed">Next</a></div>	
 </div>
</div>
<!-- Footer starts from here -->
<?php include "includes/footer.php";?>
<!-- Footer ends here -->
</div>
</body>
</html>
