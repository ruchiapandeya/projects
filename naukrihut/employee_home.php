<?php 
session_start();
include "config.php";
include_once("login_check.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/layout.css" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<style>
#company_logo{ float:right; margin-top:-55px; border:1px solid #999999;}

#tnt_pagination {
	display:block;
	text-align:left;
	height:22px;
	line-height:21px;
	clear:both;
	padding-top:3px;
	font-family:Arial, Helvetica, sans-serif;
	font-size:12px;
	font-weight:normal;
	margin-left:300px;
	padding:10px 0px 10px 0px;
}

.ie7 #tnt_pagination {
	display:block;
	text-align:left;
	height:22px;
	line-height:21px;
	clear:both;
	padding-top:3px;
	font-family:Arial, Helvetica, sans-serif;
	font-size:12px;
	font-weight:normal;
	margin-left:300px;
}

#tnt_pagination a:link, #tnt_pagination a:visited{
	padding:7px;
	padding-top:2px;
	padding-bottom:2px;
	border:1px solid #EBEBEB;
	margin-left:10px;
	text-decoration:none;
	background-color:#F5F5F5;
	color:#0072bc;
	width:22px;
	font-weight:normal;
}

#tnt_pagination a:hover {
	background-color:#DDEEFF;
	border:1px solid #BBDDFF;
	color:#0072BC;	
}

#tnt_pagination .active_tnt_link {
	padding:7px;
	padding-top:2px;
	padding-bottom:2px;
	border:1px solid #BBDDFF;
	margin-left:10px;
	text-decoration:none;
	background-color:#DDEEFF;
	color:#0072BC;
	cursor:default;
}

#tnt_pagination .disabled_tnt_pagination {
	padding:7px;
	padding-top:2px;
	padding-bottom:2px;
	border:1px solid #EBEBEB;
	margin-left:10px;
	text-decoration:none;
	background-color:#F5F5F5;
	color:#D7D7D7;
	cursor:default;
}
#jobs_bar{
	width:972px; height:20px; margin-top:-35px; 
	background:url(images/top_bar1.png) 0 0 #FFFFFF; color:#000000;
	margin-right:3px;
	border:1px solid #FFCCCC;
	
	}
	
.ie7 #jobs_bar{
	width:966px; height:20px; margin-top:-35px; 
	background:url(images/top_bar1.png)  0 0 #FFFFFF; color:#000000;
	float:right; margin-right:3px;
	border:1px solid #FFCCCC;
	padding-right:10px;
	}
h3{color: #660099;}
#employee li
{
	list-style:url(images/purple_arrow.png);
	margin-left:20px; margin-top:0px;
	
}
.ie7 #employee li
{
	list-style:url(images/purple_arrow.png);
	margin-left:20px; padding-bottom:10px;
	
}
.ie7 #employee_home{
width:700px;
height:auto;
margin-left:230px;
margin-top:-550px;
}
#employee_home{
width:700px;
height:auto;
margin-left:230px;
margin-top:-500px;
}
#job_responses{width:255px; height:530px; float:left; border:2px solid #FFCCCC; margin-left:2px; margin-top:-10px;}
.ie7 #job_responses{width:255px; height:570px; float:left; border:2px solid #FFCCCC; margin-left:2px; margin-top:-10px;}
#display_box{width:220px; height:135px;  margin-top:0px; margin-right:0px; float:right; border:1px solid #FFCCCC;}
.ie7 #display_box{width:220px; height:135px;  margin-top:0px; margin-right:0px;  border:1px solid #FFCCCC;}
#title{background-color:#CC99CC; width:255px; margin-left:-40px; margin-top:-12px;}
.ie7 #title{background-color:#CC99CC; width:255px; margin-left:-40px; margin-top:0px;}
-->
</style>
</head>
<!--[if IE 7]><body class="ie7"><![endif]-->
<body>
<!-- Header starts from here -->
<?php include "includes/header.php";?>
<!--header ends here-->
<!--content starts fron here-->
<div align="center"> 
<div id="content" align="left">       
		<div>
			<p id="jobs_bar" align="right"><font  style="padding:0px 10px 0px 12px;"> <strong><a href="#"><font color="#FF6600"><font color="#660099">-></font> Jobs that match your profile</font></a>  </strong></p>
        </div>
          <div id="container"> 
      	<div id="display_box">
        	<div id="slider" class="nivoSlider">
                <img src="images/slide1.png" />
                <img src="images/slide2.png" />
                <img src="images/slide3.png" />
                <img src="images/slide4.png" />
                
            </div>
			<script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
			<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
			<script type="text/javascript">
			$(window).load(function() {
				$('#slider').nivoSlider();
			});
			</script>
                
     </div> 
<div id="job_responses">
        <form  action="" method="post">
		<ul id="keyword">
        <p id="title"><font color="#FFFFFF"><strong> &nbsp;&nbsp;&nbsp;Job Search</strong></font></p>
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
                
   
        </ul>
        <a href="#"><img src="images/response_serach.png"  style="margin-left:120px; margin-top:7px;" border="none" /></a>
     </form> 
 <div id="employee_home">
        
			<ul id="employee">
            <p><font color="#FF6600">Last Updated: 11 Jun, 2011</font></p></p>
			<li >
            <p><strong style="margin-top:-5px; color:#9966CC;"> Recruiters View Your Resume: <font color="#FF9900">8</font> times</strong><br /> 
            </li>
            <li>
            <p><strong style="margin-top:-5px; color:#9966CC;">You Have Applied Total No. of Jobs: <font color="#FF9900">2</font> Jobs</strong><br /></p></li>
            <h3>Your Profile Info.</h3>
            <?php 
			$sql=mysql_query("select * from jobseeker where username = '$_SESSION[jobseeker_username]'");
			while($row=mysql_fetch_array($sql))
			{
			?>

            <li style="list-style:none">
            	<p><strong>Email:</strong> <?php echo $row['email'];?></strong></p>
                <p><strong>Mobile:</strong> <?php echo $row['telephone'];?></strong></p>
                <p><strong>Resume Headline: :</strong> <?php echo $row['resume_headline'];?></strong></p>
                <p><strong>Experience::</strong> <?php echo $row['total_exp'];?></strong></p>
                <p><strong>Location:</strong> <?php echo $row['current_location'];?>, <?php echo $row['country'];?></strong></p>
                <p><strong>Current Annual Salary:</strong> <?php echo $row['curr_annual_salary'];?> (INR)</strong></p>
            </li>
            
            <a href="profile_preview.php"><img src="images/preview.png" style="margin-left:15px;" border="none" /></a>

            </li>
            <li>
            <h3 style="color:#FF9900;">Incomplete Section in Profile</h3>
            <?php
        	if($row[university]==""){$emp1 = "<img src='images/arrow_orange.png' /><a href='#'>Graduation University</a><br />";}
			if($row[prefered_location]==""){$emp2 = "<img src='images/arrow_orange.png' /><a href='#'>Prefered Work Location</a><br />";}
			if($row[employment_status]==""){$emp3 = "<img src='images/arrow_orange.png' /><a href='#'>Employment Status</a><br />";}
			if($row[lang1]==""){$emp4 = "<img src='images/arrow_orange.png' /><a href='#'>Language Known</a><br />";}
			?>
            </li>
            <?php }?>
		</ul>	
      	</div>		
</div>      
	<div id="tnt_pagination">
	</div>	
               
 	

<!-- Footer starts from here -->
<?php include "includes/footer.php";?>
<!-- Footer ends here -->
</div>
</body>
</html>
