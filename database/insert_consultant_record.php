<?php
	include_once ("logutil.php");
	include_once ("commonutil.php");
	include_once ("userobj.php");
	include_once ("consult_obj.php");
	include_once ("insert_function.php");
	include_once ("common_functions.php");
	$email = $_POST['email'];
	
	LogUtil :: debug("getting values from the form - insert_consultant record: " . print_r($HTTP_POST_VARS, 1));
	
	LogUtil :: debug("checking the email duplicate existance: ".$email);
	$isRegisteredEmail = Common_Functions :: isRegisteredEmail($email);
	if($isRegisteredEmail){
		LogUtil :: debug("duplicate email: ".$email . ", redirecting to previous page.");
		@header('Location: consultant_signup.php?act=1'); //If email is already exist. Switching to previous page
	}else{
	
	LogUtil :: debug("email unique, proceeding to insert consultant profile: ".$email);
	
	$consultant=new ConsultObj();
	
	$consultant->setName($_POST['name']);
	$consultant->setEmail($email);
	$consultant->setPassword($_POST['password']);
	$consultant->setCompany($_POST['company']);
	$consultant->setCity($_POST['city']);
	$consultant->setCountry($_POST['country']);
	$consultant->setPhone($_POST['phone']);
	$consultant->setApproval_state(0);

	
	LogUtil :: debug("calling insert consultant functions to insert the consultant details: ". print_r($consultant, 1));
	$consultant_id = Consultant_Functions :: insertConsulantDeatils($consultant);
	
	if(!empty($consultant_id)) {
		/*LogUtil :: debug("successfully added new consultant to Db, setting userobj in the session...");
		//Session Variables
		@session_start();
		$userObj=new UserObj();
		$userObj->setId($consultant_id);
		$userObj->setEmail($consultant->getEmail());
		$userObj->setName($consultant->getName());
		$_SESSION['userObj'] = $userObj;*/
		
		LogUtil :: debug("redirecting to index page");
		@header('Location: login_forall.php'); //Switching to next page
	} else {
		LogUtil :: debug("error while adding new freelancer to Db, redirecting to the error page...");
		CommonUtil :: errorPage();
	}
}
?>