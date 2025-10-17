<?php
include('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Your Cart</h2>

        <?php if (!empty($_SESSION['cart'])) { ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $total_price = 0;
                    foreach ($_SESSION['cart'] as $id => $product) {
                        $total = $product['price'] * $product['quantity'];
                        $total_price += $total;
                        ?>
                        <tr>
                            <td><?php echo $product['name']; ?></td>
                            <td>$<?php echo $product['price']; ?></td>
                            <td><?php echo $product['quantity']; ?></td>
                            <td>$<?php echo $total; ?></td>
                            <td>
                                <a href="remove_from_cart.php?id=<?php echo $id; ?>" class="btn btn-danger btn-sm">Remove</a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
            <h4>Total Price: $<?php echo $total_price; ?></h4>
            <a href="checkout.php" class="btn btn-success">Proceed to Checkout</a>
        <?php } else { ?>
            <p>Your cart is empty.</p>
            <a href="shop.php" class="btn btn-outline-dark">Shop Products</a>
        <?php } ?>
    </div>
</body>
</html>
