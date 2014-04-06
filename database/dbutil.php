<?php
include_once ("logutil.php");

class DbUtil {
	private $dbh=null;
	
	public function __construct() {
		require ('config/config.php');
		try {
			$this->dbh = new PDO("mysql:host=$hostname;dbname=$dbName", $dbUser, $dbPwd, array(PDO::ATTR_PERSISTENT => true));
			/*** set the PDO error mode to exception ***/
		    $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    /*** begin the transaction ***/
		    $this->dbh->beginTransaction();
		} catch(PDOException $e) {
			LogUtil :: error("Error while initializing Db connection | Exception: ".$e);
			throw new Exception($e->getMessage());
    	}
   	}
   	
	public function execute($query) {
		try {
			$this->dbh->exec($query);
			LogUtil :: debug($query);
		} catch(PDOException $e) {
			LogUtil :: error("Error while executing SQL: ".$query."\nDetails: ".$e);
			throw new Exception($e->getMessage());
    	}
	}
	
	public function query($query) {
		$result = "";
		try {
			$result=$this->dbh->query($query);
			LogUtil :: debug($query);
		} catch(PDOException $e) {
			LogUtil :: error("Error while executing SQL: ".$query."\nDetails: ".$e);
			throw new Exception($e->getMessage());
    	}
    	return $result;
	}
	
	public function rowCount($query) {
		$count = "";
		try {
			$result=$this->dbh->query($query)->fetch();
			$count=count($result)-1;
			LogUtil :: debug($query);
		} catch(PDOException $e) {
			LogUtil :: error("Error while getting count of SQL: ".$query."\nDetails: ".$e);
			throw new Exception($e->getMessage());
    	}
    	return $count;
	}
	
	public function pk() {
		try {
			return $this->dbh->lastInsertId();
		} catch(PDOException $e) {
			LogUtil :: error("Error while getting primary key: \nDetails: ".$e);
			throw new Exception($e->getMessage());
    	}
	}
	
	public function commit() {
		/*** commit the db transation ***/
    	$this->dbh->commit();
	}
	
	public function rollback() {
		/*** rollback the db transation ***/
    	$this->dbh->rollback();
	}
	
	public function prepare($query) {
		try {
			$statement = $this->dbh->prepare($query);
			LogUtil :: debug($query);
			return $statement;
		} catch(PDOException $e) {
			LogUtil :: error("Error while preparing statement: \nDetails: ".$e);
			throw new Exception($e->getMessage());
		}

	}
}
?>