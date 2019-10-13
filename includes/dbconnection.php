<?php
// $servername = "us-cdbr-iron-east-02.cleardb.net";
// $dbUsername="b0ae198915bb2d";
// $dbPassword ="16a1a0d0";
//$dbName ="heroku_6639abf7d3c0725";
// define('DB_SERVER', "us-cdbr-iron-east-02.cleardb.net");
// define('DB_USER',"b0ae198915bb2d");
// define('DB_PASS' ,"16a1a0d0");
// define('DB_NAME', "heroku_6639abf7d3c0725");

define('DB_SERVER', "54.86.137.146");
define('DB_USER',"heracles_makeup");
define('DB_PASS' ,"n3tw0rth@p9");
define('DB_NAME', "heracles_makeup");


$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

?>
