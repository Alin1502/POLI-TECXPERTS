<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/store.css">
    <link rel="stylesheet" href="css/fontawesome-free-6.5.2-web/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome-free-6.5.2-web/css/fontawesome.min.css">
    <script src="js/jquery.js"></script>
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
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About us</a></li>
                            <li><a href="#">Our store</a></li>
                            <li><a href="canIRunIt.html">Can I Run It?</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="navigation">
                        <ul class="menu">
                            <li><a href="login/signup.html">Sign Up</a></li>
                            <li><a href="login/login.html">Log In</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row mt-2 pb-3">
                <h1>Available products</h1>
                <h2>Log in and start shopping</h2>
            </div>
            <div class="container">

                <div class="row" id="filter-div">
                    <select name="filter" id="filter" onchange="filter()">
                        <option value="all">All</option>
                        <option value="monitors">Monitors</option>
                        <option value="processors">Processors</option>
                        <option value="graphic">Graphic cards</option>
                        <option value="motherboards">Motherboards</option>
                        <option value="ram">RAM memory</option>
                    </select>
                </div>
                
                <div class="row" id="product-div">
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

<script src="js/filter.js"></script>


</html>