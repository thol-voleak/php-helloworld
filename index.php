<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php
 
   $host = gethostname();
   echo "hahhahahahaha"
   echo "hello world form server host: {$host} ";
   $counter = 0;
   for ($x = 0; $x <= 5000; $x++) {
     $counter+=$x/1;
    //echo "The number is: $x <br>";
   }
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
