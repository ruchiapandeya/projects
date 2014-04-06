<?php
	include_once ("userobj.php");
	include_once ("dbutil.php");
	include_once ("logutil.php");
	include_once ("commonutil.php");
	
	$email = $_POST['loginEmail'];
	$password =md5($_POST['loginPassword']);
	$id="";
	$name="";
	//check if the password is valid
	LogUtil :: debug("authenticating user: ".$email);
	try {
		LogUtil :: debug("starting db session");
		$dbUtil = new DbUtil();
		$count = $dbUtil->rowCount("SELECT id, username FROM register_consultant WHERE username = '$email' and password='$password'");
		if($count==0) {
			//invalid userid/password
			LogUtil :: debug('authentication failed for the user: '.$email);
			header('Location: login_forall.php?auth_error=1');
		} else {
			$autheticationRS = $dbUtil->query("SELECT id, username, name FROM register_consultant WHERE username = '$email' and password='$password'");
			foreach($autheticationRS as $row) {
				$id=$row['id'];
				$email=$row['username'];
				$name=$row['name'];
			
				LogUtil :: info("Successfully authenticated user: ".$email.", getting user specific data from Db");
				LogUtil :: debug("creating user obj: ".$name);
				
				LogUtil :: debug("successfully added new consultant to Db, setting userobj in the session...");
		
				//instantiating the userobj obj
				$userObj=new UserObj();
				$userObj->setId($id);
				$userObj->setEmail($email);
				$userObj->setName($name);
				//setting user obj in session
				session_start();
				$_SESSION['userObj'] = $userObj;
				LogUtil :: info("Setting userObj in the session: ".print_r($userObj,1));
				LogUtil :: info("Redirecting the user: ".$email." to ".$nextUrl);
				header('Location: iframe.php');
			}
		}
	} catch (Exception $e) {
		LogUtil :: error("Error while authenticating the user: $e");
		LogUtil :: debug("redirecting to the error page");
		CommonUtil :: errorPage();
	}
?>
