<?php
session_start();
require '../login/database.php';

if(isset($_POST["pid"])){
    $pid = $_POST["pid"];
    $pname = $_POST["pname"];
    $pprice = $_POST["pprice"];
    $pimage = $_POST["pimage"];
    $user_id = $_POST["user_id"];
    $pqty = 1;

    $stmt = $conn->prepare("SELECT product_id FROM Cart WHERE product_id = ? AND user_id = ?");
    $stmt->bind_param("ii", $pid, $user_id);
    $stmt->execute();
    $get_result = $stmt->get_result();
    $result = $get_result->fetch_assoc();
    if(is_null($result)){
        $query = $conn->prepare("INSERT INTO Cart (name, image, quantity, price, total_price, product_id, user_id) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $query->bind_param("ssiiiii",$pname, $pimage, $pqty, $pprice, $pprice, $pid, $user_id);
        $query->execute();

        echo '<div class="alert alert-success alert-dismissible mt-2">
                <strong>Item added to your cart!</strong>
            </div>';
    } else {
        echo '<div class="alert alert-danger alert-dismissible mt-2">
                <strong>Item already added to your cart!</strong>
            </div>';
    }
}

if(isset($_GET['remove'])){
    $id = $_GET['remove'];

    $stmt = $conn->prepare("DELETE FROM Cart WHERE id = ? AND user_id = ?");
    $stmt->bind_param("ii", $id, $_SESSION['id']);
    $stmt->execute();

    $_SESSION['showAlert'] = 'block';
    $_SESSION['message'] = 'Item removed from cart!';
    header('Location:cart.php');
}

if(isset($_GET['clear'])){
    $stmt = $conn->prepare("DELETE FROM Cart WHERE user_id = ?");
    $stmt->bind_param("i", $_SESSION['id']);
    $stmt->execute();

    $_SESSION['showAlert'] = 'block';
    $_SESSION['message'] = 'All items removed from cart!';
    header('Location:cart.php');
}

if(isset($_POST['qty'])){
    $qty = $_POST['qty'];
    $pname = $_POST['pname'];
    $pprice = $_POST['pprice'];

    $tprice = $qty * $pprice;

    $stmt = $conn->prepare("UPDATE Cart SET quantity = ?, total_price = ? WHERE name = ? AND user_id = ?");
    $stmt->bind_param("iisi", $qty, $tprice, $pname, $_SESSION['id']);
    $stmt->execute();
}

?>