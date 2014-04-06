<?php
include_once ("userobj.php");
include_once ('config.php');
include_once ("logutil.php");
include_once "dbutil.php";
@session_start();
$user=$_SESSION['userObj'];
$dbUtil = new DbUtil();

if($_POST[act]=="status"){
	mysql_query("UPDATE register_consultant SET approval_state = '$_POST[status]'");
	$msg="Sucessfully Updated";
}

LogUtil :: debug("View All Consultant records");
$query = "select * from register_consultant";
$sql=$dbUtil->query($query);
$db = mysql_query($query);
$count = mysql_num_rows($db);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Database</title>
<link rel="stylesheet" href="css/admin.css" type="text/css" media="all" title="" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
<script type="text/javascript" src="js/jquery.quicksearch.js"></script>
<!--Facebox script start-->
<script type="text/javascript" src="js/jquery-1.2.6.js"></script>
<script type="text/javascript" src="js/jquery.form.js"></script>
<script type="text/javascript" src="js/reservation.js"></script>
<script src="facebox/facebox.js" type="text/javascript"></script>
<link href="facebox/facebox1.css" media="screen" rel="stylesheet" type="text/css"/>
<!--Facebox script end-->
<script type="text/javascript">
			$(function () {
				/*
				Example 1
				*/
				$('input#id_search').quicksearch('table tbody tr');
				
				/*
				Example 2 
				*/
				$('input#id_search2').quicksearch('table#table_example2 tbody tr', {
					'delay': 300,
					'selector': 'th',
					'stripeRows': ['odd', 'even'],
					'loader': 'span.loading',
					'bind': 'keyup click',
					'show': function () {
						this.style.color = '';
					},
					'hide': function () {
						this.style.color = '#ccc';
					},
					'prepareQuery': function (val) {
						return new RegExp(val, "i");
					},
					'testQuery': function (query, txt, _row) {
						return query.test(txt);
					}
				});
				
				/*
				Example 3
				*/
				var qs = $('input#id_search_list').quicksearch('ul#list_example li');
				
				$.ajax({
					'url': 'example.json',
					'type': 'GET',
					'dataType': 'json',
					'success': function (data) {
						for (i in data['list_items']) {
							$('ul#list_example').append('<li>' + data['list_items'][i] + '</li>');
						}
						qs.cache();
					}
				});
				
				$('input#add_to_list').click(function () {
					$('ul#list_example').append('<li>Added on click</li>');
					qs.cache();
				});
				
			});
</script>
</head>

<body>
<br />
<div align="center" style="background:#FFFFFF;">
  <h3 style="margin-right:77%; font-size:16px; color:#663399; margin-top:-20px;">Consultant DataBase </h3>
  <form action="#" style="width:90%; border:4px solid #FFCC99;">
    <fieldset style="height:40px; padding-top:10px;">
      <input type="text" name="search" value="" id="id_search" placeholder="Search" autofocus style="float:left; width:30%; height:77%;" />
      <font color="#660099"><strong>Approved Record <img src="images/approve.png" style="vertical-align: bottom;" />&nbsp;&nbsp;
      Dispproved Record <img src="images/disapprove.png" style="vertical-align: bottom;" />&nbsp;&nbsp;
      Waiting For Approval <img src="images/waiting.png" style="vertical-align: bottom;" /></strong></font>
      <p align="right" style="margin-top:-29px;>
            padding:5px 5px 5px 0px; color:#663399;">Total Count: (<?php echo $count;?>)</p>
    </fieldset>
  </form>
  <table id="table_example">
    <thead>
      <tr>
        <th width="6%"><font size="-1">S.NO.</font></th>
        <th width="14%"><font size="-1">Company Name</font></th>
        <th width="13%"><font size="-1">Contact Person</font></th>
        <th width="17%"><font size="-1">Email Id</font></th>
        <th width="12%"><font size="-1">Contact No.</font></th>
        <th width="7%"><font size="-1">Total D.B.</font></th>
        <th width="13%"><font size="-1">Location</font></th>
        <th width="10%"><font size="-1">Created Date</font></th>
        <th width="8%"><font size="-1">Approval</font></th>
      </tr>
    </thead>
    <tbody>
   <?php 
   	 $i=2;
	 foreach($sql as $row){
		 LogUtil :: debug("Display searched records:".$row[name]."");
		 if($row['approval_state']=='0'){
			 $image = "disapprove.png";
			 $title = "Disapproved";
		 }elseif($row['approval_state']=='1'){
			 $image = "approve.png";
			 $title = "Approved";
		 }else{
			 $image = "waiting.png";
			 $title = "Wating for Approval";
		 }
	?>
      <tr>
        <td><?php echo $i;?></td>
        <td align="left"><a href="consultant_home.php?id=<?php echo $row['id'];?>"><?php echo $row['company'];?></a></td>
        <td align="left"><?php echo $row['name'];?></td>
        <td align="left"><?php echo $row['username'];?></td>
        <td><?php echo $row['phone'];?></td>
        <td>024</td>
        <td><?php echo "".$row['city'].", ".$row['country']."";?></td>
        <td><?php echo $row['date'];?></td>
        <td><a href="status.php" rel="facebox"><img src="images/<?php echo $image;?>" title="<?php echo $title;?>" border="none" align="absmiddle" style="padding-left:10px;"></a></td>
      </tr>
   <?php $i=$i+1;}?>
  </table>
</div>
</body>
</html>
