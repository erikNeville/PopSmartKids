<?php
$servername = "localhost";
$username = "icoolsho_ss_d8e7";
$password = "4RMlvCABPbNR";
$dbname = "icoolsho_ss_dbname8e7";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

?>