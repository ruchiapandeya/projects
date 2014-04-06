<?php 
include "config.php";
session_start();
$login_user=$_POST[username];
$login_pwd=$_POST[password];

//$encrypt_password=md5($password);
	
$check_login=mysql_query("select * from employers where username='".$login_user."' and approved = 'yes' ") or die("cudnot do it:".mysql_error());

	$check1=mysql_fetch_array($check_login);
	if($check1[password]==$login_pwd)
		{
		$_SESSION['employer_id']=$check1[id];
		$_SESSION['username']=$check1[username];
		$_SESSION['email']=$check1[email];
		$_SESSION['name']=$check1[contact_person];
		
		header('Location: employers_home.php');
		}
		else{
		header('Location: employers_login.php?msg=no');
		}
?>
