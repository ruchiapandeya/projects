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
.ie7 #vertical_line{ background-color:#996699; width:auto; height:2px; margin-left:-170px; margin-top:-6px;}
/* CSS Document */


#top{
	width:255px; height:30px; 
	background:url(images/top_bar1.png) no-repeat 0 0 #FFFFFF; color:#000000;
	float:left; margin-right:0px;}
#tops{
	width:700px; height:30px; margin-left:0px;
	background:url(images/top_bar1.png) no-repeat 0 0 #FFFFFF; color:#000000;
	float:left; margin-right:0px; margin-top:100px;}
#list{width:700px; height:250px; border:double #FFCC66; margin-left:0px; margin-top:140px;}
.ie7 #list{width:700px; height:250px; border:double #FFCC66; margin-left:0px; margin-top:0px;}
#job_responses{width:255px; height:690px; float:left; border:2px solid #FFCCCC;}
#keyword{margin-left:-30px; padding-top:20px;}
.ie7 #keyword{margin-left:10px; padding-top:20px;}
#posted_on{margin-left:450px; margin-top:-1246px;}
.ie7 #posted_on{margin-left:450px; margin-top:-1395px;}
#mid{ margin-top:-5px; width:350px; border-right:1px solid #FF9900; }
#mids{padding-bottom:30px;}
#style{padding-right:10px;}
#hover li a{color:#FFFFFF;}
#hover li a:hover{color:#000000;}
#delete_refresh{margin-left:-270px; padding-top:3px;}
.ie7 #delete_refresh{ margin-right:179px; border:none;}
#color{width:667px; height:auto; padding:10px 20px 0px 10px;}
.ie7 #results{margin-left:-230px;}
#results{margin-left:-270px;}
#view{ float:right; margin-top:-120px;}
.ie7 #view{float:right; margin-top:-120px; margin-right:50px;}
.ie7 #second_info{margin-top:-5px;}
#display_nav{margin-top:-25px; float:left;}
.ie7 #display_nav{margin-top:20px; float:left;}
#next_info{float:right; margin-top:-176px; margin-right:-30px; padding:0px 5px 0px 30px; width:360px;}
.ie7 #next_info{float:right; margin-top:-180px; margin-right:-30px; padding:0px 5px 0px 0px; width:360px;}
#jump_section{height:23px; width:700px; border:2px solid #FF99CC;}
#information{width:700px; padding:20px 20px 0px 0px;}
/*----BODY1 PANEL----*/
</style>
</head>
<!--[if IE 7]><body class="ie7"><![endif]-->
<body>
<!-- Header starts from here -->
<div align="center">
<div id="headers">
	<div id="top_bar">
        <p class="toptext_style"><a href="employers_home.html"><strong>Home</strong></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;| Contact Us: <strong>9999-331-331</strong>
 			(Monday - Saturday 10:00AM to 6:00PM IST)
        </p>
        <p class="toptext_style" style="margin-right:370px;"><A name="top">Hello Rachit</A>, <a href="#"><strong>Sign Out</strong></a>  
        </p>
    </div>
    
    <!-- Top Add. strats from here -->
    <a href="#"><div id="logo"></div></a>
    <div style="margin-right:0px; margin-top:-10px;">
    <a href="#"><img src="images/call.png" / align="right" style="padding:0px 0px; border:none;"></a>
   	</div>
    <!-- Top Add. ends here -->
    
    
</div> 
 
<div id="content" align="left">    
   <div id="display_nav">
	<a href="#"><img src="images/download.png" border="none" title="Download Resume" /></a>
    <a href="#"><img src="images/save.png" border="none" title="Save Resume"/></a>
    <a href="#"><img src="images/email.png" border="none" title="Send Email"/></a>
    <a href="#"><img src="images/print.png" border="none" title="Print Resume"/></a>
    <a href="#"><img src="images/forward.png" border="none" title="Forward Resume"/></a>
    </div>
    <div id="list"> 
    <div id="title">
    	<div id="color">
        <p id="mid"  style="margin-left:2px;"><br />
        <font style="margin-top:0px; font-size:12px; margin-left:2px"><strong>3.5 year experience in Product Development
        </strong></font><br /><br />
        <font style="margin-top:0px; font-size:11px; margin-left:2px">Name:<strong style="color:#FF9900;"> Devanker Shah</strong></font><br />
        <font style="margin-top:0px; font-size:11px; margin-left:2px">Email: <strong>devanker_shah@gmail.com, dev_shah@yahoomail.com</strong></font></font><br />
        <font style="margin-top:0px; font-size:11px; margin-left:2px">Phone No.: <strong>9810288787, 9999888989</strong></font><br />
        <font style="margin-top:0px; font-size:11px; margin-left:2px">Date Of Birth / Gender: 22-08-1984 / Male</font><br />
        <font style="margin-top:0px; font-size:11px; margin-left:2px">Category: General</font><br />
        <font style="margin-top:0px; font-size:11px; margin-left:2px">Address: K-27, Ground floor, Opp. Aggrawal Sweet, Main Vasant Kunj Road, Mahipal Pur, <br />New  	        Delhi-110035</font><br />
        <font style="margin-top:0px; font-size:11px; margin-left:2px">Pref.Location: <strong>Delhi/NCR</strong></font><br />
        </p>
        
        <p id="next_info">
        <font style="margin-top:0px; font-size:11px; margin-left:42px">Current Role: <strong>Software Engineer</strong></font><br />
        <font style="margin-top:0px; font-size:11px; margin-left:42px">Current Company: <strong>HCL</strong></font><br />
        <font style="margin-top:0px; font-size:11px; margin-left:42px">Current Location: <strong>Gurgoan</strong></font><br />
        <font style="margin-top:0px; font-size:11px; margin-left:42px">Functional Area: <strong>ITES/BPO/Custmer Service.</strong></font><br />
        <font style="margin-top:0px; font-size:11px; margin-left:42px">Industry: <strong> BPO/ITES</strong></font><br /> 
        <font style="margin-top:0px; font-size:11px; margin-left:42px">Total Experience: 3 Year(s) 5 Month(s)</font><br />
        <font style="margin-top:0px; font-size:11px; margin-left:42px">Annual Salary: <strong> Rs. 4.5 Lac(s)</strong></font><br /> 
		<font style="margin-top:0px; font-size:11px; margin-left:42px">Job Type: <strong> Permanent</strong></font><br /> 
        <font style="margin-top:0px; font-size:11px; margin-left:42px">Highest Degree: <strong> B.tech(Electronics)</strong></font><br /> 
        </p>
        </div> 
	 </div> 
     </div>
			<p>ID: 87dt76788 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Last Active: 04-jun-11 				           		     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Last Modified: 12-mar-11 </p>
	<div id="jump_section">
	<font color="#FF6600" style="padding-left:10px;">Jump to Section </font>&nbsp; >> &nbsp;<a href="#experience"> Work Experience </a>&nbsp; || &nbsp;<a href="#education"> Education </a>&nbsp; ||    &nbsp;<a href="#authorization"> Work Authorization </a>&nbsp; || &nbsp;<a href="#candidate"> Candidate Resume </a>
	</div>
    <div id="information">
    	<p style="font-size:14px;"><A name="experience"><strong>Work Experience</strong></A></p>
        <ul style="color:#663399; font-size:11px;">
		<li style="list-style:circle;"><strong>HCL Pvt Ltd </strong>(2010 to Till Date)</li>
        <li>as Software Engineer</li>
        <br />
        <li><strong>Job Profile:</strong></li>
        <li>
           Lorem Ipsum is simply dummy text of the printing and typesetting industry.  but also the leap into electronic typesetting, remaining essentially unchanged. Lorem Ipsum           is simply dummy text of the printing and typesetting industry.  but also the leap into electronic typesetting, remaining essentially unchanged</li>
        </ul>
        <ul style="color:#663399; font-size:11px;">
		<li style="list-style:circle;"><strong>Global Tech Pvt Ltd</strong> (June 2008 to 2010)</li>
        <li>as  Jr. Software Engineer</li>
        <br />
        <li><strong>Job Profile:</strong></li>
        <li>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.  but also the leap into electronic typesetting, remaining essentially unchanged.</li>
        </ul>
        <p style="font-size:14px;"><A name="education"><strong>Education</strong></A></p>
        <ul style="color:#663399; font-size:11px;">
        <li>UG: B.tech(Electronics) from Delhi University in 2006</li>
        <li>PG: None<br /></li>
        <br />
        </ul>
        <p style="font-size:14px;"><A name="authorization"><strong>Work Authorization</strong></A></p>
        <ul style="color:#663399; font-size:11px;">
        <li>Country: India</li>
        <li>Employment Status: Full Time</li>
        <li>Job Type: Permanent</li>
        <li>Country: India</li>
        <li>Category: General</li>
        <br />
        </ul>
        <p style="font-size:14px;"><A name="candidate"><strong>Candidate Resume</strong></A></p>
        <div style="width:700px; border:8px solid #FFCCCC; height:1000px;">
        <img src="images/resume.png" />
        </div><br />
        <a href="#top" style="float:right;"><strong>^</strong> Back to Top</a>
        <div>
	<a href="#"><img src="images/download.png" border="none" title="Download Resume" /></a>
    <a href="#"><img src="images/save.png" border="none" title="Save Resume"/></a>
    <a href="#"><img src="images/email.png" border="none" title="Send Email"/></a>
    <a href="#"><img src="images/print.png" border="none" title="Print Resume"/></a>
    <a href="#"><img src="images/forward.png" border="none" title="Forward Resume"/></a>
    
    </div>
    </div>
    </div>
<!-- Footer starts from here -->
<?php include "includes/footer.php";?>
<!-- Footer ends here -->
</div>
</body>
</html>
