<?php
include_once ("userobj.php");
include_once ('config.php');
include_once ("logutil.php");
include_once "dbutil.php";
@session_start();
$user=$_SESSION['userObj'];
$dbUtil = new DbUtil();

LogUtil :: debug("View All Consultant records");
$query = "select * from register_consultant where id = '$_GET[id]'";
$sql=$dbUtil->query($query);
$db = mysql_query($query);
$count = mysql_num_rows($db);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Demo Contact Form - Submit Without Page Refresh using jQuery</title>
<script src="js/jquery-1.2.3.pack.js"></script>
<script src="js/tutorial.js"></script>
<link href="css/tutorial.css" media="all" type="text/css" rel="stylesheet">
<style>
.text-input{width:210px;}
input{border:1px solid #9999FF; height:18px;}

dl {
	font:normal 12px/15px Arial;
    position: relative;
    width: 350px;
	color:#660099;
	margin-left:-20%;
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
	margin-top:-7%;
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
<body>

<div id="contact_form"><br /><br />
<?php foreach($sql as $row){
	LogUtil :: debug("Display searched records:".$row[name]."");
		 if($row['approval_state']=='0'){
			 $image = "disapprove.png";
			 $title = "Disapproved";
		 }elseif($row['approval_state']=='0'){
			 $image = "approve.png";
			 $title = "Approved";
		 }else{
			 $image = "waiting.png";
			 $title = "Wating for Approval";
		 }
	
	?>
  <form name="contact" method="post" action="">
    <fieldset>
      <dl>
      <dt><strong>Name</strong><font color="#FF9900"><strong> :</strong></font></dt>
      <dd><?php echo $row[name];?></dd>
      <dt><strong>User Name</strong><font color="#FF9900"><strong> :</strong></font></dt>
      <dd><?php echo $row[username];?></dd>
      <dt><strong>Company</strong><font color="#FF9900"><strong> :</strong></font></dt>
      <dd><?php echo $row[company];?></dd>
      <dt><strong>Country.</strong><font color="#FF9900"><strong> :</strong></font></dt>
      <dd><?php echo $row[country];?></dd>
      <dt><strong>City.</strong><font color="#FF9900"><strong> :</strong></font></dt>
     <dd><?php echo $row[city];?></dd>
	  <dt><strong>Phone No.</strong><font color="#FF9900"><strong> :</strong></font></dt>
      <dd><?php echo $row[phone];?></dd>
      <dt><strong>Your Status.</strong><font color="#FF9900"><strong> :</strong></font></dt>
      <dd><img src="images/<?php echo $image;?>" title="<?php echo $title;?>" /></dd>
      <dt><strong>Enter In DateBase</strong><font color="#FF9900"><strong> :</strong></font></dt>
      <dd><a href="admin.php"><img src="images/enter.png" title="Enter" /></a></dd>
      <!--<dt><a href="consultant_signup.html"><img src="images/edit_record.png" /></a></dt>-->
      </dl>
     </fieldset>
  </form>
<?php }?>
</div>
</body>
</html>
