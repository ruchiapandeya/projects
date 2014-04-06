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
input{border:1px solid #9999FF; height:18px;}
select{border:1px solid #9999FF;}
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
</head>
<!--[if IE 7]><body class="ie7"><![endif]-->
<body>
<!-- Header starts from here -->
<?php include "includes/header.php";?>
<!--header ends here-->
<!--content starts fron here-->
<div align="center">
<div id="content"> 
<div id="new_employer" align="left">
    <div id="purple">		
			<p><font color="#Ffffff"><strong>Get started on your online recruitment process by getting your recruiter's account with Naukrihut.com. Please fill<br />in the minimum mandatory details in the form below to proceed. </strong></font></p>
    </div>   
     
<form id="form5"> 
<br />
<dl><dt style="width:200px; margin-left:-70px;"><h4>Account Information</h4></dt>
	<dt>
		<label for="firstname"><font color="#FF6600" style="font-size:15px">* </font>User Name/Email:</label>
	</dt>
	<dd>
		<input
			name="jobid"
			id="jobid"
			type="text"
            size="30"
             />
		<span class="hints">You may use your email ID as username. Username is Case-Sensitive. Use 4 to 100 characters<span class="hints-pointer">&nbsp;</span></span>
	</dd>
	<dt>
		<label for="lastname"><font color="#FF6600" style="font-size:15px">* </font>Password:</label>
	</dt>
	<dd>
		<input
			name="keyword"
			id="keyword"
			type="text"
            size="30" />
		<span class="hints">Password is Case-Sensitive. Use 6 to 40 characters<span class="hints-pointer">&nbsp;</span></span>	
	</dd>
    <dt>
		<label for="lastname"><font color="#FF6600" style="font-size:15px">* </font>Confirm Password:</label>
	</dt>
	<dd>
		<input
			name="keyword"
			id="keyword"
			type="text"
            size="30" />
		<span class="hints">This must be the same as the Password enter above<span class="hints-pointer">&nbsp;</span></span>
	</dd>
    <dt id="line_grey"></dt>
    <dt style="width:200px; margin-left:-70px;"><h4>Recruiter Information</h4></dt>
	
    <dt>
		<label for="lastname"><font color="#FF6600" style="font-size:15px">* </font>Company Name:</label>
	</dt>
    <dd>
			<input
			name="location"
			id="location"
			type="text"
            size="30" />
    </dd>
    <dt>
		<label for="lastname"><font color="#FF6600" style="font-size:15px">* </font>Contact Person:</label>
	</dt>
    <dd>
			<input
			name="location"
			id="location"
			type="text"
            size="30" />
    </dd>
    <dt><label for="year"><font color="#FF6600" style="font-size:15px">* </font>Industry Type:</label></dt>
	<dd id="list-box">
		<select id="" name=""  style="width:218px;">
			<option value="">Select </option> 
	    <option value="Accounting/Tax/Company Secretary/Audit">Accounting/Tax/Company Secretary/Audit</option> 
        <option value="Architecture, Interior Design, Naval Arch">Architecture, Interior Design, Naval Arch</option> 
        <option value="Production, Maintenance, Quality">Production, Maintenance, Quality</option> 
        <option value="Merchandising">Merchandising</option> 
        <option value="Corporate Planning, Consulting, Strategy">Corporate Planning, Consulting, Strategy</option> 
        <option value="Engineering Design, R&D">Engineering Design, R&D</option> 
        <option value="Export, Import">Export, Import</option> 
        <option value="Fashion, Garments, Merchandising">Fashion, Garments, Merchandising</option> 
        <option value="Guards, Security Services">Guards, Security Services</option> 
        <option value="Finance">Finance</option> 
        <option value="Insurance">Insurance</option> 
        <option value="Human Resource">Human Resource</option> 
        <option value="ITES/BPO/KPO, Customer Service, Operations">ITES/BPO/KPO, Customer Service, Operations</option> 
        <option value="Advertising, PR, Events">Advertising, PR, Events</option> 
        <option value="Sales Management, Business Development">Sales Management, Business Development</option> 
        <option value="Site Engg., Project Management">Site Engg., Project Management</option> 
        <option value="Telecom">Telecom</option> 
        <option value="Application Programming, Maintenance (IT)">Application Programming, Maintenance (IT)</option> 
        <option value="Client Server (IT)">Client Server (IT)</option> 
        <option value="DBA, (IT)">DBA, (IT)</option> 
        <option value="E-Commerce, Internet Technologies (IT)">E-Commerce, Internet Technologies (IT)</option> 
        <option value="Embedded/EDA/VLSI/ASIC/Chip Design (IT)">Embedded/EDA/VLSI/ASIC/Chip Design (IT)</option> 
        <option value="ERP, CRM (IT)">ERP, CRM (IT)</option> 
        <option value="Mainframe (IT)">Mainframe (IT)</option> 
        <option value="Middleware (IT)">Middleware (IT)</option> 
        <option value="Mobile (IT)">Mobile (IT)</option> 
        <option value="Network Administration, Security (IT)">Network Administration, Security (IT)</option> 
        <option value="QA & Testing (IT)">QA & Testing (IT)</option> 
        <option value="System Programming (IT)">System Programming (IT)</option> 
        <option value="Systems, EDP, MIS (IT)">Systems, EDP, MIS (IT)</option> 
        <option value="Content, Journalists, Editors">Content, Journalists, Editors</option> 
        <option value="Freshers, Trainee Jobs">Freshers, Trainee Jobs</option> 
        <option value="Healthcare, Medical, R&D, Bio Tech, Scientist">Healthcare, Medical, R&D, Bio Tech, Scientist</option> 
        <option value="Hotels, Restaurants">Hotels, Restaurants</option> 
        <option value="Banking">Banking</option> 
        <option value="IT-Support, Telecom, Hardware ">IT-Support, Telecom, Hardware </option> 
        <option value="Overseas, International Jobs">Overseas, International Jobs</option> 
        <option value="Packaging">Packaging</option> 
        <option value="Pharma, Biotech">Pharma, Biotech</option> 
        <option value="Purchase, Logistics, Supply Chain">Purchase, Logistics, Supply Chain</option> 
        <option value="Retailing">Retailing</option> 
        <option value="Secretary, Front Office, Data Entry">Secretary, Front Office, Data Entry</option> 
        <option value="Self Employed, Consultants, Businessman, Freelancers">Self Employed, Consultants, Businessman, Freelancers</option> 
        <option value="Teaching, Education">Teaching, Education</option> 
        <option value="Telecom Software">Telecom Software</option> 
        <option value="IT Software">IT Software</option> 
        <option value="Top Management- IT Jobs">Top Management- IT Jobs</option> 
        <option value="Top Management- Non IT Jobs">Top Management- Non IT Jobs</option> 
        <option value="Travel, Ticketing, Airlines">Travel, Ticketing, Airlines</option> 
        <option value="Anchoring/TV/Films/Production">Anchoring/TV/Films/Production</option> 
        <option value="Web, Graphic Design, Visualiser">Web, Graphic Design, Visualiser</option> 
        <option value="Administration">Administration</option> 
        <option value="Legal">Legal</option> 
        <option value="Marketing Management">Marketing Management</option> 
        <option value="Doctors/Nurses/Medical Professional">Doctors/Nurses/Medical Professional</option> 
        <option value="Oil and Gas">Oil and Gas</option> 
        <option value="Ticketing/Reservation/Travel Agent/Airlines">Ticketing/Reservation/Travel Agent/Airlines</option> 
        <option value="Financial Services / Stock Broking / Mutual Funds ">Financial Services / Stock Broking / Mutual Funds </option>
		</select>
	</dd>
    <dt>
		<label for="lastname"><font color="#FF6600" style="font-size:15px">* </font>Company Type:</label>
	</dt>
    <dd id="radio_button">
    		<input type="radio"
            name="type" 
            value="Company" 
            checked="checked" />Company&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="type" value="Consultant" />Consultant
    </dd>
	<dt id="line_grey"></dt>
	<dt id="space_dt" style="width:200px; margin-left:-70px;"><h4>Contact Information</h4></dt>
    <dt>
		<label for="lastname"><font color="#FF6600" style="font-size:15px">* </font>Address Line 1:</label>
	</dt>
    <dd>
			<input
			name="location"
			id="location"
			type="text"
            size="30" />
    </dd>
    <dt>
		<label for="lastname">Address Line 2:</label>
	</dt>
    <dd>
			<input
			name="location"
			id="location"
			type="text"
            size="30" />
    </dd>
    <dt>
		<label for="lastname">Address Line 3:</label>
	</dt>
    <dd>
			<input
			name="location"
			id="location"
			type="text"
            size="30" />
    </dd>
    <dt><label for="year"><font color="#FF6600" style="font-size:15px">* </font>Country:</label></dt>
	<dd id="list-box">
		<select id="" name=""  style="width:218px;">
			<option value="">Select Country </option> 
	    <option value="India">India</option>
        </select>
    </dd> 
    <dt><label for="year"><font color="#FF6600" style="font-size:15px">* </font>State:</label></dt>
	<dd id="list-box">
		<select id="" name=""  style="width:218px;">
			<option value="">Select State</option> 
	    <option value="Andhra Pradesh">Andhra Pradesh</option> 
	    <option value="Arunachal Pradesh">Arunachal Pradesh</option> 
	    <option value="Assam">Assam</option> 
	    <option value="Bihar">Bihar</option> 
	    <option value="Chhattisgarh">Chhattisgarh</option> 
	    <option value="Delhi">Delhi</option> 
	    <option value="Goa">Goa</option> 
	    <option value="Gujarat">Gujarat</option> 
	    <option value="Haryana ">Haryana </option> 
	    <option value="Himachal Pradesh">Himachal Pradesh</option> 
	    <option value="Jammu and Kashmir">Jammu and Kashmir</option> 
	    <option value="Jharkhand ">Jharkhand </option> 
	    <option value="Jharkhand">Jharkhand</option> 
	    <option value="Karnataka">Karnataka</option> 
	    <option value="Kerala">Kerala</option> 
	    <option value="Madhya Pradesh ">Madhya Pradesh </option> 
	    <option value="Maharashtra">Maharashtra</option> 
	    <option value="Manipur">Manipur</option> 
	    <option value="Meghalaya">Meghalaya</option> 
	    <option value="Mizoram ">Mizoram </option> 
	    <option value="Nagaland">Nagaland</option> 
	    <option value="Orissa ">Orissa </option> 
	    <option value="Pondicherry">Pondicherry</option> 
	    <option value="Punjab ">Punjab </option> 
	    <option value="Rajasthan ">Rajasthan </option> 
	    <option value="Sikkim">Sikkim</option> 
	    <option value="Tamil Nadu">Tamil Nadu</option> 
	    <option value="Top Metropolitan Cities ">Top Metropolitan Cities </option> 
	    <option value="Tripura ">Tripura </option> 
	    <option value="Uttar Pradesh">Uttar Pradesh</option> 
	    <option value="Uttarakhand">Uttarakhand</option> 
	    <option value="West Bengal ">West Bengal </option>
		</select>
	</dd>
     <dt><label for="year"><font color="#FF6600" style="font-size:15px">* </font>City:</label></dt>
	<dd id="list-box">
    <select id="" name=""  style="width:218px;">
		<option value="">Select</option> 
	    <option value="Agartala">Agartala</option> 
	    <option value="Ahmadnagar">Ahmadnagar</option> 
	    <option value="Ahmedabad">Ahmedabad</option> 
	    <option value="Ahmedabad">Ahmedabad</option> 
	    <option value="Aizawl">Aizawl</option> 
	    <option value="Ajmer">Ajmer</option> 
	    <option value="Allahabad">Allahabad</option> 
	    <option value="Ambattur">Ambattur</option> 
	    <option value="Amritsar">Amritsar</option> 
	    <option value="Anantapur">Anantapur</option> 
	    <option value="Andhra Pradesh (Other)">Andhra Pradesh (Other)</option> 
	    <option value="Arrah">Arrah</option> 
	    <option value="Arunachal Pradesh (Other)">Arunachal Pradesh (Other)</option> 
	    <option value="Asansol">Asansol</option> 
	    <option value="Assam (Other)">Assam (Other)</option> 
	    <option value="Bangalore">Bangalore</option> 
	    <option value="Bangalore">Bangalore</option> 
	    <option value="Bhilai">Bhilai</option> 
	    <option value="Bhopal">Bhopal</option> 
	    <option value="Bhubaneswar">Bhubaneswar</option> 
	    <option value="Bihar (Other)">Bihar (Other)</option> 
	    <option value="Bilaspur">Bilaspur</option> 
	    <option value="Bokaro">Bokaro</option> 
	    <option value="Chhattisgarh (Others)">Chhattisgarh (Others)</option> 
	    <option value="Dehradun">Dehradun</option> 
	    <option value="Delhi">Delhi</option> 
	    <option value="Dimapur">Dimapur</option> 
	    <option value="Faridabad">Faridabad</option> 
	    <option value="Gangtok">Gangtok</option> 
	    <option value="Goa (Other)">Goa (Other)</option> 
	    <option value="Gujarat (Other)">Gujarat (Other)</option> 
	    <option value="Guwahati">Guwahati</option> 
	    <option value="Haryana (Other)">Haryana (Other)</option> 
	    <option value="Himachal Pradesh (Other)">Himachal Pradesh (Other)</option> 
	    <option value="Imphal">Imphal</option> 
	    <option value="Itanagar">Itanagar</option> 
	    <option value="Jammu">Jammu</option> 
	    <option value="Jammu and Kashmir (Other)">Jammu and Kashmir (Other)</option> 
	    <option value="Jharkhand (Other)">Jharkhand (Other)</option> 
	    <option value="Karnataka (Other)">Karnataka (Other)</option> 
	    <option value="Kerala (Other)">Kerala (Other)</option> 
	    <option value="Kochi (Cochin)">Kochi (Cochin)</option> 
	    <option value="Madhya Pradesh (Other)">Madhya Pradesh (Other)</option> 
	    <option value="Maharashtra (Other)">Maharashtra (Other)</option> 
	    <option value="Manipur (Other)">Manipur (Other)</option> 
	    <option value="Meghalaya (Other)">Meghalaya (Other)</option> 
	    <option value="Mizoram (Other)">Mizoram (Other)</option> 
	    <option value="Mumbai">Mumbai</option> 
	    <option value="Nagaland (Other)">Nagaland (Other)</option> 
	    <option value="Orissa (Other)">Orissa (Other)</option> 
	    <option value="Ozhukarai">Ozhukarai</option> 
	    <option value="Panjim / Panaji">Panjim / Panaji</option> 
	    <option value="Puducherry (Other)">Puducherry (Other)</option> 
	    <option value="Punjab  (Other)">Punjab  (Other)</option> 
	    <option value="Rajasthan (Other)">Rajasthan (Other)</option> 
	    <option value="Shillong">Shillong</option> 
	    <option value="Sikkim (Other)">Sikkim (Other)</option> 
	    <option value="Tamil Nadu (Other)">Tamil Nadu (Other)</option> 
	    <option value="Tripura (Other)">Tripura (Other)</option> 
	    <option value="Uttar Pradesh (Other)">Uttar Pradesh (Other)</option> 
	    <option value="Uttarakhand (Other)">Uttarakhand (Other)</option> 
	    <option value="West Bengal (Other)">West Bengal (Other)</option>
		</select>
	</dd>
    <dt>
		<label for="lastname"><font color="#FF6600" style="font-size:15px">* </font>Pin/Zip:</label>
	</dt>
    <dd>
			<input
			name="location"
			id="location"
			type="text"
            size="30" />
    </dd>
    <dt>
		<label for="lastname"><font color="#FF6600" style="font-size:15px">* </font>Mobile:</label>
	</dt>
    <dd>
			<input
			name="location"
			id="location"
			type="text"
            size="30" />
    </dd>
    <dt>
		<label for="lastname"><font color="#FF6600" style="font-size:15px">* </font>Phone:</label>
	</dt>
    <dd id="list-box">
    		91-
  			<input style="width:40px;" type="text" name="tele_std" onkeypress="return isNumberKey(event)" />-
       		<input style="width:120px;" type="text" name="tele_no" onkeypress="return isNumberKey(event)" />
    </dd>
    <dt>
		<label for="lastname"><font color="#FF6600" style="font-size:15px">* </font>Email Id (official):</label>
	</dt>
    <dd>
			<input
			name="location"
			id="location"
			type="text"
            size="30" />
       <span class="hints">Use an existing email ID. Jobseeker and Naukri Hut will contact you on this email<span class="hints-pointer">&nbsp;</span></span>
    </dd>
    <dt>
		<label for="lastname">Email Id (personal):</label>
	</dt>
    <dd>
			<input
			name="location"
			id="location"
			type="text"
            size="30" />
    </dd>
    <dt>
		<label for="lastname">Website:</label>
	</dt>
    <dd>
			<input
			name="location"
			id="location"
			type="text"
            size="30" />
    </dd>
    <dt>
		<label for="lastname">Company Logo:</label>
	</dt>
    <dd>
    		<input type="file" name="logo"  style="height:22px;"/>
    </dd>
    <dt id="line_grey"></dt>
    <dt style="width:700px; font-size:11px;"> 
      <input name="" type="checkbox" value="" checked="checked" /> 
      I have read and understood and agree to the <a href="javascript:void(0)" onclick="window.open('terms.php',
'Job Description','width=900,height=900,menubar=yes,status=yes,scrollbars=yes')" style="color:#FF3300;">Terms and Conditions</a> governing the use of naukrihut.com    </dt>
<dt id="line_grey"></dt>
	<dt id="create_button" >
	<a href="#"><img src="images/create_account.png" id="button_search"  style="margin-left:144px; margin-top:-10px;" border="none"/></a>
    </dt>
</dl>
</form> 	
</div>

<div id="contact_box" align="left" style="width:185px; height:auto; border:1px solid #FFCCCC; margin-top:-115%;">
<p style="color:#ffffff; background:#CC99FF; margin-top:7px;"><strong style="padding:16px;">Employers contact us &nbsp;&nbsp;&nbsp;&nbsp;at:</strong></p>
	<div style="padding:0px 10px 0px 10px;">
    <p><strong>From India:</strong><br />
MR. Gurpal Singh Sachdava<br />
Moblie: +91 9999331331<br />
Email:<i> info@naukrihut.com</i>

    </p><br />
	</div>
       </div> 

<!-- Footer starts from here -->
<?php include "includes/footer.php";?>
<!-- Footer ends here -->
</div>
</body>
</html>
