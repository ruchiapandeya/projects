<?php 
$sql_count_jobs=mysql_query("select * from job_post");
$total_count_jobs=mysql_num_rows($sql_count_jobs);

$sql_count_cv=mysql_query("select * from jobseeker where username != 'admin'");
$total_count_cv=mysql_num_rows($sql_count_cv);

$today_date=date("Y-m-d");

$active_job=mysql_query("select * from job_post");
while($row_job_active=mysql_fetch_array($active_job)){
	$job_posted_date = $row_job_active[postedDateCheck];
	$jobId = $row_job_active[id];
	
	$day = 86400; // Day in seconds
	$format = 'Y-m-d'; // Output format (see PHP date funciton)
	$sTime = strtotime($job_posted_date); // Start as time
	$eTime = strtotime($today_date); // End as time
	$numDays = round(($eTime - $sTime) / $day) + 1;
	$days = array();

	// Get days
	for ($d = 0; $d < $numDays; $d++) {
		$days[] = date($format, ($sTime + ($d * $day))); 
	}
	
	$total_days = count($days);
	
	if($total_days >= 30){
		mysql_query("update job_post set jobValidity = 'fail' where id  = '$jobId'");
	}else{
		mysql_query("update job_post set jobValidity = '' where id  = '$jobId'");
	}
	
}

?>
<div align="center">
<div id="headers">
	<div id="top_bar">
        <p class="toptext_style"><a href="#"><strong>Home</strong></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;| Contact Us: <strong>9999-331-331</strong>
 			(Monday - Saturday 10:00AM to 6:00PM IST)
        </p>
        <p class="toptext_style" style="margin-right:254px;">Welcome Guest, <a href="#"><strong>Sign In</strong></a> to manage account 
        </p>
    </div>
    
    <!-- Top Add. strats from here -->
    <a href="index.php"><div id="logo"></div></a>
    
    <a href="#"><img src="images/add03.png" / align="right" style="padding:10px 5px; border:none;"></a>
    <a href="#"><img src="images/add03.png" / align="right" style="padding:10px 5px; border:none;"></a>
    
    <!-- Top Add. ends here -->
    
    <!-- Navigation starts from here -->
    <div id="header">
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="employers_home.php" title="Home">&nbsp;&nbsp; Home</a></li>
			<li><a href="job_responses.php">Jobs & Resposes</a></li>
			<li><a href="emp_jobposting.php">Post Job</a></li>
			<li><a href="cv_search.php">CV Search</a></li>
            <li><a href="#">Reports</a></li>
			<li><a href="#">Administration</a></li>
            <li><a href="#" style="background-image:none;"></a></li>
		</ul>
        <div id="vertical_line"></div>
	</div>

</div>
</div></div>
    <!-- Navigation ends here -->
