<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "phpproject01";

$connection = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}


?>