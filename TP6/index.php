<?php


$databaseHost = $_GET["server"];
$databaseUsername = "root";
$databasePassword = "root";
//$databaseName = 'rolodex';

echo $databaseHost;

// Connect to the database
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword); 

echo $mysqli;

?>