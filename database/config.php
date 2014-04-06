<?php 
//Connect to mysql db
$conn = mysql_connect('localhost','root','');
if(!$conn) die("Failed to connect to database!");
$status = mysql_select_db('monster_job', $conn);
if(!$status) die("Failed to select database!");


?>