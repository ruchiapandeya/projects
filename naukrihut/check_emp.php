<?php
// Database Details
$dbhost = 'localhost'; // Database host
$dbuser = 'nau36013'; // Database user
$dbpass = 'x!?y!K{=_@m9'; // Database password
$dbname = 'nau36013_naukrihut'; // Database name
$conn = mysql_connect("$dbhost", "$dbuser", "$dbpass") or die(mysql_error()); // Connect to database server
mysql_select_db($dbname, $conn) or die(mysql_error()); // Select our database
$username = mysql_real_escape_string(htmlspecialchars(strtolower($_POST['username']))); // Escape special characters in string
$query = mysql_query("SELECT username FROM employers WHERE username = '$username' LIMIT 1"); // Check if username exists in our database
$check = mysql_num_rows($query); // Check number of rows in result set - In this case should return 0 or 1
//echo $check; // Echo the result - 0 is available, 1 is unavailable
if($check=="0"){echo "<font color='#00CC00'>Already a member.</font>";}
else{echo "<font color='#D00'>Sorry, Desired username is not Available.<br>Please try another.</font>";}
?>