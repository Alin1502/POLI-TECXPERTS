<?php
session_start();
$userid = $_SESSION['id'];
ini_set('display_errors', 1);

require '../login/database.php';

if (!$conn) {
    die("Connection error: " . mysqli_connect_error());
}

$response = ['success' => false];

$voucher_code = mysqli_real_escape_string($conn, $_POST['voucher_code']);
$query = "SELECT value, user_id, voucher_code FROM voucher WHERE voucher_code = '$voucher_code'";
$result = mysqli_query($conn, $query);

$arr = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['voucher_code'] == $arr['voucher_code'] && $arr['user_id'] == $userid) {

        $discount = (int) $arr['value'];

        $response['success'] = true;
        $response['discount'] = $discount;
}

echo json_encode($response);

mysqli_close($conn);
?>