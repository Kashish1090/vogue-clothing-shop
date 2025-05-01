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
    <title>store | Ecommerce website</title>
  </head>
  <body>
    <div class="header">
      <div class="container">
        <div class="navbar">
          <div class="logo">
            <img src="images/logo.png" width="125px">
          </div>
          <nav>
            <ul id="MenuItems">
              <li><a href="index.html">Home</a></li>
              <li><a href="products.php">Products</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="contacts.html">Contact</a></li>
              <li><a href="accounts.html">Account</a></li>
              <li><a href="product-details.php">Product details</a></li>
            </ul>
          </nav>
          <div class="cart">
            <a href="cart.html"><img src="images\cart.png" width=30px height=30px></a>
            <img src="images\menu.jpg" class="menu-icon" onclick="menutoggle()">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-2">
          <h1>Curated Fashion<br>Timeless Style!</h1>
          <p>
            Discover versatile collections designed to suit every occasion, <br>blending comfort, style, and elegance in pieces that everyone can enjoy.
          </p>
          <a href="" class="btn">Explore Now &#8594;</a>
        </div>
        <div class="col-2">
          <img src="images/img1.png">
        </div>
      </div>
    </div>
    
    <!-----------categories----------->
    <div class="categories">
      <div class="small-container">
        <div class="row">
          <div class="col-3">
            <img src="images\category-1.jpg">
          </div>
          <div class="col-3">
            <img src="images\category-2.jpg">
          </div>
          <div class="col-3">
            <img src="images\category-3.jpg">
          </div>
        </div>
      </div>
    </div>
    <!-----------products----------->
    <div class="small-container">
      <h2 class="title">Featured Products</h2>
      <div class="row">
        <div class="col-4">
          <a href="product-details.html"><img src="images\product-1.jpg"></a>
          <a href="product-details.html"><h4><p>Printed T-Shirt</p></h4></a>
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
<!----------------LATEST PRODUCTS--------------------->
      <h2 class="title">Latest Products</h2>
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
            s
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
          <p>Rs.1700.00</p>
        </div>
      </div>
    </div>
<!----------------OFFER---------------->
  <div class="offer">
    <div class="small-container">
      <div class="row">
        <div class="col-2">
          <img src="images\product-13.jpg" class="offer-img">
        </div>
        <div class="col-2">
          <p>
            Exclusively Available on VOGUE
          </p>
          <h1>True Square Automatic Open Heart Diamonds Limited Edition</h1>
          <small>This watch features a black high-tech ceramic monobloc case and crown on a polished black and white high-tech ceramic bracelet. It has a black PVD sandblasted titanium case back engraved with the words LIMITED EDITION ONE OUT OF 888. The sapphire crystal offers a view of the circular grain decorated movement powering the watch. The black and white vertically brushed dial is distinguished with eight Top Wesselton full-cut diamonds and four black diamonds to mark the hours.</small>
          <br><a href="" class="btn">Buy Now &#8594;</a>
        </div>
      </div>
    </div>
  </div>


  <!---------------TESTIMONIAL------------------>
  <div class="testimonial">
    <div class="small-container">
      <div class="row">
        <div class="col-3">
          <i class="fa fa-quote-left"></i>
          <p>Loreum Ipsum is simply dummy text of the printing and typesetting industry. Loreum Ipsum has been the industry's standard dummy text ever</p>
          <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-o"></i>
          </div>
          <img src="images/user 1.jpg">
          <h3>Sean Parker</h3>
        </div>
        <div class="col-3">
          <i class="fa fa-quote-left"></i>
          <p>Loreum Ipsum is simply dummy text of the printing and typesetting industry. Loreum Ipsum has been the industry's standard dummy text ever</p>
          <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-o"></i>
          </div>
          <img src="images/user 2.jpeg">
          <h3>Mike Smith</h3>
        </div>
        <div class="col-3">
          <i class="fa fa-quote-left"></i>
          <p>Loreum Ipsum is simply dummy text of the printing and typesetting industry. Loreum Ipsum has been the industry's standard dummy text ever</p>
          <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-o"></i>
          </div>
          <img src="images/user 3.jpg">
          <h3>Mabel Joe</h3>
        </div>
      </div>
    </div>
  </div>

<!------------brands------------->
<div class="brands">
  <div class="small-container">
    <div class="row">
      <div class="col-5">
        <img src="images/godrej-logo.jpeg">
        <img src="images/oppo-logo.png">
        <img src="images/coca cola-logo.png">
        <img src="images/PayPal-Logo.png">
        <img src="images/Phillips-Logo.png">
      </div>
    </div>
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