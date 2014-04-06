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
#drop_box input{border:1px solid #ffffff;}
dl {
	font:normal 12px/15px Arial;
    position: relative;
    width: 350px;
}
dt {
    clear: both;
    float:left;
    width: 200px;
    padding: 4px 0 2px 190px;
    text-align: left;
}
dd {
    float: left;
    width: 200px;
    margin: 0 0 20px 400px;
    padding-left: 6px;
	margin-top:-24px;
}
.ie7 dd {
    float: left;
    width: 200px;
    margin: 0 0 20px 200px;
    padding-left: 6px;
	margin-top:-24px;
}

/* The hint to Hide and Show */
.hints {
   	display: none;
    position: absolute;
    right: -600px;
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
    right: -600px;
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
.ie7 #sizes{
	margin-left:200px;
}
</style>
</head>
<!--[if IE 7]><body class="ie7"><![endif]-->
<body>
<!-- Header starts from here -->
<?php include "includes/header_employer.php";?> 
<!--header ends here-->
<!--content starts fron here-->
<div align="center">
<div id="content"> 
<div id="job_post" align="left">
    <div>		
			<h3 id="heading" align="center" style="color:#663399;"><strong>Job Details- Specify details of the postion/ Job you are going to post. </strong></h3>
    </div>   
     
<form id="form5"> 
<br />
<dl>
	<dt>
		<label for="firstname"><font color="#FF6600" style="font-size:15px">* </font>Job Title / Designation:</label>
	</dt>
	<dd>
		<input
			name="jobid"
			id="jobid"
			type="text"
            size="45"
             />
           <span class="hints">Job Title is the first thing applicants see when they search for job.<span class="hints-pointer">&nbsp;</span></span>
	</dd>
	<dt>
		<label for="lastname"><font color="#FF6600" style="font-size:15px">* </font>Number of Vacancies:</label>
	</dt>
	<dd>
		<input
			name="keyword"
			id="keyword"
			type="text"
            size="10" />	
	</dd>
	<dt>
		<label for="lastname"><font color="#FF6600" style="font-size:15px">* </font>Job Type:</label>
	</dt>
	<dd id="list-box">
		<div id="Rolediv"><select name="role" id="ValidSelection6" style="width:200px;" >
		<option value="">Select Job Type</option>
		<option value="">Permanent</option>
		<option value="">Temporary</option>
		<option value="">Contract</option>
		<option value="">Part Time</option>
	
  </select></div>
	</dd>
    <dt>
		<label for="lastname"><font color="#FF6600" style="font-size:15px">* </font>Job Description:</label>
	</dt>
	<dd>
		<textarea class="headings" name="job_desc" id="job_desc" rows="20" cols="50"></textarea>
		<p id="sizes" style="width:440px; margin-top:0px;" />Give a precise outline of responsibilities involved in this job. Mention Tasks and  Duties. Key Interactions Reporting Information, Working Environment , Additional Benefits etc.</p>
	</dd>
	
    <dt>
		<label for="lastname"><font color="#FF6600" style="font-size:15px">* </font>Work Experience:</label>
	</dt>
    <dd style="width:300px; margin-left:400px;">
    		Min-<input
			name="keyword"
			id="keyword"
			type="text"
            size="12" />
            &nbsp;Max-<input
			name="keyword"
			id="keyword"
			type="text"
            size="12" />
            <span class="hints">Select Years of Experience required for this job.<span class="hints-pointer">&nbsp;</span></span>
    </dd>

     <dt><label for="industry"><font color="#FF6600" style="font-size:15px">* </font>Industry:</label></dt>
	<dd id="drop_box">
		<select id="" name=""  style="width:300px;">
        <option value="">Select Current Industry</option>
		<option value="Accounting/Finance">Accounting/Finance</option> 
	    <option value="Advertising/PR/Events">Advertising/PR/Events</option> 
	    <option value="Agriculture/Dairy">Agriculture/Dairy</option> 
	    <option value="Animation">Animation</option> 
	    <option value="Architecture/Interior Designing">Architecture/Interior Designing</option> 
	    <option value="Auto/Auto Ancillary">Auto/Auto Ancillary</option> 
	    <option value="Aviation / Aerospace Firms">Aviation / Aerospace Firms</option> 
	    <option value="Banking/Financial Services/Broking">Banking/Financial Services/Broking</option> 
	    <option value="BPO/ITES">BPO/ITES</option> 
	    <option value="Brewery / Distillery">Brewery / Distillery</option> 
	    <option value="Ceramic /Sanitary Ware ">Ceramic /Sanitary Ware </option> 
	    <option value="Chemicals/Petrochemicals/Plastics/ Rubber">Chemicals/Petrochemicals/Plastics/ Rubber</option> 
	    <option value="Construction/ Engineering/ Cement/Metals">Construction/ Engineering/ Cement/Metals</option> 
	    <option value="Consumer Durables">Consumer Durables</option> 
	    <option value="Education/ Teaching/ Training">Education/ Teaching/ Training</option> 
	    <option value="FMCG/Foods/ Beverage">FMCG/Foods/ Beverage</option> 
	    <option value="Hotels/ Restaurants/ Airlines/Travel">Hotels/ Restaurants/ Airlines/Travel</option> 
	    <option value="Industrial Products/Heavy Machinery">Industrial Products/Heavy Machinery</option> 
	    <option value="Insurance">Insurance</option> 
	    <option value="IT-Software/ Software Services">IT-Software/ Software Services</option> 
	    <option value="Media/Dotcom/ Entertainment">Media/Dotcom/ Entertainment</option> 
	    <option value="Medical/ Healthcare/ Hospital">Medical/ Healthcare/ Hospital</option> 
	    <option value="Oil and Gas/ Power/ Infrastructure/ Energy">Oil and Gas/ Power/ Infrastructure/ Energy</option> 
	    <option value="Recruitment">Recruitment</option> 
	    <option value="Telecom/ISP">Telecom/ISP</option> 
	    <option value="Water Treatment/ Waste Management">Water Treatment/ Waste Management</option> 
	    </select>
       	
	</dd>
    <dt><label for="functionalArea"><font color="#FF6600" style="font-size:15px">* </font>Functional Area:</label></dt>
	<dd id="drop_box">
		<select id="" name=""  style="width:300px;">
        <option value="">Select Functional Area</option>
		<option value="Accounting/Tax/Company Secretary/Audit">Accounting/Tax/Company Secretary/Audit</option> 
	    <option value="Administration">Administration</option> 
	    <option value="Advertising, PR, Events">Advertising, PR, Events</option> 
	    <option value="Anchoring/TV/Films/Production">Anchoring/TV/Films/Production</option> 
	    <option value="Application Programming, Maintenance (IT)">Application Programming, Maintenance (IT)</option> 
	    <option value="Architecture, Interior Design, Naval Arch">Architecture, Interior Design, Naval Arch</option> 
	    <option value="Banking">Banking</option> 
	    <option value="Client Server (IT)">Client Server (IT)</option> 
	    <option value="Content, Journalists, Editors">Content, Journalists, Editors</option> 
	    <option value="Corporate Planning, Consulting, Strategy">Corporate Planning, Consulting, Strategy</option> 
	    <option value="DBA, (IT)">DBA, (IT)</option> 
	    <option value="Doctors/Nurses/Medical Professional">Doctors/Nurses/Medical Professional</option> 
	    <option value="E-Commerce, Internet Technologies (IT)">E-Commerce, Internet Technologies (IT)</option> 
	    <option value="Embedded/EDA/VLSI/ASIC/Chip Design (IT)">Embedded/EDA/VLSI/ASIC/Chip Design (IT)</option> 
	    <option value="Engineering Design, R&D">Engineering Design, R&D</option> 
	    <option value="ERP, CRM (IT)">ERP, CRM (IT)</option> 
	    <option value="Export, Import">Export, Import</option> 
	    <option value="Fashion, Garments, Merchandising">Fashion, Garments, Merchandising</option> 
	    <option value="Finance">Finance</option> 
	    <option value="Financial Services / Stock Broking / Mutual Funds ">Financial Services / Stock Broking / Mutual Funds </option> 
	    <option value="Freshers, Trainee Jobs">Freshers, Trainee Jobs</option> 
	    <option value="Guards, Security Services">Guards, Security Services</option> 
	    <option value="Healthcare, Medical, R&D, Bio Tech, Scientist">Healthcare, Medical, R&D, Bio Tech, Scientist</option> 
	    <option value="Hotels, Restaurants">Hotels, Restaurants</option> 
	    <option value="Human Resource">Human Resource</option> 
	    <option value="Insurance">Insurance</option> 
	    <option value="IT Software">IT Software</option> 
	    <option value="IT-Support, Telecom, Hardware ">IT-Support, Telecom, Hardware </option> 
	    <option value="ITES/BPO/KPO, Customer Service, Operations">ITES/BPO/KPO, Customer Service, Operations</option> 
	    <option value="Legal">Legal</option> 
	    <option value="Mainframe (IT)">Mainframe (IT)</option> 
	    <option value="Marketing Management">Marketing Management</option> 
	    <option value="Merchandising">Merchandising</option> 
	    <option value="Middleware (IT)">Middleware (IT)</option> 
	    <option value="Mobile (IT)">Mobile (IT)</option> 
	    <option value="Network Administration, Security (IT)">Network Administration, Security (IT)</option> 
	    <option value="Oil and Gas">Oil and Gas</option> 
	    <option value="Overseas, International Jobs">Overseas, International Jobs</option> 
	    <option value="Packaging">Packaging</option> 
	    <option value="Pharma, Biotech">Pharma, Biotech</option> 
	    <option value="Production, Maintenance, Quality">Production, Maintenance, Quality</option> 
	    <option value="Purchase, Logistics, Supply Chain">Purchase, Logistics, Supply Chain</option> 
	    <option value="QA & Testing (IT)">QA & Testing (IT)</option> 
	    <option value="Retailing">Retailing</option> 
	    <option value="Sales Management, Business Development">Sales Management, Business Development</option> 
	    <option value="Secretary, Front Office, Data Entry">Secretary, Front Office, Data Entry</option> 
	    <option value="Self Employed, Consultants, Businessman, Freelancers">Self Employed, Consultants, Businessman, Freelancers</option> 
	    <option value="Site Engg., Project Management">Site Engg., Project Management</option> 
	    <option value="System Programming (IT)">System Programming (IT)</option> 
	    <option value="Systems, EDP, MIS (IT)">Systems, EDP, MIS (IT)</option> 
	    <option value="Teaching, Education">Teaching, Education</option> 
	    <option value="Telecom">Telecom</option> 
	    <option value="Telecom Software">Telecom Software</option> 
	    <option value="Ticketing/Reservation/Travel Agent/Airlines">Ticketing/Reservation/Travel Agent/Airlines</option> 
	    <option value="Top Management- IT Jobs">Top Management- IT Jobs</option> 
	    <option value="Top Management- Non IT Jobs">Top Management- Non IT Jobs</option> 
	    <option value="Travel, Ticketing, Airlines">Travel, Ticketing, Airlines</option> 
	    <option value="Web, Graphic Design, Visualiser">Web, Graphic Design, Visualiser</option> 
	    </select>
        	
	</dd>
     <dt><label for="role"><font color="#FF6600" style="font-size:15px">* </font>Role:</label></dt>
	<dd id="drop_box">
		<select id="" name=""  style="width:300px;">
        <option value="">Select Role</option>
		<option value="Accountant">Accountant</option> 
	    <option value="Accounts Executives">Accounts Executives</option> 
	    <option value="Accounts Manager">Accounts Manager</option> 
	    <option value="Admin / Facilities Executives">Admin / Facilities Executives</option> 
	    <option value="Admin / Facilities Manager">Admin / Facilities Manager</option> 
	    <option value="Associate / Sr. Associate - (NonTechnical)">Associate / Sr. Associate - (NonTechnical)</option> 
	    <option value="Associate / Sr. Associate -(Technical)">Associate / Sr. Associate -(Technical)</option> 
	    <option value="Audit">Audit</option> 
	    <option value="Audit Manager">Audit Manager</option> 
	    <option value="Branch Manager">Branch Manager</option> 
	    <option value="Chartered Accountant">Chartered Accountant</option> 
	    <option value="Client Servicing / Key Account Manager">Client Servicing / Key Account Manager</option> 
	    <option value="Company Secretary">Company Secretary</option> 
	    <option value="Customer Service Executive">Customer Service Executive</option> 
	    <option value="Design Engineer">Design Engineer</option> 
	    <option value="Fashion Designer">Fashion Designer</option> 
	    <option value="Finance / Budgeting Manager">Finance / Budgeting Manager</option> 
	    <option value="Finance Executive">Finance Executive</option> 
	    <option value="Financial Analyst">Financial Analyst</option> 
	    <option value="HR Executive">HR Executive</option> 
	    <option value="HR Manager">HR Manager</option> 
	    <option value="Non Voice - Associate / Sr. Associate ">Non Voice - Associate / Sr. Associate </option> 
	    <option value="Operations Manager">Operations Manager</option> 
	    <option value="Pay Roll / Compensation Manager">Pay Roll / Compensation Manager</option> 
	    <option value="Product Development Executives">Product Development Executives</option> 
	    <option value="Product Development Manager">Product Development Manager</option> 
	    <option value="QA & QC-Executives">QA & QC-Executives</option> 
	    <option value="QA / QC Executive">QA / QC Executive</option> 
	    <option value="QA / QC Manager">QA / QC Manager</option> 
	    <option value="R&D Executive">R&D Executive</option> 
	    <option value="Recruitment Executive">Recruitment Executive</option> 
	    <option value="Recruitment Manager">Recruitment Manager</option> 
	    <option value="Relationship Executives">Relationship Executives</option> 
	    <option value="Sales / BD Manager">Sales / BD Manager</option> 
	    <option value="Sales / BD Manager-Broking">Sales / BD Manager-Broking</option> 
	    <option value="Sales / Business Development">Sales / Business Development</option> 
	    <option value="Sales Officer">Sales Officer</option> 
	    <option value="Senior Design Engineer">Senior Design Engineer</option> 
	    <option value="Taxation Manager">Taxation Manager</option> 
	    <option value="Team Leader (Non Voice)">Team Leader (Non Voice)</option> 
	    <option value="Team Leader (Voice)">Team Leader (Voice)</option> 
	    <option value="Team Leader - (NonTechnical)">Team Leader - (NonTechnical)</option> 
	    <option value="Team Leader -(Technical)">Team Leader -(Technical)</option> 
	    <option value="Tech. Lead / Project Lead">Tech. Lead / Project Lead</option> 
	    <option value="Telecalling / Telemarketing Executive">Telecalling / Telemarketing Executive</option> 
	    <option value="Training Manager">Training Manager</option> 
	    <option value="Unit Manager">Unit Manager</option> 
	    <option value="Voice - Associate / Sr. Associate ">Voice - Associate / Sr. Associate </option>
	    </select>
	</dd>
    <dt>
		<label for="keySkills"><font color="#FF6600" style="font-size:15px">* </font>Keywords:</label>
	</dt>
    <dd>
			<input
			name="email"
			id="email"
			type="text"
            size="44" />

        <span class="hints">Use Multiple words separated by commas . Proper Keyword will ensure this job reaches out to the best matching candidates.<span class="hints-pointer">&nbsp;</span></span>   
    </dd>
    <dt>
		<label for="headline"><font color="#FF6600" style="font-size:15px">* </font>Location(s) of Job:</label>
	</dt>
    <dd>
			<input
			name="email"
			id="email"
			type="text"
            size="44" />
            <span class="hints">Select a National Location(s).Use Multiple Location separated by commas.<span class="hints-pointer">&nbsp;</span></span>
    </dd>
    <dt>
		<label for="headline"><font color="#FF6600" style="font-size:15px">* </font>Annual Salary Range:</label>
	</dt>
    <dd style="width:350px; margin-left:400px;">
    		<select id="" name=""  style="width:60px;">
        		<option value="INR">INR</option>
				<option value="Dollar">Dollar</option>
            </select>    
    		&nbsp;Min-<input
			name="keyword"
			id="keyword"
			type="text"
            size="12" />
            &nbsp;Max-<input
			name="keyword"
			id="keyword"
			type="text"
            size="12" />
            <p style="500px; margin-top:0px;">Specify correct salary range to get the most relevant responses.</p>
    </dd>
    <dt>
		<label for="headline">&nbsp;&nbsp;&nbsp;Any Incentive Plans:</label>
	</dt>
    <dd>
			<input
			name="incentive"
			id="incentive"
			type="text"
            size="44" />
            
    </dd>
    </dd>
    <dt id="line_grey"></dt>
     <dt style="width:520px; margin-left:-70px;"><h4>Desired Candidate Profile -<font size="-3">Specify details of the kind of person you are looking for this job.</font></h4></dt>
     <dt>
		<label for="lastname"><font color="#FF6600" style="font-size:15px">* </font>Profile Description:</label>
	</dt>
	<dd>
		<textarea class="headings" name="job_desc" id="job_desc" rows="20" cols="50"></textarea>
		<p id="sizes" style="width:440px; margin-top:0px;" />Summarize the technical skills, presonal abilities, and professional background of the person you want to hire for this job.</p>
	</dd>
    <dt>
		<label for="headline"><font color="#FF6600" style="font-size:15px">* </font>Basic/UG Qualification:</label>
	</dt>
    <dd>
			<input
			name="email"
			id="email"
			type="text"
            size="44" />
            
    </dd>
    <dt>
		<label for="headline"><font color="#FF6600" style="font-size:15px">* </font>PG Qualification:</label>
	</dt>
    <dd>
			<input
			name="email"
			id="email"
			type="text"
            size="44" />
            
    </dd>
    <dt id="line_grey"></dt>
    <dt style="width:400px; margin-left:-70px;"><h4>Employer Details- <font size="-3">Add information about the company.</font></h4></dt>
    
    <dt>
		<label for="headline"><font color="#FF6600" style="font-size:15px">* </font>Company Name:</label>
	</dt>
    <dd>
			<input
			name="companyNmae"
			id="companyNmae"
			type="text"
            size="44" />
       <span class="hints">Enter the complete and exact Company Name.<span class="hints-pointer">&nbsp;</span></span>     
    </dd>
    <dt>
		<label for="lastname"><font color="#FF6600" style="font-size:15px">* </font>About Company:</label>
	</dt>
	<dd>
		<textarea class="headings" name="job_desc" id="job_desc" rows="20" cols="50"></textarea>
		<p id="sizes" style="width:440px; margin-top:0px;" />Provide details of this company.</p>
	</dd>
    <dt>
		<label for="headline"><font color="#FF6600" style="font-size:15px">* </font>Company's Website:</label>
	</dt>
    <dd>
			<input
			name="companyWebsite"
			id="companyWebsite"
			type="text"
            size="44" />
       <span class="hints">Enter URL for the Company Website.<span class="hints-pointer">&nbsp;</span></span>     
    </dd>
    <dt>
		<label for="headline">&nbsp;&nbsp;&nbsp;Company Logo:</label>
	</dt>
    <dd id="new_input"><input name="resume" type="file" class="form" /></dd>
    <dt id="line_grey"></dt>
    <dt style="width:520px; margin-left:-70px;"><h4>Recruiter Contact Details</h4></dt>
    <dt>
		<label for="headline"><font color="#FF6600" style="font-size:15px">* </font>Contact Person:</label>
	</dt>
    <dd>
			<input
			name="contactPerson"
			id="contactPerson"
			type="text"
            size="44" />
       <span class="hints">Specify the name of the person responsible for hiring this position.<span class="hints-pointer">&nbsp;</span></span>     
    </dd>
    <dt>
		<label for="headline"><font color="#FF6600" style="font-size:15px">* </font>Company Type:</label>
	</dt>
    <dd id="drop_box" style="width:300px;">
    		<input type="radio"
            name="type" 
            value="Company" 
            checked="checked" />Company&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="type" value="Consultant" />Consultant
    </dd>
    <dt>
		<label for="keySkills"><font color="#FF6600" style="font-size:15px">* </font>Address:</label>
	</dt>
    <dd>
			<textarea name="address" id="ValidField" cols="" rows="5" style="width:290px;"></textarea>
           
    </dd>
    <dt>
		<label for="headline"><font color="#FF6600" style="font-size:15px">* </font>Contact Number :</label>
	</dt>
    <dd>
			<input
			name="number"
			id="number"
			type="text"
            size="44" />
       <span class="hints">Enter contact number. <br />Note: (This will be visible to Applicants)<span class="hints-pointer">&nbsp;</span></span>     
    </dd>
    <dt>
		<label for="headline"><font color="#FF6600" style="font-size:15px">* </font>Email:</label>
	</dt>
    <dd>
			<input
			name="email"
			id="email"
			type="text"
            size="44" />
       <span class="hints">Enter email address <br />Note: (This will be visible to Applicant.)<span class="hints-pointer">&nbsp;</span></span>
    </dd>
    <dt id="line_grey"></dt>
     <dt id="create_button" >
	<a href="#"><img src="images/create_account.png" id="button_search"  style="margin-left:184px; margin-top:-10px;" width="200" border="none"/></a>
    </dt>
</dl>
</form> 	
</div>

 

<!-- Footer starts from here -->
<?php include "includes/footer.php";?>
<!-- Footer ends here -->
</div>
</body>
</html>
