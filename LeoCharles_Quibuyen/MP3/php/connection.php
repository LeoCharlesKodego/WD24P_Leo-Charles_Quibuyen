<?php

/** This code serves as a connection to database */

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "yogurt";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);