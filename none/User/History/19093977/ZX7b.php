<?php
$server_name = "localhost";
$username = "cristi";
$password = "2603";
$db_name = "IWP_SITE";
$conn = new mysqli($servername, $username, $password, $db_name);

if($conn->error)
    echo "Connection error";

?>