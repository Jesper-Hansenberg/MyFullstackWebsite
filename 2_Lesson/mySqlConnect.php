<?php
$servername = "";
$ini = "";
$dbport = 3306;
if ($_SERVER['SERVER_ADDR'] != "::1") {
    $servername = "mysql17.unoeuro.com";
    $ini = parse_ini_file('../secrets.ini');
} else {
    $servername = "localhost";
    $ini = parse_ini_file('../yourSecrets.ini');
};



// Try connect
$conn = mysqli_connect($servername, $ini['db_user'], $ini['db_password'], $ini['db_name'], $dbport);

// Check 
if (!$conn) {
    die("Fejl: " . mysqli_connect_error());
}
