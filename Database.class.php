<?php
require_once("dbconfig.php");
class Database{
private static $instance= null;

//singleton pattern implemenation
private function __construct(){
if(!isset(self::instance){
return new Database();
}else{
 self::getInstance();
}//end if
}//end constructor
//end singleton

public static function getInstance(){
if(!isset(self::instance){
self::connect();
}//end if block
return self::$instance;
}//end func
public static function connect(){
self::instance=new mysqli(HOST,DBUSER,DBPWD,DBN);
}//end func

}//end class
?>