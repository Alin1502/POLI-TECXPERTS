<?php
require "../login/database.php";
session_start();
$user_id = $_SESSION["id"];

if (!$conn) {
    die("Connection error: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['voucher_code'])) {
    $voucher_code = mysqli_real_escape_string($conn, $_POST['voucher_code']);
    $value = '10'; 

    $sql = "INSERT INTO voucher (voucher_code, value, user_id) VALUES ('$voucher_code', '$value', '$user_id')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
