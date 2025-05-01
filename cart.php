<?php
include("config.php");

$query = "SELECT * FROM cart";
$result = mysqli_query($conn, $query);
$total = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart - Store</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<!-- Navbar -->
<div class="container">
    <div class="navbar">
        <div class="logo">
            <img src="images/logo.png" width="125px" alt="Logo">
        </div>
        <nav>
            <ul id="MenuItems">
                <li><a href="index.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contacts.html">Contact</a></li>
                <li><a href="accounts.html">Account</a></li>
            </ul>
        </nav>
        <div class="cart">
            <img src="images/cart.png" width="30px" height="30px" alt="Cart">
            <img src="images/menu.jpg" class="menu-icon" onclick="menutoggle()" alt="Menu">
        </div>
    </div>
</div>

<!-- Cart Items -->
<div class="small-container cart-page">
    <h2 style="margin-bottom: 20px;">Your Cart</h2>
    <table>
        <tr>
            <th>Product</th>
            <th>Size</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Subtotal</th>
        </tr>

        <?php if ($result && mysqli_num_rows($result) > 0): ?>
            <?php while($row = mysqli_fetch_assoc($result)): 
                $subtotal = $row['product_price'] * $row['product_quantity'];
                $total += $subtotal;
            ?>
            <tr>
                <td><?php echo htmlspecialchars($row['product_name']); ?></td>
                <td><?php echo htmlspecialchars($row['product_size']); ?></td>
                <td><?php echo $row['product_quantity']; ?></td>
                <td>₹<?php echo $row['product_price']; ?></td>
                <td>₹<?php echo $subtotal; ?></td>
            </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr><td colspan="5" style="text-align:center;">Your cart is empty.</td></tr>
        <?php endif; ?>
    </table>

    <div style="margin-top: 20px; font-size: 18px; font-weight: 500;">
        Total: ₹<?php echo $total; ?>
    </div>
</div>

<!-- Footer -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download Our App</h3>
                <p>Download App for Android and iOS Mobile phones.</p>
                <div class="app-logo">
                    <img src="images/play-store.png" alt="Play Store">
                    <img src="images/app-store.png" alt="App Store">
                </div>
            </div>
            <div class="footer-col-2">
                <img src="images/logo.png" alt="Logo">
                <p>Our purpose is to sustainably make the pleasure and benefits of sports accessible to the many.</p>
            </div>
            <div class="footer-col-3">
                <h3>Useful Links</h3>
                <ul>
                    <li>Coupon</li>
                    <li>Blog Post</li>
                    <li>Return Policy</li>
                    <li>Join Affiliate</li>
                </ul>
            </div>
            <div class="footer-col-3">
                <h3>Follow Us</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Instagram</li>
                    <li>Twitter</li>
                    <li>YouTube</li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="copyright">Copyright 2020 - Easy Tutorials</p>
    </div>
</div>

<!-- JS for Toggle Menu -->
<script>
    var MenuItems = document.getElementById("MenuItems");

    MenuItems.style.maxHeight = "0px";

    function menutoggle() {
        if (MenuItems.style.maxHeight == "0px") {
            MenuItems.style.maxHeight = "200px";
        } else {
            MenuItems.style.maxHeight = "0px";
        }
    }
</script>

</body>
</html>
