<?php 
	session_start();
	include "config.php";
	
	//print_r($_REQUEST);die;
	$username=$_REQUEST['username'];
	$password=$_REQUEST['password'];
	$cfm_password=$_REQUEST['cfm_password'];
	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$current_location=$_REQUEST['current_location'];
	$country=$_REQUEST['country'];
	$mobile=$_REQUEST['mobile'];
	$telephone=$_REQUEST['telephone'];
	$industry=$_REQUEST['industry'];
	$fuctional_area=$_REQUEST['fuctional_area'];
	$role=$_REQUEST['role'];
	$skills=$_REQUEST['skills'];
	$resume_headline=$_REQUEST['resume_headline'];
	$resume=$_REQUEST['resume'];
	$resume_written=$_REQUEST['resume_written'];
	
	$year=$_REQUEST['year'];
	$month=$_REQUEST['month'];
	$lacs=$_REQUEST['lacs'];
	$thousand=$_REQUEST['thousand'];
	$currency=$_REQUEST['currency'];
	$graduation=$_REQUEST['graduation'];
	$university=$_REQUEST['university'];
	$graduate_in=$_REQUEST['graduate_in'];
	$pg=$_REQUEST['pg'];
	$phd=$_REQUEST['phd'];
	$course1=$_REQUEST['course1'];
	$course2=$_REQUEST['course2'];
	$course3=$_REQUEST['course3'];
	
	$date=date("F j, Y, g:i a");
	
	$sql_echeck=mysql_query("select * from jobseeker where email = '$email'");
	$count_echeck=mysql_num_rows($sql_echeck);
	
if($count_echeck!=""){
		header("location:resume_step1.php?act=echeck");
}else{
	
	$total_exp="".$year." ".$month."";
	$curr_annual_salary="".$lacs." ".$thousand."";
	
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
	
	// Random confirmation code
	$confirm_code=md5(uniqid(rand())); 
	
	$action=1;
		
	$sql="insert into jobseeker(username, password, name, email, current_location, country, telephone, total_exp, curr_annual_salary, currency, fuctional_area, role, industry, skills, resume_headline, resume, resume_written, confirmation_code, date, month_id, ip_address, ip_city, ip_region, ip_country) Values ('$username', '$password', '$name', '$email', '$current_location', '$country', '$mobile', '$total_exp', '$curr_annual_salary', '$currency', '$fuctional_area', '$role', '$industry', '$skills', '$resume_headline', '$file', '$resume_written', '$confirm_code', '$date', '$m_id', '$ip_add', '$ip_city', '$ip_region', '$ip_country')";

		
		if(!mysql_query($sql))
		{
			die('Error:'.mysql_error());
			$action=2;
		}
		if($action=="1")
		{
			$query=mysql_query("select * from jobseeker where username = '$username'");
			while($row=mysql_fetch_array($query))
			{
				$_SESSION['jobseeker_username']=$row[username];
				$_SESSION['jobseeker_id']=mysql_insert_id();
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
		/*SMS script starts here*/
		/*$url = "http://sms.cyberdatasolution.com/http-api/receiverall.asp?username=naukrihut&password=soniji1&sender=naukrihu&cdmasender=9211199909&to=$mobile&message='Welcome'";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$curl_scraped_page = curl_exec($ch);
curl_close($ch);*/
//echo $curl_scraped_page;

		/*SMS script ends here*/
			
			@mail($to,$subject,$body,$headers);
			header("location:resume_step2.php");
		}
		else
		{
			header("header:resume_step2.php?msg=Data can not be added. Please try again");
			//view("Data can not be added. Please try again.");
		}
}
		
?>