<?php
// params to connect to a database
$dbHost="localhost";
$dbUser="root";
$dbPass="";
$dbName="srms";

// connnection to database
$conn=mysqli_connect($dbHost,$dbUser,$dbPass,$dbName); 

if(!$conn){
    die("Database Connection failed!");
}

?>