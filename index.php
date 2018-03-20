<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php 
   echo '<p>Hello World From Voleak Thol</p>'; 
   echo 'Host: ' + getenv("POSTGRESQL_SERVICE_HOST") + '\n';
   echo 'Port: ' + getenv("POSTGRESQL_SERVICE_PORT")  + '\n';
   echo 'DB Name: ' + getenv("dbname") + '\n';
   echo 'User: ' + getenv("dbuser") + '\n';
   echo 'Password: ' + getenv("dbpassword")  + '\n';
  ?> 
 </body>
</html>
