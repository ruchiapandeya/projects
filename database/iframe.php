<?php 
include_once ("userobj.php");
include_once ('config.php');
include_once ("logutil.php");
include_once "dbutil.php";
@session_start();
$user=$_SESSION['userObj'];
$dbUtil = new DbUtil();
//echo $user->getId();

LogUtil :: debug("checking session is start or not");
if(!$user) {
	LogUtil :: debug("redirecting to login page");
	@header('Location: login_forall.php'); //Switching to next page
}else{
	LogUtil :: debug("successfully login!!");
}
$adminId = $user->getId();
$mainUser = $user->getName();

if($mainUser=="Admin"){
	$adminSearch = "";
}else{
	$adminSearch = " and admin_id = '$adminId'";
}

$db = mysql_query("select * from new_record where bulk != 'yes' $adminSearch");
$count_db=mysql_num_rows($db);
$udb = mysql_query("select * from new_record where bulk = 'yes' $adminSearch");
$count_udb=mysql_num_rows($udb);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
.ie7 #resume{margin-top:-700px;}
#top_bar
{ width: 1339px;
  height: 20px;
  background:url(images/top_bar.png) repeat;
  color: #000;
  margin-top:-8px;
  border:1px solid #CCCCCC;
  font-size:10px;
  
}
.ie7 #top_bar
{ width: 1339px;
  height: 20px;
  background:url(images/top_bar.png) repeat;
  color: #000;
  margin-top:-14px;
  border:1px solid #CCCCCC;
}
.toptext_style
{ font: normal 10px verdana,arial;
  color:#000000;
  line-height: 18px;
  margin-top:-1px;
  float:right;
  padding:0px 3px;
}
</style>
<script>
	function openLink(url) {
		document.getElementById("resume").src=url;
	}
</script>

</head>
<!--[if IE 7]><body class="ie7"><![endif]-->
<!--[if IE 8]><body class="ie8"><![endif]-->
<body>
<div id="top_bar">
<p style="font-size:12px; margin-top:2px; padding:0px 0px 0px 4px;"><a href="logout.php"><strong>Sign Out</strong></a> &nbsp;&nbsp;&nbsp;&nbsp;Welcome <a href="consultant_home.php"><?php echo $user->getname();?></a>, Total D.B: <a href="new_project.php"><?php echo $count_db;?></a>  &nbsp;||&nbsp;  U.D.P: <a href="bulkdata.php"><?php echo $count_udb;?></a> <font style="float:right; padding:0px 10px 0px 0px;"><a href="iframe.php"><strong>Home</strong></a>&nbsp; Contact Us: <strong>9999-331-331</strong>(Monday - Saturday 10:00AM to 6:00PM IST)</font></p>
        <!--<p class="toptext_style"><a href="iframe.html"><strong>Home</strong></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;| Contact Us: <strong>9999-331-331</strong>
 			(Monday - Saturday 10:00AM to 6:00PM IST)
        </p>
        <p class="toptext_style" style="margin-right:530px;"><a href="login_forall.html"><strong>Sign Out</strong></a> &nbsp;&nbsp;Welcome Rachit,  Total D.B in your account: 104 
        </p>-->
    </div>
<iframe src="new_project.php" width="40%" height="700"  frameborder="1">

  <p>Your browser does not support iframes.</p>
</iframe>
<iframe id="resume" src="" width="58.1%" height="700"  style="float:right;" >
  <p>Your browser does not support iframes.</p>
</iframe>
</body>
</html>
