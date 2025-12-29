<?php
$kreds= array();
$kreds=parse_ini_file('dbcreds.ini');
define("HOST",$kreds['host']);
define("DBN",$kreds['database']);
define("DBUSER",$kreds['user']);
define("DBPWD",$kreds['pwd']);

$conn= new mysqli(HOST,DBUSER,DBPWD,DBN);
?>