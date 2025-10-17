<?php
session_start();
include('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Placed</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5 text-center">
        <h2 class="text-success pt-5">Order Placed Successfully!</h2>
        <p class="pt-3">Your order has been successfully placed. Thank you for shopping with us!</p>
        <a href="shop.php" class="btn btn-outline-success mt-3">Continue Shopping</a>
    </div>
</body>
</html>
