<?php session_start();
include "config.php";
?>
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
	width:255px; height:30px; 
	background:url(images/top_bar1.png) no-repeat 0 0 #FFFFFF; color:#000000;
	float:left; margin-right:0px;}
#tops{
	width:700px; height:30px; margin-left:0px;
	background:url(images/top_bar1.png) no-repeat 0 0 #FFFFFF; color:#000000;
	float:left; margin-right:0px;}
#list{width:700px; height:800px; border:2px solid #FFCCCC; margin-left:270px;}
#buttons{width:700px; height:40px; background:#FFFFCC; margin-top:20px; border-bottom:1px solid #FFFF99;}
.ie7 #buttons{width:700px; height:30px; background:#FFFFCC; margin-top:5px; border-bottom:1px solid #FFFF99;}
#job_responses{width:255px; height:300px; float:left; border:2px solid #FFCCCC;}
#search_in{margin-left:-30px;}
.ie7 #search_in{margin-left:10px;}
#keyword{margin-left:-30px; padding-top:20px;}
.ie7 #keyword{margin-left:10px; padding-top:20px;}
#mid{padding:0px 20px 10px 0px;;}
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
-->
</style>
</head>
<!--[if IE 7]><body class="ie7"><![endif]-->
<body>
<!-- Header starts from here -->
<?php include "includes/header_employer.php";?> 
  <div align="center">
<div id="content" align="left" style="margin-right:-6px;">   
   
	<div id="job_responses">
		<div id="top" ><font color="#993399"><strong> &nbsp;&nbsp; Search Jobs</strong></font></div>
        <form  action="" method="post">
		<ul id="keyword">
        <li><p><strong>Keyword</strong></p>
            <p style="margin-top:-10px;"><input type="text" name="" id="" size="24" maxlength="32" /></p>
        </li>
        </ul>
        <ul id="search_in" >
        <li><p><strong>Search In</strong></p>
            	<p style="margin-top:-10px;"><select size="1" name="FunctionalArea" style="width:180px;">
        <option value="">Positon</option>  
        <option value="">Top Management- Non IT Jobs</option> 
        <option value="">Travel, Ticketing, Airlines</option> 
        <option value="">Anchoring/TV/Films/Production</option> 
        <option value="">Web, Graphic Design, Visualiser</option> 
        <option value="">Administration</option> 
        <option value="">Legal</option> 
        <option value="">Marketing Management</option> 
        <option value="">Doctors/Nurses/Medical Professional</option> 
        <option value="">Oil and Gas</option> 
        <option value="">Ticketing/Reservation/Travel Agent/Airlines</option> 
        <option value="">Financial Services / Stock Broking / Mutual Funds </option> 
    </select></option> 

        </li>
        <li><p><strong>Job Posted From</strong></p>
        <input class="inputDate1" id="inputDate1" value="06/14/2008" /> <a href="#"><img class="inputDate1" id="datepicker_img1" src="images/calender.png" border="none" /></a>
		<input class="inputDate2" id="inputDate2" value="06/14/2008" /> <a href="#"><img class="inputDate2" id="datepicker_img2" src="images/calender.png"  border="none"/></a><br />
       </li>
        </ul>
        <a href="#"><img src="images/response_serach.png"  style="margin-left:120px; margin-top:7px;" border="none" /></a>
     </form>  
	</div>
    <div id="list">
    <div id="tops"><strong style="color:#993399;">&nbsp;&nbsp; Jobs And Responses
            <a href="#" style="margin-left:440px;"><img src="images/delete_button.png"  title="Delete" border="none"/></a>
            <a href="#"><img src="images/refersh.png"  title="Refresh" border="none"/></a>
            </strong></div>
    
		<div id="buttons">
        	
    		<ul style="margin-left:350px;">
            
        	<li>
            	<font style="font-size:11px; color:#993399;">Posted By</font> 
                
                <select size="1" name="FunctionalArea" style="width:70px;">
        			<option value="">All </option> 
	    			<option value="">You</option> 
        			<option value="">Another</option> 
    			</select> 

        	</li>
			<li style="margin-left:186px; margin-top:-24px;">
           
               	<font style="font-size:11px; color:#993399;">Status</font>
                 <select> 
  					<option value="">All Jobs</option> 
  					<option>Active</option>
                    <option>Inactive</option> 
  					<option>Pending</option> 
  					<option>Saved</option> 
				</select>    
            
        	</li>
        </ul>
    </div>
    <ul id="title"><br />
    	<li><p><strong><font color="#FF9900">Job Title</font></strong></p></li>
        <li style="padding:0px 15px 0px 270px;"><p><strong><font color="#FF9900">Posted by</font></strong></p></li>
        <li style="padding:0px 0px 0px 100px;"><p><strong><font color="#FF9900">Posted On</font></strong></p></li>
        <li style="padding:0px 15px 0px 35px;"><strong><p><font color="#FF9900">Responses</font></p></strong></li>
    </ul>
    <?php 

$sql_job=mysql_query("select * from job_post where posted_by = '$_SESSION[employer_id]' and jobValidity != 'fail'");
while($job_list=mysql_fetch_array($sql_job)){
	$sql_apply=mysql_query("select job_id from applied_job where job_id = '$job_list[id]'");
	$sql_apply_count=mysql_num_rows($sql_apply);
	while($row_user=mysql_fetch_array($sql_apply)){
		$job_id=$row_user[job_id];
	}
	$sql_regis=mysql_query("select job_id from applied_job where job_id = '$job_list[id]' and apply_type != 'without registration'");
	$regis_count=mysql_num_rows($sql_regis);
	$sql_non_regis=mysql_query("select job_id from applied_job where job_id = '$job_list[id]' and apply_type = 'without registration'");
	$non_regis_count=mysql_num_rows($sql_non_regis);

?>
    <ul id="title">
       <li>
    	<p id="mid"  style="margin-left:0px;"><input type="checkbox" id="style"  style="margin-right:10px;" /><a href="#"><strong>Urgently Required .Net Developer</strong></a>	        <br />
        <font color="#000000" style="margin-top:-10px; font-size:10px; margin-left:32px"><?php echo $job_list['job_profile'];?></font><br />
        </p>
      </li>
      <li>
        <p style="padding:3px 0px 0px 20px;">Mr. Rupesh Kuashal</p>
      </li>
      <li>
        <p style="padding:3px 0px 0px 85px;"><?php echo $job_list['posted_date'];?></p>
      </li>
      <li>
        <p style="padding:3px 0px 0px 75px;"><a href="#"><?php echo $regis_count;?></a></p>
      </li>
    </ul>
    <?php }?>
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
