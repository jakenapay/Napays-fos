<?php
include 'includes/config.inc.php';
session_start();

// add to cart clicked

// Check if the product ID is set
if (isset($_POST['add'])) {
    if (isset($_GET['id'])) {
        $product_id = $_POST['id'];
        $product_name = $_POST['name'];
        $product_price = $_POST['price'];
        $product_quantity = $_POST['quantity'];

        // Check if the product is already in the cart
        if (isset($_SESSION['cart'][$product_id])) {
            // Increment the product quantity
            $_SESSION['cart'][$product_id]['quantity'] += $product_quantity;
        } else {
            // Add the product to the cart
            $_SESSION['cart'][$product_id] = array(
                'id' => $product_id,
                'name' => $product_name,
                'price' => $product_price,
                'quantity' => $product_quantity
            );
        }
    }
}


if (isset($_POST['remove_index'])) {
    $remove_id = $_POST['remove_index'];
    foreach ($_SESSION['cart'] as $index => $item) {
        if ($item['id'] == $remove_id) {
            unset($_SESSION['cart'][$index]);
            break;
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Document title -->
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/navbar.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/shop.css?v=<?php echo time(); ?>">
</head>

<body>
    <?php include 'navbar.php'; ?>

    <main>
        <div class="container">
            <div class="row products">

                <!-- Header -->
                <div class="col-md-12">
                    <h3 class="header">Shop</h3>
                </div>

                <?php
                include 'includes/config.inc.php';
                $sql = "SELECT * FROM product";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $price = $row['price'];
                        $img  = $row['img'];
                        // $type = $row['type'];
                ?>

                        <div class="col-sm-12 col-md-4 col-lg-3 product">
                            <form method="POST" action="shop.php?action=add&id=<?php echo $id; ?>">

                                <!-- hidden -->
                                <input value="<?php echo $id; ?>" name="id" id="id" type="hidden" />
                                <input value="<?php echo $name; ?>" name="name" id="name" type="hidden" />
                                <input value="<?php echo $price; ?>" name="price" id="price" type="hidden" />

                                <div class="food d-flex justify-content-around flex-column">
                                    <div>
                                        <div class="box">
                                            <img src="product/<?php echo $img; ?>" alt="" class="img-fluid food-img">
                                        </div>
                                        <h5 class="food-name"><?php echo $name; ?></h5>
                                        <p class="food-price">Php <?php echo $price; ?></p>
                                    </div>
                                    <div class="add-panel">
                                        <input type="number" value="1" name="quantity" id="quantity">
                                        <input type="submit" value="Add" name="add" id="add" class="btn btn-main">
                                    </div>
                                </div>
                            </form>
                        </div>
                <?php }
                }; ?>
            </div>
        </div>
    </main>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cart</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="container mt-2">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (isset($_SESSION['cart'])) :
                                    $cart = $_SESSION['cart'];
                                    $total_amount = 0; // Initialize total amount to 0
                                    $item_names = ''; // Item names initialized
                                    foreach ($cart as $key => $value) :
                                        $item_names .= $value['name'] . ', '; // concatenate the name with a comma
                                        $item_price = $value['price'] * $value['quantity']; // Calculate the price of the item
                                        $total_amount += $item_price; // Add the item price to the total amount
                                ?>
                                        <tr>
                                            <td><?= $value['id']; ?></td>
                                            <td><?= $value['name']; ?></td>
                                            <td><?= $value['price']; ?></td>
                                            <td><?= $value['quantity']; ?></td>
                                            <td>
                                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                                    <input type="hidden" name="remove_index" value="<?= $value['id']; ?>">
                                                    <button class="btn btn-danger" type="submit">Remove</button>
                                                </form>
                                            </td>
                                        </tr>
                                <?php
                                    endforeach;
                                    $item_names = rtrim($item_names, ', '); // remove the last comma
                                endif;
                                ?>
                                <tr>
                                    <td colspan="4" class="text-end"><strong>Total amount:</strong></td>
                                    <td><strong><?= number_format($total_amount, 2); ?></strong></td> <!-- Display the total amount -->
                                </tr>
                                <tr>
                                    <?php
                                    if (isset($_SESSION['cart'])) {
                                        echo '<p>Total amount: ' . $total_amount . '</p>';
                                        echo '<p>Item names: ' . $item_names . '</p>';
                                    }
                                    ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-main">Place Order</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- Navigation bar -->
    <script src="assets/js/navbar.js"></script>
</body>

</html>