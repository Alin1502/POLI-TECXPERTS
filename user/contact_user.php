<?php
session_start();
if(isset($_SESSION["loggedin"])){

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
    <link rel="stylesheet" href="../css/forms.css">
    <script src="../js/jquery.js"></script>

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
                            <li><a href="#">Contact us</a></li>
                            <li><a href="canIRunIt_user.php">Can I Run It?</a></li>/a></li>
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
                <h1>Contact Us</h1>
                <h2>Do you have any complaints, questions or technical issues regarding your order or our website? Feel free to contact us.</h2>
            </div>
                <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">

                    <div class="row alert alert-warning hidden" id="message-div">
                    </div>

                    <div class="row hidden" id="serv-resp">

                    </div>

                     <form method="post" id="contact-form" class="form">
                        <div class="row">
                            <label for="username">Username: </label>
                            <input type="text" name="username" id="username" required>
                        </div>
                        <div class="row">
                            <label for="email">Email: </label>
                            <input type="email" name="email" id="email" required>
                        </div>
                        <div class="row">
                            <label for="issue" id="issue">Issue:</label>
                            <select name="issue" id="select-issue" required>
                                <option>Technical Issues</option>
                                <option>Questions Regarding Your Order</option>
                                <option>Questions Regarding Our Products</option>
                                <option>Questions Regarding Our Website</option>
                                <option>Complaints</option>
                            </select>
                        </div>
                        <div class="row">
                            <label for="description">Describe your issue: </label>
                            <textarea id="message" name="message" maxlength="250" required></textarea>
                        </div>
                        <div class="row">
                            <input type="submit" name="send" id="submit" value="Submit">
                        </div>
                    </form>
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

<script>

$(document).ready(function(){
    $("#contact-form").submit(function(e){
        e.preventDefault();
        var $form = $(this).closest(".form");
        var username = $form.find("#username").val();
        var email = $form.find("#email").val();
        var issue = $form.find("#select-issue").val();
        var message = $form.find("#message").val();

        $.ajax({
            url: "send-email.php",
            method: "post",
            data: {username: username, email: email, issue: issue, message: message, send: 1},
            success: function(response){
                $("#serv-resp").html(response);
                $("#serv-resp").removeClass("hidden");
                $form.trigger("reset");
                window.location.href
            }
        });


    });
});

</script>

</html>
 <?php  } else {
    header("Location: ../login/login.html");
    exit();
}
?>