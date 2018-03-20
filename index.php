<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php 
   echo '<p>Hello World From Voleak Thol</p>'; 
   echo "Host: $getenv("POSTGRESQL_SERVICE_HOST") ";
   echo "Port: $getenv("POSTGRESQL_SERVICE_PORT") ";
   echo "DB Name: $getenv("dbname") ";
   echo "User: $getenv("dbuser") ";
   echo "Password: $getenv("dbpassword") ";
  ?> 
 </body>
</html>
