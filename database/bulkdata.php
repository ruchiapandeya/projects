<?php 

include_once ("userobj.php");
include_once ('config.php');
include_once ("logutil.php");
include_once "dbutil.php";
@session_start();
$user=$_SESSION['userObj'];
$dbUtil = new DbUtil();
$adminId = $user->getId();
$mainUser = $user->getName();

if($mainUser=="Admin"){
	$adminSearch = "";
}else{
	$adminSearch = " and admin_id = '$adminId'";
}

include('ps_pagination.php');

$chkkeyword=stripslashes($_GET[keyword]);
$_SESSION[keyword]= $chkkeyword;
$chk_keyword = str_replace("'","",$chkkeyword);

$srch1 = strpos($chkkeyword, "'");




?>
<?php 
$country=$_GET[country];
$keyword=stripslashes($_GET[keyword]);

LogUtil :: debug("getting value of country:".$country." and keyword:".$keyword."");

$searchTxt = "";
$searchCon = "";
$searchWhere = "";

LogUtil :: debug("check if country and keyword is empty");
if( (!$country) and (!$keyword) )
{
	$sql=$dbUtil->query("select * from new_record where bulk = 'yes' $adminSearch");
	$query ="select * from new_record where bulk = 'yes' $adminSearch";
	$db = mysql_query($query);
}else{
	LogUtil :: debug("check if country is selected else keyword is searched");
	if($country){
		echo "1111";
		$sql=$dbUtil->query("select * from new_record where country  = '$country' and bulk = 'yes' $adminSearch");
		$query ="select * from new_record where country  = '$country' and bulk = 'yes' $adminSearch";
		$db = mysql_query($query);
	}
	elseif($keyword){
		echo "2222";
		if ($srch1 === false){
			//echo "111";
			$pos = strpos($keyword, "and");
			$pos1 = strpos($keyword, "or");
			if ($pos === false) {//php or mysql or java
				$check_keyword = explode(' ',$keyword);
				foreach($check_keyword as $key)
				{
					if( ($key!="or") && ($key!="OR") ){
						$searchTxt .= $searchCon . "(title like '%$key%' OR skills like '%$key%' OR post_resume like '%$key%')";
						$searchCon = " OR ";
					}
				}
			}elseif ($pos1 === false) {//php and mysql and java
				$check_keyword = explode(' ',$keyword);
				foreach($check_keyword as $key)
				{
					if( ($key!="and") && ($key!="AND") ){
						$searchTxt .= $searchCon . "(title like '%$key%' OR skills like '%$key%' OR post_resume like '%$key%')";
						$searchCon = " AND ";
					}
				}
			}else{//php or mysql and java
				$check_keyword = explode(' ',$keyword);
				$i=1;
				foreach($check_keyword as $key)
				{
					if($i%2==0){
						$searchTxt .= "".$key." ";
					}else{
						$searchTxt .= $searchCon . "(title like '%$key%' OR skills like '%$key%' OR post_resume like '%$key%') ";	
					}
					$i++;
				}
			}
		}else{
			//echo "222";
			$pos = strpos($keyword, "and");
			$pos1 = strpos($keyword, "or");
			if ($pos === false) {//php or mysql or java
				$keys = explode('OR',$keyword);
			
				foreach($keys as $key)
				{
					$key = trim($key);
					$key=str_replace("'","",$key);
					$check1 = strpos($key, "AND");
					if ($check1 === false) {
						$searchTxt .= $searchCon . "(title like '%$key%' OR skills like '%$key%' OR post_resume like '%$key%')";
						$searchCon = " OR ";
					}
					$check2 = strpos($key, "AND");
					if ($check1 == true) {
						$keys1 = explode('AND',$key);
						foreach($keys1 as $keynew)
						{
							$keynew = trim($keynew);
							$searchTxt .= $searchCon . "(title like '%$keynew%' OR skills like '%$keynew%' OR post_resume like '%$keynew%')";
							$searchCon = " AND ";
						}
					}
					//echo "<br>";
				}
			}
		}
		if($searchTxt!=""){
			$searchWhere = " and " . $searchTxt;
		}

		$query = "select * from new_record where bulk = 'yes' $adminSearch";
		if($searchWhere!=""){
			$query .= $searchWhere;
		}
		$query .= " order by id";
		//echo $query;
		$sql=$dbUtil->query($query);
	}else{
		echo "3333";
		$query = "select * from new_record where country  = '$country' and bulk = 'yes' $adminSearch";
		$sql=$dbUtil->query($query);
	}
	$db = mysql_query($query);
}

$pager = new PS_Pagination($conn, $query, 50, 10, "");
	
$pager->setDebug(true);
	
$rs = $pager->paginate();
?>
<?php
$count_db=mysql_num_rows($db);
// Check if delete button active, start this
if(isset( $_REQUEST["delete"]) || isset($_REQUEST["delete_x"])){
	for($i=0;$i<$count_db;$i++){
		$del_id = $_REQUEST[checkbox][$i];
		$sqldelete = "DELETE FROM new_record WHERE id = '$del_id'";
		$catdel = mysql_query($sqldelete);
		}

	// if successful redirect to delete_multiple.php
	if($catdel){
		echo "<meta http-equiv=\"refresh\" content=\"0;URL=bulkdata.php\">";
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Naukrihut</title>
<link rel="stylesheet" type="text/css" href="css/layout.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/searchbox.js"></script>
 
<style type="text/css">

/* All form elements are within the definition list for this example */
body{background:#ffffff; font-family:Geneva, Arial, Helvetica, sans-serif; color:#663399;}

select{border:1px solid #9999FF;}
textarea{border:1px solid #9999FF;}
#checkbox input{border:1px solid #ffffff;}
#drop_box input{border:1px solid #ffffff;}

.ie7 #sizes{
	margin-left:200px;
}
.ie7 #vertical_line{ background-color:#996699; width:auto; height:2px; margin-left:-170px; margin-top:-6px;}
/* CSS Document */


#top{
	width:255px; height:30px; 
	background:url(images/top_bar1.png) no-repeat 0 0 #FFFFFF; color:#000000;
	float:left; margin-right:0px;}
#tops{
	width:30%; height:30px; margin-left:0px;
	background:url(images/top_bar1.png) no-repeat 0 0 #FFFFFF; color:#000000;
	float:left; margin-right:0px;}
#list{width:30%; height:auto;  float:left;}
#list_second{width:30%; height:900px; border:2px solid #FFCCCC; float:right;}
.ie7 #list_second{width:640px; height:900px; border:2px solid #FFCCCC; float:right;}
#buttons{ width:550px; height:40px; margin-top:20px; margin-left:-20%; background-color:#996699; border-bottom:2px solid #993399; border-top:2px solid #993399;}
.ie7 #buttons{width:30%; height:40px; margin-top:5px; border-bottom:2px solid #FFFFFF;}
#job_responses{width:255px; height:690px; float:left; border:2px solid #FFCCCC;}
#search_in{margin-left:-30px;}
.ie7 #search_in{margin-left:10px;}
#keyword{margin-left:-30px; }
.ie7 #keyword{margin-left:10px; padding-top:20px;}
#posted_on{margin-left:450px; margin-top:-1246px;}
.ie7 #posted_on{margin-left:450px; margin-top:-1395px;}
#mid{padding-bottom:0px;}
#mids{padding-bottom:30px;}
#style{padding-right:10px;}
#hover li a{color:#FFFFFF;}
#hover li a:hover{color:#000000;}
#delete_refresh{margin-left:-270px; padding-top:3px;}
.ie7 #delete_refresh{ margin-right:179px; border:none;}
#color{width:315%; height:auto; padding:10px 20px 10px 10px; border-bottom:3px solid }
#keyword_search{ margin-bottom:-10px;}
#view{  margin-top:0%;  width:100%; height:auto; }
.ie7 #view{margin-top:0%; width:100%; height:auto;}
#view ul li{display:inline;}
.ie7 #view ul li{display:inline;}
.ie7 #second_info{margin-top:-5px;}
#search_box{ margin-top:-64px; margin-left:60px; }
.ie8 #search_box{ margin-top:-40px; margin-left:60px; }
#date{font-size:10px; color:#000000; margin-left:42px;}
.ie8 #date{font-size:10px; color:#000000; margin-left:42px; padding-top:10px;}

/*---scaler---*/

#complexity, #results{
	width: 15%;
	padding: 3px 0px 0px 0px;
	height: 5px;
	border:1px solid #000000;
	margin-left:70%;
	color: #000;
	font-size: 14px;
	text-align: center;
	text-indent:-280px;
}


.default{background-color: #fff;}
.weak{background-color: #FF5353;}
.strong{background-color: #FAD054;}
.stronger{background-color: #93C9F4; }
.strongest{background-color: #B6FF6C;}

#addToFolderDiv1{border:2px solid #666666;width:250px;display:none; background:#CCCCFF; margin-left:250px; margin-top:-30px; color:#660099;}
#addToFolderDiv2{border:2px solid #666666;width:250px;display:none; background:#CCCCFF; margin-left:250px; margin-top:-30px; color:#660099;}

/*----BODY1 PANEL----*/
.listbox{ margin-left:0;}

.search{height:25px; border:2px solid #CCCCCC; margin-top:52px; margin-left:-16%; width:100%;}
.ie7 .search{height:25px; border:2px solid #CCCCCC; margin-top:34px; margin-left:-100px;}
.ie8 .search{height:25px; border:2px solid #CCCCCC; margin-top:29px;}
.ie8 .button_search{width:40px; height:36px; margin-bottom:-19px; margin-left:-5px;}
#list_align li{display: inline;
	float: left; }
#image{margin-left:100%; margin-top:-9%;}
.ie8 #image{margin-left:100%; margin-bottom:9.5%; }
#keyword_align{width:20%; padding:0px 0px 10px 0px;}
<!--for graph bar-->
.clear{
	clear:both;}

.graphcont {
padding-top:-20px;
color:#663399;
font-weight:600;
float:right;
width:15%;
font-size:14px;
}

.graph {
float:right;
background-color:#cecece;
position:relative;
padding:0;
width:100%;
border:1px solid #999999;
}

.graph .bar {
display:block;
position:relative;
background-image:url(images/bargraph.gif);
background-position:right center;
background-repeat:repeat-x;
border-right:#538e02 1px solid;
text-align:center;
color:#663399;
height:10px;
font-family:Arial, Helvetica, sans-serif;
font-size:0px;
line-height:1.9em;
}

.graph .bar span {
position:absolute;
left:1em
}
</style>
<script type="text/javascript">
$(document).ready(function()
{
	$(".login_btn").click(function()
	{
		$("#login_box").show();
		return false;
	});
	$("body #main").click(function()
	{
		$("#login_box").hide();
		return false;
	});
});
</script>
<script type="text/javascript">

$(document).ready(function() 
{
	var strPassword;
	var charPassword;
	var complexity = $("#complexity");
	var minPasswordLength = 8;
	var baseScore = 0, score = 0;
	
	var num = {};
	num.Excess = 0;
	num.Upper = 0;
	num.Numbers = 0;
	num.Symbols = 0;

	var bonus = {};
	bonus.Excess = 3;
	bonus.Upper = 4;
	bonus.Numbers = 5;
	bonus.Symbols = 5;
	bonus.Combo = 0; 
	bonus.FlatLower = 0;
	bonus.FlatNumber = 0;
	
	outputResult();
	$("#inputPassword").bind("keyup", checkVal);

function checkVal()
{
	init();
	
	if (charPassword.length >= minPasswordLength)
	{
		baseScore = 50;	
		analyzeString();	
		calcComplexity();		
	}
	else
	{
		baseScore = 0;
	}
	
	outputResult();
}

function init()
{
	strPassword= $("#inputPassword").val();
	charPassword = strPassword.split("");
		
	num.Excess = 0;
	num.Upper = 0;
	num.Numbers = 0;
	num.Symbols = 0;
	bonus.Combo = 0; 
	bonus.FlatLower = 0;
	bonus.FlatNumber = 0;
	baseScore = 0;
	score =0;
}

function analyzeString ()
{	
	for (i=0; i<charPassword.length;i++)
	{
		if (charPassword[i].match(/[A-Z]/g)) {num.Upper++;}
		if (charPassword[i].match(/[0-9]/g)) {num.Numbers++;}
		if (charPassword[i].match(/(.*[!,@,#,$,%,^,&,*,?,_,~])/)) {num.Symbols++;} 
	}
	
	num.Excess = charPassword.length - minPasswordLength;
	
	if (num.Upper && num.Numbers && num.Symbols)
	{
		bonus.Combo = 25; 
	}

	else if ((num.Upper && num.Numbers) || (num.Upper && num.Symbols) || (num.Numbers && num.Symbols))
	{
		bonus.Combo = 15; 
	}
	
	if (strPassword.match(/^[\sa-z]+$/))
	{ 
		bonus.FlatLower = -15;
	}
	
	if (strPassword.match(/^[\s0-9]+$/))
	{ 
		bonus.FlatNumber = -35;
	}
}
	
function calcComplexity()
{
	score = baseScore + (num.Excess*bonus.Excess) + (num.Upper*bonus.Upper) + (num.Numbers*bonus.Numbers) + (num.Symbols*bonus.Symbols) + bonus.Combo + bonus.FlatLower + bonus.FlatNumber;
	
}	
	
function outputResult()
{
	if ($("#inputPassword").val()== "")
	{ 
		complexity.html("").removeClass("weak strong stronger strongest").addClass("default");
	}
	else if (charPassword.length < minPasswordLength)
	{
		complexity.html(" ").removeClass("strong stronger strongest").addClass("weak");
	}
	else if (score<50)
	{
		complexity.html("Weak Matched!").removeClass("strong stronger strongest").addClass("weak");
	}
	else if (score>=50 && score<75)
	{
		complexity.html("Average Matched!").removeClass("stronger strongest").addClass("strong");
	}
	else if (score>=75 && score<100)
	{
		complexity.html("Medium Matched!").removeClass("strongest").addClass("stronger");
	}
	else if (score>=100)
	{
		complexity.html("Highly Matched!").addClass("strongest");
	}
	
	
		$("#details").html("Base Score :<span class=\"value\">" + baseScore  + "</span>"
					   + "<br />Length Bonus :<span class=\"value\">" + (num.Excess*bonus.Excess) + " ["+num.Excess+"x"+bonus.Excess+"]</span> " 
					   + "<br />Upper case bonus :<span class=\"value\">" + (num.Upper*bonus.Upper) + " ["+num.Upper+"x"+bonus.Upper+"]</span> "
					   + "<br />Number Bonus :<span class=\"value\"> " + (num.Numbers*bonus.Numbers) + " ["+num.Numbers+"x"+bonus.Numbers+"]</span>"
					   + "<br />Symbol Bonus :<span class=\"value\"> " + (num.Symbols*bonus.Symbols) + " ["+num.Symbols+"x"+bonus.Symbols+"]</span>"
					   + "<br />Combination Bonus :<span class=\"value\"> " + bonus.Combo + "</span>"
					   + "<br />Lower case only penalty :<span class=\"value\"> " + bonus.FlatLower + "</span>"
					   + "<br />Numbers only penalty :<span class=\"value\"> " + bonus.FlatNumber + "</span>"
					   + "<br />Total Score:<span class=\"value\"> " + score  + "</span>" );
}

}
); 
</script>
<script>
	function addToFolder(id) {
		document.getElementById("addToFolderDiv"+id).style.display="block";
	}
	function saveAddToFolder(id) {
		document.getElementById("addToFolderDiv"+id).style.display="none";
	}
	function cancelAddToFolder(id) {
		document.getElementById("addToFolderDiv"+id).style.display="none";
	}
</script>

<script>
	function sendEmail(getEmail) {

		if (document.getElementById("style").checked==true) 
		{
			//document.getElementById("getEmail").href=eminfo1;
			getEmail = getEmail;
			var eminfoall = "mailto:" + getEmail + "; " + 
			alert('clicked');
			alert(eminfoall);
		} else {
			//document.getEmail.disabled = false;
			alert('unclicked');
		}

		/*var eminfo = "mailto:" + getEmail;
		alert(eminfo);
		var eminfo1 = "mailto:" + getEmail +"?subject=Hi" ;
		
		document.getElementById("getEmail").href=eminfo1;*/
	}
</script>

<script type="text/javascript">
function toDelete(){
	var ok;
	ok = window.confirm('Do you really want to Delete ?');
	if(ok){
		return true;
	}else{
		return false;
	}
}
</script>


</head>
<!--[if IE 7]><body class="ie7"><![endif]-->
<!--[if IE 8]><body class="ie8"><![endif]-->
<body>
<!-- Header starts from here -->

  
 
 
	
    <div id="list">
   
  
        <div style="width:300px;"><input type="checkbox" onclick="javascript:parent.sendEmail('<?php echo $row[email];?>')" /> &nbsp;&nbsp;&nbsp;
        <a href="" id="getEmail"> <img src="images/send_mail.png" border="none" title="Send Message to All" ></a>&nbsp;&nbsp;&nbsp;
        <a href="personal_folder.php"><img src="images/personal_folder.png" border="none" title="Personal Folders" ></a>&nbsp;&nbsp;&nbsp;
        <a href="bulkupload.php"> <img src="images/bulk_uplaod.png" border="none" title="Bulk Uplaod Record Button" ></a>&nbsp;&nbsp;&nbsp;
        <a href="#" onClick="window.location.reload();return true;"> <img src="images/refresh.png" border="none" title="Refresh Records" ></a>&nbsp;&nbsp;
        <a href="new_project.php"> <img src="images/home.png" border="none" title="Back to Home" ></a>
        </div>
    
		<div id="buttons">
        	
    		<ul id="list_align">
            <li class="listbox">
                <form name="countrySearch" action="" method="get">
                <select id="country" name="country"  onChange="this.form.submit();" style="height:30px; border:2px solid #FFCC66; margin-top:-20%;">
				<option value="UK"<?php if($_GET[country] == "UK"){echo "selected";}?>>UK</option>
				<option value="US"<?php if($_GET[country] == "US"){echo "selected";}?>>US</option>
				<option value="India"<?php if($_GET[country] == "India"){echo "selected";}?>>India</option>
                <option value=""<?php if($_GET[country] == ""){echo "selected";}?>>All</option>
                </select>
                </form>
            </li>
            <li id="search_box">
				<form name="countrySearch" action="" method="get">   
        		<input id="search2" class="search" type="text" name="keyword"  size="53" maxlength="255" value="Keyword"  style="border:2px solid #FFCC66; font-size:14px;" />
             
                </form>
            </li>
                
                
                <!--<font size="-1" color="#ffffff"> 
                &nbsp;&nbsp;&nbsp;21 Results Found</font>-->
        	</ul>
    </div>
    <div style="padding-top: 10px; text-align: center; width: 500px; font-size:14px;"><?php echo $pager->renderFullNav();?></div>
    <div id="title">
     <?php 
	 	 //foreach($sql as $row){
		 //print_r($row);
	if(!$rs) die(mysql_error());
	while($row = mysql_fetch_array($rs)) 
	{
		 LogUtil :: debug("Display searched records:".$row[name]."");
	  //while($row=mysql_fetch_array($sql)){
	  ?>
    	<div id="color">
        <ul id="list_align">
         <li style="margin-left:-10%; font-size:6px"><input onclick="javascript:sendEmail('<?php echo $row[email];?>')" type="checkbox" id="style"  style="margin-right:10%;" /></li>
        
        <li><a href="#" id="keyword_align"><strong>Unupdated Record </strong></a></li>
        </ul><br />
        
        <div id="view">
        	<ul>
        		<li><a href="javascript:parent.openLink('resume.php?id=<?php echo $row[id];?>&keyword=<?php echo $_GET[keyword];?>')">
            	<img src="images/view_resume.png" border="none"  title="View Resume" /></a> </li>
        		<li><a href="bulk_record_edit.php?id=<?php echo $row[id];?>"><img src="images/edit_record.png"  border="none" title="Edit Record"  /></a></li>
        		<li><a href="cv/<?php echo $row[resume];?>"><img src="images/download_folder.png"  border="none" title="Download Resume"  /></a></li>
                <li><a href="#"><img src="images/remove.png"  border="none" title="Remove Rescord"  /></a></li>
        	</ul>
        </div>
        
       
        <p id="date">Created Date: 12-03-2011</p>
        </div>
       
        <?php }?>
      </div></div>
 
    
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-7025232-1");
pageTracker._trackPageview();
} catch(err) {}</script>

</body>
</html>
