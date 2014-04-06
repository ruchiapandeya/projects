<?php 
	session_start();
	include "config.php";
	//print_r($_REQUEST);die;
	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$city=$_REQUEST['city'];
	$country=$_REQUEST['country'];
	$phone1=$_REQUEST['phone1'];
	$phone2=$_REQUEST['phone2'];
	$title=$_REQUEST['title'];
	$curr_currrency=$_REQUEST['curr_currrency'];
	$curr_salary=$_REQUEST['curr_salary'];
	$curr_figure=$_REQUEST['curr_figure'];
	$exp_currrency=$_REQUEST['exp_currrency'];
	$exp_salary=$_REQUEST['exp_salary'];
	$exp_figure=$_REQUEST['exp_figure'];
	$skills=$_REQUEST['skills'];
	$resume=$_REQUEST['resume'];
	$post_resume=$_REQUEST['post_resume'];
		
	$date=date("Y-m-d");
	$lastUpdated=date("Y-m-d");
	
	$sql_echeck=mysql_query("select * from new_record where email = '$email'");
	$count_echeck=mysql_num_rows($sql_echeck);
	
if($count_echeck!=""){
		header("location:iframe.php?act=echeck");
}else{
	
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
	list($file,$error) = upload('resume','newresume/','txt,doc,pdf,docx');
	if($error) print $error;
}

		
	$action=1;

if($file){
	/*Convert Doc to HTML code starts here*/
	$doc = $file;
	$html = "".$phone1.".html";

	$input = 'newresume/"'.$doc.'';
	$output = 'newresume_html/"'.$html.'';

	$url = 'java -jar tools/jod-converter/lib/jodconverter-cli-2.2.2.jar '.$input.' '.$output.'';
	
	$replaceString = str_replace('"','',$url);

	$convertToHtml = shell_exec($replaceString);

	$post_resume_step1 = file_get_contents('newresume_html/'.$html.'');
	
	$post_resume = str_replace("'","\'",$post_resume_step1);
	/*Convert Doc to HTML code ends here*/
}else{
	$post_resume=$_REQUEST['post_resume'];
}
		
	$sql="insert into new_record(name, email, city, country, phone1, phone2, title, curr_currrency, curr_salary, curr_figure, exp_currrency, exp_salary, exp_figure, skills, resume, post_resume, date, lastUpdated) Values ('$name', '$email', '$city', '$country', '$phone1', '$phone2', '$title', '$curr_currrency', '$curr_salary', '$curr_figure', '$exp_currrency', '$exp_salary', '$exp_figure', '$skills', '$file', '$post_resume', '$date', '$lastUpdated')";

		
		if(!mysql_query($sql))
		{
			@die('Error:'.mysql_error());
			$action=2;
		}
		if($action=="1")
		{
			@header("location:new_project.php?rs=success");
		}
		else
		{
			@header("location:new_project.php?rs=fail");
		}
}
		
?>