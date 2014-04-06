<?php 
	session_start();
	include "config.php";
	$job_id=$_REQUEST['job_id'];
	$apply_type=$_REQUEST['apply_type'];
	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$current_location=$_REQUEST['current_location'];
	$country=$_REQUEST['country'];
	$mobile=$_REQUEST['mobile'];
	$year=$_REQUEST['year'];
	$month=$_REQUEST['month'];
	$resume=$_REQUEST['resume'];
	$date=date("F j, Y, g:i a");
	
	$sql_echeck=mysql_query("select * from jobseeker where email = '$email' or username = '$email'");
	$count_echeck=mysql_num_rows($sql_echeck);
	
if($count_echeck!=""){
		header("location:applied-selected-job.php?act=echeck&job_id=$job_id");
}else{
	
	$total_exp="".$year." ".$month."";
	
	function upload($file_id, $folder="", $types="") {
    if(!$_FILES[$file_id]['name']) return array('','No file specified');

    $file_title = $_FILES[$file_id]['name'];
    //Get file extension
    $ext_arr = split("\.",basename($file_title));
    $ext = strtolower($ext_arr[count($ext_arr)-1]); //Get the last extension

    //Not really uniqe - but for all practical reasons, it is
    $uniqer = substr(md5(uniqid(rand(),1)),0,5);
    $file_name = $uniqer . '_' . $file_title;//Get Unique Name

    $all_types = explode(",",strtolower($types));
    if($types) {
        if(in_array($ext,$all_types));
        else {
            $result = "'".$_FILES[$file_id]['name']."' is not a valid file."; //Show error if any.
            return array('',$result);
        }
    }

    //Where the file must be uploaded to
    if($folder) $folder .= '/';//Add a '/' at the end of the folder
    $uploadfile = $folder . $file_name;

    $result = '';
    //Move the file from the stored location to the new location
    if (!move_uploaded_file($_FILES[$file_id]['tmp_name'], $uploadfile)) {
        $result = "Cannot upload the file '".$_FILES[$file_id]['name']."'"; //Show error if any.
        if(!file_exists($folder)) {
            $result .= " : Folder don't exist.";
        } elseif(!is_writable($folder)) {
            $result .= " : Folder not writable.";
        } elseif(!is_writable($uploadfile)) {
            $result .= " : File not writable.";
        }
        $file_name = '';
        
    } else {
        if(!$_FILES[$file_id]['size']) { //Check if the file is made
            @unlink($uploadfile);//Delete the Empty file
            $file_name = '';
            $result = "Empty file found - please use a valid file."; //Show the error message
        } else {
            chmod($uploadfile,0777);//Make it universally writable.
        }
    }

    return array($file_name,$result);
}


	
	if($_FILES['resume']['name']) {
	list($file,$error) = upload('resume','resume/','txt,doc,pdf,docx');
	if($error) print $error;
}

		
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
	
	// Random password generation
	$password=rand(0,1000000);
	
	$action=1;
	
	$date_check=date("Y-m-d");
	
	$sql=mysql_query("insert into jobseeker(username, password, name, email, current_location, country, telephone, total_exp, resume, date, month_id, ip_address, ip_city, ip_region, ip_country) Values ('$email', '$password', '$name', '$email', '$current_location', '$country', '$mobile', '$total_exp', '$file', '$date', '$m_id', '$ip_add', '$ip_city', '$ip_region', '$ip_country')");
	$jobseeker_id = mysql_insert_id(); 
	
	$sql1=mysql_query("insert into applied_job(jobseeker_id, job_id, apply_type, date, date_check) Values ('$jobseeker_id', '$job_id', '$apply_type', '$date', '$date_check')");

		
		if($action=="1")
		{
			$query=mysql_query("select * from jobseeker where username = '$username'");
			while($row=mysql_fetch_array($query))
			{
				$_SESSION['jobseeker_username']=$row[username];
			}
			$link="http://www.naukrihut.com/confirm_email.php?passkey=$confirm_code";
			$to = "$email";
			$subject = "Welcome to Naukri Hut";
			$from = "info@naukrihut.com";
			$headers = "From: $from";
			$body = "Dear $name,
			\n\nWelcome to naukrihut.com. Your account has been created with us and we are delighted to have you as our member!
			\n\nFor easy reference, here are your login details:
			\nLogin ID : $username
			\nPassword : $password (Please keep it confidential.)
			\n\nPlease validate your Email address by clicking the link below:
			\n$link
			\n\nAs a registered member of naukrihut you can:
			\nSearch & Apply jobs listed on naukrihut for FREE!
			\nGet exposed to over 35,000 recruiters hunting daily for talent.
			\nSave & Manage your searched jobs and applications.
			\nPersonalize Job Alerts and receive jobs suiting your needs in your mailbox.
			\nSend you resume to TOP placement consultants.
			\n\nIf you have any feedback for us, feel free to write us at: info@naukrihut.com.
			\n\nAll the best in finding your perfect job!
			\n\nRegards,
			\nNaukrihut Team";
			
			@mail($to,$subject,$body,$headers);
			header("location:job-apply.php");
		}
		else
		{
			header("location:applied-selected-job.php?msg=Data can not be added. Please try again");
			//view("Data can not be added. Please try again.");
		}
}
		
?>