<?php
session_start();
if(!isset($_SESSION["loggedin"])){
    header("Location: ../about.html");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/default.css">
    <link rel="stylesheet" href="../css/about.css">
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
                            <li><a href="#">About us</a></li>
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
                <h1 id="h1ab">About Us</h1>
            </div>
        </div>
        <div class="about-icons">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="image">
                            <img src="../images/maxresdefault.jpg" alt="">
                                <div class="text"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, sint id eligendi mollitia atque dicta. Explicabo repudiandae voluptatum iste quas molestiae adipisci, alias quos neque dolorem nisi, sequi quasi delectus.</p>
                               </div>
                        </div>
                    <div class="row">  
                        <h3>Our Team</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum laborum, molestiae tenetur eos, fugiat quibusdam architecto quia doloribus numquam sed ea accusantium, sit beatae perspiciatis blanditiis eveniet praesentium vero alias.</p>    
                    </div>
                    
                </div>
                    <div class="col-md-4">
                        <div class="image">
                             <img src="../images/maxresdefault.jpg" alt=""></div>
                                 <div class="row"><h3>Worlwide shops</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident laudantium unde, nesciunt quisquam quaerat ea illo. Excepturi veritatis, dolore nam libero culpa assumenda distinctio rerum impedit cumque qui, non quaerat.</p>
                                 </div>
                    </div>
                    <div class="col-md-4">
                        <div class="image">
                             <img src="../images/maxresdefault.jpg" alt=""></div>
                             <div class="row">
                                <h3>Our sales</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum doloribus saepe quos. Temporibus ullam, odit eos ratione obcaecati excepturi, recusandae vero accusamus nesciunt repellendus culpa! Commodi sapiente rerum blanditiis debitis.</p>
                             </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="general">
        <div class="row">
             <div class="col-md-6">
                <div class="text2">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta minus ratione assumenda quia vero veniam modi nemo, ipsam dolorem minima beatae porro eos recusandae optio itaque sit dicta voluptate esse.    
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti dignissimos voluptatem omnis nobis quibusdam a quam neque eligendi, possimus blanditiis officiis illo unde iste ipsum, nam molestiae sunt fuga repellat.
                    </p>
                </div>
             </div>
            <div class="col-md-6">
                <div class="image_gen">
                    <img src="../images/OIP.jpg">
                </div>
            </div>

            
        </div>
    </div>
        <div class="continut">
            <div class="row">
                 
                <div class="col-md-12">
                    <div class="count-container">
                        <div class="name">Physical shops</div>
                        <div class="count" id="count1">0</div>
                    </div>
                    <div class="count-container">
                        <div class="name">Products sold everyday</div>
                        <div class="count" id="count2">0</div>
                    </div>
                    <div class="count-container">
                        <div class="name">Employees</div>
                        <div class="count" id="count3">0</div>
                    </div>
                    <div class="count-container">
                        <div class="name">Satisfied Customers</div>
                        <div class="count" id="count4">0</div>
                    </div>
                    
                </div>
            </div>
              
              <div class="row">
                  <div>
                      <h2>For more informations about us feel free to contact us via the <a href="user/contact_user.php">Contact Us</a> page</h2>
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
window.addEventListener('scroll', startCounting);

function startCounting() {
  const counts = document.querySelectorAll('.count');
  const triggerPosition = window.innerHeight;

  counts.forEach((countElement, index) => {
    const animationStarted = countElement.getAttribute('data-animation-started');
    if (animationStarted) return;

    const countTargets = [147, 1200, 3600, 10000]; 
    const countIncrement = 5 * (index + 1); 

    const positionFromTop = countElement.getBoundingClientRect().top;

    if (positionFromTop < triggerPosition) {
      let count = 0;
      const targetCount = countTargets[index];
      const interval = 10;

      const timer = setInterval(() => {
        count += countIncrement;
        if (count >= targetCount) {
          clearInterval(timer);
          count = targetCount;
          countElement.setAttribute('data-animation-started', 'true');
        }
        countElement.textContent = count.toLocaleString();
      }, interval);
    }
  });
}

</script>

</html>