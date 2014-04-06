<?php include "config.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NaukriHut.com</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />

<script src="valid/jquery-1.3.2.js" type="text/javascript"></script>
		
<!--Username validation js starts here-->
<SCRIPT type="text/javascript">
pic1 = new Image(16, 16); 
pic1.src = "loader.gif";



$(document).ready(function(){

$("#email").change(function() { 

var em = $("#email").val();

if(em.length < 4){
	$("#status").html('<font color="red">Email Must be Minimum <strong>4</strong> Characters Long.</font>');
	$("#email").removeClass('object_ok'); // if necessary
	$("#email").addClass("object_error");

}
else 
{	
	$("#status").html('<img src="loader.gif" align="absmiddle">&nbsp;Checking availability...');

	$.ajax(
	{  
   		type: "POST",  
    	url: "check_email.php",  
    	data: "email="+ em,  
    	success: function(msg)
		{  
   			$("#status").ajaxComplete(function(event, request, settings)
			{ 
				if(msg == 'OK')
				{ 
       				$("#email").removeClass('object_error'); // if necessary
					$("#email").addClass("object_ok");
					$(this).html('&nbsp;<img src="accepted.png" align="absmiddle"> <font color="Green"> Available </font>  ');
				}  
				else  
				{  
					$("#email").removeClass('object_ok'); // if necessary
					$("#email").addClass("object_error");
					$(this).html(msg);
				}
   			});
		} 
   	}); 
}

});

});







$(document).ready(function(){

$("#username").change(function() { 

var usr = $("#username").val();

var iChars = "!#$%^&*()+=[ ]\\\';,{}|\:<>?$/\"";
//var iChars = /^[A-Za-z0-9_]{1,20}$/;
var s=1;
for (var i = 0; i < document.jobseeker1.username.value.length; i++) 
{
	//alert("noooooooooo");
	if (iChars.indexOf(document.jobseeker1.username.value.charAt(i)) != -1) 
	{
		s=s+1;
		//alert ("Your username has special characters. \nThese are not allowed.");
		msg = 'NO';
		//return false;
	}else{
		//alert("hiiii");
		msg = 'YES';
	}
	
}

//if(s>1){alert("yes");}else{alert("no");}

if(usr.length < 4){
	$("#status").html('<font color="red">Username Must be Minimum <strong>4</strong> Characters Long.</font>');
	$("#username").removeClass('object_ok'); // if necessary
	$("#username").addClass("object_error");

}
else if(s>1){
	$("#status").html('<font color="red">Special Characters Other Than (Hyphen Underscore Dot @) Are Not Allowed.</font>');
	$("#username").removeClass('object_ok'); // if necessary
	$("#username").addClass("object_error");
}
else 
{	
	$("#status").html('<img src="loader.gif" align="absmiddle">&nbsp;Checking availability...');

	$.ajax(
	{  
   		type: "POST",  
    	url: "check.php",  
    	data: "username="+ usr,  
    	success: function(msg)
		{  
   			$("#status").ajaxComplete(function(event, request, settings)
			{ 
				if(msg == 'OK')
				{ 
       				$("#username").removeClass('object_error'); // if necessary
					$("#username").addClass("object_ok");
					$(this).html('&nbsp;<img src="accepted.png" align="absmiddle"> <font color="Green"> Available </font>  ');
				}  
				else  
				{  
					$("#username").removeClass('object_ok'); // if necessary
					$("#username").addClass("object_error");
					$(this).html(msg);
				}
   			});
		} 
   	}); 
}

});

});
</script>
<!--Username validation js ends here-->

</head>

<body>
<div id="container">
	
<?php include("includes/header.php");?>

<!--navigation code start here-->
<ul class="menu" id="menu">
<li><a href="#" class="menulink">Home</a></li>
<li><a href="#" class="menulink">Advance Search</a></li>
<li><a href="#" class="active">Job Seekers</a></li>
<li><a href="resume-service.php" class="menulink">Resume Service</a></li>
<li><a href="education.php" class="menulink">Education</a></li>
<li><a href="suggestion.php" class="menulink">Suggestion</a></li>
	<li style="margin-left:17px;"><a href="#" class="menulink">Employer's Login</a></li>
<li><a href="#" class="menulink">New Employer</a></li>
</ul>

<!--navigation code end here-->
<!-- --------------------------MAin body start here--------------- -->
<div class="body-outer">
  <div id="regis-left">
  <div class="regis-header">
  Join us now for better career opportunities and growth.</div>
  <!--form row section start here-->
  
  
  <form id="jobseeker1" name="jobseeker1" class="formular" method="post" action="check_regis1.php" enctype="multipart/form-data" onsubmit="return check_jobseeker1(event)">
   <div class="regis-row1-outer">
  <h2>New User Registration</h2>
 <div class="regis-rows">
  <div class="regis-row-col1">*User Name:</div>
  <div class="regis-row-col2"><input style="width:200px;" type="text" name="username" id="username"  onkeyup="twitter.updateUrl(this.value)" tooltipText="You may use your email ID as username. Username is Case-Sensitive. Use 4 to 100 characters" /> </div>
  </div>
  <div class="regis-rows">
  <div class="regis-row-col1">*Email:</div>
  <div class="regis-row-col2"><input style="width:200px;" type="text" name="email" id="email"  onkeyup="twitter.updateUrl(this.value)" tooltipText="You may use your email ID as username. Username is Case-Sensitive. Use 4 to 100 characters" /> </div>
  </div>
<div id="status" style="padding-left:235px;"></div>
   </div>
   <input name="step1" type="image" src="images/create-account-btn.jpg" class="accountbtn"/>
   </form>
   <!--form row section end here-->
  </div>
<div id="regis-right">
<div class="regis-right-header">Naukri Hut helps you...</div>

<div id="hotjob-txt">
<ul>
<li>Keep your job search private</li>
<li>Control your privacy</li>
<li>Reach to over 35000 recruiters</li>
<li>Get Job Alerts in your inbox</li>
</ul></div>
<br />
</div>

<!-- body part end here  -->
</div>
</div>

<!-- footer part starts here -->
<?php include("includes/footer.php");?>
<!-- footer part ends here -->

<script type="text/javascript">
$( function () 
	{
		twitter.screenNameKeyUp();
		$('#user_screen_name').focus();
	});
</script>

</body>
</html>
