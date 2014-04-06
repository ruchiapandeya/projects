<?php 
session_start();
include "config.php";
include_once("login_check.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/layout.css" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<style>
#company_logo{ float:right; margin-top:-55px; border:1px solid #999999;}

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
	margin-left:300px;
	padding:10px 0px 10px 0px;
}

.ie7 #tnt_pagination {
	display:block;
	text-align:left;
	height:22px;
	line-height:21px;
	clear:both;
	padding-top:3px;
	font-family:Arial, Helvetica, sans-serif;
	font-size:12px;
	font-weight:normal;
	margin-left:300px;
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
#jobs_bar{
	width:970px; height:20px; margin-top:-0px; 
	background:url(images/top_bar1.png) 0 0 #FFFFFF; color:#000000;
	margin-right:-2px;
	border:1px solid #FFCCCC;
	
	}
	
.ie7 #jobs_bar{
	width:962px; height:20px; margin-top:10px; 
	background:url(images/top_bar1.png)  0 0 #FFFFFF; color:#000000;
	float:right; margin-right:-3px;
	border:1px solid #FFCCCC;
	padding-right:10px;
	}
#edit_profile{
	width:972px; height:auto; margin-top:0px; 
	border:1px solid #FFCCCC;
	margin-top:10px;
	background-color:#FFFFFF;
	margin-left:2px;
	}
.ie7 #edit_profile{
	width:972px; height:auto; margin-top:0px; 
	border:1px solid #FFCCCC;
	margin-top:-0px;
	background-color:#FFFFFF;
	margin-left:2px;
	}
h3{color: #660099;}
#employee li
{
	list-style:url(images/purple_arrow.png);
	margin-left:20px; margin-top:0px;
	
}
.ie7 #employee li
{
	list-style:url(images/purple_arrow.png);
	margin-left:20px; padding-bottom:10px;
	
}
.ie7 #employee_home{
width:700px;
height:auto;
margin-left:230px;
margin-top:-550px;
}
#employee_home{
width:700px;
height:auto;
margin-left:230px;
margin-top:-500px;
}
#preview{width:973px; height:2100px;}
.ie7 #preview{width:973px; height:2560px;}
#display_box{width:220px; height:135px;  margin-top:0px; margin-right:0px; float:right; border:1px solid #FFCCCC;}
.ie7 #display_box{width:220px; height:135px;  margin-top:0px; margin-right:0px;  border:1px solid #FFCCCC;}
#title{background-color:#CC99CC; width:255px; margin-left:-40px; margin-top:-12px;}
.ie7 #title{background-color:#CC99CC; width:255px; margin-left:-40px; margin-top:0px;}
#line_margin{margin-left:150px; margin-top:-30px; color:#CC66CC;}
.ie7 #line_margin{margin-left:150px; margin-top:-18px; color:#CC66CC;}
#my_profile{margin-top:-30px;}
.ie7 #my_profile{margin-top:-60px;}
-->
</style>
</head>
<!--[if IE 7]><body class="ie7"><![endif]-->
<body>
<!-- Header starts from here -->
<?php include "includes/header.php";?>
<!--header ends here-->
<!--content starts fron here-->
<?php 
$sql=mysql_query("select * from jobseeker where username = '$_SESSION[jobseeker_username]'");
while($row=mysql_fetch_array($sql))
{
?>
<div align="center">
<div id="content">    
	<div id="preview" align="left">
    <img src="images/preview_resume.png"  style="margin-top:-20px;"/><h2 style="margin-top:-50px; margin-left:80px;">&nbsp; Your Profile Details</h2>
    <p style="margin-left:100px; margin-top:-10px; color:#FF9900;">Last Updated: 15 jun, 2011</p><p align="right" id="my_profile"><strong><a href="employee_home.php">My Profile</a></strong></p>
		<div>
			<p id="jobs_bar" align="left" style=" color:#663399;"> &nbsp;&nbsp;&nbsp;&nbsp;<img src="images/box.png" />&nbsp;<strong>Contact Details</strong></p>
            <div id="edit_profile">
            <br /><ul>
            <li style="list-style:none">
            	<p>Name: <p id="line_margin"><strong><?php echo $row['name'];?> </strong></p></p>
            	<p>Email: <p id="line_margin"><strong><?php echo $row['email'];?> </strong></p></p>
                <p>Country: <p id="line_margin"><strong><?php echo $row['country'];?></strong></p>
                <p>City:  <p id="line_margin"><strong><?php echo $row['city'];?></p></strong> </p>
                <p>Mobile: <p id="line_margin"><strong><?php echo $row['telephone'];?></strong></p> </p>
                <p>Landlin: <p id="line_margin"><strong><font color="#FF9900">Not Mentioned</font></strong></p></p>
                <p><a href="resume_step1.php"><font color="#FF9900"><u>Edit This Section</u></font></a></p>
            </li>
            </ul>
            
            </div>
        </div>
        <div>
			<p id="jobs_bar" align="left" style=" color:#663399;"> &nbsp;&nbsp;&nbsp;&nbsp;<img src="images/box.png" />&nbsp;<strong>Current Professional Details</strong></p>
            <div id="edit_profile">
            <br /><ul>
            <li style="list-style:none">
            	<p>Current Industry: <p id="line_margin"><strong>Fresher/Trainee </strong></p></p>
            	<p>Functional Area: <p id="line_margin"><strong>Web / Graphic Design / Visualiser </strong></p></p>
                <p>Role: <p id="line_margin"><strong>Other</p> </strong></p>
                <p>Current Salary:  <p id="line_margin"><strong>0 Lac(s) 50 Thousand(s)</p></strong> </p>
                <p>Total Experience: <p id="line_margin"><strong>1 Year(s) 0 Month(s)</strong></p> </p>
                <p>Key Skills: <p id="line_margin"><strong>Adobe Cs3 Photoshope, Dreamweaver. Cs...</strong></p></p>
                <p>Resume Headline: <p id="line_margin"><strong>Two year Diploma in Advance Software ...</strong></p></p>
                <p><a href="resume_step1.php"><font color="#FF9900"><u>Edit This Section</u></font></a></p>
            </li>
            </ul>
            </div>
        </div>
        <div>
			<p id="jobs_bar" align="left" style=" color:#663399;"> &nbsp;&nbsp;&nbsp;&nbsp;<img src="images/box.png" />&nbsp;<strong>Education</strong></p>
            <div id="edit_profile">
            <br /><ul>
            <li style="list-style:none">
            	<p>Basic/Graduation: <p id="line_margin"><strong>B.Tesh </strong></p></p>
            	<p>University / Institute: <p id="line_margin"><strong>I.P University</strong></p></p>
                <p>Year: <p id="line_margin"><strong>2003</p> </strong></p>
                <p>Post Graduation:  <p id="line_margin"><strong>M.Tech</p></strong> </p>
                <p>University / Institute: <p id="line_margin"><strong>I.P University</strong></p> </p>
                <p>Year: <p id="line_margin"><strong>2009</strong></p></p>
                <p>Other Qualification: <p id="line_margin"><strong>Diploma in Advance Software Technology</strong></p></p>
                <p><a href="resume_step1.php"><font color="#FF9900"><u>Edit This Section</u></font></a></p>
            </li>
            </ul>
            </div>
        </div>
        <div>
			<p id="jobs_bar" align="left" style=" color:#663399;"> &nbsp;&nbsp;&nbsp;&nbsp;<img src="images/box.png" />&nbsp;<strong>Desired Job Details</strong></p>
            <div id="edit_profile">
            <br /><ul>
            <li style="list-style:none">
            	<p>Pref. Work Location : <p id="line_margin"><strong>Delhi/NCR </strong></p></p>
            	<p>Job Type: <p id="line_margin"><strong>Permanent</strong></p></p>
                <p>Employment Status: <p id="line_margin"><strong>Full Time</p> </strong></p>
                <p><a href="resume_step1.php"><font color="#FF9900"><u>Edit This Section</u></font></a></p>
            </li>
            </ul>
            </div>
        </div>
        <div>
			<p id="jobs_bar" align="left" style=" color:#663399;"> &nbsp;&nbsp;&nbsp;&nbsp;<img src="images/box.png" />&nbsp;<strong>Work Experience</strong></p>
            <div id="edit_profile">
            <ul>
            <li style="list-style:none">
            <br />
            <h4>Current Employer</h4>
            	<p>Company Name: <p id="line_margin"><strong>HCL Pvt. Ltd. </strong></p></p>
            	<p>Designation: <p id="line_margin"><strong>Developer</strong></p></p>
                <p>Duration: <p id="line_margin"><strong>May 2010 to till date</p> </strong></p>
                <p>job Profile:  <p id="line_margin"><strong>Developing and haldling Products Tools </p></strong> </p>
                <h4>Previous Employer(1)</h4>
                <p>Company Name: <p id="line_margin"><strong>IBM</strong></p> </p>
                <p>Designation: <p id="line_margin"><strong>Jr. Software Engineer</strong></p></p>
                <p>Duration: <p id="line_margin"><strong>Aug 2008 to May 2010</p> </strong></p>
                <p>job Profile: <p id="line_margin"><strong>Developing, designing, and maintaining the website for client</strong></p></p>
      			<p><a href="resume_step1.html"><font color="#FF9900"><u>Edit This Section</u></font></a></p>
            </li>
            </ul>
            </div>
        </div>
        <div>
			<p id="jobs_bar" align="left" style=" color:#663399;"> &nbsp;&nbsp;&nbsp;&nbsp;<img src="images/box.png" />&nbsp;<strong>Personal Details</strong></p>
            <div id="edit_profile">
            <br /><ul>
            <li style="list-style:none">
            	<p>Date of Birth: <p id="line_margin"><strong>22-08-1984 </strong></p></p>
            	<p>Gender: <p id="line_margin"><strong>Female</strong></p></p>
                <p>Category: <p id="line_margin"><strong>General</p> </strong></p>
                <p>Marital Status:  <p id="line_margin"><strong>Married</p></strong> </p>
                <p>Nationality : <p id="line_margin"><strong>Indian</strong></p> </p>
                <p>Mailing Address: <p id="line_margin"><strong>11/ Vishal Apartment Sector-9, Rohini, Delhi</strong></p></p>
                <p>City: <p id="line_margin"><strong>Delhi</strong></p></p>
                <p>Pin Code: <p id="line_margin"><strong>110085</strong></p> </p>
                <p>Alternate Email: <p id="line_margin"><strong><font color="#FF9900">Not Mentioned</font></strong></p></p>
                <h4>Language Known</h4>
                <p>Hindi: <p id="line_margin"><strong>Proficient (Read, Write, Speak)</strong></p></p>
                <p>English: <p id="line_margin"><strong>Proficient (Read, Write, Speak)</strong></p> </p>
                <p><a href="resume_step1.php"><font color="#FF9900"><u>Edit This Section</u></font></a></p>
            </li>
            </ul>
            </div>
        </div>
        <div>
			<p id="jobs_bar" align="left" style=" color:#663399;"> &nbsp;&nbsp;&nbsp;&nbsp;<img src="images/box.png" />&nbsp;<strong>Resume Details</strong></p>
            <div id="edit_profile">
            <br /><ul>
            <li style="list-style:none">
            	<p>Name: <p id="line_margin"><strong>Mrs. Ruchi Pandeya </strong></p></p>
            	<p>Date of Birth: <p id="line_margin"><strong>22-08-1984</strong></p></p>
                <p>Fathers Name: <p id="line_margin"><strong>Mr. Atul Pandeya</p> </strong></p>
                <p>Marrital Status: <p id="line_margin"><strong>Married </strong></p>
                <p>.....</p>
                <p><a href="#"><font color="#FF9900"><u>View</u></font></a> || <a href="#"><font color="#FF9900"><u>Download</u></font></a> || 
                <a href="#"><font color="#FF9900"><u>Upload New Resume</u></font></a> || <a href="#"><font color="#FF9900"><u>Delete</u></font></a></p>
            </li>
            </ul>
            </div>
        </div>
     </div>     
<?php }?>		
 
               
 	

<!-- Footer starts from here -->
<?php include "includes/footer.php";?>
<!-- Footer ends here -->
</div>
</body>
</html>

