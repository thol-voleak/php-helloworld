<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php 
   $POSTGRESQL_SERVICE_HOST = getenv("POSTGRESQL_SERVICE_HOST");
   $POSTGRESQL_SERVICE_PORT = getenv("POSTGRESQL_SERVICE_PORT");
   $dbname = getenv("dbname");
   $dbuser = getenv("dbuser");
   $dbpassword = getenv("dbpassword");
  
   echo "Host: {$POSTGRESQL_SERVICE_HOST"} ";
   echo "Port: {$POSTGRESQL_SERVICE_PORT"} ";
   echo "DB Name: {$dbname} ";
   echo "User: {$dbuser} ";
   echo "Password: {$dbpassword} ";
  ?> 
 </body>
</html>
