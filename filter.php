<?php
$filter = $_POST['filter'];

require 'login/database.php';

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
            <img src='<?php echo $row['image']; ?>' class='card-img-top' alt='...' height='250'>
            <div class='card-body p-1'>
                <h4 class='card-title text-center text-info'><?php echo $row['name'] ?></h4>
                <h5 class='card-text text-center text-danger'><?php echo number_format($row['price'], 0) . ' ' . 'lei'; ?></h5>
            </div>
        </div>
    </div>
</div>
<?php endwhile; ?>