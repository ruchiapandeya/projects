<?php 
	session_start();
	include "config.php";
	$existing_folder=$_REQUEST['existing_folder'];
	$id=$_REQUEST['id'];
	$act=$_REQUEST['act'];
	$new_folder=$_REQUEST['new_folder'];
	$date=date("Y-m-d");
	
	$action=1;
	
	if($act=="Existing"){
		$sql=mysql_query("update new_record set folder = '$existing_folder' where id='$id'");
	}elseif($act=="New"){
		$sql=mysql_query("update new_record set folder = '$new_folder' where id='$id'");
		$sql1=mysql_query("insert into folders (folderName) Values ('$new_folder')");
	}
	
	@header("location:new_project.php");
		
?>