<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php 
   echo '<p>Hello World From Voleak Thol</p>'; 
   echo getenv("POSTGRESQL_SERVICE_HOST");
   echo getenv("POSTGRESQL_SERVICE_PORT");
   echo getenv("dbname");
   echo getenv("dbuser");
   echo getenv("dbpassword");
  ?> 
 </body>
</html>
