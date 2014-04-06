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
<link rel="stylesheet" href="css/MenuMatic.css" type="text/css" media="screen" charset="utf-8" />
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
input{border:1px solid #9999FF; height:16px;}
.ie7 input{border:1px solid #9999FF; height:18px;}
select{border:1px solid #9999FF;}
textarea{border:1px solid #9999FF;}
#checkbox input{border:1px solid #ffffff;}
#drop_box input{border:1px solid #ffffff;}

.ie7 #sizes{
	margin-left:200px;
}

.ie7 #heading{font-size:11px; padding-top:6px;}
/* CSS Document */
#banner{background-image:url(images/banner.jpg); width:580px; height:188px; margin-left:169px; margin-top:-8px;}
#call{float:right; background-image:url(images/call.png); width:210px; height:110px; margin-top:-201px; margin-right:-6px; }
.ie7 #call{float:right; background-image:url(images/call.png); width:210px; height:110px; margin-top:-202px; margin-right:-8px;}
#top{
	width:577px; height:30px; 
	background:url(images/top_bar1.png) no-repeat 0 0 #FFFFFF; color:#000000;
	float:right; margin-right:0px;}
#border{width:577px; height:300px; border:1px solid #FFCCCC; margin-top:10px; margin-left:169px;}
.ie7 #mid{ margin-top:-6px;}
#posted_on{margin-left:350px; margin-top:-244px;}
.ie7 #posted_on{margin-left:350px; margin-top:-260px;}
#responses{margin-left:480px; margin-top:-246px;}
.ie7 #responses{margin-left:480px; margin-top:-261px;}
#count {margin-left:200px; margin-top:-186px;}
.ie7 #count {margin-left:200px; margin-top:-198px;}
#expiration{margin-left:390px; margin-top:-186px;}
.ie7 #expiration{margin-left:390px; margin-top:-199px;}
.ie7 #imgs{margin-top:-30px;}
#big_banner{background-image:url(images/banner_big.png); float:right; width:210px; height:597px; border:1px solid #FFCCCC; margin-right:0px; margin-top:-602px;}
.ie7 #big_banner{background-image:url(images/banner_big.png); float:right; width:210px; height:597px; border:1px solid #FFCCCC; margin-right:-220px; margin-top:-601px;}
/*----BODY1 PANEL----*/
</style>
</head>
<!--[if IE 7]><body class="ie7"><![endif]-->
<!--[if IE 8]><body class="ie8"><![endif]-->
<body>
<!-- Header starts from here -->

<?php include "includes/header_employer.php";?>
<!--header ends here-->
<!--content starts fron here-->
<div align="center"> 
<div id="content"> 
	<div id="employers_home" align="left">		
			<h5 id="heading" style="color:#663399; margin-top:-8px;">Welcome Rachit<strong><font color="#FF9933"> <?php echo $_SESSION['username'];?> </font></strong></h5>
          
<div id="banner"></div>
   
  	<ul id="nav">
		<li><a href="#"><font color="#9966CC" style="font-size:12px;"><strong><u>Administration</u></strong></font></a></li>
		<li><a href="#">Anabantoidei</a></li>
		<li><a href="#">Gobioidei</a></li>
        <li><a href="#">Gobioidei</a></li>
        <li><a href="#">Gobioidei</a></li>
	</ul>
    <ul id="nav" style="margin-top:190px;">
		<li><a href="#"><font color="#9966CC" style="font-size:12px;"><strong><u>Search Resume</u></strong></font></a></li>
		<li><a href="#">Anabantoidei</a></li>
		<li><a href="#">Gobioidei</a></li>
        <li><a href="#">Gobioidei</a></li>
        <li><a href="#">Gobioidei</a></li>
	</ul>
    <ul id="nav" style="margin-top:380px;">
		<li><a href="job_responses.html"><font color="#9966CC" style="font-size:12px;"><strong><u>Responses</u></strong></font></a></li>	
		<li><a href="#">Anabantoidei</a></li>
		<li><a href="#">Gobioidei</a></li>
        <li><a href="#">Gobioidei</a></li>
        <li><a href="#">Gobioidei</a></li>
	</ul>
    <ul id="nav" style="margin-top:570px;">
		<li><a href="#"><font color="#9966CC" style="font-size:12px;"><strong><u>Reports & MIS</u></strong></font></a></li>	
		<li><a href="#">Anabantoidei</a></li>
		<li><a href="#">Gobioidei</a></li>
        <li><a href="#">Gobioidei</a></li>
        <li><a href="#">Gobioidei</a></li>
	</ul>
		
 


 <div id="call"></div>
	<div id="border"> 
 <div id="top" ><font color="#993399"><strong>&nbsp;&nbsp; Recently Posted Jobs</strong></font></div>
 	<div>
    	<ul id="title">
    		<li><p id="mid"  style="margin-left:10px; padding-top:5px; color:#FF6600;"><strong>Job Title</strong></p></li>
        	<li><p id="mid"  style="margin-left:10px; padding:5px 50px 0px 280px; color:#FF6600;"><strong>Posted On</strong></p></li>
            <li><p id="mid"  style="margin-left:10px; padding-top:5px; color:#FF6600;"><strong>Responses</strong></p></li>
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
    		<li><p id="mid"  style="margin-left:10px; padding-top:5px; width:220px;"><a href="#"><?php echo $job_list['job_profile'];?></a></p></li>
        	<li><p id="mid"  style="margin-left:10px; padding:5px 50px 0px 115px;"><?php echo $job_list['posted_date'];?></p></li>
            <li><p id="mid"  style="margin-left:10px; padding-top:5px; padding-left:20px;"><a href="#"><?php echo $regis_count;?></a></p></li>
        </ul>
		<?php }?>
     
    <p align="right" style="padding-right:20px; margin-top:20px;"><a href="job_responses.php">View All</a></p>
 </div></div>
 <div id="border" style="margin-top:10px; height:284px;"> 
 <div id="top" ><font color="#993399"><strong>&nbsp;&nbsp; Account Utilization</strong></font></div>
 <div id="resdex">
    	<p id="mid"  style="margin-left:10px; padding-top:5px; color:#FF6600;"><strong>Resdex Usage</strong></p>
        <p id="mid"   style="margin-left:10px;"><a href="#">Emails</a></p>
        <p id="mid"   style="margin-left:10px;"><a href="#">CV Views</a></p>
        <p id="mid"   style="margin-left:10px;"><a href="#">CV Downloads</a></p>
        <p id="mid"   style="margin-left:10px;"><a href="#">Click To View</a></p>
        <p id="mid"   style="margin-left:10px;"><a href="#">Posted Jobs</a></p>     
    </div>
    <div id="count">
    	<p id="mid"  style="margin-left:10px; padding-top:5px; color:#FF6600;"><strong>Count</strong></p>
        <p id="mid"   style="margin-left:10px;"><font color="#FF9900"><strong>100 </strong></font> out of 2000</p>
        <p id="mid"   style="margin-left:10px;"><font color="#FF9900"><strong>50 </strong></font> out of 12000</p>
        <p id="mid"   style="margin-left:10px;"><font color="#FF9900"><strong>30 </strong></font> out of 1000</p>
        <p id="mid"   style="margin-left:10px;"><font color="#FF9900"><strong>10 </strong></font> out of 2000</p>
        <p id="mid"   style="margin-left:10px;"><font color="#FF9900"><strong>12 </strong></font> out of 100</p>     
    </div>
    <div id="expiration">
    	<p id="mid"  style="margin-left:10px; padding-top:5px; color:#FF6600;"><strong>Expiration</strong></p>
        <p id="mid"   style="margin-left:10px;">02-02-2012</p>
        <p id="mid"   style="margin-left:10px;">12-07-2012</p>
        <p id="mid"   style="margin-left:10px;">02-02-2012</p>
        <p id="mid"   style="margin-left:10px;">12-07-2012</p>
        <p id="mid"   style="margin-left:10px;">12-07-2012</p>     
    </div>
    <p style="margin-left:10px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br />Lorem Ipsum is simply dummy text of the printing and typesetting     industry dummy.</p>
 </div>
  </div>
 <a href="emp_jobposting.html"><img  src="images/job_banner.gif" id="imgs"  align="right" style="margin-right:0px; margin-top:-704px; border:none"/></a>
 <div id="big_banner"></div>
    
<!-- Footer starts from here -->
<?php include "includes/footer.php";?>
<!-- Footer ends here -->
</div>
</body>
</html>
