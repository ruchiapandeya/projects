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

#checkbox{width:500px; margin-left:140px; margin-top:-10px; padding-bottom:10px;}
#post_box{margin-top:-835px; margin-right:10px;}
.ie7 #post_box{margin-top:-820px; margin-right:10px;}
.ie8 #post_box{margin-top:-820px; margin-right:10px;}
.ie9 #post_box{margin-top:-800px; margin-right:10px;}
#advanced_search
{
	width:974px;
	height:890px;
	border:1px solid #FFCCCC;
	margin-top:-35px;
	margin-left:2px;
}
</style>
</head>
<!--[if IE 7]><body class="ie7"><![endif]-->
<!--[if IE 8]><body class="ie8"><![endif]-->
<!--[if IE 9]><body class="ie9"><![endif]-->
<body>
<!-- Header starts from here -->
<?php include "includes/header.php";?>
<!--header ends here-->
<!--content starts fron here-->
<div align="center">
<div id="content"> 

<div id="advanced_search" align="left">
		
			<p><font color="#FF6600" style="padding:0px 0px 0px 12px;"><strong>Apply Without Registration</strong></font></p>
       
     
<form id="form5"> 
<br />
<dl>
	<dt>
		<label for="firstname"><font color="#FF6600" style="font-size:15px">* </font><strong>Name:</strong></label>
	</dt>
	<dd>
		<input
			name="jobid"
			id="jobid"
			type="text" />
		<span class="hint">Please write your full name<span class="hint-pointer">&nbsp;</span></span>
	</dd>
	<dt>
		<label for="lastname"><font color="#FF6600" style="font-size:15px">* </font><strong>Email Id:</strong></label>
	</dt>
	<dd>
		<input
			name="keyword"
			id="keyword"
			type="text"
            />
		<span class="hint">Use an existing email ID. Recruiters and Naukri Hut will contact you for jobs on this email.<span class="hint-pointer">&nbsp;</span></span>
	</dd>
    <dt><label for="role"><font color="#FF6600" style="font-size:15px">* </font><strong>Role:</strong></label>
    </dt>
	<dd id="list-box">
		<select id="" name=""  style="width:215px;">
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
        <option value="Accountant">Fresher</option>  
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
		<label for="lastname"><font color="#FF6600" style="font-size:15px">* </font><strong>Contact No.:</strong></label>
	</dt>
	<dd>
		<input
			name="keyword"
			id="keyword"
			type="text"
            />
	</dd>
    
	<dt ><label for="year"><font color="#FF6600" style="font-size:15px">* </font><strong>Experience:</strong></label></dt>
	<dd id="list-box">
		<select name="exp_min"> 
  					<option value="">Year</option> 
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
  					<option>32</option> 
  					<option>33</option> 
  					<option>34</option> 
  					<option>35</option>
                    <option>35+</option>
				</select> 
				<strong>-</strong>
                <select name="exp_max" class="list-box"> 
  					<option value="">Months</option> 
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
				</select>
        
	</dd>
    <dt>
		<label for="lastname"><font color="#FF6600" style="font-size:15px">* </font><strong>Location:</strong></label>
	</dt>
    <dd id="list-box">
		<select id="" name="" >
			<option value="">City </option> 
	    	<option value="">Allahabad</option> 
        	<option value="">Delhi</option> 
        	<option value="">Bangalore</option> 
        	<option value="">Mumbai</option> 
        </select>
    </dd>
	<dt><label for="year"><font color="#FF6600" style="font-size:15px">* </font><strong>Country:</strong></label></dt>
	<dd id="list-box">
		<select id="" name="" >
			<option value="">-Select- </option> 
	    <option value="India">India</option> 
        
		</select>
	</dd>
	<dt>
		<label for="password"><font color="#FF6600" style="font-size:15px">* </font><strong>Expected Salary:</strong></label>
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
		<label for="lastname"><font color="#FF6600" style="font-size:15px">* </font><strong>Pref. Work Location:</strong></label>
	</dt>
    <dd id="list-box">
		<select id="" name="" >
			<option value="">City </option> 
	    	<option value="">Allahabad</option> 
        	<option value="">Delhi</option> 
        	<option value="">Bangalore</option> 
        	<option value="">Mumbai</option> 
        </select>
    </dd>
    <dt>
		<label for="headline"><font color="#FF6600" style="font-size:15px">* </font><strong>Attach Resume:</strong></label>
	</dt>
    <dd id="new_input"><input name="resume" type="file" class="form" />
    <p id="size" style="font-size:11px; width:290px; margin-top:0px;">Max file size: 350 Kb (Formats Supported - doc, docx, rtf)</p>
    </dd><br />
    <dd>
    <p id="size" style="width:500px;">Please paste your resume below If you do not have a word document resume</p>
    <textarea name="resume_written" cols="" rows="15" style="width:430px;"></textarea>
    </dd>
    <dt id="checkbox"><input name="contactInfo" id="contactInfo" type="checkbox" size="30"  border="none"/>
    <font color="#663399" >I've read, understood & agree to the <a href="javascript:void(0)" onclick="window.open('terms.php',
'Job Description','width=900,height=900,menubar=yes,status=yes,scrollbars=yes')" style="color:#FF3300;">Terms and Conditions</a> of naukrihut.com</font><br /></dt><br />
    <dt>
	<a href="#"><img src="images/submit_to_apply.png" style="margin-left:450px; margin-top:-10px;" border="none" /></a>
    </dt>
</dl>
</form> 
<a href="resume_step1.php"><img src="images/post_box.png" align="right" id="post_box" border="none" /></a>
</div>

 

<!-- Footer starts from here -->
<?php include "includes/footer.php";?>
<!-- Footer ends here -->
</div>
</body>
</html>
