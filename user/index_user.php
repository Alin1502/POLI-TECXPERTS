<?php
session_start();
if(!isset($_SESSION["loggedin"])){
    header("Location: ../index.html");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/default.css">
    <link rel="stylesheet" href="../css/fontawesome-free-6.5.2-web/css/all.min.css">
    <link rel="stylesheet" href="../css/fontawesome-free-6.5.2-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="../css/wheel.css">
    <link rel="stylesheet" href="../css/forms.css">
    <script src="../js/jquery.js"></script>
    <title>POLI-TECXPERTS</title>
    <style>
        body, html {
        overflow: auto;
        }   
    </style>
</head>
<body>
    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo">
                        <a href="index_user.php" id="logo">
                            <i class="fa-solid fa-computer"></i>
                            <p>POLI-TECXPERTS</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="navigation">
                        <ul class="menu">
                            <li><a href="#">Home</a></li>
                            <li><a href="about_user.php">About us</a></li>
                            <li><a href="store_user.php">Our store</a></li>
                            <li><a href="contact_user.php">Contact us</a></li>
                            <li><a href="canIRunIt_user.php">Can I Run It?</a></li>
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
                <h1>Welcome to POLI-TECXPERTS!</h1>
                <h2>Best hardware store for your PC</h2>
            </div>

            <div class="row">
               <div id="mini-page">
                    <div id="mini-content">
                        <h1 style="margin-bottom: 20px;">Spin the wheel to get up to 10% off!</h1>
                        <div class="container">
                            <div class="spinBtn">SPIN</div>
                            <div class="wheel">
                                <div class="number" style="--i:1;--clr:#db7093; --start-angle: 0deg"><span>10%</span></div>
                                <div class="number" style="--i:2;--clr:#20b2aa; --start-angle: 45deg"><span>10%</span></div>
                                <div class="number" style="--i:3;--clr:#d63e92; --start-angle: 90deg"><span>0%</span></div>
                                <div class="number" style="--i:4;--clr:#daa520; --start-angle: 135deg"><span>0%</span></div>
                                <div class="number" style="--i:5;--clr:#ff340f; --start-angle: 180deg"><span>10%</span></div>
                                <div class="number" style="--i:6;--clr:#ff7f50; --start-angle: 225deg"><span>10%</span></div>
                                <div class="number" style="--i:7;--clr:#3cb371; --start-angle: 270deg"><span>0%</span></div>
                                <div class="number" style="--i:8;--clr:#4169e1; --start-angle: 315deg"><span>0%</span></div>
                            </div>
                            <div id="discount-code"></div>
                    </div>
                    <button id="close-mini-page">No thanks</button>
                </div>
            </div> 
            <div class="row">
                <h3 style=color:red>Check the products on sale! Limited offers</h3>
            </div>
            <div class="row">
                <div class='col-md-3'>
                    <div class='card-deck'>
                        <div class='card p-2 border-secondary mb-2'>
                            <img src="../images/monitors/monitor-1.jpg" class='card-img-top' alt='...' height='300'>
                            <div class='card-body p-1'>
                                <h4 class='card-title text-center text-info'>Alienware Gaming AW2725DF</h4>
                                <h5 class='card-text text-center text-danger'><s>4,500 lei</s>&nbsp;&nbsp;&nbsp;3,900lei</h5>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class='col-md-3'>
                    <div class='card-deck'>
                        <div class='card p-2 border-secondary mb-2'>
                            <img src="../images/procesor/procesor-4.jpg" class='card-img-top' alt='...' height='300'>
                            <div class='card-body p-1'>
                                <h4 class='card-title text-center text-info'>Procesor Intel Raptor Lake Refresh</h4>
                                <h5 class='card-text text-center text-danger'><s>3850 lei</s>&nbsp;&nbsp;&nbsp;3200lei</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-md-3'>
                    <div class='card-deck'>
                        <div class='card p-2 border-secondary mb-2'>
                            <img src="../images/procesor/procesor-1.jpg" class='card-img-top' alt='...' height='300'>
                            <div class='card-body p-1'>
                                <h4 class='card-title text-center text-info'>Procesor AMD Ryzen 5 3400G 3.7GHz</h4>
                                <h5 class='card-text text-center text-danger'><s>1200 lei</s>&nbsp;&nbsp;&nbsp;900lei</h5>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class='col-md-3'>
                    <div class='card-deck'>
                        <div class='card p-2 border-secondary mb-2'>
                            <img src="../images/monitors/monitor-9.jpg" class='card-img-top' alt='...' height='300'>
                            <div class='card-body p-1'>
                                <h4 class='card-title text-center text-info'>LG Gaming UltraGear 24GN60R-B</h4>
                                <h5 class='card-text text-center text-danger'><s>1300 lei</s>&nbsp;&nbsp;&nbsp;800lei</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         
            <div class="row">
                <h3 style="text-align:center; border-color: blue;" id="visit"><a href="store_user.php" style=" color:red;">Visit our store to see all of our products!</a></h3>   
            </div>

            <div class="row"></div>
        </div>

        <div class="references">
            <div class="row">
                <div class="col-md-2">
                    <div class="image-container">
                        <img src="../images/pic1.png"><hr style="width: 170px;">
                        <p>We assure you of the best quality you can find on the market</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="image-container">
                        <img src="../images/pic2.jpg"><hr style="width: 170px;">
                        <p>Frequent sales and budget-friendly products</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="image-container">
                        <img src="../images/pic3.png"><hr style="width: 170px;">
                        <p>Lucky wheel to spin after creating an account; up to 20% discount</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="image-container">
                        <img src="../images/pic4.png"><hr style="width: 170px;">
                        <p>Verified software that will check the requirements for a game</p>
                    </div>
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
    <script src="../js/wheel.js"></script>
</body>
</html>