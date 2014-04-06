<?php 
include "config.php";

$url =  $_SERVER['REQUEST_URI'];
$ip_add=$_SERVER['REMOTE_ADDR'];

//$check_add = str_replace("%5B%5D", "[]", "".$url."");

$sql_city=mysql_query("select * from cities where city not like '%Other%'");
$nume_city=mysql_num_rows($sql_city);
$i_city=0;

$sql_key=mysql_query("select * from keywords");
$nume_key=mysql_num_rows($sql_key);
$i_key=0;

$keyword=$_GET['keyword'];
$functional_area=$_GET['functional_area'];
$exp_min=$_GET['exp_min'];
$exp_max=$_GET['exp_max'];
$sal_min=$_GET['sal_min'];
$sal_max=$_GET['exp_max'];
$role=$_GET['role'];
$industry=$_GET['industry'];
$type=$_GET['type'];
$jobID=$_GET['jobID'];

if($_GET['sorting']!=""){
	$sorting=$_GET['sorting'];
}else{
	$sorting="desc";
}

$loc=explode(",",$_GET['location']);
$loc0 = "'".$loc[0]."'";
$loc1 = "'".$loc[1]."'";
$loc2 = "'".$loc[2]."'";
$loc3 = "'".$loc[3]."'";
$loc4 = "'".$loc[4]."'";
$loc5 = "'".$loc[5]."'";

$test=array($loc0,$loc1,$loc2,$loc3,$loc4,$loc5);

$location=implode(",",$test);

include "srch_func.php";
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
-->
</style>
<!--Auto cmplete for location js  css starts here-->
<script language="javascript" type="text/javascript" src="actb.js"></script>
<script language="javascript" type="text/javascript" src="common.js"></script>
<script type="text/javascript">
var loc=new Array(<?php while($row_city=mysql_fetch_array($sql_city)){?>
<?php echo "'".$row_city[city]."'";?><?php $i_city=$i_city+1;if($i_city!=$nume_city){echo ", ";};}?>);
</script>
<!--Auto complete for location js & css ends here-->

<script type="text/javascript">
function check_search(evt)
{
	var frm=document.searchform;
	if((frm.keyword.value=="") || (frm.keyword.value=="Please enter keyword"))
	{
		alert("Please Enter Keyword...!!!");
		frm.keyword.focus();
		//document.getElementById("show01").style.display='block';
		return false;
	}
	if(frm.functional_area.value=="")
	{
		alert("Please select Functional Area...!!!");
		frm.functional_area.focus();
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
<script type="text/javascript" src="autocmplte/jquery.js"></script>
<script type='text/javascript' src='autocmplte/jquery.autocomplete.js'></script>
<link rel="stylesheet" type="text/css" href="autocmplte/jquery.autocomplete.css" />
<script type="text/javascript">
$().ready(function() {
$("#suggest1").focus().autocomplete(keyword);
});
</script>
<!--Auto cmplete for keyword js  css ends here-->

<style type="text/css">
.highlight_word{
        background-color: yellow;
}
</style>
<script type="text/javascript">
function MM_openBrWindow(theURL,winName,features) { //v2.0
 window.open(theURL,winName,features);
}
</script>

</head>
<!--[if IE 7]><body class="ie7"><![endif]-->
<body>
<!-- Header starts from here -->
<?php include "includes/header.php";?>
<!--header ends here-->
<!--content starts fron here-->
<div align="center"> 
<div id="content" align="left"> 

	<form id="keyword_box" action="search.php" method="get">
        <p style="padding-left:10px; color:#FF9900;"><strong>Search All Jobs</strong></p>
		<ul class="key">
        <li class="keyword"><p><strong>Keyword</strong></p>
            <span><input type="text" name="keyword" id="suggest1" size="25" maxlength="32" /></span>
        </li>

       	<li class="location" style="padding-right:20px;"><p><strong>Location</strong></p>
			<span><input type="text" name="location" id="location" size="25" maxlength="32" /></span>
        </li>
        
        <li><p><strong>Functional Area</strong></p>
            	<span>
    <select size="1" name="functional_area" style="width:200px;">
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
        
        <li><p><strong>Salary Expectation</strong></p>
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
   		  </li>
        </ul>
        <a href="#"><input type="image" id="button" src="images/search_button.png" name="search" style="margin-top:-53px; margin-right:0%" /> </a>
    </form>
   		<div id="refine_result">
		<p style="color:#663399; margin-top:7px;"><strong style="padding:36px;">Refines Results</strong></p>
	<div id="job_results">
          <ul>
          	<li><strong><font color="#663399" >Role</font></strong></li>
            <hr  color="#FF9900" style="margin-top:-2px;"/>
            <?php 
			while($ref_role = mysql_fetch_array($result1))
			{
				$num_role=mysql_query("SELECT COUNT(role) AS countrole FROM job_post WHERE role='$ref_role[role]' and active = 'yes' and jobValidity != 'fail'");
				while($row_role=mysql_fetch_array($num_role)){
					$show_role=$row_role[countrole];
				}
			?>
			<li><a href="search-result-new.php?keyword=<?php echo $keyword;?>&functional_area=<?php echo $functional_area;?>&location=<?php echo $_GET[location];?>&exp_min=<?php echo $exp_min;?>&exp_mix=<?php echo $exp_max;?>&sal_min=<?php echo $sal_min;?>&sal_max=<?php echo $exp_max;?>&role=<?php echo $ref_role[role];?>&industry="><?php echo $ref_role[role];?> <font color="#999999">(<?php echo $show_role;?>)</font></a></li>
            <?php }?>
            <li id="alignment"><strong><font color="#663399">Industries</font></strong></li>
            <hr  color="#FF9900" style="margin-top:-2px;"/>
            <?php 
			while($ref_indus = mysql_fetch_array($result2))
			{
				$num_indus=mysql_query("SELECT COUNT(industry) AS countindus FROM job_post WHERE industry='$ref_indus[industry]' and active = 'yes' and jobValidity != 'fail'");
				while($row_indus=mysql_fetch_array($num_indus)){
					$show_indus=$row_indus[countindus];
				}
			?>
			<li><a href="search-result-new.php?keyword=<?php echo $keyword;?>&functional_area=<?php echo $functional_area;?>&location=<?php echo $_GET[location];?>&exp_min=<?php echo $exp_min;?>&exp_mix=<?php echo $exp_max;?>&sal_min=<?php echo $sal_min;?>&sal_max=<?php echo $exp_max;?>&industry=<?php echo $ref_indus[industry];	?>"><?php echo $ref_indus[industry];?> <font color="#999999">(<?php echo $show_indus;?>)</font></a></li>
			<?php }?>            
            <li id="alignment"><strong><font color="#663399" >Employer</font></strong></li>
            <hr  color="#FF9900" style="margin-top:-2px;"/>
            <?php 
			while($ref_type = mysql_fetch_array($result3))
			{
				$num_type=mysql_query("SELECT COUNT(type) AS counttype FROM job_post WHERE type='$ref_type[type]' and active = 'yes' and jobValidity != 'fail'");
				while($row_type=mysql_fetch_array($num_type)){
					$show_type=$row_type[counttype];
				}
			?>
            <li><a href="search-result-new.php?keyword=<?php echo $keyword;?>&functional_area=<?php echo $functional_area;?>&location=<?php echo $_GET[location];?>&exp_min=<?php echo $exp_min;?>&exp_max=<?php echo $exp_max;?>&sal_min=<?php echo $sal_min;?>&sal_max=<?php echo $exp_max;?>&type=<?php echo $ref_type[type];?>"><?php echo $ref_type[type];?> <font color="#999999">(<?php echo $show_type;?>)</font></a></li>
            <?php }?>
      </ul>
    
	</div>
		</div>
        <div id="postresume" >
				<a href="#"><input type="image" align="right" src="images/post_resume.png" name="search"  style="margin-right:10px;" title="Post Your Resume" /> </a>
                <br /><br />
           		<p><img src="images/arrow.png" style="margin-right:10px; margin-top:8px;"/>Reach out to more than <br />  		  			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thousands of recruiters</p>
            	<p><img src="images/arrow.png" style="margin-right:10px;" />Privacy features ensure<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 		confidential job search</p>
       </div> 
       
       <div id="top_rights" align="right">
<p style="color:#663399; margin-top:7px;"><strong style="padding:16px;">Popular Employers&nbsp;&nbsp;&nbsp;&nbsp;</strong></p>
	<div style="padding:0px 22px 0px 13px;">
    <a href="#"><img src="images/add1.gif" / align="center" style="border:none; padding-bottom:5px;"></a>
    <a href="#"><img src="images/add_here.png" / align="center" style="border:none; padding-bottom:5px;"></a>
    <a href="#"><img src="images/add3.gif" / align="center" style="border:none; padding-bottom:5px;"></a>
    <a href="#"><img src="images/add4.gif" / align="center" style="border:none; padding-bottom:5px;"></a>
    <a href="#"><img src="images/add1.gif" / align="center" style="border:none; padding-bottom:5px;"></a>
    <a href="#"><img src="images/add2.gif" / align="center" style="border:none; padding-bottom:5px;"></a>
    <a href="#"><img src="images/add3.gif" / align="center" style="border:none; padding-bottom:5px;"></a>
    <a href="#"><img src="images/add4.gif" / align="center" style="border:none; padding-bottom:5px;"></a>
    <a href="#"><img src="images/add1.gif" / align="center" style="border:none; padding-bottom:5px;"></a>
    <a href="#"><img src="images/add_here.png" / align="center" style="border:none; padding-bottom:5px;"></a>
    <a href="#"><img src="images/add3.gif" / align="center" style="border:none; padding-bottom:5px;"></a>
    <a href="#"><img src="images/add4.gif" / align="center" style="border:none; padding-bottom:5px;"></a>
    <a href="#"><img src="images/add1.gif" / align="center" style="border:none; padding-bottom:5px;"></a>
    <a href="#"><img src="images/add_here.png" / align="center" style="border:none; padding-bottom:5px;"></a>
    <a href="#"><img src="images/add1.gif" / align="center" style="border:none; padding-bottom:5px;"></a>
    

	</div>
       </div>
<div id="result_search">   

		<div>
			<p id="jobs_bar"><font color="#FF6600"  style="padding:0px 0px 0px 12px;"><strong>Keyword </strong>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#FF6600"><strong><?php echo $nume;?></strong>
            </font> <font color="#660099">Jobs Found</font></p>
        </div>
        
			<ul>
<?php 
$count=1;
while($row = mysql_fetch_array($result))
{
	if($count==1){
	function highlightWords($text, $words)
	{
		foreach ($words as $word)
		{
    		$word = preg_quote($word);
    	    $text = preg_replace("/\b($word)\b/i", '<span class="highlight_word">\1</span>', $text);
		}
    	 return $text;
	}
}
?>
		<li style="padding-top:30px;">
        	<p><a style="color:#103e8c; text-decoration:underline; cursor:pointer; font-weight:bold;" onclick="MM_openBrWindow('job_display.php?id=<?php echo $row['id'];?>&str=<?php echo $replace_key2;?>','<?php echo $row['id'];?>','resizable=yes,width=800,height=600,scrollbars=yes')">
            <strong>
            	<u><?php 
					$str1=explode(",",$replace_key2);
					$job_profile =  highlightWords($row['job_profile'], $str1);
					echo $job_profile;?> (<?php echo "".$row['exp_min']."-".$row['exp_max']." yrs";?>)
				</u>
            </strong></a><br />
            <?php echo $row['comp_name'];?> &nbsp;( <font color="#FF6600"><?php echo $row['location'];?></font> )</p>
            <?php if($row['comp_logo']!=""){?><img src="images/logo/<?php echo $row['comp_logo'];?>" id="company_logo" /><?php }?>
            <p class="border">
				<?php 
				$short_disc=substr($row[job_desc], 0, 150);
				$disc1=stripslashes($short_disc);
				$disc2=str_replace("<p>","",$disc1);
				$disc=str_replace("</p>","",$disc2);
				$words = array($replace_key2);
				$strings =  highlightWords($disc, $str1);
				echo $strings;
				?>
            <br /><strong>Salary : </strong>Rs. <?php echo "".$row['sal_min']." - ".$row['sal_max']."";?> <strong> Industry : </strong><?php echo $row['industry'];?></p>
            <div id="span" style="font-size:10px;">
            <span style="padding-left:0px; text-decoration:underline;"><a href="#">Similar Jobs</a></span>&nbsp;-&nbsp;
			<span style="text-decoration:underline;"><a href="#">All Jobs by this Recruiter</a></span>&nbsp;-&nbsp;
			<span style="text-decoration:underline;"><a href="#">Share this job</a></span> 
			<span style="margin-left:60px; color:#fb7200;"><img src="images/calender.png"  style="padding-right:7px;"/>Posted Date: <?php echo $row['date_check'];?></span>
            </div>
        </li>
<?php $count=$count+1;
}?>
</ul>
<?php if($nume=="0"){?>
	<h1 style="padding-left:25px;">0 Jobs Found</h1>
    <p style="padding-left:25px;">Suggestions:</p>
	<ul>
    <li>Check the spelling of the keyword(s) & the location</li>
    <li>Try conducting the search without selecting any particular functional area (if already selected before)</li>
    <li>You may find jobs by browsing through Functional Area or Industry or Company Name</li>
    <li>You may view jobs that match your profile</li>
    <li>Any address, colony name, street name etc is not accepted in location field. Only cities / states / country name are accepted.</li>
    </ul>	
<?php }?>
						
</div>   </div>   
<!--<div id="tnt_pagination">
<span class="disabled_tnt_pagination">Prev</span><span class="active_tnt_link">1</span><a href="#2">2</a><a href="#3">3</a><a href="#4">4</a><a href="#5">5</a><a href="#6">6</a><a href="#7">7</a><a href="#8">8</a><a href="#9">9</a><a href="#10">10</a><a href="#forwaed">Next</a></div>	
-->               
 	

<!-- Footer starts from here -->
<div style="padding-top:600px;"></div>
<?php include "includes/footer.php";?>
<!-- Footer ends here -->
</div>
<script type="text/javascript">

<!--
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
//
</script>

<script type="text/javascript">
var menu=new menu.dd("menu");
	menu.init("menu","menuhover");
swfobject.registerObject("FlashID");
swfobject.registerObject("FlashID");
  </script>

<script type="text/javascript">
var obj = actb(document.getElementById('location'),loc);
//setTimeout(function(){obj.actb_keywords = custom2;},10000);
</script>

</body>
</html>
