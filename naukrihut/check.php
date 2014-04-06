<?php
// Database Details
$dbhost = 'localhost'; // Database host
$dbuser = 'root'; // Database user
$dbpass = ''; // Database password
$dbname = 'monster_job'; // Database name

$conn = mysql_connect("$dbhost", "$dbuser", "$dbpass") or die(mysql_error()); // Connect to database server
mysql_select_db($dbname, $conn) or die(mysql_error()); // Select our database
$username = mysql_real_escape_string(htmlspecialchars(strtolower($_POST['username']))); // Escape special characters in string
$query = mysql_query("SELECT username FROM jobseeker WHERE username = '$username' LIMIT 1"); // Check if username exists in our database
$check = mysql_num_rows($query); // Check number of rows in result set - In this case should return 0 or 1
//echo $check; // Echo the result - 0 is available, 1 is unavailable
if($check=="0"){echo "<div><font color='#00CC00'>Username Available.</font></div>";}
else{echo "<div><font color='#D00'>Sorry, Desired username is not Available.<br>Please try another.</font></div>";}
?>