<?php
include("config.php");

if (isset($_POST['add_to_cart'])) {
    // Get values from POST
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_size = $_POST['product_size'];
    $product_quantity = $_POST['product_quantity'];

    // Validate numeric values
    if (!is_numeric($product_price) || !is_numeric($product_quantity) || $product_quantity < 1) {
        die("Invalid price or quantity.");
    }

    // Check if product already exists in cart
    $check_query = "SELECT * FROM cart WHERE product_id='$product_id' AND product_size='$product_size'";
    $result = mysqli_query($conn, $check_query);

    if ($result && mysqli_num_rows($result) > 0) {
        // Update quantity
        $update_query = "UPDATE cart SET product_quantity = product_quantity + $product_quantity 
                         WHERE product_id='$product_id' AND product_size='$product_size'";
        mysqli_query($conn, $update_query);
    } else {
        // Insert new product into cart
        $insert_query = "INSERT INTO cart (product_id, product_name, product_price, product_size, product_quantity)
                         VALUES ('$product_id', '$product_name', '$product_price', '$product_size', '$product_quantity')";
        mysqli_query($conn, $insert_query);
    }

    // Redirect to cart
    header("Location: cart.php");
    exit();
} else {
    echo "Invalid access.";
}
?>
