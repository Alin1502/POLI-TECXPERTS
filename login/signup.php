<?php
require('database.php');
ini_set('display_messages', 1);

if(isset($_POST["submit"]))
{
    $counter = 0;
    $username = $_POST["username"];
    $email = $_POST["email"];
    $birth_date = $_POST["birth_date"];
    $password = $_POST["password"];
    $confirm_pass = $_POST["confirm"];

    $password_hashed = password_hash($password, PASSWORD_DEFAULT);
    
    if(empty($username) OR empty($username) OR 
    empty($birth_date) OR empty($password) OR empty($confirm_pass)){
        echo "<div class='row alert-row'>
                <div class='alert alert-warning'>All fields must be completed</div>
                </div>";
        $counter++;
    } else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        echo "<div class='row alert-row'>
                <div class='alert alert-warning'>Email is not valid</div>
                </div>";
        $counter++;

    } else if(strlen($password) < 8) {
        echo "<div class='row alert-row'>
                <div class='alert alert-warning'>Password must be at east 8 charactes long</div>
                </div>";
        $counter++;

    } else if($password !==$confirm_pass)
    {
        echo "<div class='row alert-row'>
                <div class='alert alert-warning'>Passwords must match</div>
                </div>";
        $counter++;
    }
    
    $verify_q1 = "SELECT * FROM Users WHERE username = ?";
    $stmt1 = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt1, $verify_q1);
    mysqli_stmt_bind_param($stmt1, "s", $username); 
    mysqli_stmt_execute($stmt1);
    $verify_q1_result = mysqli_stmt_get_result($stmt1);
    $result1 = mysqli_fetch_array($verify_q1_result, MYSQLI_ASSOC);
    mysqli_stmt_close($stmt1);

    $verify_q2 = "SELECT * FROM Users WHERE email = ?";
    $stmt2 = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt2, $verify_q2);
    mysqli_stmt_bind_param($stmt2, "s", $email);
    mysqli_stmt_execute($stmt2);
    $verify_q2_result = mysqli_stmt_get_result($stmt2);
    $result2 = mysqli_fetch_array($verify_q2_result, MYSQLI_ASSOC);
    mysqli_stmt_close($stmt2);

    if(!empty($result1["username"])) {
        echo "<div class='row'><div class='alert alert-warning'>Username already exists</div></div>";
        $counter++;

    } 
    if(!empty($result2["email"])) {
        echo "<div class='row'><div class='alert alert-warning'>Email already exists</div></div>";
        $counter++;

    }

    if($counter === 0){
        $insert_query = "INSERT INTO Users (username, email, birth_date, password) VALUE (?, ?, ?, ?)";
        $statement = mysqli_stmt_init($conn);
        $prepStatement = mysqli_stmt_prepare($statement, $insert_query);
        if($prepStatement){
            mysqli_stmt_bind_param($statement, "ssss", $username, $email, $birth_date, $password_hashed);
            mysqli_stmt_execute($statement);
            echo "<div class='alert alert-success'>Account registered successfully!</div>";
        } else 
            die("message");
    }

}
                    
?>