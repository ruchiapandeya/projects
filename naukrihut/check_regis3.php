<?php 
	session_start();
	include "config.php";
	//print_r($_REQUEST);die;
	$curr_comp_name=$_REQUEST['curr_comp_name'];
	$curr_designation=$_REQUEST['curr_designation'];
	$curr_frm_month=$_REQUEST['curr_frm_month'];
	$curr_frm_year=$_REQUEST['curr_frm_year'];
	$curr_to_month=$_REQUEST['curr_to_month'];
	$curr_to_year=$_REQUEST['curr_to_year'];
	$curr_job_profile=$_REQUEST['curr_job_profile'];
	
	$prev_comp_name=$_REQUEST['prev_comp_name'];
	$prev_designation=$_REQUEST['prev_designation'];
	$prev_frm_month=$_REQUEST['prev_frm_month'];
	$prev_frm_year=$_REQUEST['prev_frm_year'];
	$prev_to_month=$_REQUEST['prev_to_month'];
	$prev_to_year=$_REQUEST['prev_to_year'];
	$prev_job_profile=$_REQUEST['prev_job_profile'];
	
	$prev_comp_name2=$_REQUEST['prev_comp_name2'];
	$prev_designation2=$_REQUEST['prev_designation2'];
	$prev_frm_month2=$_REQUEST['prev_frm_month2'];
	$prev_frm_year2=$_REQUEST['prev_frm_year2'];
	$prev_to_month2=$_REQUEST['prev_to_month2'];
	$prev_to_year2=$_REQUEST['prev_to_year2'];
	$prev_job_profile2=$_REQUEST['prev_job_profile2'];
	
	$prev_comp_name3=$_REQUEST['prev_comp_name3'];
	$prev_designation3=$_REQUEST['prev_designation3'];
	$prev_frm_month3=$_REQUEST['prev_frm_month3'];
	$prev_frm_year3=$_REQUEST['prev_frm_year3'];
	$prev_to_month3=$_REQUEST['prev_to_month3'];
	$prev_to_year3=$_REQUEST['prev_to_year3'];
	$prev_job_profile3=$_REQUEST['prev_job_profile3'];
	
	
	
	$date=date("F j, Y, g:i a");
	
	$curr_job_from="".$curr_frm_month." ".$curr_frm_year."";
	$curr_job_to="".$curr_to_month." ".$curr_to_year."";
	
	$prev_job_from="".$prev_frm_month." ".$prev_frm_year."";
	$prev_job_to="".$prev_to_month." ".$prev_to_year."";
	
	$prev_job_from2="".$prev_frm_month2." ".$prev_frm_year2."";
	$prev_job_to2="".$prev_to_month2." ".$prev_to_year2."";
	
	$prev_job_from3="".$prev_frm_month3." ".$prev_frm_year3."";
	$prev_job_to3="".$prev_to_month3." ".$prev_to_year3."";
	
		
	//2861af
	
	//ff7701
	
	$action=1;
		
	$sql="update jobseeker set curr_comp_name='$curr_comp_name', curr_designation='$curr_designation', curr_job_frm='$curr_job_frm', curr_job_to='$curr_job_to', curr_job_profile='$curr_job_profile', prev_comp_name='$prev_comp_name', prev_designation='$prev_designation', prev_job_from='$prev_job_from', prev_job_to='$prev_job_to', prev_job_profile='$prev_job_profile', prev_comp_name2='$prev_comp_name2', prev_designation2='$prev_designation2', prev_job_from2='$prev_job_from2', prev_job_to2='$prev_job_to2', prev_job_profile2='$prev_job_profile2', prev_comp_name3='$prev_comp_name3', prev_designation3='$prev_designation3', prev_job_from3='$prev_job_from3', prev_job_to3='$prev_job_to3', prev_job_profile3='$prev_job_profile3' where username='$_SESSION[jobseeker_username]'";

		
	if(!mysql_query($sql))
	{
		die('Error:'.mysql_error());
		$action=2;
	}
	if($action=="1")
	{
		header("location:thanks_jobseeker.php");
	}
	else
	{
		header("header:resume_step2.php?msg=Data can not be added. Please try again");
		//view("Data can not be added. Please try again.");
	}
?>
<?php /*?><?php 
	session_start();
	include "config.php";
	
	$prefered_location=$_REQUEST['prefered_location'];
	$job_type=$_REQUEST['job_type'];
	$employment_status=$_REQUEST['employment_status'];
	$dob_d=$_REQUEST['dob_d'];
	$dob_m=$_REQUEST['dob_m'];
	$dob_y=$_REQUEST['dob_y'];
	$gender=$_REQUEST['gender'];
	$nationality=$_REQUEST['nationality'];
	$marital_status=$_REQUEST['marital_status'];
	$city=$_REQUEST['city'];
	$pincode=$_REQUEST['pincode'];
	$alt_email=$_REQUEST['alt_email'];
	$lang1=$_REQUEST['lang1'];
	$lang_prof1=$_REQUEST['lang_prof1'];
	$lang_read1=$_REQUEST['lang_read1'];
	$lang_write1=$_REQUEST['lang_write1'];
	$lang_speak1=$_REQUEST['lang_speak1'];
	$lang2=$_REQUEST['lang2'];
	$lang_prof2=$_REQUEST['lang_prof2'];
	$lang_read2=$_REQUEST['lang_read2'];
	$lang_write2=$_REQUEST['lang_write2'];
	$lang_speak2=$_REQUEST['lang_speak2'];
	$lang3=$_REQUEST['lang3'];
	$lang_prof3=$_REQUEST['lang_prof3'];
	$lang_read3=$_REQUEST['lang_read3'];
	$lang_write3=$_REQUEST['lang_write3'];
	$lang_speak3=$_REQUEST['lang_speak3'];
	$date=date("F j, Y, g:i a");
	
	
	$action=1;
		
	$sql="update jobseeker set prefered_location='$prefered_location', job_type='$job_type', employment_status='$employment_status', dob_d='$dob_d', dob_m='$dob_m', dob_y='$dob_y', gender='$gender', nationality='$nationality', marital_status='$marital_status', city='$city', pincode='$pincode', alt_email='$alt_email', lang1='$lang1', lang_prof1='$lang_prof1', lang_read1='$lang_read1', lang_write1='$lang_write1', lang_speak1='$lang_speak1', lang2='$lang2', lang_prof2='$lang_prof2', lang_read2='$lang_read2', lang_write2='$lang_write2', lang_speak2='$lang_speak2', lang3='$lang3', lang_prof3='$lang_prof3', lang_read3='$lang_read3', lang_write3='$lang_write3', lang_speak3='$lang_speak3' where username='$_SESSION[jobseeker_username]'";
	
		
	if(!mysql_query($sql))
	{
		die('Error:'.mysql_error());
		$action=2;
	}
	if($action=="1")
	{
		$to = "sid.style027@gmail.com";
		$subject = "Naukruhut.Com - Jobseeker Registration Form Enquiry";
		$from = "$email";
		$headers = "From: $from";
		$body = "The following enquiry was submitted from 'Registration' form to the website http://rentals-london.co.uk
\n\n Name: $initial. $fname \n Email: $email \n Contact No.: $fone \n Country of Residence: $country \n Prefer to contacted by: $class_prefer \n Property Requirement details: $class_location \n Other Area: $others \n No. of Bedrooms: $rooms \n Upper price limit(per week): $price \n Other Requirements: $reqmnt \n\n The above was submitted on the $date";
			
		//@mail($to,$subject,$body,$headers);
		header("location:thanks_jobseeker.php");
	}
	else
	{
		header("header:registration-page2.php?msg=Data can not be added. Please try again");
		//view("Data can not be added. Please try again.");
	}
?><?php */?>