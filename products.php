<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>all products - store</title>
</head>
<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="images/logo.png" width="125px">
            </div>
            <nav>
               <ul id="MenuItems">
                   <li><a href="index.php">Home</a></li>
                   <li><a href="products.php">Products</a></li>
                   <li><a href="about.php">About</a></li>
                   <li><a href="contacts.html">Contact</a></li>
                   <li><a href="accounts.html">Account</a></li>
                   <li><a href="cart.php">cart</a></li>
                   <li><a href="product-details.php">Product details</a></li>
                </ul>
            </nav>
            <div class="cart">
                <img src="images\cart.png" width=30px height=30px>
                <img src="images\menu.jpg" class="menu-icon" onclick="menutoggle()">
            </div>
        </div>
    </div>

    

    <div class="small-container">

        <div class="row row-2">
            <h2>All Products</h2>
            <select>
                <option>Default Sorting</option>
                <option>Sort by Price</option>
                <option>Sort by Popularity</option>
                <option>Sort by rating</option>
                <option>Sort by sale</option>
            </select>
        </div>

        
        <div class="row">
            <div class="col-4">
                <a href="product-details.php">
                  <img src="images\product-1.jpg" alt="Printed T-Shirt">
                  <h4><p>Printed T-Shirt</p></h4>
                </a>
                <div class="rating">
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star-o"></i>
                </div>
                <p>Rs.500.00</p>
            </div>
            <div class="col-4">
                <img src="images\product-2.jpg">
                <h4><p>Running Shoes</p></h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rs.2500.00</p>
            </div>
            <div class="col-4">
                <img src="images\product-3.jpg">
                <h4><p>Pants</p></h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rs.700.00</p>
            </div>
            <div class="col-4">
                <img src="images\product-4.jpg">
                <h4><p>Printed Shirt for women</p></h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>Rs.1000.00</p>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <img src="images\product-5.jpg">
                <h4><p>Foundation</p></h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rs.800.00</p>
            </div>
            <div class="col-4">
                <img src="images\product-6.jpg">
                <h4><p>Running Shoes</p></h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rs.35500.00</p>
            </div>
            <div class="col-4">
                <img src="images\product-7.jpg">
                <h4><p>Bag</p></h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rs.7000.00</p>
            </div>
            <div class="col-4">
                <img src="images\product-8.jpg">
                <h4><p>Shirt for men</p></h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>Rs.1700.00</p>
            </div>
            <div class="col-4">
                <img src="images\product-9.jpg">
                <h4><p>Professional Shampoo</p></h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rs.700.00</p>
            </div>
            <div class="col-4">
                <img src="images\product-10.jpg">
                <h4><p>Jeans for Men</p></h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rs.2800.00</p>
            </div>
            <div class="col-4">
                <img src="images\product-11.jpg">
                <h4><p>Printed Shirt for Men</p></h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rs.1900.00</p>
            </div>
            <div class="col-4">
                <img src="images\product-12.jpg">
                <h4><p>Formal Black Shirt for Women</p></h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>Rs.1700.00</p>
            </div>
        </div>
        <div class="page-btn">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>&#8594;</span>
        </div>
    </div>

<!--------------footer---------------->

  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col-1">
          <h3>Download Our App</h3>
          <p>Download App for Android and ios Mobile phone.</p>
          <div class="app-logo">
            <img src="images/play-store.png">
            <img src="images/app-store.png">
          </div>
        </div>
        <div class="footer-col-2">
          <img src="images/logo.png">
          <p>Our purpose is to sustainably make the pleasure and benefits of sports accessible to the many.</p>
        </div>
        <div class="footer-col-3">
          <h3>useful links:</h3>
          <ul>
            <li>Coupon</li>
            <li>Blog Post</li>
            <li>Return Policy</li>
            <li>Join Affiliated</li>
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

    function menutoggle(){
      if(MenuItems.style.maxHeight == "0px")
       {
        MenuItems.style.maxHeight = "200px";
       }
      else
       {
        MenuItems.style.maxHeight = "0px";
       }
    }
  </script>
</body>
</html>