<?php 
	session_start();
	include "config.php";
	$username=$_REQUEST['username'];
	$password=$_REQUEST['password'];
	$email=$_REQUEST['email'];
	$comp_name=$_REQUEST['comp_name'];
	$contact_person=$_REQUEST['contact_person'];
	$type=$_REQUEST['type'];
	$industry=$_REQUEST['industry'];
	$add1=$_REQUEST['add1'];
	$add2=$_REQUEST['add2'];
	$add3=$_REQUEST['add3'];
	$country=$_REQUEST['country'];
	$state=$_REQUEST['state'];
	$city=$_REQUEST['city'];
	$pin=$_REQUEST['pin'];
	$mobile=$_REQUEST['mobile'];
	$country_code=$_REQUEST['country_code'];
	$tele_std=$_REQUEST['tele_std'];
	$tele_no=$_REQUEST['tele_no'];
	$email_home=$_REQUEST['email_home'];
	$email=$_REQUEST['email'];
	$website=$_REQUEST['website'];
	$logo=$_REQUEST['logo'];
	$date=date("F j, Y, g:i a");
	
	$sql_echeck=mysql_query("select * from employers where email = '$email'");
	$count_echeck=mysql_num_rows($sql_echeck);
	
if($count_echeck!="0"){
		header("location:employer_registration.php?act=echeck");
}else{
	
	$m_id=date("F");
	if($m_id=="January"){
	$m_id=1;
	}elseif($m_id=="Febuary"){
	$m_id=2;
	}elseif($m_id=="March"){
	$m_id=3;
	}elseif($m_id=="April"){
	$m_id=4;
	}elseif($m_id=="May"){
	$m_id=5;
	}elseif($m_id=="June"){
	$m_id=6;
	}elseif($m_id=="July"){
	$m_id=7;
	}elseif($m_id=="August"){
	$m_id=8;
	}elseif($m_id=="September"){
	$m_id=9;
	}elseif($m_id=="October"){
	$m_id=10;
	}elseif($m_id=="November"){
	$m_id=11;
	}elseif($m_id=="December"){
	$m_id=12;
	}
	
	$action=1;
		
	$sql="insert into employers(username, password, email, comp_name, contact_person, type, industry, add1, add2, add3, country, state, city, pin, mobile, country_code, tele_std, tele_no, email_ofc, website, logo, approved, date, month_id) Values ('$username', '$password', '$email_home', '$comp_name', '$contact_person', '$type', '$industry', '$add1', '$add2', '$add3', '$country', '$state', '$city', '$pin', '$mobile', '$country_code', '$tele_std', '$tele_no', '$email', '$website', '$logo', '', '$date', '$m_id')";

		
		if(!mysql_query($sql))
		{
			die('Error:'.mysql_error());
			$action=2;
		}
		if($action=="1")
		{
			$query=mysql_query("select * from employers where username = '$username'");
			while($row=mysql_fetch_array($query))
			{
				$_SESSION['employer_username']=$row[username];
				$comp_name=$row[comp_name];
				$email_ofc=$row[email_ofc];
				$username=$row[username];
				$password=$row[password];
			}
			
			$to = "$email_ofc";
			$subject = "Welcome to Naukri Hut";
			$from = "info@naukrihut.com";
			$headers = "From: $from";
			$body = " Dear $comp_name,
			\n\n Welcome to naukrihut.com.
			\n\n Your account has been created with us. It would be activated today itself.
			\n\n Please find below your login details:-
			\n Your Login ID is : $username
			\n Password: $password
			\n\n Any feedback or questions on the services, you can email us at info@naukrihut.com
			\n\n Thanks & Regards,
			\n naukrihut.com Team";
			@mail($to,$subject,$body,$headers);
			
			header("location:thanks.php");
		}
		else
		{
			header("header:employer-registration.php?msg=Data can not be added. Please try again");
			//view("Data can not be added. Please try again.");
		}
}
		
?>