<?php 
include "config.php";
session_start();
$login_user=$_POST[login_user];
$login_pwd=$_POST[login_pwd];

//$encrypt_password=md5($password);
	
$check_login=mysql_query("select * from jobseeker where username='".$_POST[login_user]."' ") or die("cudnot do it:".mysql_error());

	$check=mysql_fetch_array($check_login);
	if($check[password]==$login_pwd)
		{
		$_SESSION['jobseeker_id']=$check[id];
		$_SESSION['email']=$check[email];
		$_SESSION['name']=$check[name];
		$_SESSION['telephone']=$check[telephone];
		$_SESSION['jobseeker_username']=$check[username ];
			if($_POST[job_id]){		
				$date=date("F j, Y, g:i a");
				$date_check=date("Y-m-d");
				$sql1=mysql_query("insert into applied_job(jobseeker_id, job_id, date, date_check) Values ('$_SESSION[jobseeker_id]', '$_POST[job_id]', '$date', '$date_check')");
				header('Location: job-apply.php');
			}else{
				header('Location: employee_home.php');
			}
		}
		else{
		header('Location: index.php?msg=no');
		}
?>
