<?php session_start();
include "config.php";
$sql_city=mysql_query("select * from cities where city not like '%Other%'");
$nume_city=mysql_num_rows($sql_city);
$i_city=0;

$sql_key=mysql_query("select * from keywords");
$nume_key=mysql_num_rows($sql_key);
$i_key=0;


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Naukrihut</title>

<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/styles.css" />
<link rel="stylesheet" type="text/css" href="css/layout.css" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />

<!--Auto cmplete for location js  css starts here-->

<script language="javascript" type="text/javascript" src="actb.js"></script>
<script language="javascript" type="text/javascript" src="common.js"></script>
<script type="text/javascript" src="prettyForms.js"></script>
<script type="text/javascript">
var loc=new Array(<?php while($row_city=mysql_fetch_array($sql_city)){?>
<?php echo "'".$row_city[city]."'";?><?php $i_city=$i_city+1;if($i_city!=$nume_city){echo ", ";};}?>);
</script>
<!--Auto complete for location js & css ends here-->

<script type="text/javascript">

function check_jobseeker_login(evt)
{
	var frm=document.jobseeker_login;
	
	if(frm.login_user.value=="")
	{
		//alert("Please Enter fname Type...!!!");
		frm.login_user.focus();
		//document.getElementById("show01").style.display='block';
		return false;
	}
	if(frm.login_pwd.value=="")
	{
		//alert("Please select message...!!!");
		frm.login_pwd.focus();
		//document.getElementById("show01").style.display='block';
		return false;
	 }
	else
	{
		return true;
		document.getElementById("show01").style.display='block';
	}
}


function check_search(evt)
{
	var frm=document.searchform;
	if( (frm.keyword.value=="") && (frm.functional_area.value=="") && (frm.location.value=="") && (frm.exp_min.value=="") && (frm.exp_max.value=="") )
	{
		alert("Please fill atleast 1 field...!!!");
		frm.keyword.focus();
		//document.getElementById("show01").style.display='block';
		return false;
	}
	else
	{
		return true;
		document.getElementById("show01").style.display='block';
	}
}


</script>

<!--Auto cmplete for keyword js  css starts here-->
<script type="text/javascript">
var keyword = [
	<?php while($row_key=mysql_fetch_array($sql_key)){
	echo '"'.$row_key[keyword].'"';
	$i_key=$i_key+1;if($i_key!=$nume_key){echo ", ";};
	}
?>
];
</script>
<script type="text/javascript" src="js/map.js"></script>
<script type="text/javascript" src="autocmplte/jquery.js"></script>
<script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>

<script type='text/javascript' src='autocmplte/jquery.autocomplete.js'></script>
<link rel="stylesheet" type="text/css" href="autocmplte/jquery.autocomplete.css" />
<script type="text/javascript">
$().ready(function() {
$("#suggest1").focus().autocomplete(keyword);
});
</script>
<!--Auto cmplete for keyword js  css ends here-->
<style>
.ie7 .list_button{margin-left:-24px; margin-bottom:-4px; border-right:1px solid #999999;}
.list_button{margin-left:-24px; margin-bottom:-5px; border-right:1px solid #999999; border-bottom:1px solid #999999; border-left:1px solid #999999;}
.ie8 .list_button{margin-left:-24px; margin-bottom:-4px; border-right:1px solid #999999; border-bottom:1px solid #999999; border-left:1px solid #999999;}
.select_box{margin-left:0px; margin-top:0px; height:14px;}
.textbox{ margin-left:0px; margin-top:-54px; width:auto; position:fixed; background:#FFFFFF;}
.ie7 .textbox{ margin-left:0px; margin-top:0px; width:auto;  background:#FFFFFF;}
.width{width:215px;}
#count{padding-left:10px;}
.ie7 #count{padding-left:10px; margin-top:-10px;}
#advance_bar{
	height:900px; margin-top:0px; 
	background:url(images/top_bar2.png)  0 0 #FFFFFF; width:56.6%; color:#000000;
	float:left; margin-left:7px;
	border:1px solid #FFCC99;
	margin-top:5px;
	}
	
.ie7 #advance_bar{
	height:900px; margin-top:5px; 
	background:url(images/top_bar2.png)0 0 #FFFFFF; width:56.6%; color:#000000;
	float:left; margin-left:0px;
	border:1px solid #FFCC99;
	}
#jobs{margin-left:-320px;}
.ie7 #joblist_div{margin-left:330px;}
.ie7 #joblist_location_div{margin-left:330px;}
#job_second{margin-left:45%; margin-top:-153%;}
.ie7 #job_second{margin-left:45%; margin-top:-143%;}
#location_second{margin-left:45%; margin-top:-69.1%;}
.ie7 #location_second{margin-left:45%; margin-top:-63.5%;}
table
{ margin: 5px 0 5px 0; margin-top:0%; }

table tr th, table tr td
{ background:#CC99FF;
  color: #FFF;
  padding: 5px 4px;
  text-align: left;}
  
table tr td
{ background: #FFFFFF;
  color:#9966CC;
  border: 1px solid #FFCCCC;}
</style>
</head>
<!--[if IE 7]><body class="ie7"><![endif]-->
<!--[if IE 8]><body class="ie8"><![endif]-->
<!--[if IE 9]><body class="ie9"><![endif]-->
<body>

<!-- Header starts from here -->
<?php include "includes/header.php";?>
    <!--content starts from here-->
 <div align="center">  
    <div id="content" align="left">    
    	
        
        <form name="searchform" id="form_box" action="search.php" method="get" onsubmit="return check_search(event)">
        
        <p style="padding-left:10px; color:#FF9900;"><strong>Job Type: </strong> 
        <input type="radio" name="type" value="All" checked="checked"/> All
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="type" value="Permanent"  />Permanent <!--(101)-->
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="type" value="Temporary" /> Temporary <!--(101)-->
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="type" value="Contract" />Contract <!--(101)-->
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="type" value="Part-time" />Part-time <!--(101)--></p>
        
		<ul class="key">
        <li class="keyword"><p><strong>Keyword</strong></p>
            <span><input type="text" name="keyword" id="suggest1" size="27" maxlength="50" /></span>
        </li>

       	<li class="location" style="padding-right:20px;"><p><strong>Location</strong></p>
			<span><input type="text" name="location" id="location" size="27" maxlength="50" /></span>
        </li>
        
        <li><p><strong>Functional Area</strong></p>
            	<span>
    <select size="1" name="functional_area" style="width:260px;">
        <option value="">Select Functional Area</option>
	<?php 
		$sql_fa=mysql_query("select * from functional_area");
		while($row_fa=mysql_fetch_array($sql_fa))
		{
	?>
    <option><?php echo $row_fa[functional_area];?></option>
    <?php }?>
    </select> </span>

        </li>
		<li style="padding:0px 20px 0px 20px;"><p><strong>Exp.</strong></p>
           		<span>
               	<select name="exp_min" class="list-box"> 
  					<option value="">Exp.</option> 
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
				</select>    
            </span>
        </li>
        
        <!--<li><p><strong>Salary Expectation</strong></p>
           		<span>
               	<select name="sal_min" class="list-box"> 
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
                <select name="sal_max" class="list-box"> 
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
				<p style="font-size:9px; color:#999999; margin-top:-1px;"> In Lakhs Per Annum</p>
            	</span>
   		  </li>-->
        </ul>
        <a href="#"><input type="image" id="button" src="images/search_button.png" name="search" style="margin-top:-5.7%; margin-right:3.5%" /> </a>
       
    </form>   	
<!--<div id="topNav_left" align="left">
<p style="color:#663399; margin-top:7px;"><strong style="padding:16px;">&nbsp;&nbsp;&nbsp; Popular Employers</strong></p>
	<div style="padding:0px 10px 0px 23px;">
    <?php $sql_left_banner=mysql_query("select * from left_banner where enable = 'yes'");
					while($row_left_banner=mysql_fetch_array($sql_left_banner)){
	?>
    <a href="http://<?php echo $row_left_banner[link];?>" target="_blank"><img src="images/left_banner_image/<?php echo $row_left_banner[image_banner];?>" border="0" align="center" style="border:none; padding-bottom:5px;"></a>
    <?php }?>
	</div>
</div>-->
		<div style="width:142%; border-right:1px solid #FFCCCC;" >
        	<ul id="advance_bar" style="margin-left:0%;">
				<li id="jobs"><font color="#FF6600"><strong>Find jobs by Location</strong></font>
                </li>
                
          		                       

         <div id="box" align="left" style="margin-top:1%;">        
         <!-- insert map content here --> 
        <div id="map-box"> 
        <div id="container-map">
          <img src="images/map.jpg" height="350" width="280" alt="rp" name="map1" border="0" usemap="#map1Map" id="map" />
           <map name="map1Map" id="map1Map">
                <area class="sw" href="#"  shape="poly" coords="156,340,164,322,167,316,166,300,145,301,154,296,154,300,136,303,130,317,105,343,125,334" alt="sw"  title="South West(108)" /> 
             <area class="s" href="#"  shape="poly" coords="180,271,201,269,197,323,174,324,174,324,166,312,171,299" alt="s" title="South Jobs(108)" /> 
             <area class="se" href="#"  shape="poly" coords="200,319,253,315,275,299,268,287,261,279,255,279,202,266" alt="se" title="London & South East Jobs(108)" />
             <area class="e" href="#"  shape="poly" coords="231,271,255,279,270,267,276,241,256,225,246,238,240,240,232,248,221,264,223,265" alt="e" title="East Jobs(108)" />
             <area class="em" href="#"  shape="poly" coords="239,238,215,265,198,214,217,197,235,196,245,217" alt="em" title="East Midlands(208)" />
             <area class="wm" href="#"  shape="poly" coords="173,272,210,263,197,218,171,231" alt="wm" title="West Midlands Jobs(608)" />
             <area class="w" href="#"  shape="poly" coords="163,210,135,208,135,238,141,236,147,254,119,267,123,281,144,279,154,288,176,288" alt="w" title="Wales Jobs(108)" />
                <area class="yl" href="#"  shape="poly" coords="208,209,212,196,240,196,228,170,208,158,190,160,183,183,189,189,193,206" alt="yl"  title="Yorkshire & Lincolnshire Jobs(108)" />
                <area  class="nw" href="#"  shape="poly" coords="186,209,169,209,174,184,163,187,156,169,163,155,160,153,176,137,176,185,186,185" alt="nw" title="North West England Jobs(567)" class="vtip"/>     
                <area class="ne" href="#"  shape="poly" coords="190,157,207,154,211,157,202,124,198,113,178,139" alt="ne" title="North East England Jobs(870)"  />
             <area class="scot" href="#" shape="poly" coords="163,148,195,117,180,105,166,109,173,99,182,95,175,88,181,87,201,44,196,37,165,37,144,46,161,27,169,9,172,-4,147,2,128,-3,100,10,89,42,89,50,109,64,109,74,98,78,98,93,112,92,116,103,109,133,114,133,104,108,135,126,124,148,127,156,134,154,140,161" alt="Scot" title="Scotland Jobs(108)" />
                <area class="ni" href="#"  shape="poly" coords="122,167,107,183,101,184,93,181,89,170,80,173,81,178,79,179,65,165,68,156,82,149,90,138,101,134,109,134" alt="ni" title="Northern Ireland Jobs(108)" />
               
          <area class="ri" href="#"  shape="poly" coords="57,167,57,162,23,173,16,198,11,271,48,276,27,276,91,256,104,230,100,186"  alt="ri"  title="Republic of Ireland(99)"/>
          </map>
        </div> <!--#container-map-->

        <div id="areas">
           
            
            <div id="counties">
            
                <!--start-->
                <div id="st-c" class="counties-container">
                    <p class="tip"><strong>Please select the your regions located on the <font color="#FF9933">Map</font> and find best jobs selecting location you wish to cover </strong></p>
                    <p class="tip">Tip: Double clicking a region will select all counties in that region...
                    To find best jobs in your Location please select your location and click on the job listed below</p></p>
                    
                   <img src="images/topbest.gif" style="margin-left:20%;" />
                </div>
            
                <!--nw-->
                <div id="nw" class="counties-container">
                    <h2 style="color:#663399">North West</h2>
                     
                    <p class="select"><a class="selectall" title="Select All"  style="color:#FF9933">Select All</a> | <a class="deselectall" title="Deselect All" style="color:#FF9933">Deselect All</a></p>
                    <fieldset class="nw-t" style="width:100%;">
                        <input type="checkbox" /><label>Greater Manchester <font color="#FF9900" style="font-size:9px"> (20)</font></label>
                        <input type="checkbox" /><label>Lancashire <font color="#FF9900" style="font-size:9px"> (33)</font></label>
                        <input type="checkbox" /><label>Merseyside <font color="#FF9900" style="font-size:9px"> (2)</font></label>
                        <input type="checkbox" /><label>Cheshire <font color="#FF9900" style="font-size:9px"> (132)</font></label>
                        <input type="checkbox" /><label>Cumbria <font color="#FF9900" style="font-size:9px"> (25)</font></label>
                        
                    </fieldset>
                    
                </div>
                
                
                <!--ne-->
                <div id="ne" class="counties-container">
                    <h2 style="color:#663399">North East</h2>
                    <p class="select"><a class="selectall" title="Select All" style="color:#FF9933">Select All</a> | <a class="deselectall" title="Deselect All" style="color:#FF9933">Deselect All</a></p>
                    <fieldset class="ne-t" style="width:100%;">
                        <input type="checkbox" /><label>County Durham <font color="#FF9900" style="font-size:9px"> (10)</font></label>
                        <input type="checkbox" /><label>Northumberland <font color="#FF9900" style="font-size:9px"> (20)</font></label>
                        <input type="checkbox" /><label>Tyne and Wear <font color="#FF9900" style="font-size:9px"> (300)</font></label>
                        <input type="checkbox" /><label>Tees Valley <font color="#FF9900" style="font-size:9px"> (120)</font></label>
                    </fieldset>           
                </div>
                
                <!--yl-->
                <div id="yl" class="counties-container">
                    <h2 style="color:#663399">Yorkshire &amp; Lincolnshire</h2>
        <p class="select"><a class="selectall" title="Select All" style="color:#FF9933">Select All</a> | <a class="deselectall" title="Deselect All" style="color:#FF9933">Deselect All</a></p>
                    <fieldset class="yl-t" style="width:100%;">
                        <input type="checkbox" /><label>Yorkshire and the Humber <font color="#FF9900" style="font-size:9px"> (33)</font></label>
                        <input type="checkbox" /><label>West Yorkshire <font color="#FF9900" style="font-size:9px"> (7)</font></label>
                        <input type="checkbox" /><label>South Yorkshire <font color="#FF9900" style="font-size:9px"> (9)</font></label>
                        <input type="checkbox" /><label>East Riding of Yorkshire <font color="#FF9900" style="font-size:9px"> (40)</font></label>
                        <input type="checkbox" /><label>North Yorkshire <font color="#FF9900" style="font-size:9px"> (80)</font></label>
                        <input type="checkbox" /><label>North Lincolnshire <font color="#FF9900" style="font-size:9px"> (10)</font></label>
                        <input type="checkbox" /><label>North East Lincolnshire <font color="#FF9900" style="font-size:9px"> (0)</font></label>
                    </fieldset>
                </div>
                
                <!--wm-->
                <div id="wm" class="counties-container">
                    <h2 style="color:#663399">West Midlands</h2>
        <p class="select"><a class="selectall" title="Select All" style="color:#FF9933">Select All</a> | <a class="deselectall" title="Deselect All" style="color:#FF9933">Deselect All</a></p>
                    <fieldset class="wm-t" style="width:100%;">
                        <input type="checkbox" /><label>Staffordshire <font color="#FF9900" style="font-size:9px"> (44)</font></label>
                        <input type="checkbox" /><label>Worcestershire <font color="#FF9900" style="font-size:9px"> (40)</font></label>
                        <input type="checkbox" /><label>Warwickshire <font color="#FF9900" style="font-size:9px"> (40)</font></label>
                        <input type="checkbox" /><label>Shropshire <font color="#FF9900" style="font-size:9px"> (30)</font></label>
                        <input type="checkbox" /><label>Herefordshire <font color="#FF9900" style="font-size:9px"> (20)</font></label>
                    </fieldset>
                </div>
                
                <!--em-->
                <div id="em" class="counties-container">
                    <h2 style="color:#663399">East Midlands</h2>
        <p class="select"><a class="selectall" title="Select All" style="color:#FF9933">Select All</a> | <a class="deselectall" title="Deselect All" style="color:#FF9933">Deselect All</a></p>
                    <fieldset class="em-t" style="width:100%;">
                        <input type="checkbox" /><label>Derbyshire <font color="#FF9900" style="font-size:9px"> (0)</font></label>
                        <input type="checkbox" /><label>Nottinghamshire <font color="#FF9900" style="font-size:9px"> (4)</font></label>
                        <input type="checkbox" /><label>Lincolnshire <font color="#FF9900" style="font-size:9px"> (34)</font></label>
                        <input type="checkbox" /><label>Leicestershire <font color="#FF9900" style="font-size:9px"> (04)</font></label>
                        <input type="checkbox" /><label>Rutland <font color="#FF9900" style="font-size:11px"> (54)</font></label>
                        <input type="checkbox" /><label>Northamptonshire <font color="#FF9900" style="font-size:9px"> (40)</font></label>
                    </fieldset>
                    
                </div>
                
                <!--sw-->
                <div id="sw" class="counties-container">
                    <h2 style="color:#663399">South West</h2>
                    <p class="select"><a class="selectall" title="Select All" style="color:#FF9933">Select All</a> | <a class="deselectall" title="Deselect All" style="color:#FF9933">Deselect All</a></p>
                    <fieldset class="sw-t" style="width:100%;">
                        <input type="checkbox" /><label>Somerset <font color="#FF9900" style="font-size:9px"> (54)</font></label>
                        <input type="checkbox" /><label>Bristol <font color="#FF9900" style="font-size:9px"> (13)</font></label>
                        <input type="checkbox" /><label>Gloucestershire <font color="#FF9900" style="font-size:9px"> (2)</font></label>
                        <input type="checkbox" /><label>Wiltshire <font color="#FF9900" style="font-size:9px"> (30)</font></label>
                        <input type="checkbox" /><label>Dorset <font color="#FF9900" style="font-size:9px"> (14)</font></label>
                        <input type="checkbox" /><label>Devon <font color="#FF9900" style="font-size:9px"> (40)</font></label>
                        <input type="checkbox" /><label>Cornwall <font color="#FF9900" style="font-size:9px"> (0)</font></label>
                    </fieldset>
                </div>
                
                <!--e-->
                <div id="e" class="counties-container">
                    <h2 style="color:#663399">East</h2>
                    <p class="select"><a class="selectall" title="Select All" style="color:#FF9933">Select All</a> | <a class="deselectall" title="Deselect All" style="color:#FF9933" >Deselect All</a></p>
                    <fieldset class="e-t" style="width:100%;">
                        <input type="checkbox" /><label>Essex <font color="#FF9900" style="font-size:9px"> (15)</font></label>
                        <input type="checkbox" /><label>Hertfordshire <font color="#FF9900" style="font-size:9px"> (400)</font></label>
                        <input type="checkbox" /><label>Bedfordshire <font color="#FF9900" style="font-size:9px"> (14)</font></label>
                        <input type="checkbox" /><label>Cambridgeshire <font color="#FF9900" style="font-size:9px"> (40)</font></label>
                        <input type="checkbox" /><label>Norfolk <font color="#FF9900" style="font-size:9px"> (30)</font></label>
                        <input type="checkbox" /><label>Suffolk <font color="#FF9900" style="font-size:9px"> (10)</font></label>
                    </fieldset>
                    
                </div>
                
                <!--s-->
                <div id="s" class="counties-container">
                    <h2 style="color:#663399">South</h2>
                    <p class="select"><a class="selectall" title="Select All" style="color:#FF9933">Select All</a> | <a class="deselectall" title="Deselect All" style="color:#FF9933">Deselect All</a></p>
                    <fieldset class="s-t" style="width:100%;">
                        <input type="checkbox" /><label>Berkshire <font color="#FF9900" style="font-size:9px"> (40)</font></label>
                        <input type="checkbox" /><label>Hampshire <font color="#FF9900" style="font-size:9px"> (40)</font></label>
                        <input type="checkbox" /><label>Wiltshire <font color="#FF9900" style="font-size:9px"> (30)</font></label>
                        <input type="checkbox" /><label>Oxford <font color="#FF9900" style="font-size:9px"> (20)</font></label>
                    </fieldset>
                </div>
                
                <!--se-->
                <div id="se" class="counties-container">
                    <h2 style="color:#663399">South East</h2>
                    <p class="select"><a class="selectall" title="Select All" style="color:#FF9933">Select All</a> | <a class="deselectall" title="Deselect All" style="color:#FF9933">Deselect All</a></p>
                    <fieldset class="se-t" style="width:100%;">
                        <input type="checkbox" /><label>Greater London <font color="#FF9900" style="font-size:9px"> (100)</font></label>
                        <input type="checkbox" /><label>Kent <font color="#FF9900" style="font-size:9px"> (32)</font></label>
                        <input type="checkbox" /><label>East Sussex <font color="#FF9900" style="font-size:9px"> (2)</font></label>
                        <input type="checkbox" /><label>West Sussex <font color="#FF9900" style="font-size:9px"> (12)</font></label>
                        <input type="checkbox" /><label>Surrey <font color="#FF9900" style="font-size:9px"> (40)</font></label>
                        <input type="checkbox" /><label>Hampshire <font color="#FF9900" style="font-size:9px"> (40)</font></label>
                        <input type="checkbox" /><label>Buckinghamshire <font color="#FF9900" style="font-size:9px"> (33)</font></label>
                    </fieldset>
                </div>
                
                <!--scot-->
                <div id="scot" class="counties-container">
                    <h2 style="color:#663399">Scotland</h2>
                    <p class="select" ><a class="selectall" title="Select All" style="color:#FF9933">Select All</a> | <a class="deselectall" title="Deselect All" style="color:#FF9933">Deselect All</a></p>
                    <fieldset class="scot-t" style="width:100%;">
                        <input type="checkbox" /><label>Angus &amp; Dundee <font color="#FF9900" style="font-size:9px"> (30)</font></label>
                        <input type="checkbox" /><label>Argyll <font color="#FF9900" style="font-size:9px"> (100)</font></label>
                        <input type="checkbox" /><label>Ayrshire <font color="#FF9900" style="font-size:9px"> (100)</font></label>
                        <input type="checkbox" /><label>Dumfries &amp; Galloway <font color="#FF9900" style="font-size:9px"> (20)</font></label>
                        <input type="checkbox" /><label>Edinburgh &amp; Lothians <font color="#FF9900" style="font-size:9px"> (30)</font></label>
                        <input type="checkbox" /><label>Fife <font color="#FF9900" style="font-size:9px"> (100)</font></label>
                        <input type="checkbox" /><label>Glasgow &amp; Clyde Valley <font color="#FF9900" style="font-size:9px"> (3)</font></label>
                        <input type="checkbox" /><label>The Scottish Highlands <font color="#FF9900" style="font-size:9px"> (2)</font></label>
                        <input type="checkbox" /><label>Orkney <font color="#FF9900" style="font-size:9px"> (1)</font></label>
                        <input type="checkbox" /><label>The Outer &amp; Inner Hebrides <font color="#FF9900" style="font-size:9px"> (100)</font></label>
                        <input type="checkbox" /><label>Perthshire <font color="#FF9900" style="font-size:9px"> (12)</font></label>
                        <input type="checkbox" /><label>The Scottish Borders <font color="#FF9900" style="font-size:9px"> (3)</font></label>
                        <input type="checkbox" /><label>The Shetland Islands <font color="#FF9900" style="font-size:9px"> (4)</font></label>
                        <input type="checkbox" /><label>Stirling &amp; Trossachs <font color="#FF9900" style="font-size:9px"> (13)</font></label>
                    </fieldset>
                    
                </div>
                
                <!--ni-->
                <div id="ni" class="counties-container">
                    <h2 style="color:#663399">Northern Ireland</h2>
                    <p class="select"><a class="selectall" title="Select All" style="color:#FF9933">Select All</a> | <a class="deselectall" title="Deselect All" style="color:#FF9933">Deselect All</a></p>
                    <fieldset class="ni-t" style="width:100%;">
                        <input type="checkbox" /><label>County Antrim <font color="#FF9900" style="font-size:9px"> (100)</font></label>
                        <input type="checkbox" /><label>County Armagh <font color="#FF9900" style="font-size:9px"> (20)</font></label>
                        <input type="checkbox" /><label>County Down <font color="#FF9900" style="font-size:9px"> (20)</font></label>
                        <input type="checkbox" /><label>County Fermanagh <font color="#FF9900" style="font-size:9px"> (20)</font></label>
                        <input type="checkbox" /><label>County Londonderry <font color="#FF9900" style="font-size:9px"> (20)</font></label>
                        <input type="checkbox" /><label>County Tyrone <font color="#FF9900" style="font-size:9px"> (13)</font></label>
                    </fieldset>  
                </div>
                <!--ri-->
                <div id="ri" class="counties-container">
                    <h2 style="color:#663399">Republic of Ireland</h2>
                    <p class="select"><a class="selectall" title="Select All" style="color:#FF9933">Select All</a> | <a class="deselectall" title="Deselect All" style="color:#FF9933">Deselect All</a></p>
                    <fieldset class="ni-t" style="width:100%;">
                        <input type="checkbox" /><label>County Cork <font color="#FF9900" style="font-size:9px"> (100)</font></label>
                        <input type="checkbox" /><label>County Dublin <font color="#FF9900" style="font-size:9px"> (20)</font></label>
                        <input type="checkbox" /><label>County Galway <font color="#FF9900" style="font-size:9px"> (20)</font></label>
                        <input type="checkbox" /><label>County Killarney <font color="#FF9900" style="font-size:9px"> (20)</font></label>
                        <input type="checkbox" /><label>County Sligo <font color="#FF9900" style="font-size:9px"> (20)</font></label>
                        <input type="checkbox" /><label>County Limerick <font color="#FF9900" style="font-size:9px"> (13)</font></label>
                        <input type="checkbox" /><label>County Waterford <font color="#FF9900" style="font-size:9px"> (13)</font></label>
                        <input type="checkbox" /><label>County New Ross <font color="#FF9900" style="font-size:9px"> (13)</font></label>
                    </fieldset>  
                </div>
                
                <!--w-->
                <div id="w" class="counties-container">
                    <h2 style="color:#663399">Wales</h2>
                    <p class="select"><a class="selectall" title="Select All" style="color:#FF9933">Select All</a> | <a class="deselectall" title="Deselect All" style="color:#FF9933">Deselect All</a></p>
                    <fieldset class="w-t" style="width:100%;">
                        <input type="checkbox" /><label>Anglesey <font color="#FF9900" style="font-size:9px"> (100)</font></label>
                        <input type="checkbox" /><label>Conwy Valley <font color="#FF9900" style="font-size:9px"> (6)</font></label>
                        <input type="checkbox" /><label>Denbighshire <font color="#FF9900" style="font-size:9px"> (5)</font></label>
                        <input type="checkbox" /><label>Flint <font color="#FF9900" style="font-size:9px"> (5)</font></label>
                        <input type="checkbox" /><label>Wrexham <font color="#FF9900" style="font-size:9px"> (4)</font></label>
                        <input type="checkbox" /><label>Gwynedd <font color="#FF9900" style="font-size:9px"> (3)</font></label>
                        <input type="checkbox" /><label>Powys <font color="#FF9900" style="font-size:9px"> (2)</font></label>
                        <input type="checkbox" /><label>Cardiganshire <font color="#FF9900" style="font-size:9px"> (12)</font></label>
                        <input type="checkbox" /><label>Pembrokshire <font color="#FF9900" style="font-size:9px"> (30)</font></label>
                        <input type="checkbox" /><label>Carmathenshire <font color="#FF9900" style="font-size:9px"> (130)</font></label>
                        <input type="checkbox" /><label>Glamorgan <font color="#FF9900" style="font-size:9px"> (130)</font></label>
                        <input type="checkbox" /><label>Monmouthshire <font color="#FF9900" style="font-size:9px"> (130)</font></label>
                        <input type="checkbox" /><label>Glamorgan <font color="FF9900" style="font-size:9px"> (30)</font></label>
                    </fieldset>
                </div>
                
            </div> <!--.counties-->
            
        </div> <!--.areas-->

<div class="clear"></div>
<!-- Jobs Table starts from here-->
 <table style="width:124%; margin-top:0%; border-spacing:2px;" align="center">
          <tr ><th>Job Title</th><th>Job Title</th><th>Job Title</th><th>Job Title</th><th>Job Title</th></tr>
          <tr align="center"><td><a href="#" style="font-size:11px; color:#663399;">.Net Architect</a>  <font color="#FF6600" style="font-size:10px"> (40)</font></td>
          <td><a href="#" style="font-size:11px; color:#663399;">.Net Developer</a><font color="#FF6600" style="font-size:10px"> (44)</font></td>
          <td><a href="#" style="font-size:11px; color:#663399;">.Net Engineer</a><font color="#FF6600" style="font-size:10px"> (40)</font></td>
          <td><a href="#" style="font-size:11px; color:#663399;">.Net Framework</a><font color="#FF6600" style="font-size:10px"> (40)</font></td>
		  <td><a href="#" style="font-size:11px; color:#663399;">Unix System Administrator </a><font color="#FF6600" style="font-size:10px"> (40)</font></td>
          </tr>
		  <tr align="center"><td><a href="#" style="font-size:11px; color:#663399;">ABAP Developer</a><font color="#FF6600" style="font-size:10px"> (43)</font></td>
          <td><a href="#" style="font-size:11px; color:#663399;">SABAP SAP</a> <font color="#FF6600" style="font-size:10px"> (123)</font></td>
          <td><a href="#" style="font-size:11px; color:#663399;">Abinitio</a> <font color="#FF6600" style="font-size:10px"> (44)</font></td>
          <td><a href="#" style="font-size:11px; color:#663399;">Abinitio ETL</a><font color="#FF6600" style="font-size:10px"> (40)</font></td>
		  <td><a href="#" style="font-size:11px; color:#663399;">Unix System Engineer</a><font color="#FF6600" style="font-size:10px"> (40)</font></td>
          </tr>
          <tr align="center"><td><a href="#" style="font-size:11px; color:#663399;">AJAX Developer </a> <font color="#FF6600" style="font-size:10px"> (21)</font></td>
          <td><a href="#" style="font-size:11px; color:#663399;">Aerospace Engineer</a> <font color="#FF6600" style="font-size:10px"> (21)</font></td>
          <td><a href="#" style="font-size:11px; color:#663399;">AJAX XML</a> <font color="#FF6600" style="font-size:10px"> (3)</font></td>
          <td><a href="#" style="font-size:11px; color:#663399;">Application Developer</a><font color="#FF6600" style="font-size:10px"> (40)</font></td>
		  <td><a href="#" style="font-size:11px; color:#663399;">XML Developer </a><font color="#FF6600" style="font-size:10px"> (40)</font></td>
          </tr>
          <tr align="center"><td><a href="#" style="font-size:11px; color:#663399;">Applications Security</a> <font color="#FF6600" style="font-size:10px"> (44)</font></td>
          <td><a href="#" style="font-size:11px; color:#663399;">AS400 </a> <font color="#FF6600" style="font-size:10px"> (55)</font></td>
          <td><a href="#" style="font-size:11px; color:#663399;">ASP.net </a> <font color="#FF6600" style="font-size:10px"> (66)</font></td>
          <td><a href="#" style="font-size:11px; color:#663399;">ASP.net AJAX </a><font color="#FF6600" style="font-size:10px"> (40)</font></td>
		  <td><a href="#" style="font-size:11px; color:#663399;">XML Engineer</a><font color="#FF6600" style="font-size:10px"> (40)</font></td>
          </tr>
          <tr align="center"><td><a href="#" style="font-size:11px; color:#663399;">ASP.net C# </a> <font color="#FF6600" style="font-size:10px"> (980)</font></td>
          <td><a href="#" style="font-size:11px; color:#663399;">ASP.net Developer</a> <font color="#FF6600" style="font-size:10px"> (40)</font></td>
          <td><a href="#" style="font-size:11px; color:#663399;">AutoCAD</a> <font color="#FF6600" style="font-size:10px"> (40)</font></td>
          <td><a href="#" style="font-size:11px; color:#663399;">Business Analyst</a><font color="#FF6600" style="font-size:10px"> (40)</font></td>
		  <td><a href="#" style="font-size:11px; color:#663399;">Redhat Linux</a><font color="#FF6600" style="font-size:10px"> (40)</font></td>
          </tr>
          <tr align="center"><td><a href="#" style="font-size:11px; color:#663399;">Business Objects</a> <font color="#FF6600" style="font-size:10px"> (80)</font></td>
          <td><a href="#" style="font-size:11px; color:#663399;">C Developer</a> <font color="#FF6600" style="font-size:10px"> (40)</font></td>
          <td><a href="#" style="font-size:11px; color:#663399;">C#</a> <font color="#FF6600" style="font-size:10px"> (47)</font></td>
          <td><a href="#" style="font-size:11px; color:#663399;">C# .NET Developer</a><font color="#FF6600" style="font-size:10px"> (40)</font></td>
		  <td><a href="#" style="font-size:11px; color:#663399;">Redhat Administrator </a><font color="#FF6600" style="font-size:10px"> (40)</font></td>
          </tr>
          <tr align="center"><td><a href="#" style="font-size:11px; color:#663399;">C# ASP.NET </a> <font color="#FF6600" style="font-size:10px"> (44)</font></td>
          <td><a href="#" style="font-size:11px; color:#663399;">C# Developer </a> <font color="#FF6600" style="font-size:10px"> (40)</font></td>
          <td><a href="#" style="font-size:11px; color:#663399;">C++ Developer</a> <font color="#FF6600" style="font-size:10px"> (45)</font></td>
          <td><a href="#" style="font-size:11px; color:#663399;">CAD</a><font color="#FF6600" style="font-size:10px"> (40)</font></td>
		  <td><a href="#" style="font-size:11px; color:#663399;">Quality Assurance Engineer </a><font color="#FF6600" style="font-size:10px"> (40)</font></td>
          </tr>
          <tr align="center"><td><a href="#" style="font-size:10px; color:#663399;">CCNA </a> <font color="#FF6600" style="font-size:10px"> (40)</font></td>
          <td><a href="#" style="font-size:11px; color:#663399;">CRM Developer</a> <font color="#FF6600" style="font-size:10px"> (76)</font></td>
          <td><a href="#" style="font-size:11px; color:#663399;">Database Developer</a> <font color="#FF6600" style="font-size:10px"> (55)</font></td>
          <td><a href="#" style="font-size:11px; color:#663399;">DB2 Administrator</a><font color="#FF6600" style="font-size:10px"> (40)</font></td>
		  <td><a href="#" style="font-size:11px; color:#663399;">Project Manager</a><font color="#FF6600" style="font-size:10px"> (40)</font></td>
          </tr>
          <tr align="center"><td><a href="#" style="font-size:10px; color:#663399;">DB2 Cobol</a> <font color="#FF6600" style="font-size:10px"> (40)</font></td>
          <td><a href="#" style="font-size:11px; color:#663399;">DB2 Developer</a> <font color="#FF6600" style="font-size:10px"> (32)</font></td>
          <td><a href="#" style="font-size:11px; color:#663399;">Desktop Support</a> <font color="#FF6600" style="font-size:10px"> (23)</font></td>
          <td><a href="#" style="font-size:11px; color:#663399;">Development Manager</a><font color="#FF6600" style="font-size:10px"> (40)</font></td>
		  <td><a href="#" style="font-size:11px; color:#663399;">QA Engineer </a><font color="#FF6600" style="font-size:10px"> (40)</font></td>
          </tr>  
          <tr align="center"><td><a href="#" style="font-size:10px; color:#663399;">EJB Developer</a> <font color="#FF6600" style="font-size:10px"> (40)</font></td>
          <td><a href="#" style="font-size:11px; color:#663399;">ETL Developer</a> <font color="#FF6600" style="font-size:10px"> (32)</font></td>
          <td><a href="#" style="font-size:11px; color:#663399;">HTML Developer </a> <font color="#FF6600" style="font-size:10px"> (23)</font></td>
          <td><a href="#" style="font-size:11px; color:#663399;">Informatica Developer </a><font color="#FF6600" style="font-size:10px"> (40)</font></td>
		  <td><a href="#" style="font-size:11px; color:#663399;">PMP Project Manager </a><font color="#FF6600" style="font-size:10px"> (40)</font></td>
          </tr> 
          <tr align="center"><td><a href="#" style="font-size:10px; color:#663399;">Infrastructure Engineer </a> <font color="#FF6600" style="font-size:10px"> (40)</font></td>
          <td><a href="#" style="font-size:11px; color:#663399;">IT Director</a> <font color="#FF6600" style="font-size:10px"> (32)</font></td>
          <td><a href="#" style="font-size:11px; color:#663399;">J2EE Architect</a> <font color="#FF6600" style="font-size:10px"> (23)</font></td>
          <td><a href="#" style="font-size:11px; color:#663399;">J2EE Developer</a><font color="#FF6600" style="font-size:10px"> (40)</font></td>
		  <td><a href="#" style="font-size:11px; color:#663399;">Process Analyst </a><font color="#FF6600" style="font-size:10px"> (40)</font></td>
          </tr> 
          <tr align="center"><td><a href="#" style="font-size:10px; color:#663399;">J2EE EJB</a> <font color="#FF6600" style="font-size:10px"> (40)</font></td>
          <td><a href="#" style="font-size:11px; color:#663399;">Java Architect </a> <font color="#FF6600" style="font-size:10px"> (32)</font></td>
          <td><a href="#" style="font-size:11px; color:#663399;">Java Developer</a> <font color="#FF6600" style="font-size:10px"> (23)</font></td>
          <td><a href="#" style="font-size:11px; color:#663399;">JavaScript Developer</a><font color="#FF6600" style="font-size:10px"> (40)</font></td>
		  <td><a href="#" style="font-size:11px; color:#663399;">PHP Engineer</a><font color="#FF6600" style="font-size:10px"> (40)</font></td>
          </tr> 
          <tr align="center"><td><a href="#" style="font-size:10px; color:#663399;">JBoss-J2EE</a> <font color="#FF6600" style="font-size:10px"> (40)</font></td>
          <td><a href="#" style="font-size:11px; color:#663399;">Linux Systems Administrator </a> <font color="#FF6600" style="font-size:10px"> (32)</font></td>
          <td><a href="#" style="font-size:11px; color:#663399;">LoadRunner</a> <font color="#FF6600" style="font-size:10px"> (23)</font></td>
          <td><a href="#" style="font-size:11px; color:#663399;">Mechanical Engineer </a><font color="#FF6600" style="font-size:10px"> (40)</font></td>
		  <td><a href="#" style="font-size:11px; color:#663399;">Systems Architect</a><font color="#FF6600" style="font-size:10px"> (40)</font></td>
          </tr> 
          <tr align="center"><td><a href="#" style="font-size:10px; color:#663399;">Mobile Developer</a> <font color="#FF6600" style="font-size:10px"> (40)</font></td>
          <td><a href="#" style="font-size:11px; color:#663399;">Oracle Architect</a> <font color="#FF6600" style="font-size:10px"> (32)</font></td>
          <td><a href="#" style="font-size:11px; color:#663399;">Oracle Database Administrator</a> <font color="#FF6600" style="font-size:10px"> (23)</font></td>
          <td><a href="#" style="font-size:11px; color:#663399;">Perl Developer </a><font color="#FF6600" style="font-size:10px"> (40)</font></td>
		  <td><a href="#" style="font-size:11px; color:#663399;">PHP Developer </a><font color="#FF6600" style="font-size:10px"> (40)</font></td>
          </tr>        
        </table>   
        <!-- job table ends here-->    
              </div>
        	</ul>
		</div>		
            	<div id="login_box">
                <p style="margin-top:-4px; color:#663399;"><strong>Job Seeker's Login</strong></p>
				<form class="form_margin" action="check_login.php" method="post" name="jobseeker_login" onsubmit="return 
             	check_jobseeker_login(event)" > 
				<div class="flash-right-txt" align="left" style="margin-left:6px; color:#663399">User Name</div> 
                <a href="forgot_login_details.php"><img src="images/whats.png"  border="none" class="whats" title="forgot my Login Details"/></a>
				<input name="login_user" id="login_user" type="text" class="login-box" />
				<div class="flash-right-txt" id="password_align" align="left" style="margin-left:6px; color:#663399" >Password</div> 
				<input name="login_pwd" id="login_pwd" type="password"  class="login-box"/> <br /> 
				<div class="flash-right-txt"><font style="font-size:10px;"><a href="forgot_password.php">Forgot Password</a> | <a href="resume_step1.php">
                Register</a></font>
                <a href="employee_home.php"><input name="" type="image" src="images/login_button.png"  align="left" style="margin-top:0px;"/></div> </a>
				</form>
            	</div>
			
            
            	<div id="postresume_box" >
				<a href="#"><input type="image" align="right" src="images/post_resume.png" name="search"  style="margin-right:10px;" title="Post Resume Your" /> </a>
                <br /><br />
                <p><img src="images/arrow.png" style="margin-right:10px; margin-top:8px;"/>Find best it jobs here <br />  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;With Refine search </p>
           		<p><img src="images/arrow.png" style="margin-right:10px; margin-top:8px;"/>Reach out to more than <br />  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thousands of recruiters</p>
            	<p><img src="images/arrow.png" style="margin-right:10px;" />Privacy features ensure<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; confidential job search</p>
            	</div>
			
               <!--<div id="topNav_right" align="right">
					<p style="color:#663399; margin-top:7px;"><strong style="padding:16px;">Popular Employers&nbsp;&nbsp;&nbsp;&nbsp;</strong></p>
					<div style="padding:0px 22px 0px 13px;">
    				<?php $sql_right_banner=mysql_query("select * from right_banner where enable = 'yes'");
					while($row_right_banner=mysql_fetch_array($sql_right_banner)){
					?>
   					 <a href="http://<?php echo $row_right_banner[link];?>" target="_blank"><img src="images/right_banner_image/<?php echo $row_right_banner[image_banner];?>" border="0" align="center" style="border:none; padding-bottom:5px;"></a>
    				<?php }?>
				  </div>
      </div>-->
     </div>       
<!-- Footer starts from here -->
 <?php include "includes/footer.php";?>     
<!-- Footer ends here -->
<script type="text/javascript">
<!--
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
//
</script>

<script type="text/javascript">
var obj = actb(document.getElementById('location'),loc);
//setTimeout(function(){obj.actb_keywords = custom2;},10000);
</script>

	
</div>
</body>
</html>
 