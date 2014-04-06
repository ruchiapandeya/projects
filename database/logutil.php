<?php
require_once('log4php/Logger.php');

class LogUtil {
	
	public static function log($msg) {
    	require ('config/config.php');
    	Logger::configure($properties_file);
        $logger = Logger::getLogger("database");
        $logger->info($msg);
    }
    
	public static function info($msg) {
    	require('config/config.php');
    	Logger::configure($properties_file);
        $logger = Logger::getLogger("database");
        $logger->info($msg);
    }
    
    public static function debug($msg) {
    	require('config/config.php');
    	Logger::configure($properties_file);
        $logger = Logger::getLogger("database");
        $logger->debug($msg);
    }
    
    public static function warn($msg) {
    	require('config/config.php');
    	Logger::configure($properties_file);
        $logger = Logger::getLogger("database");
        $logger->warn($msg);
    }
    
    public static function error($msg) {
    	require('config/config.php');
    	Logger::configure($properties_file);
        $logger = Logger::getLogger("error");
        $logger->error($msg);
    }
    
    public static function fatal($msg) {
    	require('config/config.php');
    	Logger::configure($properties_file);
        $logger = Logger::getLogger("error");
        $logger->fatal($msg);
    }
}
?>