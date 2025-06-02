<?php
ini_set('display_errors', 1);
$server_name = "localhost";
$host = "root";
$pass = "";
$db_name = "IWP_SITE";
$conn = mysqli_connect($server_name, $host, $pass, $db_name);

if(!$conn)
    echo "Connection error";

?>