<?php
session_start();
if(!isset($_SESSION["loggedin"])){
    header("Location: ../canIRunIt.html");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/default.css">
    <link rel="stylesheet" href="../css/api.css">
    <link rel="stylesheet" href="../css/fontawesome-free-6.5.2-web/css/all.min.css">
    <link rel="stylesheet" href="../css/fontawesome-free-6.5.2-web/css/fontawesome.min.css">
    <title>POLI-TECXPERTS</title>

</head>

<body>
    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo">
                        <a href="index.html" id="logo">
                            <i class="fa-solid fa-computer"></i>
                            <p>POLI-TECXPERTS</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="navigation">
                        <ul class="menu">
                            <li><a href="index_user.php">Home</a></li>
                            <li><a href="about_user.php">About us</a></li>
                            <li><a href="store_user.php">Our store</a></li>
                            <li><a href="contact_user.php">Contact us</a></li>
                            <li><a href="#">Can I Run It?</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="navigation">
                        <ul class="menu">
                            <li><a href="dashboard.php">Dashboard</a></li>
                            <li><a href="cart.php">Cart</a></li>
                            <li><a href="logout.php">Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <h1>Can I Run It?</h1>
                <h2>Test the necessary components for running your favorite games</h2>
            </div>

            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4 game-wrapper">
                    <div class="row">
                        <label for="game">Input Steam game code: </label>
                        <input type="text" id="game" name="game" required>
                    </div>
                    <div class="row btn">
                        <input type="submit" value="Check game specs" id="game-btn">
                    </div>

                    <div class="row hidden" id="response-wrap">
                    </div>

                    <div class="row">
                        <div id="game-list">
                            <h4>A list of the most popular games and their corresponding codes.</h4>
                            <ul>
                                <li><b>Counter Strike 2:</b>  730</li>
                                <li><b>GTA V:</b>  271590</li>
                                <li><b>Rocket League:</b>  252950</li>
                                <li><b>PUBG:</b>  578080</li>
                                <li><b>Apex Legends:</b>  1172470</li>
                                <li><b>DayZ:</b>  221100</li>
                                <li><b>Rust:</b>  252490</li>
                                <li><b>Call of Duty MW2:</b>  10180</li>
                                <li><b>Unturned:</b>  304930</li>
                                <li><b>7 Days to Die:</b>  251570</li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                </div>
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
                    <div class="copyright">
                        All rights reserved © POLI-TECXPERTS
                    </div>
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
<script src="../js/canIRunIt.js"></script>

</html>