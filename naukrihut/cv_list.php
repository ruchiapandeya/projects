<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Naukrihut</title>
<link rel="stylesheet" type="text/css" href="css/layout.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<link type="text/css" href="css/atooltip.css" rel="stylesheet"  media="screen" />
<!-- date picker related style scripts -->
	<link rel="stylesheet" href="css/datepicker.css" type="text/css" />
    <script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/datepicker.js"></script>
    <script type="text/javascript" src="js/datepicker_eye.js"></script>
    <script type="text/javascript" src="js/datepicker_layout.js"></script>
    <script type="text/javascript" src="js/jquery.atooltip.js"></script>
		<script type="text/javascript">
			$(function(){ 
				$('a.normalTip').aToolTip();
				
				
				$('a.fixedTip').aToolTip({
		    		fixed: true
				});
				
				$('a.clickTip').aToolTip({
		    		clickIt: true,
		    		tipContent: 'Mobile no. 9810286648'
				});		
				
				$('a.callBackTip').aToolTip({
					clickIt: true,
					onShow: function(){alert('I fired OnShow')},
					onHide: function(){alert('I fired OnHide')}
				});		
				
				
			}); 
		</script>
		
<!-- datepicker related style scripts -->
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


select{border:1px solid #9999FF;}
textarea{border:1px solid #9999FF;}
#checkbox input{border:1px solid #ffffff;}
#drop_box input{border:1px solid #ffffff;}

.ie7 #sizes{
	margin-left:200px;
}

/* CSS Document */


#top{
	width:255px; height:30px; 
	background:url(images/top_bar1.png) no-repeat 0 0 #FFFFFF; color:#000000;
	float:left; margin-right:0px;}
#tops{
	width:700px; height:30px; margin-left:0px;
	background:url(images/top_bar1.png) no-repeat 0 0 #FFFFFF; color:#000000;
	float:left; margin-right:0px;}
#list{width:700px; height:auto; border:2px solid #FFCCCC; margin-left:270px;}
#buttons{width:700px; height:40px; background:#FFFFCC; margin-top:20px; border-bottom:1px solid #FFFF99;}
.ie7 #buttons{width:700px; height:30px; background:#FFFFCC; margin-top:5px; border-bottom:1px solid #FFFF99;}
#job_responses{width:255px; height:690px; float:left; border:2px solid #FFCCCC; margin-left:0.3%}
#search_in{margin-left:-30px;}
.ie7 #search_in{margin-left:10px;}
#keyword{margin-left:-30px; padding-top:20px;}
.ie7 #keyword{margin-left:10px; padding-top:20px;}
#posted_on{margin-left:450px; margin-top:-1246px;}
.ie7 #posted_on{margin-left:450px; margin-top:-1395px;}
#mid{padding-bottom:10px;}
#mids{padding-bottom:30px;}
#style{padding-right:10px;}
#hover li a{color:#FFFFFF;}
#hover li a:hover{color:#000000;}
#delete_refresh{margin-left:-270px; padding-top:3px;}
.ie7 #delete_refresh{ margin-right:179px; border:none;}
#color{width:667px; height:150px; padding:10px 20px 0px 10px; border-bottom:1px solid #FFFF99;}
.ie7 #results{margin-left:-230px;}
#results{margin-left:-270px;}
#view{ float:right; margin-top:-10px;}
.ie7 #view{float:right; margin-top:-10px; margin-right:50px;}
.ie7 #second_info{margin-top:-5px;}
/*----BODY1 PANEL----*/
</style>
</head>
<!--[if IE 7]><body class="ie7"><![endif]-->
<body>
<!-- Header starts from here -->
<?php include "includes/header_employer.php";?>
<div align="center">  
<div id="content" align="left" >   
   
	<div id="job_responses">
		<div id="top" ><font color="#993399"><strong> &nbsp;&nbsp; CV's Search</strong></font></div>
        <form  action="" method="post">
		<ul id="keyword">
        <li><p><strong>Keyword</strong></p>
            <p style="margin-top:-10px;"><input type="text" name="" id="" size="24" maxlength="32" /></p>
        </li>
        <li><p><strong>Total Experience</strong></p>
        	<p style="margin-top:-10px"><select name="exp_min"> 
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
                <p style="font-size:10px; color:#999999; margin-top:-10px;"> In Years</p>
                </p>
                </li>
                <li><p><strong>Annual Salary</strong></p>
                	<p style="margin-top:-10px">
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
                <p style="font-size:10px; color:#999999; margin-top:-10px;"> (INR) In Lakhs Per Annum</p>
                    </p>
                </li>
                <li>
                	<p><strong>Location</strong></p>
                    <p style="margin-top:-10px">
                    	<input name="jobid" id="jobid" type="text"  size="24"/>
                    </p>
                </li>
        </ul>
        <ul id="search_in" >
        <li><p><strong>Industry</strong></p>
            	<p style="margin-top:-10px;"><select size="1" name="FunctionalArea" style="width:180px;">
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
    </select></p> 

        </li>
        <li><p><strong>Functional Area</strong></p>
            	<p style="margin-top:-10px;"><select size="1" name="FunctionalArea" style="width:180px;">
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
                </p>
        </li>
        <li><p><strong>Role</strong></p>
            	<p style="margin-top:-10px;"><select size="1" name="FunctionalArea" style="width:180px;">
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
                </p>
        </li>
                
        <li><p><strong>Resume Posted From</strong></p>
        <input class="inputDate1" id="inputDate1" value="06/14/2008" /> <a href="#"><img class="inputDate1" id="datepicker_img1" src="images/calender.png" border="none"/></a>
		<input class="inputDate2" id="inputDate2" value="06/14/2008" /> <a href="#"><img class="inputDate2" id="datepicker_img2" src="images/calender.png" border="none"/></a><br />
       </li>
        </ul>
        <a href="#"><img src="images/response_serach.png"  style="margin-left:120px; margin-top:7px;" border="none" /></a>
     </form>  
	</div>
    <div id="list">
    <div id="tops"><strong style="color:#993399;" style="margin-top:-5px;">&nbsp;&nbsp; 
            <a href="#" style="margin-left:550px;"><img src="images/delete_button.png"  title="Delete" border="none"/></a>
            <a href="#"><img src="images/refersh.png"  title="Refresh" border="none"/></a>
            </strong></div>
    
		<div id="buttons">
        	
    		<ul style="margin-left:250px;">
            
        	
			<li id="results"><p><font color="#FF9900">10</font> Results Found...</p></li>
        
        	<li style="margin-left:274px; margin-top:-28px;">
           	
               	<font style="font-size:11px; color:#993399;">Show</font> 
                <select> 
  					<option value="">20</option> 
  					<option>30</option>
                    <option>40</option> 
  					<option>50</option> 
  					<option>50+</option> 
				</select><font style="font-size:9px;"> per page</font>
     		</li>
        </ul>
    </div>
    <div id="title">
    	<div id="color">
        <p id="mid"  style="margin-left:2px;"><input type="checkbox" id="style"  style="margin-right:25px;" /><a href="resume_display.php"><strong>B.tech with 3.5 Years experience in Product development</strong></a><br />
        <font color="#FF9900" style="margin-top:-10px; font-size:12px; margin-left:42px"><strong>Divanker Khare</strong></font><br />
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Current Role: <strong>Product Development Engineer</strong></font><br />
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Current Company: <strong>HCL</strong></font><br />
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Annual Salary: <strong>7 Lacs</strong></font><br />
        </p>
        <div id="second_info">
        <p style="float:right; margin-top:-78px; margin-right:20px; padding-left:10px;">
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Qalification: <strong>B.Tech (2004) I.P University</strong></font><br />
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Location: <strong>Noida</strong></font><br />
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Preferred Work Location: <strong>Anywhere in India</strong></font><br />
        </p>
        </div>
        <div id="view">
        <a href="resume_display.php" ><img src="images/resume_view.png" border="none"  title="View Resume" /></a> 
        <a href="#" class="clickTip exampleTip" ><img src="images/number_view.png"  border="none"   /></a>
        </div>
        </div>
        <div id="color">
        <p id="mid"  style="margin-left:2px;"><input type="checkbox" id="style"  style="margin-right:25px;" /><a href="resume_display.php"><strong>M.tech with 5.5 Years experience in software development</strong></a><br />
        <font color="#FF9900" style="margin-top:-10px; font-size:12px; margin-left:42px"><strong>Richa Goyal</strong></font><br />
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Current Role: <strong>Java Developer</strong></font><br />
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Current Company: <strong>Cisco</strong></font><br />
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Annual Salary: <strong>5.5 Lacs</strong></font><br />
        </p>
        <div id="second_info">
        <p style="float:right; margin-top:-78px; margin-right:20px; padding-left:10px;">
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Qalification: <strong>M.Tech (2004) I.P University</strong></font><br />
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Location: <strong>Gurgaon</strong></font><br />
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Preferred Work Location: <strong>Delhi, NCR.</strong></font><br />
        </p>
        </div>
        <div id="view">
        <a href="resume_display.php" ><img src="images/resume_view.png" border="none"  title="View Resume" /></a> 
        <a href="#" class="clickTip exampleTip" ><img src="images/number_view.png"  border="none"  /></a>
        </div>
        </div>
        <div id="color">
        <p id="mid"  style="margin-left:2px;"><input type="checkbox" id="style"  style="margin-right:25px;" /><a href="#"><strong>B.tech with 6 Years experience in Product Analysis</strong></a><br />
        <font color="#FF9900" style="margin-top:-10px; font-size:12px; margin-left:42px"><strong>Sumit Sharma</strong></font><br />
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Current Role: <strong>Security Analyst</strong></font><br />
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Current Company: <strong>IBM</strong></font><br />
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Annual Salary: <strong>6 Lacs</strong></font><br />
        </p>
        <div id="second_info">
        <p style="float:right; margin-top:-78px; margin-right:20px; padding-left:10px;">
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Qalification: <strong>B.Tech (2004)Delhi University</strong></font><br />
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Location: <strong>Noida</strong></font><br />
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Preferred Work Location: <strong>Anywhere in India</strong></font><br />
        </p>
        </div>
        <div id="view">
        <a href="#" ><img src="images/resume_view.png" border="none"  title="View Resume" /></a> 
        <a href="#" class="clickTip exampleTip" ><img src="images/number_view.png"  border="none" /></a>
        </div>
        </div>
        <div id="color">
        <p id="mid"  style="margin-left:2px;"><input type="checkbox" id="style"  style="margin-right:25px;" /><a href="#"><strong>B.tech with 3.5 Years experience in Product development</strong></a><br />
        <font color="#FF9900" style="margin-top:-10px; font-size:12px; margin-left:42px"><strong>Vishal Singh</strong></font><br />
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Current Role: <strong>Tech Lead</strong></font><br />
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Current Company: <strong>Mahindra</strong></font><br />
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Annual Salary: <strong>7 Lacs</strong></font><br />
        </p>
        <div id="second_info">
        <p style="float:right; margin-top:-78px; margin-right:20px; padding-left:10px;">
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Qalification: <strong>B.Tech (2005) Delhi University</strong></font><br />
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Location: <strong>Noida</strong></font><br />
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Preferred Work Location: <strong>Anywhere in India</strong></font><br />
        </p>
        </div>
        <div id="view">
        <a href="#" ><img src="images/resume_view.png" border="none"  title="View Resume" /></a> 
        <a href="#" class="clickTip exampleTip" ><img src="images/number_view.png"  border="none" /></a>
        </div>
        </div>
        <div id="color">
        <p id="mid"  style="margin-left:2px;"><input type="checkbox" id="style"  style="margin-right:25px;" /><a href="#"><strong>B.tech with 3.5 Years experience in Product development</strong></a><br />
        <font color="#FF9900" style="margin-top:-10px; font-size:12px; margin-left:42px"><strong>Divanker Khare</strong></font><br />
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Current Role: <strong>Product Development Engineer</strong></font><br />
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Current Company: <strong>HCL</strong></font><br />
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Annual Salary: <strong>7 Lacs</strong></font><br />
        </p>
        <div id="second_info">
        <p style="float:right; margin-top:-78px; margin-right:20px; padding-left:10px;">
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Qalification: <strong>B.Tech (2005)I.P University</strong></font><br />
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Location: <strong>Noida</strong></font><br />
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Preferred Work Location: <strong>Anywhere in India</strong></font><br />
        </p>
        </div>
        <div id="view">
        <a href="#" ><img src="images/resume_view.png" border="none"  title="View Resume" /></a> 
        <a href="#" class="clickTip exampleTip" ><img src="images/number_view.png"  border="none"  /></a>
        </div>
        </div>
        <div id="color">
        <p id="mid"  style="margin-left:2px;"><input type="checkbox" id="style"  style="margin-right:25px;" /><a href="#"><strong>B.tech with 3.5 Years experience in Product development</strong></a><br />
        <font color="#FF9900" style="margin-top:-10px; font-size:12px; margin-left:42px"><strong>Divanker Khare</strong></font><br />
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Current Role: <strong>Product Development Engineer</strong></font><br />
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Current Company: <strong>HCL</strong></font><br />
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Annual Salary: <strong>7 Lacs</strong></font><br />
        </p>
        <div id="second_info">
        <p style="float:right; margin-top:-78px; margin-right:20px;">
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Qalification: <strong>B.Tech (2006) I.P University</strong></font><br />
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Location: <strong>Noida</strong></font><br />
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Preferred Work Location: <strong>Anywhere in India</strong></font><br />
        </p>
        </div>
        <div id="view">
        <a href="#" ><img src="images/resume_view.png" border="none"  title="View Resume" /></a> 
        <a href="#" class="clickTip exampleTip" ><img src="images/number_view.png"  border="none"  /></a>
        </div>
        </div>
        <div id="color">
        <p id="mid"  style="margin-left:2px;"><input type="checkbox" id="style"  style="margin-right:25px;" /><a href="#"><strong>B.tech with 3.5 Years experience in Product development</strong></a><br />
        <font color="#FF9900" style="margin-top:-10px; font-size:12px; margin-left:42px"><strong>Divanker Khare</strong></font><br />
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Current Role: <strong>Product Development Engineer</strong></font><br />
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Current Company: <strong>HCL</strong></font><br />
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Annual Salary: <strong>7 Lacs</strong></font><br />
        </p>
        <div id="second_info">
        <p style="float:right; margin-top:-78px; margin-right:20px; padding-left:10px;">
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Qalification: <strong>B.Tech (2004) I.P University</strong></font><br />
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Location: <strong>Noida</strong></font><br />
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Preferred Work Location: <strong>Anywhere in India</strong></font><br />
        </p>
        </div>
        <div id="view">
        <a href="#" ><img src="images/resume_view.png" border="none"  title="View Resume" /></a> 
        <a href="#" class="clickTip exampleTip" ><img src="images/number_view.png"  border="none" /></a>
        </div>
        </div>
        <div id="color">
        <p id="mid"  style="margin-left:2px;"><input type="checkbox" id="style"  style="margin-right:25px;" /><a href="#"><strong>B.tech with 3.5 Years experience in Product development</strong></a><br />
        <font color="#FF9900" style="margin-top:-10px; font-size:12px; margin-left:42px"><strong>Divanker Khare</strong></font><br />
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Current Role: <strong>Product Development Engineer</strong></font><br />
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Current Company: <strong>HCL</strong></font><br />
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Annual Salary: <strong>7 Lacs</strong></font><br />
        </p>
        <div id="second_info">
        <p style="float:right; margin-top:-78px; margin-right:20px; padding-left:10px;">
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Qalification: <strong>B.Tech (2004) I.P University</strong></font><br />
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Location: <strong>Noida</strong></font><br />
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Preferred Work Location: <strong>Anywhere in India</strong></font><br />
        </p>
        </div>
        <div id="view">
        <a href="#" ><img src="images/resume_view.png" border="none"  title="View Resume" /></a> 
        <a href="#" class="clickTip exampleTip" ><img src="images/number_view.png"  border="none" /></a>
        </div>
        </div>
        <div id="color">
        <p id="mid"  style="margin-left:2px;"><input type="checkbox" id="style"  style="margin-right:25px;" /><a href="#"><strong>B.tech with 3.5 Years experience in Product development</strong></a><br />
        <font color="#FF9900" style="margin-top:-10px; font-size:12px; margin-left:42px"><strong>Divanker Khare</strong></font><br />
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Current Role: <strong>Product Development Engineer</strong></font><br />
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Current Company: <strong>HCL</strong></font><br />
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Annual Salary: <strong>7 Lacs</strong></font><br />
        </p>
        <div id="second_info">
        <p style="float:right; margin-top:-78px; margin-right:20px; padding-left:10px;">
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Qalification: <strong>B.Tech (2004) I.P University</strong></font><br />
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Location: <strong>Noida</strong></font><br />
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Preferred Work Location: <strong>Anywhere in India</strong></font><br />
        </p>
        </div>
        <div id="view">
        <a href="#" ><img src="images/resume_view.png" border="none"  title="View Resume" /></a> 
        <a href="#" class="clickTip exampleTip" ><img src="images/number_view.png"  border="none" /></a>
        </div>
        </div>
        <div id="color">
        <p id="mid"  style="margin-left:2px;"><input type="checkbox" id="style"  style="margin-right:25px;" /><a href="#"><strong>B.tech with 3.5 Years experience in Product development</strong></a><br />
        <font color="#FF9900" style="margin-top:-10px; font-size:12px; margin-left:42px"><strong>Divanker Khare</strong></font><br />
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Current Role: <strong>Product Development Engineer</strong></font><br />
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Current Company: <strong>HCL</strong></font><br />
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Annual Salary: <strong>7 Lacs</strong></font><br />
        </p>
        <div id="second_info">
        <p style="float:right; margin-top:-78px; padding-right:20px; padding-left:10px;">
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Qalification: <strong>B.Tech (2004) Punjab University</strong></font><br />
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Location: <strong>Noida</strong></font><br />
        <font style="margin-top:-10px; font-size:11px; margin-left:42px">Preferred Work Location: <strong>Anywhere in India</strong></font><br />
        </p>
        </div>
       	<div id="view">
        <a href="#" ><img src="images/resume_view.png" border="none"  title="View Resume" /></a> 
        <a href="#" class="clickTip exampleTip"  ><img src="images/number_view.png"  border="none" /></a>
        </div>
        </div>
        
      </div>
  
    </div> 
 </div>

<!-- Footer starts from here -->
<?php include "includes/footer.php";?>
<!-- Footer ends here -->
</div>
</body>
</html>
