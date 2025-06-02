<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/fontawesome-free-6.5.2-web/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome-free-6.5.2-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/forms.css">
    <title>POLI-TECXPERTS</title>
    
</head>

<body>
    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <a href="index.html"><img src="" alt="logo" id="logo">
                    <!-- Logo here -->
                    </a>
                </div>
                <div class="col-md-6">
                    <div class="navigation">
                        <ul class="menu">
                            <li><a href="">Home</a></li>
                            <li><a href="">About us</a></li>
                            <li><a href="">Our store</a></li>
                            <li><a href="">Contact us</a></li>
                            <li><a href="">Can I Run It?</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="navigation">
                        <ul class="menu">
                            <li><a href="#">Sign Up</a></li>
                            <li><a href="login.php">Log In</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <h1>Sign Up</h1>
                <h2>Create an account and upgrade your PC! </h2>
            </div>

            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="row alert-row">
                        <div class="alert alert-warning hidden" id="error-div"></div>
                        <div class="alert alert-success hidden" id="succes-div"></div>
                    </div>

                    <?php
                    require('database.php');
                    ini_set('display_errors', 1);
                    
                    if(isset($_POST["submit"]))
                    {
                        $counter = 0;
                        $username = $_POST["username"];
                        $email = $_POST["email"];
                        $birth_date = $_POST["birth-date"];
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

                        $verify_q1 = "SELECT * FROM Users WHERE username = :username";
                        $verify_q2 = "SELECT * FROM Users WHERE email = :email";

                        $q1 = mysqli_stmt_prepare(mysqli_stmt_init($conn),$verify_q1);
                        $q2 = $conn->prepare($verify_q2);

                        $q1->bindParam(':username', $username);
                        $q2->bindParam(':email', $email);

                        $q1->execute();
                        $q2->execute();

                        $verify_q1_result = mysqli_fetch_array($q1, MYSQLI_ASSOC);
                        $verify_q2_result = mysqli_fetch_array($q2, MYSQLI_ASSOC);

                        if($verify_q1_result["username"]) {
                            echo "<div class='row alert-row'>
                                    <div class='alert alert-warning'>Username already exists</div>
                                  </div>";
                            $counter++;

                        } 
                        if($q2_rowCount > 0) {
                            echo "<div class='row alert-row'>
                                        <div class='alert alert-warning'>Email already exists</div>
                                  </div>";
                            $counter++;

                        }

                        if($counter === 0){
                            $insert_query = "INSERT INTO Users (username, email, birth_date, password) VALUE(?, ?, ?, ?)";
                            $statement = mysqli_stmt_init($conn);
                            $prepStatement = mysqli_stmt_prepare($statement, $insert_query);
                            if($prepStatement){
                                mysqli_stmt_bind_param($statement, "ssss", $username, $email, $birth_date, $password_hashed);
                                mysqli_stmt_execute($statement);
                                echo "<div class='row alert-row'>
                                        <div class='alert alert-success'>Account registered successfully!</div>
                                  </div>";
                            } else 
                                die("Error");
                        }

                    }

                    ?>

                    <form action="signup.php" method="post" id="signup-form" class="form">
                        <div class="row">
                            <label for="username">Username: </label>
                            <input type="text" name="username" id="username" value="<?php echo isset($_POST["username"])? $_POST["username"]:""  ?>">
                        </div>
                        <div class="row">
                            <label for="email">Email: </label>
                            <input type="email" name="email" id="email" value="<?php echo isset($_POST["email"])? $_POST["email"]:""  ?>">
                        </div>
                        <div class="row">
                            <label for="birth-date">Birthday: </label>
                            <input type="date" name="birth-date" id="birth-date" value="<?php echo isset($_POST["birth-date"])? $_POST["birth-date"]:""  ?>">
                        </div>
                        <div class="row">
                            <label for="password">Password: </label>
                            <input type="password" name="password" id="password">
                        </div>
                        <div class="row">
                            <label for="confirm">Confirm password: </label>
                            <input type="password" name="confirm" id="confirm">
                        </div>
                        <div class="row">
                            <input type="submit" name="submit" id="submit" value="Create account">
                        </div>
                    </form>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 icons">
                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                    <a href=""><i class="fa-brands fa-tiktok"></i></a>
                    <a href=""><i class="fa-brands fa-youtube"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                </div>
                <div class="col-md-4">
                    <p class="copyright">
                        All rights reserved © POLI-TECXPERTS
                    </p>
                </div>
                <div class="col-md-4 contact-info">
                    <p>Bulevardul Metalurgiei</p>
                    <p>|</p>
                    <p>07xxxxxxxx</p>
                    <p>|</p>
                    <p>contact@poli-tecxperts.com</p>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- <script src="js/validation.js"></script> -->
<script>
    if(window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>
</html>

