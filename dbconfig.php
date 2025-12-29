<?php
$creds= array();
$creds=parse_ini_file("dbcreds.ini");
//define the constants
define("HOST",$creds['host']);
define("DBN",$creds['database']);
define("DBUSER",$creds['user']);
define("DBPWD",$creds['pwd']);
?>