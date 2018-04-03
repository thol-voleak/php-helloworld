<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php 
   $host = gethostname();
   echo "Hello from green server host: {$host}"
   /*$POSTGRESQL_SERVICE_HOST = getenv("POSTGRESQL_SERVICE_HOST");
   $POSTGRESQL_SERVICE_PORT = getenv("POSTGRESQL_SERVICE_PORT");
   $dbname = getenv("dbname");
   $dbuser = getenv("dbuser");
   $dbpassword = getenv("dbpassword");
   $phpdb = getenv("PHP-DB_SERVICE_HOST");
   echo "Host: {$POSTGRESQL_SERVICE_HOST}, ";
   echo "Port: {$POSTGRESQL_SERVICE_PORT}, ";
   echo "DB Name: {$dbname}, ";
   echo "User: {$dbuser}, ";
   echo "Password: {$dbpassword} ";
   */
  
  
  ?> 
 </body>
</html>
