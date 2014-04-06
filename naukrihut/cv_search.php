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
<!-- date picker related style scripts -->
	<link rel="stylesheet" href="css/datepicker.css" type="text/css" />
    <script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/datepicker.js"></script>
    <script type="text/javascript" src="js/datepicker_eye.js"></script>
   
    <script type="text/javascript" src="js/datepicker_layout.js"></script>
<!-- datepicker related style scripts -->
<script type="text/javascript" src="js/jquery.idTabs.min.js"></script>
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
    padding: 4px 0 2px 120px;
    text-align: left;
}
dd {
    float: left;
    width: 200px;
    margin: 0 0 20px 300px;
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
    right: -500px;
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
    right: -460px;
    width: 200px;
    margin-top: -20px;
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

#job_responses{width:255px; height:300px; float:left; border:2px solid #FFCCCC;}
#search_in{margin-left:-30px;}
.ie7 #search_in{margin-left:10px;}
#keyword{margin-left:-30px; padding-top:20px;}
.ie7 #keyword{margin-left:10px; padding-top:20px;}
#top{
	width:255px; height:30px; 
	background:url(images/top_bar1.png) no-repeat 0 0 #FFFFFF; color:#000000;
	float:left; margin-right:0px;}
#tops{
	width:970px; height:30px; margin-left:0px;
	background:url(images/top_bar1.png) repeat 0 0 #FFFFFF; color:#000000;
	float:left; margin-right:0px;}
#list{width:970px; height:auto; border:2px solid #FFCCCC; margin-left:0px;}
#form5{height:600px;}
#form6{height:1220px;}
.ie7 #salary{ padding-top:50px;}
.ie7 #drop_box
{
	width:auto;
	margin-left:280px;
	float:right;
	padding-bottom:0px;
	
}

.ie7 #call_img{margin-top:-500px;}
#call_img{ margin-top:-580px;}
#button_first{margin-top:3%; margin-left:8%}
#button_second{margin-left:0%; margin-top:0%;}
.ie7 #button_second{margin-left:0px; margin-top:-1.9%;}
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
      <div id="list" align="left">
    <div id="tops"><strong style="color:#993399;">&nbsp;&nbsp; CV's Search</div>
   <ul class="idTabs"> 
		<li id="button_first"><a href="#jquery"><img src="images/basic_search.png" title="Basic Search" border="none"  style="float:left;" /></a></li> 
  		<li id="button_second"><a href="#official"><img src="images/advanced_search.png" title="Advanced Search" border="none" /></a></li> 
   </ul> 

<div id="jquery">
<form id="form5"> 

<dl>
<dt> <h3><u>Basic Search Criteria</u></h3></dt>
	<dt>
		<label for="firstname"><font color="#FF6600" style="font-size:15px">* </font>Keyword:</label>
	</dt>
	<dd>
		<input
			name="jobid"
			id="jobid"
			type="text" 
            size="44" style="border:2px solid #336699; height:20px;"/><br />
		<span class="hints">Eg: Accountant, Web Designer, Software Engineer..<span class="hints-pointer">&nbsp;</span></span>
	</dd>

	<dt>
		<label for="firstname"><font color="#FF6600" style="font-size:15px">* </font>Total Experience:</label>
	</dt>
	<dd id="list-box">
		<select name="exp_min"> 
  					<option value="">Select</option> 
  					<option>0.5</option>
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
  					<option>32</option> 
  					<option>33</option> 
  					<option>34</option> 
  					<option>35</option> 
  					<option>36</option> 
  					<option>37</option> 
  					<option>38</option> 
  					<option>39</option> 
  					<option>40</option> 
                    <option>41</option> 
  					<option>42</option> 
  					<option>43</option> 
  					<option>44</option> 
  					<option>45</option> 
  					<option>46</option> 
  					<option>47</option> 
  					<option>48</option> 
  					<option>49</option> 
  					<option>50</option>
				</select> 
				<strong> to </strong>
                <select name="exp_max" class="list-box"> 
  					<option value="">Select</option> 
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
  					<option>32</option> 
  					<option>33</option> 
  					<option>34</option> 
  					<option>35</option> 
  					<option>36</option> 
  					<option>37</option> 
  					<option>38</option> 
  					<option>39</option> 
  					<option>40</option> 
                    <option>41</option> 
  					<option>42</option> 
  					<option>43</option> 
  					<option>44</option> 
  					<option>45</option> 
  					<option>46</option> 
  					<option>47</option> 
  					<option>48</option> 
  					<option>49</option> 
  					<option>50</option> 
				</select>
                <p style="font-size:10px; color:#999999; margin-top:-1px;"> In Years</p>             
	</dd>
    
    
    <dt>
		<label for="firstname" id="salary"><font color="#FF6600" style="font-size:15px">* </font>Annual Salary:</label>
	</dt>
	<dd id="list-box">
		<select name="exp_min"> 
  					<option value="">Select</option> 
  					<option>0.5</option>
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
  					<option>32</option> 
  					<option>33</option> 
  					<option>34</option> 
  					<option>35</option> 
  					<option>36</option> 
  					<option>37</option> 
  					<option>38</option> 
  					<option>39</option> 
  					<option>40</option> 
                    <option>41</option> 
  					<option>42</option> 
  					<option>43</option> 
  					<option>44</option> 
  					<option>45</option> 
  					<option>46</option> 
  					<option>47</option> 
  					<option>48</option> 
  					<option>49</option> 
  					<option>50</option>
				</select> 
				<strong> to </strong>
                <select name="exp_max" class="list-box"> 
  					<option value="">Select</option> 
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
  					<option>32</option> 
  					<option>33</option> 
  					<option>34</option> 
  					<option>35</option> 
  					<option>36</option> 
  					<option>37</option> 
  					<option>38</option> 
  					<option>39</option> 
  					<option>40</option> 
                    <option>41</option> 
  					<option>42</option> 
  					<option>43</option> 
  					<option>44</option> 
  					<option>45</option> 
  					<option>46</option> 
  					<option>47</option> 
  					<option>48</option> 
  					<option>49</option> 
  					<option>50</option> 
				</select>
                <p style="font-size:10px; color:#999999; margin-top:-1px;"> (INR) In Lakhs Per Annum</p>             
	</dd>
    <dt>
		<label for="firstname"><font color="#FF6600" style="font-size:15px">* </font>Location:</label>
	</dt>
	<dd>
		<input
			name="jobid"
			id="jobid"
			type="text" 
            size="44"/>
            <span class="hints">You can select multipale location by using comma.<span class="hints-pointer">&nbsp;</span></span>
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
			<input
			name="email"
			id="email"
			type="text"
            size="30" />
            <span class="hints">Eg: B.Tech, MBA with 4 years exp. in Sales.<span class="hints-pointer">&nbsp;</span></span>
    </dd>

    <dt>
		<label for="firstname" id="salary"><font color="#FF6600" style="font-size:15px">* </font>Resume Posted on:</label>
	</dt>
	<dd id="list-box">
    <b>Today to -</b> 
		<select name="exp_min"> 
  					<option value="">Today</option> 
                    <option value="">Yesterday</option> 
  					<option value="">One week before</option>
                    <option value="">Two week before</option> 
  					<option value="">three week before</option> 
  					<option value="">One month before</option> 
  					<option value="">Two month before</option> 
  					<option value="">None</option> 
				</select> 
                           
	</dd>
    <dt>
	<a href="cv_list.php"><img src="images/find_resume.png" id="button_search" style="margin-left:200px; margin-top:-10px;" border="none"/></a>
    </dt>
</dl>

</form> 
</div>
<div id="official">
	<form id="form6"> 

<dl>
<dt> <h3 style="width:250px;"><u>Advanced Search Criteria</u></h3></dt>
	<dt>
		<label for="firstname"><font color="#FF6600" style="font-size:15px">* </font>Keyword:</label>
	</dt>
	<dd>
		<input
			name="jobid"
			id="jobid"
			type="text" 
            size="44" style="border:2px solid #336699; height:20px;"/><br />
		<span class="hints">Eg: B.Tech, MBA with 4 years exp. in Sales.<span class="hints-pointer">&nbsp;</span></span>
	</dd>

	<dt>
		<label for="firstname"><font color="#FF6600" style="font-size:15px">* </font>Total Experience:</label>
	</dt>
	<dd id="list-box">
		<select name="exp_min"> 
  					<option value="">Select</option> 
  					<option>0.5</option>
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
  					<option>32</option> 
  					<option>33</option> 
  					<option>34</option> 
  					<option>35</option> 
  					<option>36</option> 
  					<option>37</option> 
  					<option>38</option> 
  					<option>39</option> 
  					<option>40</option> 
                    <option>41</option> 
  					<option>42</option> 
  					<option>43</option> 
  					<option>44</option> 
  					<option>45</option> 
  					<option>46</option> 
  					<option>47</option> 
  					<option>48</option> 
  					<option>49</option> 
  					<option>50</option>
				</select> 
				<strong> to </strong>
                <select name="exp_max" class="list-box"> 
  					<option value="">Select</option> 
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
  					<option>32</option> 
  					<option>33</option> 
  					<option>34</option> 
  					<option>35</option> 
  					<option>36</option> 
  					<option>37</option> 
  					<option>38</option> 
  					<option>39</option> 
  					<option>40</option> 
                    <option>41</option> 
  					<option>42</option> 
  					<option>43</option> 
  					<option>44</option> 
  					<option>45</option> 
  					<option>46</option> 
  					<option>47</option> 
  					<option>48</option> 
  					<option>49</option> 
  					<option>50</option> 
				</select>
                <p style="font-size:10px; color:#999999; margin-top:-1px;"> In Years</p>             
	</dd>
    
    
    <dt>
		<label for="firstname" id="salary"><font color="#FF6600" style="font-size:15px">* </font>Annual Salary:</label>
	</dt>
	<dd id="list-box">
		<select name="exp_min"> 
  					<option value="">Select</option> 
  					<option>0.5</option>
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
  					<option>32</option> 
  					<option>33</option> 
  					<option>34</option> 
  					<option>35</option> 
  					<option>36</option> 
  					<option>37</option> 
  					<option>38</option> 
  					<option>39</option> 
  					<option>40</option> 
                    <option>41</option> 
  					<option>42</option> 
  					<option>43</option> 
  					<option>44</option> 
  					<option>45</option> 
  					<option>46</option> 
  					<option>47</option> 
  					<option>48</option> 
  					<option>49</option> 
  					<option>50</option>
				</select> 
				<strong> to </strong>
                <select name="exp_max" class="list-box"> 
  					<option value="">Select</option> 
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
  					<option>32</option> 
  					<option>33</option> 
  					<option>34</option> 
  					<option>35</option> 
  					<option>36</option> 
  					<option>37</option> 
  					<option>38</option> 
  					<option>39</option> 
  					<option>40</option> 
                    <option>41</option> 
  					<option>42</option> 
  					<option>43</option> 
  					<option>44</option> 
  					<option>45</option> 
  					<option>46</option> 
  					<option>47</option> 
  					<option>48</option> 
  					<option>49</option> 
  					<option>50</option> 
				</select>
                <p style="font-size:10px; color:#999999; margin-top:-1px;"> (INR) In Lakhs Per Annum</p>             
	</dd>
    <dt>
		<label for="firstname"><font color="#FF6600" style="font-size:15px">* </font>Location:</label>
	</dt>
	<dd>
		<input
			name="jobid"
			id="jobid"
			type="text" 
            size="44"/>
            <span class="hints">You can select multipale location by using comma.<span class="hints-pointer">&nbsp;</span></span>
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
    <br />
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
    <br />
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
    <br />
    <dt>
		<label for="headline">Current Employer Name:<strong> :</strong></label>
	</dt>
    <dd>
			<input
			name="email"
			id="email"
			type="text"
            size="30" />
            <span class="hints">If you are searching candidates in a perticular company then please write the name of the company.( You can leave this box empty if u want.)<span class="hints-pointer">&nbsp;</span></span>
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
			<input
			name="email"
			id="email"
			type="text"
            size="30" />
            <span class="hints">Eg: B.Tech, MBA with 4 years exp. in Sales.<span class="hints-pointer">&nbsp;</span></span>
    </dd>

    <dt>
		<label for="firstname" id="salary"><font color="#FF6600" style="font-size:15px">* </font>Resume Posted on:</label>
	</dt>
	<dd id="list-box">
    <b>Today to -</b>
		<select name="exp_min"> 
  					<option value="">Today</option> 
                    <option value="">Yesterday</option> 
  					<option value="">One week before</option>
                    <option value="">Two week before</option> 
  					<option value="">three week before</option> 
  					<option value="">One month before</option> 
  					<option value="">Two month before</option> 
  					<option value="">None</option> 
				</select> 
                           
	</dd><br />
    <dt id="line_grey" style="padding:10px 0px 10px 0px;"></dt>

    <dt> <h4><u>Educatinal Details</u></h4></dt>
    <dt><label for="role"><font color="#FF6600" style="font-size:15px">* </font>UG Qualification:</label></dt>
	<dd id="drop_box">
		<select id="" name=""  style="width:300px;">
        <option value="">Select Role</option>
		<option value="">B.Com(pass)</option> 
	    <option value="">B.A(pass)</option> 
	    <option value="">B.Sc(pass)</option> 
	    <option value="">B.Farma</option> 
	    <option value="">B.B.A</option> 
	    <option value="">L.L.B</option> 
	    <option value="">B.E</option>
	    </select>
	</dd>
    <br />
    <dt><label for="role"><font color="#FF6600" style="font-size:15px">* </font>Institute/University Name:</label></dt>
	<dd id="drop_box">
		<select id="" name=""  style="width:300px;">
        <option value="">Select Institute/Qualification</option>
		<option value="">Andra University</option> 
	    <option value="">Bhopal University</option> 
	    <option value="">Delhi University</option> 
	    <option value="">Kurukshetra University</option> 
	    <option value="">Panjab University</option> 
	    <option value="">I.P University</option> 
	    <option value="">M.D University</option>
	    </select>
	</dd>
    <br />
    <dt>
		<label for="firstname" id="salary"><font color="#FF6600" style="font-size:15px">* </font>Year of Passing:</label>
	</dt>
	<dd id="list-box">
		<select name="exp_min">
        			<option value="">From</option>
  					<option value="">1970</option> 
                    <option value="">1972</option> 
  					<option value="">1973</option>
                    <option value="">1974</option> 
  					<option value="">1975</option> 
  					<option value="">1976</option> 
  					<option value="">1977</option> 
  					<option value="">1978</option>
                    <option value="">1979</option> 
  					<option value="">1980</option>
                    <option value="">1980</option> 
                    <option value="">1982</option> 
  					<option value="">1983</option>
                    <option value="">1984</option> 
  					<option value="">1985</option> 
  					<option value="">1986</option> 
  					<option value="">1987</option> 
  					<option value="">1988</option>
                    <option value="">1989</option> 
  					<option value="">1990</option>
                    <option value="">1991</option> 
                    <option value="">1992</option> 
  					<option value="">1993</option>
                    <option value="">1994</option> 
  					<option value="">1995</option> 
  					<option value="">1996</option> 
  					<option value="">1997</option> 
  					<option value="">1998</option>
                    <option value="">2000</option> 
  					<option value="">2001</option>
                    <option value="">2002</option> 
                    <option value="">2003</option> 
  					<option value="">2004</option>
                    <option value="">2005</option> 
  					<option value="">2006</option> 
  					<option value="">2007</option> 
  					<option value="">2008</option> 
  					<option value="">2009</option>
                    <option value="">2010</option> 
  					<option value="">2011</option> 
				</select> 
				<strong> to </strong>
                <select name="exp_max" class="list-box"> 
  					<option value="">To</option>
  					<option value="">1970</option> 
                    <option value="">1972</option> 
  					<option value="">1973</option>
                    <option value="">1974</option> 
  					<option value="">1975</option> 
  					<option value="">1976</option> 
  					<option value="">1977</option> 
  					<option value="">1978</option>
                    <option value="">1979</option> 
  					<option value="">1980</option>
                    <option value="">1980</option> 
                    <option value="">1982</option> 
  					<option value="">1983</option>
                    <option value="">1984</option> 
  					<option value="">1985</option> 
  					<option value="">1986</option> 
  					<option value="">1987</option> 
  					<option value="">1988</option>
                    <option value="">1989</option> 
  					<option value="">1990</option>
                    <option value="">1991</option> 
                    <option value="">1992</option> 
  					<option value="">1993</option>
                    <option value="">1994</option> 
  					<option value="">1995</option> 
  					<option value="">1996</option> 
  					<option value="">1997</option> 
  					<option value="">1998</option>
                    <option value="">2000</option> 
  					<option value="">2001</option>
                    <option value="">2002</option> 
                    <option value="">2003</option> 
  					<option value="">2004</option>
                    <option value="">2005</option> 
  					<option value="">2006</option> 
  					<option value="">2007</option> 
  					<option value="">2008</option> 
  					<option value="">2009</option>
                    <option value="">2010</option> 
  					<option value="">2011</option>  
				</select> 
                           
	</dd>
    <dt><label for="role"><font color="#FF6600" style="font-size:15px">* </font>PG Qualification:</label></dt>
	<dd id="drop_box">
		<select id="" name=""  style="width:300px;">
        <option value="">Select Role</option>
		<option value="">B.Com(pass)</option> 
	    <option value="">B.A(pass)</option> 
	    <option value="">B.Sc(pass)</option> 
	    <option value="">B.Farma</option> 
	    <option value="">B.B.A</option> 
	    <option value="">L.L.B</option> 
	    <option value="">B.E</option>
	    </select>
	</dd>
    <br />
    <dt><label for="role"><font color="#FF6600" style="font-size:15px">* </font>Institute/University Name:</label></dt>
	<dd id="drop_box">
    	<select id="" name=""  style="width:300px;">
		<option value="">Select Institute/Qualification</option>
		<option value="">Andra University</option> 
	    <option value="">Bhopal University</option> 
	    <option value="">Delhi University</option> 
	    <option value="">Kurukshetra University</option> 
	    <option value="">Panjab University</option> 
	    <option value="">I.P University</option> 
	    <option value="">M.D University</option>
	    </select>
	</dd>
    <br />
    <dt>
		<label for="firstname" id="salary"><font color="#FF6600" style="font-size:15px">* </font>Year of Passing:</label>
	</dt>
	<dd id="list-box">
		<select name="exp_min">
        			<option value="">From</option>
  					<option value="">1970</option> 
                    <option value="">1972</option> 
  					<option value="">1973</option>
                    <option value="">1974</option> 
  					<option value="">1975</option> 
  					<option value="">1976</option> 
  					<option value="">1977</option> 
  					<option value="">1978</option>
                    <option value="">1979</option> 
  					<option value="">1980</option>
                    <option value="">1980</option> 
                    <option value="">1982</option> 
  					<option value="">1983</option>
                    <option value="">1984</option> 
  					<option value="">1985</option> 
  					<option value="">1986</option> 
  					<option value="">1987</option> 
  					<option value="">1988</option>
                    <option value="">1989</option> 
  					<option value="">1990</option>
                    <option value="">1991</option> 
                    <option value="">1992</option> 
  					<option value="">1993</option>
                    <option value="">1994</option> 
  					<option value="">1995</option> 
  					<option value="">1996</option> 
  					<option value="">1997</option> 
  					<option value="">1998</option>
                    <option value="">2000</option> 
  					<option value="">2001</option>
                    <option value="">2002</option> 
                    <option value="">2003</option> 
  					<option value="">2004</option>
                    <option value="">2005</option> 
  					<option value="">2006</option> 
  					<option value="">2007</option> 
  					<option value="">2008</option> 
  					<option value="">2009</option>
                    <option value="">2010</option> 
  					<option value="">2011</option> 
				</select> 
				<strong> to </strong>
                <select name="exp_max" class="list-box"> 
  					<option value="">To</option>
  					<option value="">1970</option> 
                    <option value="">1972</option> 
  					<option value="">1973</option>
                    <option value="">1974</option> 
  					<option value="">1975</option> 
  					<option value="">1976</option> 
  					<option value="">1977</option> 
  					<option value="">1978</option>
                    <option value="">1979</option> 
  					<option value="">1980</option>
                    <option value="">1980</option> 
                    <option value="">1982</option> 
  					<option value="">1983</option>
                    <option value="">1984</option> 
  					<option value="">1985</option> 
  					<option value="">1986</option> 
  					<option value="">1987</option> 
  					<option value="">1988</option>
                    <option value="">1989</option> 
  					<option value="">1990</option>
                    <option value="">1991</option> 
                    <option value="">1992</option> 
  					<option value="">1993</option>
                    <option value="">1994</option> 
  					<option value="">1995</option> 
  					<option value="">1996</option> 
  					<option value="">1997</option> 
  					<option value="">1998</option>
                    <option value="">2000</option> 
  					<option value="">2001</option>
                    <option value="">2002</option> 
                    <option value="">2003</option> 
  					<option value="">2004</option>
                    <option value="">2005</option> 
  					<option value="">2006</option> 
  					<option value="">2007</option> 
  					<option value="">2008</option> 
  					<option value="">2009</option>
                    <option value="">2010</option> 
  					<option value="">2011</option>  
				</select> 
                           
	</dd>
    <dt> <h4><u>Additional Filter</u></h4></dt>
    <dt>
		<label for="firstname" id="salary"><font color="#FF6600" style="font-size:15px">* </font>Candidate Age:</label>
	</dt>
	<dd id="list-box">
		<select name="exp_min">
        			<option value="">Min</option>
  					<option value="">18</option> 
                    <option value="">19</option> 
  					<option value="">20</option>
                    <option value="">21</option> 
  					<option value="">22</option> 
  					<option value="">23</option> 
  					<option value="">24</option> 
  					<option value="">25</option>
                    <option value="">26</option> 
  					<option value="">27</option>
                    <option value="">28</option> 
                    <option value="">29</option> 
  					<option value="">30</option>
                    <option value="">31</option> 
  					<option value="">32</option> 
  					<option value="">33</option> 
  					<option value="">34</option> 
  					<option value="">35</option>
                    <option value="">36</option> 
  					<option value="">37</option>
                    <option value="">38</option> 
                    <option value="">39</option> 
  					<option value="">40</option>
                    <option value="">41</option> 
  					<option value="">42</option> 
  					<option value="">43</option> 
  					<option value="">44</option> 
  					<option value="">45</option>
                    <option value="">46</option> 
  					<option value="">47</option>
                    <option value="">48</option> 
                    <option value="">49</option> 
  					<option value="">50</option>
                    <option value="">51</option> 
  					<option value="">52</option> 
  					<option value="">53</option> 
  					<option value="">54</option> 
  					<option value="">55</option>
                    <option value="">56</option> 
  					<option value="">57</option>
                    <option value="">58</option>
                    <option value="">59</option> 
  					<option value="">60</option> 
				</select> 
				<strong> to </strong>
                <select name="exp_max" class="list-box"> 
  					<option value="">Max</option>
  					<option value="">18</option> 
                    <option value="">19</option> 
  					<option value="">20</option>
                    <option value="">21</option> 
  					<option value="">22</option> 
  					<option value="">23</option> 
  					<option value="">24</option> 
  					<option value="">25</option>
                    <option value="">26</option> 
  					<option value="">27</option>
                    <option value="">28</option> 
                    <option value="">29</option> 
  					<option value="">30</option>
                    <option value="">31</option> 
  					<option value="">32</option> 
  					<option value="">33</option> 
  					<option value="">34</option> 
  					<option value="">35</option>
                    <option value="">36</option> 
  					<option value="">37</option>
                    <option value="">38</option> 
                    <option value="">39</option> 
  					<option value="">40</option>
                    <option value="">41</option> 
  					<option value="">42</option> 
  					<option value="">43</option> 
  					<option value="">44</option> 
  					<option value="">45</option>
                    <option value="">46</option> 
  					<option value="">47</option>
                    <option value="">48</option> 
                    <option value="">49</option> 
  					<option value="">50</option>
                    <option value="">51</option> 
  					<option value="">52</option> 
  					<option value="">53</option> 
  					<option value="">54</option> 
  					<option value="">55</option>
                    <option value="">56</option> 
  					<option value="">57</option>
                    <option value="">58</option>
                    <option value="">59</option> 
  					<option value="">60</option>   
				</select> 
                           
	</dd>
    <br />
    <dt><label for="role"><font color="#FF6600" style="font-size:15px">* </font>Gender:</label></dt>
	<dd id="drop_box">
    	<select id="" name=""  class="list-box">
        <option value="">Select</option>
		<option value="">Male</option>
		<option value="">Female</option>
	    </select>
	</dd>
    <br />
    <dt><label for="role"><font color="#FF6600" style="font-size:15px">* </font>Marrital Status:</label></dt>
	<dd id="drop_box">
    	<select id="" name=""  class="list-box">
        <option value="">Select</option>
		<option value="">Single/Unmarried</option>
		<option value="">Married</option>
	    </select>
	</dd>
    <br />
    <dt><label for="role"><font color="#FF6600" style="font-size:15px">* </font>Employee Type:</label></dt>
	<dd id="drop_box">
    	<select id="" name=""  class="list-box">
        <option value="">Select</option>
		<option value="">Permanent</option>
		<option value="">Temporary</option>
        <option value="">Contract Basis</option>
	    </select>
	</dd><br />
    
    
	<a href="cv_list.php"><img src="images/find_resume.png" id="button_search" style="margin-left:100%; margin-top:0px;" border="none"/></a>
    
    </dt>
</dl>
</form>
</div>  


</div>

<!-- Footer starts from here -->
<?php include "includes/footer.php";?>
<!-- Footer ends here -->
</div>
</body>
</html>

