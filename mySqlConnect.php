<?php

$ini = parse_ini_file('yourSecrets.ini');

//$servername = "mysql17.unoeuro.com";

$servername = "localhost";

$dbport = 3306;

// Try connect

$conn = mysqli_connect($servername, $ini['db_user'], $ini['db_password'], $ini['db_name'], $dbport);

// Check 

if (!$conn) {

    die("Fejl: " . mysqli_connect_error());

}
