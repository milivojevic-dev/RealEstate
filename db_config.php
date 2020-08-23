<?php
/* Database credentials */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'real_estate');

/* Attempt to connect to MySQL database */
$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
mysqli_query($con, "SET NAMES utf8") or die (mysqli_error($con));
mysqli_query($con, "SET CHARACTER SET utf8") or die (mysqli_error($con));
mysqli_query($con, "SET COLLATION_CONNECTION='utf8_general_ci'") or die (mysqli_error($con));
?>