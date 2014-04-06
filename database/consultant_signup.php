<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Demo Contact Form - Submit Without Page Refresh using jQuery</title>
<link href="css/tutorial.css" media="all" type="text/css" rel="stylesheet">
<style>
.text-input{width:210px;}
</style>
</head>

<body>

<div id="contact_form"><br />
<p align="center" style="color:#F00;"><?php if($_GET[act]=="1"){echo "Email Already registered. Please try again.";}?></p>
<br /><br />
  <form name="contact" method="post" action="insert_consultant_record.php">
    <fieldset>
      <label for="email" id="name_label">Name<font color="#CC3300">*</font></label>
      <input type="text" name="name" id="name" size="30" value="" class="text-input" />
      <label for="email" id="email_label">User Name<font color="#CC3300">*</font></label>
      <input type="text" name="email" id="email" size="30" value="" class="text-input" />  
      <label for="password" id="password_label">Password<font color="#CC3300">*</font></label>
      <input type="password" name="password" id="password" size="30" value="" class="text-input" />
      <label for="repassword" id="repassword_label">Re Password<font color="#CC3300">*</font></label>
      <input type="password" name="repassword" id="repassword" size="30" value="" class="text-input" />
      <label for="pjone" id="company_label">Company.<font color="#CC3300">*</font></label>
      <input type="text" name="company" id="company" size="30" value="" class="text-input" />
      <label for="pjone" id="city_label">City.<font color="#CC3300">*</font></label>
     <select name="city"  style="width:107px;" id="city">
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
   	</select> <font id="country"><strong>Country: India</strong></font> 
<label for="pjone" id="phone_label">Phone No.<font color="#CC3300">*</font></label>
      <input type="text" name="phone" id="phone" size="30" value="" class="text-input" /> <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
      <input type="image" src="images/login_admin.png" class="button" style="margin-left:45%;" />
     
    </fieldset>
  </form>
 
</div>
</body>
</html>
