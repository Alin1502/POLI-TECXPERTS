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
                            <li><a href="contact_user.php">Contact us</a></li>
                            <li><a href="canIRunIt_user.php">Can I Run It?</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="navigation">
                        <ul class="menu">
                            <li><a href="dashboard.php">Dashboard</a></li>
                            <li><a href="#">Cart</a></li>
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
            <div class="row justify-content-center">
                <div class="col-lg-8">
                <div style="display: <?php if(isset($_SESSION['showAlert'])) {echo $_SESSION['showAlert'];} else {echo 'none';} unset($_SESSION['showAlert']);?>;" class="alert alert-success alert-dismissible mt-3">
                    <strong><?php if(isset($_SESSION['message'])) echo $_SESSION['message'] ?></strong> 
                </div>
                    <div class="table-responsive mt-2">
                        <table class="table table-bordered table-striped text-center fs-5">
                            <thead>
                                <tr>
                                    <td colspan="7">
                                        <h4 class="text-center text-info m-0">Products in your cart</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Total Price</th>
                                    <th>
                                        <a href="action.php?clear=all" class="badge-danger p-2" style="color: red; text-decoration: none;" 
                                        onclick="return confirm('Are you sure you want to clear your cart?')"><i class="fas fa-trash">&nbsp;&nbsp;</i>Clear cart</a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                require '../login/database.php';
                                $user_id = $_SESSION['id'];
                                $stmt = $conn->prepare("SELECT * FROM Cart WHERE user_id = $user_id");
                                $stmt->execute();
                                $result = $stmt->get_result();
                                $total = 0;
                                while($row = $result->fetch_assoc()):
                                ?>
                                <tr>
                                    <td><?= $row['name'] ?></td>
                                    <input type="hidden" class="pname" value="<?php echo $row['name']?>">

                                    <td><img src="../<?php echo $row["image"] ?>" width="60"> </td>

                                    <td><input type="number" class="form-control itemQty" value="<?php echo $row["quantity"] ?>" style="width: 75px;"></td>

                                    <td><?php echo number_format($row['price'], 2) ?></td>
                                    <input type="hidden" class="pprice" value="<?php echo $row['price'] ?>">

                                    <td><?php echo number_format($row['total_price'], 2)?></td>
                                    <td>
                                        <a href="action.php?remove=<?php echo $row['id'] ?>" class="text-danger lead" onclick="return confirm('Are you sure you want to remove this item?')"><i class="fas fa-trash-alt" style="color: red"></i></a>
                                    </td>
                                </tr>
                                    <?php $total += $row['total_price']; ?>
                                <?php endwhile; ?>
                                <tr>
                                    <form id="voucherForm">
                                        <td colspan="5">
                                            <div class="input-group">
                                                <input type="text" id="voucherCode" class="form-control" placeholder="Enter Voucher Code">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input-group-append">
                                                <button type="button" id="applyVoucherBtn" class="btn btn-success">Apply Voucher</button>
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <a href="store_user.php" class="btn btn-success"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Continue Shopping</a>
                                    </td>
                                    <td colspan="2"><b>Grand total</b></td>
                                    <td><b id="totalPrice"><?php echo number_format($total, 2); ?></b></td>
                                    <td>
                                        <a href="" class="btn btn-success <?php echo ($total > 1)? '':'disabled'?>"><i class="fas fa-credit-card"></i>&nbsp;&nbsp;Checkout</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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
</body>

<script>
    $(".itemQty").on("change", function(){

        var $el = $(this).closest("tr");

        var pname = $el.find(".pname").val();
        var pprice = $el.find(".pprice").val();
        var qty = $el.find(".itemQty").val();
        
        $.ajax({
            url: "action.php",
            method: "post",
            cache: false,
            data: {qty: qty, pname: pname, pprice: pprice},
            success: function(response){
                console.log(response);
            }
        }); 

        location.reload(true);


    });

    document.getElementById('applyVoucherBtn').addEventListener('click', function() {
    let voucherCode = document.getElementById('voucherCode').value;

    if (voucherCode.trim() === "") {
        alert("Please enter a voucher code.");
        return;
    }

    $.ajax({
        type: 'POST',
        url: 'apply_voucher.php',
        data: { voucher_code: voucherCode },
        success: function(response) {
            let data = JSON.parse(response);
            if (data.success) {
                let discount = data.discount;
                let total = parseFloat(document.getElementById('totalPrice').innerText.replace(',', '')); 
                let newTotal = total - (total * discount / 100);
                document.getElementById('totalPrice').innerText = newTotal.toFixed(2); 
                alert("Voucher applied successfully! Discount: " + discount + "%");
            } else {
                alert("Invalid or expired voucher code.");
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.error('Error applying voucher: ', textStatus, errorThrown, jqXHR.responseText);
        }
    });
    });
</script>

</html>