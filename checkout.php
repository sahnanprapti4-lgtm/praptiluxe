<?php
include('header.php');

if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    header("Location: shop.php");
    exit();
}

// Process order submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Store user details
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    

    $order_total = 0;
    foreach ($_SESSION['cart'] as $product) {
        $order_total += $product['price'] * $product['quantity'];
    }

    // Insert order details
    $sql = "INSERT INTO orders (name, email, address, total_price) VALUES ('$name', '$email', '$address', '$order_total')";
    if ($conn->query($sql) === TRUE) {
        $order_id = $conn->insert_id;

        // Insert each item into order_items table
        foreach ($_SESSION['cart'] as $product) {
            $product_id = $product['id'];
            $quantity = $product['quantity'];
            $price = $product['price'];
            $conn->query("INSERT INTO order_items (order_id, product_id, quantity, price) VALUES ('$order_id', '$product_id', '$quantity', '$price')");
        }

        // Clear cart after order
        unset($_SESSION['cart']);
        header("Location: order_success.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Checkout</h2>
        <form method="POST">
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Address:</label>
                <textarea name="address" class="form-control" required></textarea>
            </div>
            <h4>Total: $<?php echo array_sum(array_map(fn($p) => $p['price'] * $p['quantity'], $_SESSION['cart'])); ?></h4>
            <button type="submit" class="btn btn-success">Place Order</button>
        </form>
    </div>
</body>
</html>
