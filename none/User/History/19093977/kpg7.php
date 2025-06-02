<?php
$server_name = "localhost";
$username = "cristi";
$password = "2603";
$db_name = "IWP_SITE";
$conn = mysqli($servername, $username, $password, $db_name);

if($conn->connect_error)
    die
?>