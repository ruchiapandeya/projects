<?php
	include_once ("logutil.php");
	include_once ("dbutil.php");
	include_once ("commonutil.php");
	
	class Common_Functions {
		
		public static function isRegisteredEmail($email) {
	    	$isEmailRegistered = false;
			LogUtil :: debug("isRegisteredEmail: check if registered email in Db: " . $email);
			if(!empty($email)) {
				try {
					$dbUtil = new DbUtil();
					
					$registerd_email_sql = "select username from register_consultant where username = ?";
					$statement = $dbUtil->prepare($registerd_email_sql);
					LogUtil :: debug("isRegisteredEmail: executing query for checking registered email- " . $email);
					if ($statement->execute(array($email))) {
						$row = $statement->fetch();
						
				  		if($email == $row['username']) {
				  			$isEmailRegistered = true;
				  		} else {
				  			$isEmailRegistered = false;
				  		}
					}
					$dbUtil->commit();
				} catch (Exception $e) {
					LogUtil :: error("isRegisteredEmail: Error while checking registered email $email: $e");
					LogUtil :: debug("isRegisteredEmail: rolling back transaction");
					if(!empty($dbUtil)) {
						/*** roll back the transaction if we fail ***/
						$dbUtil->rollback();
					}
				}
			} else {
				LogUtil :: debug("isRegisteredEmail: $email required for checking registered email.");
				$isEmailRegistered = NULL;
			}
			return $isEmailRegistered;
	    }
		
		public static function insertAuthentication($dbUtil, $username, $password, $role) {
	    	$uniqueAutheticationId = NULL;
			LogUtil :: debug("insertAuthentication: insert the authentication in Db- username:" . $username . ", password:" . $password . ", role: " . $role);
			if(!empty($username) && !empty($password) && !empty($role)) {
				//insert authentication details
				$insert_authentication_sql = "INSERT INTO authentication (username, password, role, isvalid) " .
									  "VALUES (?, ?, ?, ?)";
				$statement = $dbUtil->prepare($insert_authentication_sql);
				$statement->execute(array($username, $password, $role, 1));
				$uniqueAutheticationId = $dbUtil->pk();
				LogUtil :: debug("insertBidder: inserted authetication in Db: " . $uniqueAutheticationId);
			} else {
				LogUtil :: debug("insertAuthentication: username, password, role are required for inserting authentication.");
				$uniqueAutheticationId = NULL;
			}
			return $uniqueAutheticationId;
	    }
	    
		public static function insertDeatils($dbUtil, $name, $username, $password, $company, $city, $country, $phone, $approval_state) {
			$date=date('Y-m-d');
	    	$uniquePersonalDetailsId = NULL;
			LogUtil :: debug("insertPersonalDetails: insert the register_consultant in Db- name:" . $name . ", username:" . $username . ", password: " . $password . ", company: " . $company . ", city: " . $city . ", country: " . $country . ", phone: " . $phone . ", date: " . $date);
			if(!empty($name) && !empty($username)) {
				//insert personal details
				$insert_personal_details_sql = "INSERT INTO register_consultant (name, username, password, company, city, country, phone, date) " .
											 "VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
				$statement = $dbUtil->prepare($insert_personal_details_sql);
				$statement->execute(array($name, $username, $password, $company, $city, 'India', $phone, $date));
				$uniquePersonalDetailsId = $dbUtil->pk();
				
				LogUtil :: debug("insertPersonalDetails: personal detail insert done successfully, commiting the transaction");
			} else {
				LogUtil :: debug("insertPersonalDetails: name, username, email are required for inserting personal details");
				$uniquePersonalDetailsId = NULL;
			}
			return $uniquePersonalDetailsId;
	    }
	}