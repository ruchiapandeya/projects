<?php 
@session_start();
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
</head>
<!--[if IE 7]><body class="ie7"><![endif]-->
<body>
<!-- Header starts from here -->
<?php include "includes/header.php";?>
<!--header ends here-->
<!--content starts fron here-->
<div align="center">
<div id="content"> 
	<div id="employers_image" align="left">
    	<h4 style="padding:20px 0px 0px 20px;">Aim to make recruitment <font color="#FF9900">Q</font>uick, <font color="#FF9900">E</font>asy 	 		and <font color="#FF9900">C</font>ost effective</h4>
        <img src="images/man.png" />
        	<ul id="list_item">
            	<li>Advertise your vacancy on the most cost effective job site</li>
                <li>Your job will live for four weeks</li>
                <li>No hidden costs, no hassle</li>
                <li>You can Auto-refreshed your job anytime</li>
                <li>Post a job in few simple steps and start getting response on the same day</li>   
        	</ul>
            <ul id="lists_item"><h4>Recruitment services include</h4>
            <li>Job Posting</li>
            <li>CV Database Search</li>
            <li>Online Applicant Tracking</li>
            <li>Branding</li>
            </ul>
	</div>
    <div id="employers_login" align="left">
    	<img src="images/login_box.png" style="margin-left:17px;" />
        <h4 id="employerslogin_box">Employer's Login</h4>
        		<form style="margin-left:80px;" action="check_rlogin.php" method="post" name="jobseeker_login" onsubmit="return 
             	check_jobseeker_login(event)" >
				<div class="flash-right-txt"  style="padding-top:14px; padding-bottom:3px;">User Name</div> 
				<input name="username" id="username" type="text" class="login-box" size="28"  />
				<div class="flash-right-txt" style="padding-top:10px; padding-bottom:3px;">Password</div> 
				<input name="password" id="password" type="password"  class="login-box" size="28" /> <br /> 
				<div class="flash-right-txt"><font size="1"><a href="forgot_password.php">Forgot Password</a> | <a href="new_employers.php">
                Register</a></font></div><br /><br />
                <!--<a href="employers_home.html"><img src="images/login_button.png" border="none" /></a>-->
                <a href="employers_home.php"><input name="recruiter_login" type="image" src="images/login_button.png" border="none"/></a>
                <p><strong>New Clients -</strong><a href="new_employers.php">Register Now</a></p>
				</form>
                <br />
                <div id="contact_info"><br />
                <p><strong>Contact Us</strong><br />
                <font color="#FF9900">Call:</font> 9999-331-331<br />
                <font color="#FF9900">Email:</font> info@naukrihut.com</p>
                </div>
    	</div>


<!-- Footer starts from here -->

<?php include "includes/footer.php";?>
<!-- Footer ends here -->
</div>
</body>
</html>
