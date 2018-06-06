<?php
include 'conn.php';

    $email = $_GET['email'];

    $db = $_GET['database'];

    $sql = "SELECT * FROM `".$db."` WHERE email = '".$email."'";

    $result = mysqli_query($con, $sql);

    $row = mysql_fetch_array($result); 

    $sqlAdd = "INSERT INTO `icoolsho_ss_dbname8e7`.`".$db."` (`id`, `email`) VALUES (NULL,'".$email."')";
    $con->query($sqlAdd);
    
   

?>