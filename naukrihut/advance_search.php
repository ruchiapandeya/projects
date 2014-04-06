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
    padding: 4px 0 2px 140px;
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
.hint {
   	display: none;
    position: absolute;
    right: -340px;
    width: 200px;
    margin-top: -4px;
    border: 1px solid #c93;
    padding: 10px 12px;
    /* to fix IE6, I can't just declare a background-color,
    I must do a bg image, too!  So I'm duplicating the pointer.gif
    image, and positioning it so that it doesn't show up
    within the box */
    background: #ffc url(images/pointer.gif) no-repeat -10px 5px;
}

/* The pointer image is hadded by using another span */
.hint .hint-pointer {
    position: absolute;
    left: -10px;
    top: 5px;
    width: 10px;
    height: 19px;
    background: url(images/pointer.gif) left top no-repeat;
}
#advance_rights
{
	width:182px;
	height:auto;
	margin-top:-43%;
	border:1px solid #FFCCCC; 
	float:right;
	margin-right:3px;
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
<p id="first_line" align="left">Home > Advance Search</p>
<div id="advance_search" align="left" style="height:450px;">
		<ul id="advance_bar">
			<li><font color="#FF6600" style="padding:0px 0px 0px 12px;"><strong>Advance Search</strong></font></li>
        </ul><br /><br />
     
<form id="form5"> 
<br />
<dl>
	
	<dt>
		<label for="lastname"><strong>Keyword:</strong></label>
	</dt>
	<dd>
		<input
			name="keyword"
			id="keyword"
			type="text" />
		<span class="hint">Job Title, Designation etc.<span class="hint-pointer">&nbsp;</span></span>
	</dd>
		<dt>
		<label for="firstname"><strong>Key Skills</strong></label>
	</dt>
	<dd>
		<input
			name="keyskills"
			id="keyskills"
			type="text" />
		<span class="hint">Key Skills.<span class="hint-pointer">&nbsp;</span></span>
	</dd>
	<dt ><label for="year"><strong>Experience:</strong></label></dt>
	<dd id="list-box">
		<select id="year" name="year">
			<option value="">Years</option>
			<option value="1066">0.5</option>
			<option value="1492">1</option>
			<option value="1776">2</option>
			<option value="1812">3</option>
			<option value="1917">4</option>
			<option value="1942">5</option>
			<option value="1999">6</option>
            <option value="1492">7</option>
			<option value="1776">8</option>
			<option value="1812">9</option>
			<option value="1917">10</option>
			<option value="1942">11</option>
			<option value="1999">12</option>
            <option value="1492">13</option>
			<option value="1776">14</option>
			<option value="1812">15</option>
			<option value="1917">16</option>
			<option value="1942">17</option>
			<option value="1999">18</option>
            <option value="1492">19</option>
			<option value="1776">20</option>
			<option value="1812">21</option>
			<option value="1917">22</option>
			<option value="1942">23</option>
			<option value="1999">24</option>
            <option value="1492">25</option>
			<option value="1776">26</option>
			<option value="1812">27</option>
			<option value="1917">28</option>
			<option value="1942">29</option>
			<option value="1999">30</option>
		</select>
        
	</dd>
    <dt>
		<label for="lastname"><strong>Location:</strong></label>
	</dt>
    <dd>
			<input
			name="location"
			id="location"
			type="text" />
        <span class="hint">Separate multiple locations by comma.<span class="hint-pointer">&nbsp;</span></span>
    </dd>
	<dt><label for="year"><strong>Job Type:</strong></label></dt>
	<dd id="list-box">
		<div id="Rolediv"><select name="role" id="ValidSelection6" style="width:200px;" >
		<option value="">Select Job Type</option>
		<option value="">Permanent</option>
		<option value="">Temporary</option>
		<option value="">Contract</option>
		<option value="">Part Time</option>
	
  </select></div>
	</dd>
	<dt><label for="year"><strong>Functional Area:</strong></label></dt>
	<dd id="list-box">
		<select id="" name=""  style="width:200px;">
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
		<label for="password"><strong>Expected Salary:</strong></label>
	</dt>
	<dd id="list-box">
		<select name="exp_min"> 
  					<option value="">Min</option> 
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
				<strong>-</strong>
                <select name="exp_max" class="list-box"> 
  					<option value="">Max</option> 
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
                <p style="font-size:10px; color:#999999; margin-top:-1px;"> In Lakhs Per Annum</p>             
	</dd>
    
    <dt>
	<a href="#"><img src="images/search_button.png" id="button_search" style="margin-left:144px; margin-top:-20px;" border="none"/></a>
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
