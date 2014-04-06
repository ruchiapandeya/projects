<?php 
include_once ("userobj.php");
include_once ('config.php');
include_once ("logutil.php");
include_once "dbutil.php";
@session_start();
$user=$_SESSION['userObj'];

$sql_skil=mysql_query("select * from keywords");
$nume_skil=mysql_num_rows($sql_skil);
$i_skil=0;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<!-- date picker related style scripts -->
	<link rel="stylesheet" href="css/datepicker.css" type="text/css" />
    <script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/datepicker.js"></script>
    <script type="text/javascript" src="js/datepicker_eye.js"></script>
    <script type="text/javascript" src="js/datepicker_layout.js"></script>
<!--Auto cmplete for location js  css starts here-->
<script language="javascript" type="text/javascript" src="actb.js"></script>
<script language="javascript" type="text/javascript" src="common.js"></script>
<script type="text/javascript">
var skil=new Array(<?php while($row_skil=mysql_fetch_array($sql_skil)){?>
<?php echo "'".$row_skil[keyword]."'";?><?php $i_skil=$i_skil+1;if($i_skil!=$nume_skil){echo ", ";};}?>);
</script>
<!--Auto complete for location js & css ends here-->

 
<style type="text/css">

/* All form elements are within the definition list for this example */
body{background:#ffffff; font-family:Geneva, Arial, Helvetica, sans-serif; font-size:12px; line-height:25px;}


/*sliding css*/
#list{width:100%; height:auto;  float:left;}
            #form
            {
            	height:710px;
            	width:100%px;
				padding-left:20px;
				color:#663399;
				
            
            }
            #form fieldset
            {
            	padding:30px;
            	border:none;
            }      
            #form label
            {
            	display:block;
            	
            }      
           
            #form textarea
            {
            	display:block;
            	border:solid 1px #4d3a24;
            	width:100%;
            	margin-bottom:10px;
            }  
                          
            #contactLink
            {
            	height:20px;
            	width:110px;
				margin-top:-2px;
				margin-left:5px;
            	background-image:url(images/addrecord.png);
            	display:block;
            	cursor:pointer;
            }
            #messageSent
            {
            	color:#ffffff;
            	display:none;
            }
/*---scaler---*/




/*----BODY1 PANEL----*/
</style>

<!--Richtext javascript starts here-->
<script language="javascript" type="text/javascript" src="tiny_mce/tiny_mce.js"></script>
<script language="javascript" type="text/javascript">
  tinyMCE.init({
    theme : "advanced",
    mode: "exact",
    elements : "post_resume",
    theme_advanced_toolbar_location : "top",
    theme_advanced_buttons1 : "",
    theme_advanced_buttons2 : "link,unlink,anchor,separator,"
    +"cleanup,code,separator,sub,sup,charmap",
    theme_advanced_buttons3 : "",
    height:"350px",
    width:"500px",
	plugins : "table,save,advhr,advlink,emotions,iespell,insertdatetime,preview,zoom,media,searchreplace,contextmenu,paste,directionality,fullscreen",
		theme_advanced_buttons1_add_before : "save,newdocument,separator",
		theme_advanced_buttons1_add : "fontsizeselect",
		theme_advanced_buttons2_add : "separator,insertdate,inserttime,preview,zoom,separator,forecolor,backcolor",
		theme_advanced_buttons2_add_before: "cut,copy,paste,pastetext,pasteword,separator,search,replace,separator",
		theme_advanced_buttons3_add_before : "tablecontrols,separator",
		theme_advanced_buttons3_add : "emotions,iespell,media,advhr,separator,separator,ltr,rtl,separator,fullscreen",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		content_css : "example_word.css",
	    plugi2n_insertdate_dateFormat : "%Y-%m-%d",
	    plugi2n_insertdate_timeFormat : "%H:%M:%S",
		external_link_list_url : "http://127.0.0.1/tutorial/examples/example_link_list.js",
		external_image_list_url : "http://localhost/tutorial/examples/example_image_list.js",
		media_external_list_url : "http://localhost/tutorial/examples/example_media_list.js",
		file_browser_callback : "fileBrowserCallBack",
		paste_use_dialog : false,
		theme_advanced_resizing : true,
		theme_advanced_resize_horizontal : false,
		theme_advanced_link_targets : "_something=My somthing;_something2=My somthing2;_something3=My somthing3;",
		paste_auto_cleanup_on_paste : true,
		paste_convert_headers_to_strong : false,
		paste_strip_class_attributes : "all",
		paste_remove_spans : false,
		paste_remove_styles : false
    //file_browser_callback : 'myFileBrowser'
  });

  function myFileBrowser (field_name, url, type, win) {
    var fileBrowserWindow = new Array();
    fileBrowserWindow['title'] = 'File Browser';
    fileBrowserWindow['file'] = "my_cms_script.php" + "?type=" + type;
    fileBrowserWindow['width'] = '300';
    fileBrowserWindow['height'] = '400';
    tinyMCE.openWindow(fileBrowserWindow, { window : win, resizable : 'yes', inline : 'yes' });
    return false;
  }
</script>
<!--Richtext javascript ends here-->


</head>
  
 
 
	<body>
   

            <div id="list">
            <h3 style="color:#663399; margin-left:3.7%;"><u>Edit Records</u></h3>
                <div id="form" style="background:#FFFFFF;"> 
                <?php $sql=mysql_query("select * from new_record where id = '$_GET[id]'");
				while($row=mysql_fetch_array($sql)){
				?>
                    <form name="edit_record" method="post" action="update_record.php" enctype="multipart/form-data" >
                	<input type="hidden" name="id" value="<?php echo $row[id];?>" />
                  
                        <label for="Name">Name <font color="#CC3333">*</font></label>
                        <input id="name" name="name" value="<?php echo $row[name];?>" type="text"  size="30"/>
                        <label for="Email">Email address <font color="#CC3333">*</font></label>
                        <input id="email" name="email" value="<?php echo $row[email];?>" type="text" size="30" onkeyup="twitter.updateUrl(this.value)"/>
                        <div id="emailstatus" style="padding-left:235px;"></div>
                        <label for="Email">Current Location <font color="#CC3333">*</font></label>
                        <select style="width:114px;" name="country"> 
        <option value="">Select Country </option>
        <option value="India" <?php if($row[country]=="India"){echo "selected";}?>>India </option>
        <option value="UK" <?php if($row[country]=="U.K"){echo "selected";}?>>U.K </option>
        <option value="U.S.A" <?php if($row[country]=="U.S.A"){echo "selected";}?>>U.S.A </option> 
	    </select>-
                        <?php /*?><select name="city"  style="width:107px;">
			<option value="">Select City</option> 
        <optgroup label="Metropolitan Cities"> 
    	<option>Ahmedabad</option> 
    	<option>Bangalore</option> 
    	<option>Delhi</option> 
    	<option>Mumbai</option> 
        </optgroup> 
        <optgroup label="---Andhra Pradesh---"> 
    	<option>Anantapur</option> 
    	<option>Andhra Pradesh (Other)</option>  
    	<option>Itanagar</option> 
    	<option>Arunachal Pradesh (Other)</option> 
    	<option>Guwahati</option> 
    	<option>Assam (Other)</option> 
        </optgroup> 
        <optgroup label="---Bihar---"> 
    	<option>Arrah</option> 
    	<option>Bihar (Other)</option> 
        </optgroup> 
        <optgroup label="---Chhattisgarh---"> 
    	<option>Bhilai</option> 
    	<option>Chhattisgarh (Others)</option> 
        </optgroup> 
        <optgroup label="---Goa---"> 
    	<option>Panjim / Panaji</option> 
    	<option>Goa (Other)</option> 
        </optgroup> 
        <optgroup label="---Gujarat---"> 
    	<option>Ahmedabad</option> 
    	<option>Gujarat (Other)</option> 
        </optgroup> 
        <optgroup label="---Haryana ---"> 
    	<option>Faridabad</option> 
    	<option>Haryana (Other)</option> 
        </optgroup> 
        <optgroup label="---Himachal Pradesh---"> 
    	<option>Bilaspur</option> 
    	<option>Himachal Pradesh (Other)</option> 
        </optgroup> 
        <optgroup label="---Jammu and Kashmir---"> 
    	<option>Jammu</option> 
    	<option>Jammu and Kashmir (Other)</option> 
        </optgroup> 
        <optgroup label="---Jharkhand ---"> 
    	<option>Bokaro</option> 
    	<option>Jharkhand (Other)</option> 
        </optgroup> 
        <optgroup label="---Karnataka---"> 
    	<option>Bangalore</option> 
    	<option>Karnataka (Other)</option> 
        </optgroup> 
        <optgroup label="---Kerala---"> 
    	<option>Kochi (Cochin)</option> 
    	<option>Kerala (Other)</option> 
        </optgroup> 
        <optgroup label="---Madhya Pradesh ---"> 
    	<option>Bhopal</option> 
    	<option>Madhya Pradesh (Other)</option> 
        </optgroup> 
        <optgroup label="---Maharashtra---"> 
    	<option>Ahmadnagar</option> 
    	<option>Maharashtra (Other)</option> 
        </optgroup> 
        <optgroup label="---Manipur---"> 
    	<option>Imphal</option> 
    	<option>Manipur (Other)</option> 
        </optgroup> 
        <optgroup label="---Meghalaya---"> 
    	<option>Shillong</option> 
    	<option>Meghalaya (Other)</option> 
        </optgroup> 
        <optgroup label="---Mizoram ---"> 
    	<option>Aizawl</option> 
    	<option>Mizoram (Other)</option> 
        </optgroup> 
        <optgroup label="---Nagaland---"> 
    	<option>Dimapur</option> 
    	<option>Nagaland (Other)</option> 
        </optgroup> 
        <optgroup label="---Orissa ---"> 
    	<option>Bhubaneswar</option> 
    	<option>Orissa (Other)</option> 
        </optgroup> 
        <optgroup label="---Pondicherry---"> 
        </optgroup> 
        <optgroup label="---Punjab ---"> 
    	<option>Amritsar</option> 
    	<option>Punjab  (Other)</option> 
        </optgroup> 
        <optgroup label="---Rajasthan ---"> 
    	<option>Ajmer</option> 
    	<option>Rajasthan (Other)</option> 
        </optgroup> 
        <optgroup label="---Sikkim---"> 
    	<option>Gangtok</option> 
    	<option>Sikkim (Other)</option> 
        </optgroup> 
        <optgroup label="---Tamil Nadu---"> 
    	<option>Ambattur</option> 
    	<option>Tamil Nadu (Other)</option> 
        </optgroup> 
        <optgroup label="---Tripura ---"> 
    	<option>Agartala</option> 
    	<option>Tripura (Other)</option> 
        </optgroup> 
        <optgroup label="---Uttar Pradesh---"> 
    	<option>Allahabad</option> 
    	<option>Uttar Pradesh (Other)</option> 
        </optgroup> 
        <optgroup label="---Uttarakhand---"> 
    	<option>Dehradun</option> 
    	<option>Uttarakhand (Other)</option> 
        </optgroup> 
        <optgroup label="---West Bengal ---"> 
    	<option>Asansol</option> 
    	<option>West Bengal (Other)</option> 
        </optgroup> 
        <optgroup label="---Delhi---"> 
        </optgroup> 
        <optgroup label="---Jharkhand---"> 
    	<option>Bokaro</option> 
    	<option>Jharkhand (Other)</option> 
        </optgroup> 
    	</select><?php */?>
        				<input value="<?php echo $row[city];?>" name="city" type="text" size="10"/>
                        <label for="Email">Phone No(1) <font color="#CC3333">*</font></label>
                        <input value="<?php echo $row[phone1];?>" name="phone1" type="text" size="30"/>
                        <label for="JobType">Job Type </label>
                        <select name="status"  style="width:200px;">
						<option value="">-Select-</option> 
    					<option value="Permanent">Permanent</option> 
    					<option value="Contract">Contract</option>
                        <option value="Temporary">Temporary</option>
                        <option value="Part Time">Part Time</option>
                        <option value="Not Working">Not Working</option>
                        </select>
                        <label for="Email">Looking For <font color="#CC3333">*</font></label>
                        <select name="status"  style="width:200px;">
						<option value="">-Select-</option> 
    					<option value="Permanent">Interested for Contract Job</option> 
    					<option value="Contract">Interested for Permanent Job</option>
                        <option value="Temporary">Interested for Part-time Job</option>
                        <option value="Part Time">Interested for Temporary Job</option>
                        <option value="Not Working">Not Interested</option>
                        </select>
                        <label for="Email">Notice period  <font color="#CC3333">*</font></label>
                        <select name="status"  style="width:200px;">
						<option value="">One Week</option> 
    					<option value="Immediately Available">Two Week</option> 
    					<option value="Looking for change">Three Week</option>
                        <option value="Not looking for change">Four Week </option>
                        <option value="No Information">Immediately Available</option>
                        </select>
                        <label for="Email">Contract End Date </label>
                        <input name="title" type="text" size="10"/>
                        <input class="inputDate1" id="inputDate1" value="06/14/2008" /> 
                        <a href="#"><img class="inputDate1" id="datepicker_img1" src="images/calender.png" border="none"/></a>
                        <!--<label for="Email">Status <font color="#CC3333">*</font></label>
                        <select name="status"  style="width:107px;">
						<option value="">Select Figure</option> 
    					<option value="Immediately Available"<?php if($row[status]=="Immediately Available"){echo "selected";}?>>Immediately Available</option> 
    					<option value="Looking for change"<?php if($row[status]=="Looking for change"){echo "selected";}?>>Looking for change</option>
                        <option value="Not looking for change"<?php if($row[status]=="Not looking for change"){echo "selected";}?>>Not looking for change</option>
                        <option value="No Information"<?php if($row[status]=="No Information"){echo "selected";}?>>No Information</option>
                        </select>-->
                        <label for="Email">Visa Status <font color="#CC3333">*</font></label>
                        <input name="title" type="text" size="30"/>
                        <label for="Email">Title/ Designation <font color="#CC3333">*</font></label>   
                        <input value="<?php echo $row[title];?>" name="title" type="text" size="30"/>  
                        <label for="Email">Company Name <font color="#CC3333">*</font></label>
                        <input name="title" type="text" size="30"/>
                        <label for="Email">End Client <font color="#CC3333">*</font></label>
                        <input name="title" type="text" size="30"/>
                        <label for="Email">Total Experience <font color="#CC3333">--</font> Relevant Experience</label>
                        <select style="width:70px;" name="curr_currrency"> 
        				<option value="">-Min- </option>
        				<option value="1">1 </option>
        				<option value="2">2 </option>
        				<option value="3">3 </option> 
                        </select>-
                        <select name="curr_figure"  style="width:70px;">
						<option value="">-Max-</option> 
    					<option value="1">1 </option>
        				<option value="2">2 </option>
        				<option value="3">3 </option>
                        </select>
                        <label for="Email">Current Salary <font color="#CC3333">*</font></label> 
                        <select style="width:114px;" name="curr_currrency">  
        				<option value="">Currency </option>
        				<option value="Rupees"<?php if($row[curr_currrency]=="Rupees"){echo "selected";}?>>Rupees </option>
        				<option value="Dollar"<?php if($row[curr_currrency]=="Dollar"){echo "selected";}?>>Dollar </option>
        				<option value="Pound"<?php if($row[curr_currrency]=="Pound"){echo "selected";}?>>Pound </option> 
                        </select>-
                        <input id="curr_salary" value="<?php echo $row[curr_salary];?>" name="curr_salary" type="text" size="10"/>
                        <select name="curr_figure"  style="width:107px;">
						<option value="">Select Figure</option> 
    					<option value="per day"<?php if($row[curr_figure]=="per day"){echo "selected";}?>>per day</option> 
    					<option value="per month"<?php if($row[curr_figure]=="per month"){echo "selected";}?>>per month</option>
                        <option value="per anum"<?php if($row[curr_figure]=="per anum"){echo "selected";}?>>per anum</option> 
                        </select>
                        <label for="Email">Expected Salary <font color="#CC3333">*</font></label>
                        <select style="width:114px;" name="exp_currrency"> 
        				<option value="">Currency </option>
        				<option value="Rupees"<?php if($row[exp_currrency]=="Rupees"){echo "selected";}?>>Rupees </option>
        				<option value="Dollar"<?php if($row[exp_currrency]=="Dollar"){echo "selected";}?>>Dollar </option>
        				<option value="Pound"<?php if($row[exp_currrency]=="Pound"){echo "selected";}?>>Pound </option> 
                        </select>-
                        <input id="exp_salary" value="<?php echo $row[exp_salary];?>" name="exp_salary" type="text" size="10"/>
                        <select name="exp_figure"  style="width:107px;">
						<option value="">Select Figure</option> 
    					<option value="per day"<?php if($row[exp_figure]=="per day"){echo "selected";}?>>per day</option> 
    					<option value="per month"<?php if($row[exp_figure]=="per month"){echo "selected";}?>>per month</option>
                        <option value="per anum"<?php if($row[exp_figure]=="per anum"){echo "selected";}?>>per anum</option>
                        </select>
                        
                        <label for="Keyskills">Key Skills <font color="#CC3333">*</font><font color="#CC3333">*</font></label>
                        <input type="text" name="skills" id="skills" value="<?php echo $row[skills];?>" size="50" />
                        <label for="Resume">Upload Resume(1) <font color="#CC3333">*</font></label>
                        <input id="Resume" name="resume" type="file" />
                        <a href="javascript:parent.openLink('resume.php?id=<?php echo $row[id];?>&keyword=<?php echo $_GET[keyword];?>')">View Resume</a><br />
                        <input id="sendMail" type="submit" name="submit" value="Submit Record"  />
                   
                   </form>
                   <?php }?>
         </div></div>

<script type="text/javascript">
var obj = actb(document.getElementById('skills'),skil);
//setTimeout(function(){obj.actb_keywords = custom2;},10000);
</script>
</body>
</html>
