<?php
session_start();
$filter = $_POST['filter'];

require '../login/database.php';

if($filter === "all"){
    $products_q = 'SELECT * FROM Products';
    $stmt_prod = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt_prod, $products_q);
    mysqli_stmt_execute($stmt_prod);
    $products_q_result = mysqli_stmt_get_result($stmt_prod);
    mysqli_stmt_close($stmt_prod); 
} else {
    $products_q = 'SELECT * FROM Products WHERE category = ?';
    $stmt_prod = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt_prod, $products_q);
    mysqli_stmt_bind_param($stmt_prod, 's', $filter);
    mysqli_stmt_execute($stmt_prod);
    $products_q_result = mysqli_stmt_get_result($stmt_prod);
    mysqli_stmt_close($stmt_prod);
}

while($row = $result_prod = mysqli_fetch_array($products_q_result, MYSQLI_ASSOC)):
?>
<div class='col-md-3'>
    <div class='card-deck'>
        <div class='card p-2 border-secondary mb-2'>
            <img src='../<?php echo $row['image']; ?>' class='card-img-top' alt='...' height='250'>
            <div class='card-body p-1'>
                <h4 class='card-title text-center text-info'><?php echo $row['name'] ?></h4>
                <h5 class='card-text text-center text-danger'><?php echo number_format($row['price'], 0) . ' ' . 'lei'; ?></h5>
                <div class="card-footer p-1">
                    <form class="form-submit">
                        <input type="hidden" class="pid" value="<?php echo $row["id"] ?>">
                        <input type="hidden" class="pname" value="<?php echo $row["name"] ?>">
                        <input type="hidden" class="pprice" value="<?php echo $row["price"] ?>">
                        <input type="hidden" class="pimage" value="<?php echo $row["image"] ?>">
                        <input type="hidden" class="user_id" value="<?php echo $_SESSION["id"] ?>">
                        <input type="submit" class="w-100 btn addItemBtn" style="background-color: #0d6efd" value="Add to cart">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endwhile; ?>