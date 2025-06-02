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
                            <li><a href="">Sign Up</a></li>
                            <li><a href="">Log In</a></li>
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
                    <form action="signup.php" method="post" id="signup-form" class="">
                        <div class="row">
                            <label for="username">Username: </label>
                            <input type="text" name="username" id="username">
                        </div>
                        <div class="row">
                            <label for="email">Email: </label>
                            <input type="email" name="email" id="email">
                        </div>
                        <div class="row">
                            <label for="birth-date">Birthday: </label>
                            <input type="date" name="birth-date" id="birth-date">
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
</html>