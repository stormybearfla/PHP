# A PHP Database project to simplify db usage
Database credentials are stored in an .ini file and are loaded as constants via the dbconfig.php script
The Database class instantiates the mysqli object with the credentials created by the dbconfig script.  
  
the Database instance is available via a static method on the class  Database::getInstance() and queries can be run on this instance.  


