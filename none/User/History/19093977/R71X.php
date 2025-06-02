<?php
ini_set('display_errors', 1);
$server_name = "localhost";
$host = "cristi";
$pass = "2603";
$db_name = "IWP_SITE";
$conn = new mysqli($server_name, $username, $password, $db_name);

if($conn->error)
    echo "Connection error";

?>