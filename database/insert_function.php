<?php
	include_once ("logutil.php");
	include_once ("dbutil.php");
	include_once ("commonutil.php");
	include_once ("consult_obj.php");
	include_once ("common_functions.php");
	
	class Consultant_Functions {
		
	    public static function insertConsulantDeatils($consultant) {
	    	$consultant_id = NULL;
			LogUtil :: debug("insertConsulant: insert the consultant in Db: " . print_r($consultant, 1));
			if(!empty($consultant)) {
				try {
					$dbUtil = new DbUtil();
					
					//insert personal details
					$consultant_id=Common_Functions :: insertDeatils($dbUtil, $consultant->getName(), $consultant->getEmail(), $consultant->getPassword(), $consultant->getCompany(), $consultant->getCity(), $consultant->getCountry(), $consultant->getPhone(), $consultant->getApproval_state());
					LogUtil :: debug("insertConsulant: got the personal details uniqueId: " . $pd_unique_id);
					
					$date=date("F j, Y, g:i a");
					
					LogUtil :: debug("insertConsulant: inserted references in Db");
					
					LogUtil :: debug("insertConsulant: all inserts done successfully, commiting the transaction");
					$dbUtil->commit();
				} catch (Exception $e) {
					LogUtil :: error("insertConsulant: Error while inserting the bidder in Db : " . print_r($consultant, 1) . ", Error: " . $e);
					LogUtil :: debug("insertConsulant: rolling back transaction for insert bidder.");
					if(!empty($dbUtil)) {
						/*** roll back the transaction if we fail ***/
						$dbUtil->rollback();
					}
					$consultant_id = NULL;
				}
			} else {
				LogUtil :: debug("insertConsulant: cannot insert null object.");
				$isSuccess = NULL;
			}
			return $consultant_id;
	    }
	    
	}
?>