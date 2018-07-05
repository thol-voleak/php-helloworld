<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php
  class AsyncOperation extends Thread {

    public function __construct($arg) {
        $this->arg = $arg;
    }

    public function run() {
        if ($this->arg) {
            $sleep = mt_rand(1, 10);
            printf('%s: %s  -start -sleeps %d' . "\n", date("g:i:sa"), $this->arg, $sleep);
            sleep($sleep);
            printf('%s: %s  -finish' . "\n", date("g:i:sa"), $this->arg);
        }
    }
}

// Create a array
$stack = array();

//Initiate Multiple Thread
foreach ( range("A", "D") as $i ) {
    $stack[] = new AsyncOperation($i);
}

// Start The Threads
foreach ( $stack as $t ) {
    $t->start();
}

  /*
   $host = gethostname();
   echo "hello world form server host: {$host} ";
   for ($x = 0; $x <= 1000; $x++) {
    echo "The number is: $x <br>";
   }
   */
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
