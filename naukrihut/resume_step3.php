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
.ie7 #align_div{margin-left:280px; border:none;}
#align_div input{border:1px solid #FFFFFF;}
#para{margin-left:220px; margin-top:-20px; width:200px;}
.ie7 #para{margin-left:360px; margin-top:-20px; width:200px;}
#bar_margin {background:#CC99CC; margin-top:-8px; padding:0px 0px 0px 10px;}
.ie7 #bar_margin {background:#CC99CC; margin-top:-13px; padding:0px 0px 0px 10px;}
</style>
</head>
<!--[if IE 7]><body class="ie7"><![endif]-->
<body>
<!-- Header starts from here -->
<?php include "includes/header.php";?>
<!--header ends here-->
<!--content starts fron here-->
<div align="center"> 
<div id="content">
<div id="resume_post3" align="left">
    
    <p style="background-color:#FF9933; padding:3px 3px 3px 10px; margin-top:-1px;"><strong>Your basic profile is now saved</strong></p>		
	<p id="bar_margin"><font color="#ffffff"><strong>Now, to complete your profile, provide the information below. This is recommended. Some recruiters require this information. </strong></font></p>
    <p style="color:#CC0000; padding-left:10px;">An email has been sent to your email account for for your Job Hut Account activation. Please confirm</p>
    
     
<form id="formID" class="formular" method="post" action="check_regis3.php" enctype="multipart/form-data">
<br />
<dl><dt style="width:200px; margin-left:-70px;"><h4>Work Experience </h4></dt>
	
    <dt id="line_grey"></dt>
    <dt style="width:400px; margin-left:-70px;"><h4>Current Employer</h4></dt>
	
    <dt style="width:180px;">
		<label for="name">Company Name<strong> :</strong></label>
	</dt>
    <dd style="width:240px;">
    		
  			<input name="curr_comp_name" id="" type="text" size="30" />
    </dd>
    <dt style="width:180px;">
		<label for="name">Designation<strong> :</strong></label>
	</dt>
    <dd style="width:240px;">
    		
  			<input name="curr_designation" id="" type="text" size="30" />
    </dd>
    <dt>
    <dt><label for="industry">Duration<strong> :</strong></label></dt>
   	 <dd id="align_div" style="width:550px;">
    		
            <select id="" name="curr_frm_month"  style="width:90px;">
        		<option value="">Month</option>
  <option value="Jan">Jan</option>
<option value="Feb">Feb</option>
<option value="Mar">Mar</option>
<option value="Apr">Apr</option>
<option value="May">May</option>
<option value="Jun">June</option>
<option value="Jul">July</option>
<option value="Aug">Aug</option>
<option value="Sep">Sep</option>
<option value="Oct">Oct</option>
<option value="Nov">Nov</option>
<option value="Dec">Dec</option>
            </select>
<select name="curr_frm_year" style="width:60px;"><option value="">Year</option>
<?php for($i=1942;$i<=2011;$i++){?>
	<option value="<?php echo $i;?>"><?php echo $i;?></option>
<?php }?>
</select> - 
<select name="curr_to_month" style="width:90px;"><option>Month</option>
<option>Jan</option>
<option>Feb</option>
<option>Mar</option>
<option>Apr</option>
<option>May</option>
<option>June</option>
<option>July</option>
<option>Aug</option>
<option>Sep</option>
<option>Oct</option>
<option>Nov</option>
<option>Dec</option> </select>

<select name="curr_to_year" style="width:100px;">
<option>Year</option>
<?php for($i=1942;$i<=2011;$i++){?>
	<option value="<?php echo $i;?>"><?php echo $i;?></option>
<?php }?>
</select> 
    <dt>
		<label for="keySkills">Job Profile<strong> :</strong></label>
	</dt>
    <dd>
			<textarea name="curr_job_profile"  cols="" rows="" style="width:280px;"></textarea>
     
    </dd>
      <dt id="line_grey"></dt>
    <dt style="width:400px; margin-left:-70px;"><h4>Previous Employer(1)</h4></dt>
	
    <dt style="width:180px;">
		<label for="name">Company Name<strong> :</strong></label>
	</dt>
    <dd style="width:240px;">
    		
  			<input name="prev_comp_name" id="" type="text" size="30" />
    </dd>
    <dt style="width:180px;">
		<label for="name">Designation<strong> :</strong></label>
	</dt>
    <dd style="width:240px;">
    		
  			<input name="prev_designation" id="" type="text" size="30" />
    </dd>
    <dt>
    <dt><label for="industry">Duration<strong> :</strong></label></dt>
   	 <dd id="align_div" style="width:550px;">
    		
            <select name="prev_frm_month" style="width:90px;">
  <option value="">Month</option>
  <option value="Jan">Jan</option>
<option value="Feb">Feb</option>
<option value="Mar">Mar</option>
<option value="Apr">Apr</option>
<option value="May">May</option>
<option value="Jun">June</option>
<option value="Jul">July</option>
<option value="Aug">Aug</option>
<option value="Sep">Sep</option>
<option value="Oct">Oct</option>
<option value="Nov">Nov</option>
<option value="Dec">Dec</option>
</select>
 
<select name="prev_frm_year" style="width:60px;">
<option>Year</option>
<?php for($i=1942;$i<=2011;$i++){?>
	<option value="<?php echo $i;?>"><?php echo $i;?></option>
<?php }?>
</select> - 

<select name="prev_to_month" style="width:90px;">
<option>Month</option>
<option>Jan</option>
<option>Feb</option>
<option>Mar</option>
<option>Apr</option>
<option>May</option>
<option>June</option>
<option>July</option>
<option>Aug</option>
<option>Sep</option>
<option>Oct</option>
<option>Nov</option>
<option>Dec</option> </select>

<select name="prev_to_year" style="width:60px;">
<option>Year</option>
<?php for($i=1942;$i<=2011;$i++){?>
	<option value="<?php echo $i;?>"><?php echo $i;?></option>
<?php }?>
</select> 
    <dt>
		<label for="keySkills">Job Profile<strong> :</strong></label>
	</dt>
    <dd>
			<textarea name="prev_job_profile" cols="" rows="" style="width:210px;"></textarea>
     
    </dd>
      <dt id="line_grey"></dt>
    <dt style="width:400px; margin-left:-70px;"><h4>Previous Employer(2)</h4></dt>
	
    <dt style="width:180px;">
		<label for="name">Company Name<strong> :</strong></label>
	</dt>
    <dd style="width:240px;">
    		
  			<input name="prev_comp_name2" id="" type="text" size="30" />
    </dd>
    <dt style="width:180px;">
		<label for="name">Designation<strong> :</strong></label>
	</dt>
    <dd style="width:240px;">
    		
  			<input name="prev_designation2" id="" type="text" size="30" />
    </dd>
    <dt>
    <dt><label for="industry">Duration<strong> :</strong></label></dt>
   	 <dd id="align_div" style="width:550px;">
    		
            <select name="prev_frm_month2" style="width:90px;">
  <option value="">Month</option>
  <option value="Jan">Jan</option>
<option value="Feb">Feb</option>
<option value="Mar">Mar</option>
<option value="Apr">Apr</option>
<option value="May">May</option>
<option value="Jun">June</option>
<option value="Jul">July</option>
<option value="Aug">Aug</option>
<option value="Sep">Sep</option>
<option value="Oct">Oct</option>
<option value="Nov">Nov</option>
<option value="Dec">Dec</option>
</select>
 
<select name="prev_frm_year2" style="width:60px;">
<option>Year</option>
<?php for($i=1942;$i<=2011;$i++){?>
	<option value="<?php echo $i;?>"><?php echo $i;?></option>
<?php }?>
</select>
 -
  <select name="prev_to_month2" style="width:90px;"><option>Month</option>
  <option>Jan</option>
<option>Feb</option>
<option>Mar</option>
<option>Apr</option>
<option>May</option>
<option>June</option>
<option>July</option>
<option>Aug</option>
<option>Sep</option>
<option>Oct</option>
<option>Nov</option>
<option>Dec</option> </select>

<select name="prev_to_year2" style="width:60px;">
<option>Year</option>
<?php for($i=1942;$i<=2011;$i++){?>
	<option value="<?php echo $i;?>"><?php echo $i;?></option>
<?php }?>
</select> 
    <dt>
		<label for="keySkills">Job Profile<strong> :</strong></label>
	</dt>
    <dd>
			<textarea name="prev_job_profile2" cols="" rows="" style="width:210px;"></textarea>
     
    </dd>
    <dt id="line_grey"></dt>
   
     <dt id="create_button" >
	<!--<a href="#"><img src="images/save_profile.png" id="button_search"  style="margin-left:144px; margin-top:10px;" width="200" border="none"/></a>-->
    <input name="submit" type="image" src="images/save_profile.png" width="200" style="height:60px;" id="button_search" border="0" align="middle" />
    </dt>
</dl>
</form> 	
</div>

<!-- Footer starts from here -->
 <?php include "includes/footer.php";?>  </div>
<!-- Footer ends here -->
</body>
</html>
