<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>All Products - Store</title>
</head>
<body>
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
                    <li><a href="cart.php">cart</a></li>
                </ul>
            </nav>
            <div class="cart">
                <img src="images/cart.png" width="30px" height="30px" alt="Cart">
                <img src="images/menu.jpg" class="menu-icon" onclick="menutoggle()" alt="Menu">
            </div>
        </div>
    </div>

    <!----------------single product details-------------->
    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="images/gallery-1.jpg"  width="100%" id="productImg">

                <div class="small-img-row">
                <div class="small-img-col">
                <img src="images/gallery-1.jpg"  width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                <img src="images/gallery-2.jpg"  width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                <img src="images/gallery-3.jpg"  width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                <img src="images/gallery-4.jpg"  width="100%" class="small-img">
                </div>
                </div>
            </div>
            
            <div class="col-2">
                <form action="add-to-cart.php" method="POST">
                    <input type="hidden" name="product_id" value="1">
                    <input type="hidden" name="product_name" value="printed T-Shirt">
                    <input type="hidden" name="product_price" value="500">
                
                    <label>Size:</label>
                    <select name="product_size" required>
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                    </select>
                
                    <label>Quantity:</label>
                    <input type="number" name="product_quantity" value="1" min="1">
                
                    <button type="submit" name="add_to_cart">Add to Cart</button>
                </form>
                
                
                <h3>Product Details <i class="fa fa-indent"></i></h3>
                <br>
                <p>Give your summer wardrobe a style upgrade with the stylish printed t-shirts. Team it with denims for an evening out with the guys.</p>
            </div>
        </div>
    </div>
 <!------------title------------>
    <div class="small-container">
        <div class="row row-2">
            <h2>Related Products</h2>
            <p>View More</p>
        </div>
    </div>


 <!-------products--------------->
    <div class="small-container">
        <div class="row">    
            <div class="col-4">
                <img src="images/product-9.jpg" alt="Product Image">
                <h4>Professional Shampoo</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rs. 700.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-10.jpg" alt="Product Image">
                <h4>Jeans for Men</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rs. 2800.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-11.jpg" alt="Product Image">
                <h4>Printed Shirt for Men</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rs. 1900.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-12.jpg" alt="Product Image">
                <h4>Formal Black Shirt for Women</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>Rs. 1700.00</p>
            </div>
        </div>
    </div>

    <!--------------footer---------------->
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

    <!--------js for toggle menu----------->
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

    <!-----------js for product gallery----------->
    <script>
        var productImg = document.getElementById("productImg");
        var smallImg = document.getElementsByClassName("small-img");
    
        
        for (let i = 0; i < smallImg.length; i++) {
            smallImg[i].onclick = function() {
                productImg.src = smallImg[i].src;
            }
        }
    </script>
    
  <!------------------add to cart------------------->
    <h4>Printed T-Shirt</h4>
    <p>Price: ₹500</p>

  <!-- Size & Quantity Form -->
    <label for="size">Size:</label>
    <select id="size">
        <option value="">Select Size</option>
        <option value="S">S</option>
        <option value="M">M</option>
        <option value="L">L</option>
    </select>
      
    <input type="number" id="quantity" min="1" value="1" />
      
    <button onclick="addToCart()">Add To Cart</button>

   <!-------------js------->
  <script>
     console.log("Script loaded"); // add this line
  
 
      function addToCart() {
         const size = document.getElementById('size').value;
         const quantity = parseInt(document.getElementById('quantity').value);
         const productName = "Soft, Stylish Printed T-Shirts";
         const price = 500;
  
         // Check for valid size and quantity
         if (!size) {
          alert("Please select a size.");
          return;
         }
  
         if (quantity < 1 || isNaN(quantity)) {
          alert("Please enter a valid quantity.");
          return;
         }
  
         // Get current cart or create new one
         const cart = JSON.parse(localStorage.getItem('cart')) || [];
  
         // Add items to cart based on quantity
         for (let i = 0; i < quantity; i++) {
           cart.push({
           name: `${productName} (Size: ${size})`,
           price: price
         });
         }
  
         // Save to localStorage
         localStorage.setItem('cart', JSON.stringify(cart));
  
         // ✅ Redirect to cart page
         window.location.href = "cart.html"; // Adjust path if needed
        }
   </script>
  
</body>
</html>