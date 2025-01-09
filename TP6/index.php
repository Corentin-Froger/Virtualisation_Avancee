<?php

$databaseHost = $_GET["server"];
$databaseUsername = $_GET["user"];
$databasePassword = "root";
$databaseName = $_GET["dbname"];
$port = $_GET["port"];

echo $databaseHost . "<br>";
echo $databaseUsername . "<br>";
echo $databaseName . "<br>";
echo $port . "<br>";

// Connect to the database
echo "Bonjour";

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName, $port); 

if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}
echo "connected";
?>