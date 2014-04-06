<?php include "config.php";?>
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
input{border:1px solid #9999FF; height:16px;}
.ie7 input{border:1px solid #9999FF; height:18px;}
select{border:1px solid #9999FF;}
textarea{border:1px solid #9999FF;}
#checkbox input{border:1px solid #ffffff;}
dl {
	font:normal 12px/15px Arial;
    position: relative;
    width: 350px;
}
dt {
    clear: both;
    float:left;
    width: 130px;
    padding: 4px 0 2px 100px;
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
.hints {
   	display: none;
    position: absolute;
    right: -400px;
    width: 200px;
    margin-top: -30px;
    border: 1px solid #c93;
    padding: 10px 12px;
    /* to fix IE6, I can't just declare a background-color,
    I must do a bg image, too!  So I'm duplicating the pointer.gif
    image, and positioning it so that it doesn't show up
    within the box */
    background: #ffc url(images/pointer.gif) no-repeat -10px 5px;
}
.ie7 .hints {
   	display: none;
    position: absolute;
    right: -400px;
    width: 200px;
    margin-top: -10px;
    border: 1px solid #c93;
    padding: 10px 12px;
    /* to fix IE6, I can't just declare a background-color,
    I must do a bg image, too!  So I'm duplicating the pointer.gif
    image, and positioning it so that it doesn't show up
    within the box */
    background: #ffc url(images/pointer.gif) no-repeat -10px 5px;
}

/* The pointer image is hadded by using another span */
.hints .hints-pointer {
    position: absolute;
    left: -10px;
    top: 5px;
    width: 10px;
    height: 19px;
    background: url(images/pointer.gif) left top no-repeat;
}
</style>
<!--Form Validation JavaScript Starts here-->
        <link rel="stylesheet" type="text/css" href="valid/jquery.validate.css" />
        <!--<link rel="stylesheet" type="text/css" href="valid/style.css" />-->
        <script src="valid/jquery-1.3.2.js" type="text/javascript">
        </script>
        <script src="valid/jquery.validate.js" type="text/javascript">
        </script>
        <script type="text/javascript">
            /* <![CDATA[ */
            jQuery(function(){
				jQuery("#suggest1").validate({
                    expression: "if (VAL) return true; else return false;",
                    //message: "Please enter the Required field"
                });
				jQuery("#suggest3").validate({
                    expression: "if (VAL) return true; else return false;",
                    //message: "Please enter the Required field"
                });
                jQuery("#ValidField").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Required field"
                });
				jQuery("#ValidField1").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please Type Your City Name in the Text Box."
                });
				jQuery("#ValidField2").validate({
                    expression: "if (VAL) return true; else return false;",
                    //message: "Please Type Your City Name in the Text Box."
                });
				jQuery("#ValidField3").validate({
				
                    expression: "if (VAL) return true; else return false;",
                    message: "Please type Landline Number in the Text Box."
					
                });
                jQuery("#ValidNumber").validate({
                    expression: "if (!isNaN(VAL) && VAL) return true; else return false;",
                    message: "Please enter a valid number"
                });
                jQuery("#ValidInteger").validate({
                    expression: "if (VAL.match(/^[0-9]*$/) && VAL) return true; else return false;",
                    message: "Please enter a valid integer"
                });
                jQuery("#ValidDate").validate({
                    expression: "if (!isValidDate(parseInt(VAL.split('-')[2]), parseInt(VAL.split('-')[0]), parseInt(VAL.split('-')[1]))) return false; else return true;",
                    message: "Please enter a valid Date"
                });
                jQuery("#ValidEmail").validate({
                    expression: "if (VAL.match(/^[^\\W][a-zA-Z0-9\\_\\-\\.]+([a-zA-Z0-9\\_\\-\\.]+)*\\@[a-zA-Z0-9_]+(\\.[a-zA-Z0-9_]+)*\\.[a-zA-Z]{2,4}$/)) return true; else return false;",
                    message: "Please enter a valid Email ID"
                });
                jQuery("#ValidPassword").validate({
                    expression: "if (VAL.length > 5 && VAL) return true; else return false;",
                    message: "Please enter a valid Password"
                });
                jQuery("#ValidConfirmPassword").validate({
                    expression: "if ((VAL == jQuery('#ValidPassword').val()) && VAL) return true; else return false;",
                    message: "Confirm password field doesn't match the password field"
                });
                jQuery("#ValidSelection").validate({
                    expression: "if (VAL == '') return false; else return true;",
                    //message: "Please make a selection"
                });
	            jQuery("#ValidSelection1").validate({
                    expression: "if (VAL == '') return false; else return true;",
                    //message: "Please make a selection"
                });
				jQuery("#ValidSelection2").validate({
                    expression: "if (VAL == '') return false; else return true;",
                    //message: "Please make a selection"
                });
				jQuery("#ValidSelection3").validate({
                    expression: "if (VAL == '') return false; else return true;",
                    //message: "Please make a selection"
                });
				jQuery("#ValidSelection4").validate({
                    expression: "if (VAL == '') return false; else return true;",
                    //message: "Please make a selection"
                });
				jQuery("#ValidSelection5").validate({
                    expression: "if (VAL == '') return false; else return true;",
                    //message: "Please make a selection"
                });
				jQuery("#ValidSelection6").validate({
                    expression: "if (VAL == '') return false; else return true;",
                    //message: "Please make a selection"
                });
				jQuery("#ValidSelection7").validate({
                    expression: "if (VAL == '') return false; else return true;",
                    //message: "Please make a selection"
                });
				jQuery("#ValidSelection8").validate({
                    expression: "if (VAL == '') return false; else return true;",
                    //message: "Please make a selection"
                });
				jQuery("#ValidSelection9").validate({
                    expression: "if (VAL == '') return false; else return true;",
                    //message: "Please make a selection"
                });
                jQuery("#ValidMultiSelection").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please make a selection"
                });
                jQuery("#ValidRadio").validate({
                    expression: "if (isChecked(SelfID)) return true; else return false;",
                    message: "Please select a radio button"
                });
                jQuery("#ValidCheckbox").validate({
                    expression: "if (isChecked(SelfID)) return true; else return false;",
                    message: "Please check atleast one checkbox"
                });
				jQuery('.AdvancedForm').validated(function(){
					alert("Use this call to make AJAX submissions.");
				});
            });
            /* ]]> */
        </script>
		
<!--Form Validation JavaScript Ends here-->

<!--Username validation js starts here-->
<SCRIPT type="text/javascript">
pic1 = new Image(16, 16); 
pic1.src = "loader.gif";

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
	$("#status").html('<div><font color="red">Username Must be Minimum <strong>4</strong> Characters Long.</font></div>');
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





<!--Email validation js starts here-->
<SCRIPT type="text/javascript">
pic1 = new Image(16, 16); 
pic1.src = "loader.gif";

$(document).ready(function(){

$("#email").change(function() { 

var eml = $("#email").val();

var iChars = "!#$%^&*()+=[ ]\\\';,{}|\:<>?$/\"";
//var iChars = /^[A-Za-z0-9_]{1,20}$/;
var s=1;
for (var i = 0; i < document.jobseeker1.email.value.length; i++) 
{
	//alert("noooooooooo");
	if (iChars.indexOf(document.jobseeker1.email.value.charAt(i)) != -1) 
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
var emailRegEx = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;

if (document.jobseeker1.email.value.search(emailRegEx) == -1) {
	$("#emailstatus").html('<font color="red">Please enter a valid email address.</font>');
	$("#username").removeClass('object_ok'); // if necessary
	$("#username").addClass("object_error");

}
else 
{	
	$("#emailstatus").html('<img src="loader.gif" align="absmiddle">&nbsp;Checking availability...');

	$.ajax(
	{  
   		type: "POST",  
    	url: "check_email.php",  
    	data: "email="+ eml,  
    	success: function(msg)
		{  
   			$("#emailstatus").ajaxComplete(function(event, request, settings)
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
</script>
<!--Email validation js ends here-->




<!--Auto cmplete for qualification js  css starts here-->

<script type="text/javascript">
var graduation = [
	<?php 
	$sql_grad=mysql_query("select * from graduation");
	$nume_grad=mysql_num_rows($sql_grad);
	$i_grad=0;
	while($row_grad=mysql_fetch_array($sql_grad)){
	echo '"'.$row_grad[graduation].'"';
	$i_grad=$i_grad+1;if($i_grad!=$nume_grad){echo ", ";};
	}
?>
];
var university = [
	<?php 
	$sql_uni=mysql_query("select * from university where active = 'Yes'");
	$nume_uni=mysql_num_rows($sql_uni);
	$i_uni=0;
	while($row_uni=mysql_fetch_array($sql_uni)){
	echo '"'.$row_uni[university].'"';
	$i_uni=$i_uni+1;if($i_uni!=$nume_uni){echo ", ";};
	}
?>
];

var pg = [
	<?php 
	$sql_pg=mysql_query("select * from pg");
	$nume_pg=mysql_num_rows($sql_pg);
	$i_pg=0;
	while($row_pg=mysql_fetch_array($sql_pg)){
	echo '"'.$row_pg[pg].'"';
	$i_pg=$i_pg+1;if($i_pg!=$nume_pg){echo ", ";};
	}
?>
];

var phd = [
	<?php 
	$sql_phd=mysql_query("select * from phd");
	$nume_phd=mysql_num_rows($sql_phd);
	$i_phd=0;
	while($row_phd=mysql_fetch_array($sql_phd)){
	echo '"'.$row_phd[phd].'"';
	$i_phd=$i_phd+1;if($i_phd!=$nume_phd){echo ", ";};
	}
?>
];

</script>
<!--<script type="text/javascript" src="autocmplte/jquery.js"></script>-->
<script type='text/javascript' src='autocmplte/jquery.autocomplete.js'></script>
<link rel="stylesheet" type="text/css" href="autocmplte/jquery.autocomplete.css" />
<script type="text/javascript">
$().ready(function() {
$("#suggest1").focus().autocomplete(graduation);
});
$().ready(function() {
$("#suggest2").focus().autocomplete(pg);
});
$().ready(function() {
$("#suggest3").focus().autocomplete(university);
});
$().ready(function() {
$("#suggest4").focus().autocomplete(phd);
});

</script>
<!--Auto cmplete for qualification js  css ends here-->




<script type="text/javascript" src="valid/password.js"></script> 

<script type="text/javascript">
function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 46 || charCode > 57))
            return false;

         return true;
      }

</script>


<!--Quick Contact Form validation Script Starts Here-->
<script type="text/javascript">
function check_jobseeker1(evt)
{
	var frm=document.jobseeker1;
	
	if( (frm.mobile.value=="") && ((frm.tele_std.value=="") && (frm.tele_no.value=="")) )
	{
		frm.mobile.style.borderColor='#D00';
		frm.tele_std.style.borderColor='#D00';
		frm.tele_no.style.borderColor='#D00';
		document.getElementById("show").style.display='block';
		return false;
	}
	if( (frm.mobile.value=="") && (frm.tele_std.value=="") )
	{
		frm.mobile.style.borderColor='#D00';
		frm.tele_std.style.borderColor='#D00';
		document.getElementById("show").style.display='block';
		return false;
	}
	if( (frm.mobile.value=="") && (frm.tele_no.value=="") )
	{
		frm.mobile.style.borderColor='#D00';
		frm.tele_no.style.borderColor='#D00';
		document.getElementById("show").style.display='block';
		return false;
	}
	else
	{
		return true;
		document.getElementById("show").style.display='block';
	}
}
</script>
<!--Quick Contact Form validation Script Ends Here-->

</head>
<!--[if IE 7]><body class="ie7"><![endif]-->
<body>
<!-- Header starts from here -->
<?php include "includes/header.php";?>
<!--header ends here-->
<!--content starts fron here-->
<div align="center">
<div id="content">
<div id="resume_post" align="left">
    <div id="purple">		
			<p align="center"><font color="#ffffff"><strong>Join us now for better career opportunities and growth. </strong></font></p>
    </div>   
     
<form id="jobseeker1" name="jobseeker1" class="formular" method="post" action="check_regis1.php" enctype="multipart/form-data" onsubmit="return check_jobseeker1(event)">
<br />
<dl><dt style="width:200px; margin-left:-70px;"><h4>New User Registration</h4></dt>
	<dt>
		<label for="firstname"><font color="#FF6600" style="font-size:15px">* </font>User Name/Email<strong> :</strong></label>
	</dt> 
	<dd>
		<input size="30" type="text" name="username" id="username"  onkeyup="twitter.updateUrl(this.value)" />
		<span class="hints">You may use your email ID as username. Username is Case-Sensitive. Use 4 to 100 characters<span class="hints-pointer">&nbsp;</span></span>
	</dd>
    <dd><span id="status" style="padding-left:235px;"></span></dd>
    
	<dt>
		<label for="lastname"><font color="#FF6600" style="font-size:15px">* </font>Password<strong> :</strong></label>
	</dt>
	<dd>
		<input size="30" type="password" name="password" id="ValidPassword" />
		<span class="hints">Password is Case-Sensitive. Use 6 to 40 characters<span class="hints-pointer">&nbsp;</span></span>	
	</dd>
    <dt>
		<label for="lastname"><font color="#FF6600" style="font-size:15px">* </font>Confirm Password<strong> :</strong></label>
	</dt>
	<dd>
		<input size="30" type="password" name="cfm_password" id="ValidConfirmPassword"  />
		<span class="hints">This must be the same as the Password enter above<span class="hints-pointer">&nbsp;</span></span>
	</dd>
    <dt id="line_grey"></dt>
    <dt style="width:400px; margin-left:-70px;"><h4>Contact Details <font size="-3">(Where Companies and Consultants will contact you.)</font></h4></dt>
	
    <dt>
		<label for="name"> &nbsp;&nbsp;&nbsp;&nbsp;Name<strong> :</strong></label>
	</dt>
    <dd id="list-box" style="width:240px;">
    		
  			<select id="title" name="title"  style="width:50px;">
			<option value="Mr..">Mr. </option> 
	    <option value="Ms.">Ms.</option> 
        <option value="Mrs.">Mrs</option> 
		</select>
       		<input style="width:157px;" type="text" name="name"/>
    </dd>
    <dt>
		<label for="email"><font color="#FF6600" style="font-size:15px">* </font>Email Address<strong> :</strong></label>
	</dt>
    <dd>
			<input size="30" type="text" name="email" id="email" onkeyup="twitter.updateUrl(this.value)" />
            
            <span class="hints">Use an existing email ID. Recruiters and Naukri Hut will contact you for jobs on this email.<span class="hints-pointer">&nbsp;</span></span>
    </dd>
    <dd><span id="emailstatus" style="padding-left:235px;"></span></dd>
    <dt><label for="location"><font color="#FF6600" style="font-size:15px">* </font>Current Location<strong> :</strong></label></dt>
	<dd id="list-box">
		<select style="width:202px;" name="current_location" id="ValidSelection">
    <option value="">Select City</option>
    <?php 
	$sql_state=mysql_query("select * from states");
	//$count_state=mysql_num_rows($sql_state);
	while($row_state=mysql_fetch_array($sql_state))
	{
	?>
    <optgroup label="---<?php echo $row_state[state];?>---">
    <?php 
	$sql_city=mysql_query("select * from cities where state='$row_state[state]'");
	while($row_city=mysql_fetch_array($sql_city))
	{?>
	<option><?php echo $row_city[city];?></option>
    <?php }?>
    </optgroup>
    <?php  }?>
	</select>
        <span class="hints">Please select your current Location.<span class="hints-pointer">&nbsp;</span></span>	
	</dd>
    
    <dt><label for="location"><font color="#FF6600" style="font-size:15px">* </font>Country<strong> :</strong></label></dt>
	<dd id="list-box">
		<select style="width:202px;" name="country">
    <?php 
	$sql_country=mysql_query("select * from country order by country");
	while($row_country=mysql_fetch_array($sql_country))
	{
	?>
    <option><?php echo $row_country['country'];?></option>
	<?php }?>
	</select>
        <span class="hints">Please select your current Location.<span class="hints-pointer">&nbsp;</span></span>	
	</dd>

    
    <dt>
		<label for="contact"><font color="#FF6600" style="font-size:15px">* </font>Contact No.<strong> :</strong></label>
	</dt>
    <dd>
    		<input name="mobile" id="mobile" type="text" size="30" />
            
             <span class="hints">At least one is mandatory. (Privacy assured.)<span class="hints-pointer">&nbsp;</span></span><br />
   
            <dd id="checkbox" style="margin-left:280px; width:200px; padding-top:5px;"><input
			name="contactInfo"
			id="contactInfo"
			type="checkbox"
            size="30" /><font color="#663399">SMS Job Alerts</font><br />
            <a href="#" style="font-size:9px">If you do not have a mobile, enter Landline no.</a>
    </dd>
	</dd>
	<dt id="line_grey"></dt>
   
     <dt style="width:500px; margin-left:-70px;"><h4>Current Professional Details <font size="-3">(Start building your profile with 	  		     Naukrihut.com.)</font></h4></dt>
     <dt><label for="industry"><font color="#FF6600" style="font-size:15px">* </font>Current Industry<strong> :</strong></label></dt>
	<dd id="list-box">
		<select name="industry"  id="ValidSelection6" style="width:215px;">
  <option value="">Select Current Industry</option>
	<?php 
	$sql_indus=mysql_query("select * from industry order by industry");
	while($row_indus=mysql_fetch_array($sql_indus))
	{
	?>
    <option value="<?php echo $row_indus['industry'];?>"><?php echo $row_indus['industry'];?></option>
	<?php }?>
  </select>
        <span class="hints">Select the one that best defines the sector your company is in. You may change this later.<span class="hints-pointer">&nbsp;</span></span>	
	</dd>
    <dt><label for="functionalArea"><font color="#FF6600" style="font-size:15px">* </font>Functional Area<strong> :</strong></label></dt>
	<dd id="list-box">
		<select name="fuctional_area" id="ValidSelection5" style="width:215px;" onChange="getRoles(this.value)">
  <option value="">Select Functional Area</option>
	<?php 
	$sql_fa=mysql_query("select * from functional_area order by functional_area");
	while($row_fa=mysql_fetch_array($sql_fa))
	{
	?>
    <option value="<?php echo $row_fa['functional_area'];?>"><?php echo $row_fa['functional_area'];?></option>
	<?php }?>
    </select>
        <span class="hints">Select the department where you work in, or the one that comes closest.<span class="hints-pointer">&nbsp;</span>
        </span>	
	</dd>
     <dt><label for="role"><font color="#FF6600" style="font-size:15px">* </font>Role<strong> :</strong></label></dt>
	<dd id="list-box">
		<div id="Rolediv"><select name="role" id="ValidSelection6" style="width:215px;" >
<option value="">Select Role</option>
	<?php 
	$sql_role=mysql_query("select * from role order by role");
	while($row_role=mysql_fetch_array($sql_role))
	{
	?>
    <option value="<?php echo $row_role['role'];?>"><?php echo $row_role['role'];?></option>
	<?php }?>
  </select></div>
	</dd>
	<dt><label for="role"><font color="#FF6600" style="font-size:15px">* </font>Job Type<strong> :</strong></label></dt>
	<dd id="list-box">
		<div id="Rolediv"><select name="role" id="ValidSelection6" style="width:215px;" >
		<option value="">Select Job Type</option>
		<option value="">Permanent</option>
		<option value="">Temporary</option>
		<option value="">Contract</option>
		<option value="">Part Time</option>
	
  </select></div>
	</dd>
    <dt><label for=""><font color="#FF6600" style="font-size:15px">* </font>Current Salary<strong> :</strong></label></dt>
    <dd id="list-box">
		<select name="lacs"  id="ValidSelection3">
  <option value="">Lacs</option>
  <?php $sal_count=0;
  		while($sal_count<=30){
  ?>
  <option value="<?php echo $sal_count;?> Lacs"><?php echo $sal_count;?></option>
  <?php $sal_count=$sal_count+1;
  }?>
  <option value="31">30+</option>

  </select> 
				<strong>-</strong>
                <select name="thousand"  id="ValidSelection4">
  <option value="">Thousands</option>
  <option value="0 thousands">0</option>
  <option value="5 thousands">5</option>
  <option value="10 thousands">10</option>
  <option value="15 thousands">15</option>
  <option value="20 thousands">20</option>
  <option value="25 thousands">25</option>
  <option value="30 thousands">30</option>
  <option value="35 thousands">35</option>
  <option value="40 thousands">40</option>
  <option value="45 thousands">45</option>
  <option value="50 thousands">50</option>
  <option value="55 thousands">55</option>
  <option value="60 thousands">60</option>
  <option value="65 thousands">65</option>
  <option value="70 thousands">70</option>
  <option value="75 thousands">75</option>
  <option value="80 thousands">80</option>
  <option value="85 thousands">85</option>
  <option value="90 thousands">90</option>
  <option value="95 thousands">95</option>

  </select>
                <p id="lacs" style="font-size:10px; color:#999999;"> In Lakhs Per Annum</p>             
	</dd>
     <dt><label for=""><font color="#FF6600" style="font-size:15px">* </font>Total Experience<strong> :</strong></label></dt>
     <dd id="list-box">
           <select name="year" id="ValidSelection1">
  <option value="">Year</option>
  <?php $exp_count=1;
  		while($exp_count<=30){
  ?>
  <option value="<?php echo $exp_count;?> years"><?php echo $exp_count;?></option>
  <?php $exp_count=$exp_count+1;
  }?>
  <option value="31">30+</option>
  </select>
                <strong>-</strong>
                <select name="month" id="ValidSelection2" >
  <option value="">Month</option>
  <option value="0 months">0</option>
  <option value="1 months">1</option>
  <option value="2 months">2</option>
  <option value="3 months">3</option>
  <option value="4 months">4</option>
  <option value="5 months">5</option>
  <option value="6 months">6</option>
  <option value="7 months">7</option>
  <option value="8 months">8</option>
  <option value="9 months">9</option>
  <option value="10 months">10</option>
  <option value="11 months">11</option>
  </select>             
	</dd>
    <dt>
		<label for="keySkills"><font color="#FF6600" style="font-size:15px">* </font>Key Skills<strong> :</strong></label>
	</dt>
    <dd>
			<textarea name="skills" id="ValidField" cols="" rows="" style="width:210px;"></textarea>
           <dd style="width:400px; padding-top:3px;"> <font id="size" color="#663399"><strong>Eg:</strong> Oracle, Unix, Ajax, Java, PHP etc.</font></dd>
    </dd>
    <dt>
		<label for="headline"><font color="#FF6600" style="font-size:15px">* </font>Resume Headline<strong> :</strong></label>
	</dt>
    <dd>
			<input size="30" type="text" name="resume_headline" id="resume_headline" />
            <span class="hints">Eg: B.Tech, MBA with 4 years exp. in Sales.<span class="hints-pointer">&nbsp;</span></span>
    </dd>
    <dt id="line_grey"></dt>
    <dt style="width:400px; margin-left:-70px;"><h4>Upload Resume <font size="-3">(Please upload your resume.)</font></h4></dt>
    <dt>
		<label for="headline"><font color="#FF6600" style="font-size:15px">* </font>Attach Resume<strong> :</strong></label>
	</dt>
    <dd id="new_input"><input name="resume" type="file" class="form" />
    <p id="size" style="font-size:11px; width:290px; margin-top:0px;">Max file size: 350 Kb (Formats Supported - doc, docx, rtf)</p>
    </dd><br />
    <dd>
    <p id="size" style="width:500px;">Please paste your resume below If you do not have a word document resume</p>
    <textarea name="resume_written" cols="" rows="15" style="width:430px;"></textarea>
    </dd>
    <dt id="line_grey"></dt>
    <dt style="width:400px; margin-left:-70px;"><h4>Mailer and Privacy Settings.</h4></dt>
    <dt id="checkbox" style=" margin-left:-70px; width:650px;"><input name="contactInfo" id="contactInfo" type="checkbox" size="30" />
    <font color="#663399" style="padding-right:30px;">SMS & Emails Job Alerts</font><input name="contactInfo" id="contactInfo" type="checkbox" size="30" />
 <font color="#663399" style="padding-right:30px;">Important Messages from Naukrihut.com</font><input name="contactInfo" id="contactInfo" type="checkbox" size="30" />
    <font color="#663399">Promotions/ Special Offer</font><br /><br /><input name="contactInfo" id="contactInfo" type="checkbox" size="30" />
    <font color="#663399" >I've read, understood & agree to the <a href="javascript:void(0)" onclick="window.open('terms.php',
'Job Description','width=900,height=900,menubar=yes,status=yes,scrollbars=yes')" style="color:#FF3300;">Terms and Conditions</a> of naukrihut.com</font><br />         
    </dt>
    <br />
    <dt id="line_grey"></dt>
     <dt id="create_button" >
	<!--<a href="resume_step2.html"><img src="images/create_account.png" id="button_search"  style="margin-left:144px; margin-top:-10px;" width="200" border="none"/></a>-->
    <input name="submit" type="image" src="images/create_account.png" width="200" style="height:80px;"  border="none" align="middle" />
    </dt>
</dl>
</form> 	
</div>

<!-- Footer starts from here -->
<?php include "includes/footer.php";?></div>
<!-- Footer ends here -->
    <script type="text/javascript">


      $( function () {
        
  twitter.screenNameKeyUp();
  $('#user_screen_name').focus();

      });
    

</script>

<script type="text/javascript">
var collapse1=new animatedcollapse("s1", 1000, false)
var collapse2=new animatedcollapse("s2", 1000, false)
var collapse3=new animatedcollapse("s3", 1000, false)

</script>


<script type="text/javascript">
var tooltipObj = new DHTMLgoodies_formTooltip();
tooltipObj.setTooltipPosition('right');
tooltipObj.setPageBgColor('#fffe94');
tooltipObj.setTooltipCornerSize(8);
tooltipObj.initFormFieldTooltip();
</script>


<script type="text/javascript">
	var menu=new menu.dd("menu");
	menu.init("menu","menuhover");
</script>

<script language="javascript" type="text/javascript">

function getXMLHTTP() { //fuction to return the xml http object
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
    }
	
	function getSub(categoryVal) {		
		var strURL="find.php?value="+categoryVal;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('catdiv').style.display='block'.innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}		
	}
	
	function getRoles(fa) {	
		var strURL="findRole.php?fa="+fa;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('Rolediv').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}		
	}
	
</script>

</body>
</html>
