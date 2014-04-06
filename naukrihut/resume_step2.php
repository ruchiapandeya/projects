<?php 
session_start();
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
</style>

<!--Auto cmplete for location js  css starts here-->
<script language="javascript" type="text/javascript" src="actb.js"></script>
<script language="javascript" type="text/javascript" src="common.js"></script>
<script type="text/javascript">
var ploc=new Array(<?php while($row_city=mysql_fetch_array($sql_city)){?>
<?php echo "'".$row_city[city]."'";?><?php $i_city=$i_city+1;if($i_city!=$nume_city){echo ", ";};}?>);
</script>
<!--Auto complete for location js & css ends here-->


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
                    //message: "Please enter your Area of Specialization the Required field"
                });
                jQuery("#ValidField").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter your Area of Specialization the Required field"
                });
				jQuery("#ValidField1").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter your University Name in the Text Box."
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

</head>
<!--[if IE 7]><body class="ie7"><![endif]-->
<body>
<!-- Header starts from here -->
<?php include "includes/header.php";?>
<!--header ends here-->
<!--content starts fron here-->
<div align="center"> 
<div id="content"> 
<div id="resume_post2" align="left">
    <p style="background-color:#FF9933; padding:3px 3px 3px 10px; margin-top:-1px;"><font color="#ffffff"><strong>Congratlations . Your account has been created.</strong></font></p>
    <p style="background:#CC99CC; padding:3px 3px 3px 10px; margin-top:-8px;"><font color="#ffffff"><strong>Now, to complete your profile, provide the information below. This is recommended. Some recruiters require this information. </strong></font></p>	
			
     
     
<form id="formID" class="formular" method="post" action="check_regis2.php" enctype="multipart/form-data">
<br />
<dl><dt style="width:300px; margin-left:-70px;"><h4>Education Details<font size="-3">Please list your areas of study</font> </h4></dt>
	<dt>
		<label for="firstname"><font color="#FF6600" style="font-size:15px">* </font>Basic/Graduation<strong> :</strong></label>
	</dt>
	<dd style="padding-top:8px;">
		<input type="text" id="suggest1" name="graduation" size="30" /><p id="para">(Course)</p>
	</dd>
    
	<dd style="padding-top:10px;">
		<input type="text" id="suggest3" name="university" size="30" /><p id="para">(University)</p>
	</dd>
    <dd style="padding-top:10px;">
		<input type="text" id="graduate_in" name="graduate_in" size="30" /><p id="para">(Year of Graduation)</p>
	</dd>
    <dt>
		<label for="firstname"><font color="#FF6600" style="font-size:15px"></font>Post Graduation<strong> :</strong></label>
	</dt>
	<dd style="padding-top:8px;">
		<input type="text" id="suggest2" name="pg" size="30" /><p id="para">(Course)</p>
	</dd>
    <dt>
		<label for="firstname"><font color="#FF6600" style="font-size:15px"></font>Doctorate/Phd<strong> :</strong></label>
	</dt>
	<dd style="padding-top:8px;">
		<input type="text" id="suggest4" name="phd" size="30" />
	</dd>
    <dt>
		<label for="firstname"><font color="#FF6600" style="font-size:15px"></font>Course 1:<strong> :</strong></label>
	</dt>
	<dd style="padding-top:8px;">
		<input type="text" id="course1" name="course1" size="30" />
	</dd>
    
	<!--<dd style="padding-top:10px;">
		<input
			name="jobid"
			id="jobid"
			type="text"
            size="30"
             /><p id="para">(University)</p>
	</dd>
    <dd style="padding-top:10px;">
		<input
			name="jobid"
			id="jobid"
			type="text"
            size="30"
             /><p id="para">(Year of Graduation)</p>
	</dd>-->
   
  	
	
	
  	
  	
    <dd id="list-box" style="padding:4px 0px 0px 8px;"><a href="javascript:;" onclick="javascript:collapse1.slidedown();collapse1.slideup();collapse2.slideup();collapse3.slideup();">Add Other Qualifications</a>
    
    <dt id="line_grey"></dt>
    <dt style="width:400px; margin-left:-70px;"><h4>Desired Job</h4></dt>
	
    <dt style="width:180px;">
		<label for="name"> &nbsp;&nbsp;&nbsp;&nbsp;Preferred Work Location<strong> :</strong></label>
	</dt>
    <dd style="width:240px;">
    		
  			<input name="prefered_location" type="text" id="prefered_location"/ size="30">
    </dd>
    <dt>
	
    <dt><label for="location"><font color="#FF6600" style="font-size:15px">* </font>Job Type<strong> :</strong></label></dt>
	<dd id="list-box">
    <select name="job_type" id="ValidSelection" style="widows:150px;">
  <option value="">Select</option>
  <option value="Permanent" >Permanent</option>
  <option value="Temporary" >Temporary</option>
  <option value="Contract Basis">Contract Basis</option>
  </select>
        	
	</dd>
    <dt style="padding-top:10px;">
		<label for="contact"> &nbsp;&nbsp;&nbsp;&nbsp;Employment Status<strong> :</strong></label>
	</dt>
    <dd>
    		<dd id="align_div" style="width:300px;">
    		<input name="employment_status" type="radio" value="Full Time" checked="checked"/> Full Time&nbsp;&nbsp;&nbsp;&nbsp;<input name="employment_status" type="radio" value="Part Time" checked=""/> Part Time
    </dd>
    </dd>
	</dd>
	<dt id="line_grey"></dt>
    <dt style="width:200px; margin-left:-70px;"><h4>Personal Details </h4></dt>
    <dt><label for="industry"><font color="#FF6600" style="font-size:15px">* </font> Date of Birth<strong> :</strong></label></dt>
   	 <dd id="align_div" style="width:350px;">
    		<select name="dob_d" style="width:60px;" id="ValidSelection1">
<option value="">Day</option>
<option>0</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
</select>
            <select name="dob_m" style="width:90px;" id="ValidSelection2">
<option value="">Month</option>
<option>Jan</option>
<option>Feb</option>
<option>Mar</option>
<option>Apr</option>
<option>May</option>
<option>Jun</option>
<option>Jul</option>
<option>Aug</option>
<option>Sep</option>
<option>Oct</option>
<option>Nov</option>
<option>Dec</option>
</select>
            <select name="dob_y" style="width:60px;" id="ValidSelection3">
<option value="">Year</option>
<?php for($i=1942;$i<=2000;$i++){?>
	<option value="<?php echo $i;?>"><?php echo $i;?></option>
<?php }?>

 </select>
     <dt><label for="industry"><font color="#FF6600" style="font-size:15px">* </font>Gender<strong> :</strong></label></dt>
	<dd id="list-box">
		<select name="gender" style="width:115px;" id="ValidSelection6">
<option value="">Select</option>
<option>Male</option>
<option>Female</option>
 </select>
	</dd>
    
    <dt><label for="functionalArea"><font color="#FF6600" style="font-size:15px">* </font>Marital Status<strong> :</strong></label></dt>
	<dd id="list-box">
		<select name="marital_status" style="width:115px;" id="ValidSelection4">
<option value="">Select</option>
<option value="Single/Unmarried">Single/Unmarried</option>
<option value="Married">Married</option>
<option value="Widowed">Widowed</option>
<option value="Divorced">Divorced</option>
<option value="Separated">Separated</option>

 </select>
	</dd>
    <!--<dt>
		<label for="headline">&nbsp;&nbsp;&nbsp;&nbsp;Nationality<strong> :</strong></label>
	</dt>
    <dd>
			<input
			name="email"
			id="email"
			type="text"
            size="30" />
    </dd> -->
    <dt>
		<label for="keySkills">&nbsp;&nbsp;&nbsp;&nbsp;Mailing Address<strong> :</strong></label>
	</dt>
    <dd>
			<textarea name="mailing_address" cols="" rows="" style="width:210px"></textarea>
     
    </dd>
    <dt>
		<label for="headline">&nbsp;&nbsp;&nbsp;&nbsp;City<strong> :</strong></label>
	</dt>
    <dd>
			<input name="city" type="text" size="30" />
    </dd>
    <dt>
		<label for="headline">&nbsp;&nbsp;&nbsp;&nbsp;Pin Code<strong> :</strong></label>
	</dt>
    <dd>
			<input name="pincode" type="text" size="30" />
    </dd>
    <dt>
		<label for="headline">&nbsp;&nbsp;&nbsp;&nbsp;Alternate Email<strong> :</strong></label>
	</dt>
    <dd>
			<input name="alt_email" type="text" size="30" />
    </dd>
    <dt id="line_grey"></dt>
    <dt style="width:700px; margin-left:-70px;"><h4>Languages Known </h4></dt>
    <dt style="width:350px; ">
    <p style="margin-top:-3px;">Language</p>
    <input name="lang1" type="text" size="12" />
    
    		<select name="lang_prof1" style="width:100px;" >
          <option value="">Select</option>
          <option>Basic</option>
          <option>Intermediate</option>
          <option>Fluent</option>
          <option>Mother Tounge</option>
           </select>    
    		
            </dt>
    <dt id="checkbox" style="width:250px; margin-left:320px; margin-top:-27px;"><input name="lang_read1" type="checkbox" value="yes" size="30" />
    <font color="#663399" style="padding-right:30px;">Read</font><input name="lang_write1" type="checkbox" value="yes" size="30" />
    <font color="#663399" style="padding-right:30px;">Write</font><input name="lang_speak1" type="checkbox" value="yes" size="30" />
    <font color="#663399">Speak</font><br /><br />       
    </dt>
    <br />
    <dt style="width:350px; ">
    
    <input name="lang2" type="text" size="12" />
    		<select name="lang_prof2" style="width:100px;" >
          <option value="">Select</option>
          <option>Basic</option>
          <option>Intermediate</option>
          <option>Fluent</option>
          <option>Mother Tounge</option>
           </select>    
    		
            </dt>
    <dt id="checkbox" style="width:250px; margin-left:320px; margin-top:-27px;"><input name="lang_read2" type="checkbox" value="yes" size="30" />
    <font color="#663399" style="padding-right:30px;">Read</font><input name="lang_write2" type="checkbox" value="yes" size="30" />
    <font color="#663399" style="padding-right:30px;">Write</font><input name="lang_speak2" type="checkbox" value="yes" size="30" />
    <font color="#663399">Speak</font><br /><br />       
    </dt>
    <br />
    <dt style="width:350px; ">
   
    <input name="lang3" type="text" size="12" />
    		<select name="lang_prof3" style="width:100px;" >
          <option value="">Select</option>
          <option>Basic</option>
          <option>Intermediate</option>
          <option>Fluent</option>
          <option>Mother Tounge</option>
           </select>    
    		
            </dt>
    <dt id="checkbox" style="width:250px; margin-left:320px; margin-top:-27px;"><input name="lang_read3" type="checkbox" value="yes" size="30" />
    <font color="#663399" style="padding-right:30px;">Read</font><input name="lang_write3" type="checkbox" value="yes" size="30" />
    <font color="#663399" style="padding-right:30px;">Write</font><input name="lang_speak3" type="checkbox" value="yes" size="30" />
    <font color="#663399">Speak</font><br /><br />       
    </dt>
    <br />
    <dt id="line_grey"></dt>
     <dt id="create_button" >
     <!--<input type="image" src="images/save_profile.png" name="submit" id="button_search"  style="margin-left:144px; margin-top:-10px;" width="200" />-->
     <input name="submit" type="image" src="images/save_profile.png" width="200" style="height:60px;" id="button_search" border="0" align="middle" />
	<!--<a href="resume_step3.html"><img src="images/save_profile.png" id="button_search"  style="margin-left:144px; margin-top:-10px;" width="200" border="none"/></a>-->
    </dt>
</dl>
</form> 	
</div>


  
<!-- Footer starts from here -->
<?php include "includes/footer.php";?>
<!-- Footer ends here -->
</div>
</body>
<script type="text/javascript">
var collapse1=new animatedcollapse("s1", 1000, false)
var collapse2=new animatedcollapse("s2", 1000, false)
var collapse3=new animatedcollapse("s3", 1000, false)

</script>
<script type="text/javascript">
	var menu=new menu.dd("menu");
	menu.init("menu","menuhover");
</script>


</html>
