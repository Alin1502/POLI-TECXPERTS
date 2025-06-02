<?php
require('database.php');

if(isset($_POST["submit"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $verify_q1 = "SELECT * FROM Users WHERE username = ?";
    $stmt1 = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt1, $verify_q1);
    mysqli_stmt_bind_param($stmt1, "s", $username); 
    mysqli_stmt_execute($stmt1);
    $verify_q1_result = mysqli_stmt_get_result($stmt1);
    $result1 = mysqli_fetch_array($verify_q1_result, MYSQLI_ASSOC);
    mysqli_stmt_close($stmt1);

    if(!empty($result1["username"])) {
        if(password_verify($password, $result1["password"])){

            session_start();
            $_SESSION["loggedin"] = "yes";
            $_SESSION["username"] = $result1["username"];
            $_SESSION["id"] = $result1["id"];
            $_SESSION["email"] = $result1["email"];
            $_SESSION["birth_date"] = $result1["birth_date"];

            setcookie("loggedin", "true", time() + 3600, "/");

            echo 'http://localhost/POLI_TECXPERTS/user/dashboard.php';
            die();
        } else {
            echo "<div class='alert alert-warning'>Invalid credentials</div>";
        }
        } else {
        echo "<div class='alert alert-warning'>Invalid credentials</div>";
    }
}

?>