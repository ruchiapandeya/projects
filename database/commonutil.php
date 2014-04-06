<?php

class CommonUtil {
	public static function errorPage() {
		//header('Location: error_page.php'); //Switching to the error page
		echo "<script>location.replace('error_page.php')</script>";
	}
}	
	
?>