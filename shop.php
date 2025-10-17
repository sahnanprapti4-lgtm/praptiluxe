<?php
include('header.php');


// Check if user is logged in
if (!isset($_SESSION["email"])) {
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Required</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
            .center-box {
                display: flex;
                justify-content: center;
                align-items: center;
                padding-top:120px;
                text-align: center;
                flex-direction: column;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="center-box">
                <h2 class="text-danger">You need to log in first!</h2>
                <p class="text-muted pt-3">Please log in to view our products.</p>
                <a href="loginb.php" class="btn btn-outline-secondary mt-3">LOGIN TO ACCOUNT</a>
            </div>
        </div>
    </body>
    </html>';
    exit;
}

$sql = "SELECT * FROM add_product";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .card-img-top {
            height: 500px;
            object-fit: cover;
            width: 100%;
        }
        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center my-5">
            <?php echo "Welcome " . $_SESSION["email"]; ?>
        </h1>
        <div class="row">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $imagePath = 'admin/uploads/' . $row['productimage'];
                    ?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="<?php echo $imagePath; ?>" class="card-img-top" alt="<?php echo $row['productname']; ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['productname']; ?></h5>
                                <p class="card-text"><strong>Category:</strong> <?php echo $row['productcategory']; ?></p>
                                <p class="card-text"><strong>Description:</strong> <?php echo $row['productdescription']; ?></p>
                                <p class="card-text"><strong>Price:</strong> $<?php echo $row['productprice']; ?></p>

                                <!-- Add to Cart Form -->
                                <form action="add_to_cart.php" method="POST">
                                    <div class="form-group d-flex justify-content-between align-items-center">
                                        <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
                                        <input type="hidden" name="product_name" value="<?php echo $row['productname']; ?>">
                                        <input type="hidden" name="product_price" value="<?php echo $row['productprice']; ?>">
                                        <input type="number" class="form-control w-50 mx-2" name="quantity" min="1" value="1">
                                        <button type="submit" class="btn btn-outline-secondary w-50">Add +</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo '<div class="col-12"><p>No products found.</p></div>';
            }
            ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
