<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Naukrihut</title>
<link rel="stylesheet" type="text/css" href="css/layout.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<style>
.ie7 #button_resume{margin-left:240px;}
</style>

</head>
<!--[if IE 7]><body class="ie7"><![endif]-->
<body>
<!-- Header starts from here -->
<?php include "includes/header.php";?>
<!--header ends here-->
<!--content starts fron here-->
<div align="center">
<div id="content" align="left">
	<div id="employers_image">
    	<h4 style="padding:20px 0px 0px 20px;">Aim to make your Search <font color="#FF9900">Q</font>uick, and <font color="#FF9900">E</font>asy. 	 	And find more jobs that suits your profile</h4>
        <img src="images/girl_image.png" />
        	<ul id="list_item">
            	<li>Advertise your vacancy on the most cost effective job site</li>
                <li>Your job will live for four weeks</li>
                <li>No hidden costs, no hassle</li>
                <li>You can Auto-refreshed your job anytime</li>
                <li>Post a job in few simple steps and start getting response on the same day</li> 
                <li>No hidden costs, no hassle</li>
                <li>You can Auto-refreshed your job anytime</li>  
        	</ul>
            <a href="resume_step1.php" style="margin-left:230px;"><img src="images/postresume.png" id="button_resume"  border="none"/></a>
	</div>
    <div id="employers_login">
    	<img src="images/login_box.png" style="margin-left:17px;" />
        <h4 id="employerslogin_box">Jobseeker's Login</h4>
        		<form style="margin-left:80px;" action="check_login.php" method="post" name="employes_login" onsubmit="return 
             	check_employes_login(event)" > 
				<div class="flash-right-txt"  style="padding-top:14px; padding-bottom:3px;">User Name</div> 
				<input name="login_user" id="login_user" type="text" class="login-box" size="28"  />
				<div class="flash-right-txt" style="padding-top:10px; padding-bottom:3px;">Password</div> 
				<input name="login_pwd" id="login_pwd" type="password"  class="login-box" size="28" />  
				<div class="flash-right-txt"><font size="1"><a href="forgot_password.php">Forgot Password</a> | <a href="resume_step1.php">
                Register</a></font><br /><br />
                <a href="employee_home.php"><img src="images/login_button.png" border="none" /></a>
                <p><strong>New to Naukrihut? -</strong><a href="resume_step1.php">Register Now</a></p>
				</form>
                <br />
                <div id="contact_info"><br />
                <p><strong>Contact Us</strong><br />
                <font color="#FF9900">Call:</font> 9999-331-331<br />
                <font color="#FF9900">Email:</font> info@naukrihut.com</p>
                </div>
    	</div>
	</div>
</div>
<!-- Footer starts from here -->
<?php include "includes/footer.php";?>
</div>
</body>
</html>
