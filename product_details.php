<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>All Products - RedHut | E-Commerce</title>
    <link rel="stylesheet" href="CSS/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Ubuntu:ital,wght@0,300;0,400;0,500;1,300&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css"
    />
  </head>
  <body>
    <div class="container">
      <div class="navbar">
        <div class="logo">
          <img src="img/logo.png" width="125px" />
        </div>
        <nav>
          <ul id="MenuItems">
            <li><a href="index.html">Home</a></li>
            <li><a href="products.html">Products</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="account.php">Account</a></li>
          </ul>
        </nav>
        <img src="img/cart.png" width="30px" height="30px" />
        <img src="img/menu.png" class="menu-icon" onclick="menutoggle()" />
      </div>
    </div>

    <!-- single product details -->
    <div class="small-container single-product">
      <div class="row">
        <div class="col-2">
          <img src="img/gallery-1.jpg" width="100%" id="ProductImg" />

          <div class="small-img-row">
            <div class="small-img-col">
              <img src="img/gallery-1.jpg" width="100%" class="SmallImg" />
            </div>
            <div class="small-img-col">
              <img src="img/gallery-2.jpg" width="100%" class="SmallImg" />
            </div>
            <div class="small-img-col">
              <img src="img/gallery-3.jpg" width="100%" class="SmallImg" />
            </div>
            <div class="small-img-col">
              <img src="img/gallery-4.jpg" width="100%" class="SmallImg" />
            </div>
          </div>
        </div>
        <div class="col-2">
          <p>Home / T-Shirt</p>
          <h1>Red Printed T-Shirt by HRX</h1>
          <h4>$50.00</h4>
          <select>
            <option>Select Size</option>
            <option>XXL</option>
            <option>XL</option>
            <option>L</option>
            <option>M</option>
            <option>S</option>
          </select>
          <input type="number" value="1" />
          <a href="" class="btn">Add to Cart</a>
          <h3>Product Details <i class="fa fa-indent"></i></h3>
          <br />
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus
            corporis eius at necessitatibus repellendus maiores odio dignissimos
            quis commodi alias!
          </p>
        </div>
      </div>
    </div>

    <!-- Title  -->
    <div class="small-container">
      <div class="row row-2">
        <h2>Related Products</h2>
        <p>View More &#8594;</p>
      </div>
    </div>
    <!-- Products -->

    <div class="small-container">
      <div class="row">
        <div class="col-4">
          <img src="img/product-9.jpg" />
          <h4>Red Printed T-Shirt</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>$30.00</p>
        </div>
        <div class="col-4">
          <img src="img/product-10.jpg" />
          <h4>Red Printed T-Shirt</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>$25.00</p>
        </div>
        <div class="col-4">
          <img src="img/product-11.jpg" />
          <h4>Red Printed T-Shirt</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>$20.00</p>
        </div>
        <div class="col-4">
          <img src="img/product-12.jpg" />
          <h4>Red Printed T-Shirt</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>$50.00</p>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col-1">
            <h3>Download Our App</h3>
            <p>Download App for Android and IOS mobile phone.</p>
            <div class="app-logo">
              <img src="img/play-store.png" />
              <img src="img/app-store.png" />
            </div>
          </div>
          <div class="footer-col-2">
            <img src="img/logo-white.png" />
            <p>
              Our Purpose Is To Sustainably Make the Pleasure and Benefits of
              Sports Accessible to the Many.
            </p>
          </div>
          <div class="footer-col-3">
            <h3>Useful Links</h3>
            <ul>
              <li>Coupons</li>
              <li>CouBlog Post</li>
              <li>Return Policy</li>
            </ul>
          </div>
          <div class="footer-col-4">
            <h3>Don't Forget to Follow</h3>
            <ul>
              <li>Facebook</li>
              <li>Instagram</li>
              <li>Twitter</li>
              <li>YouTube</li>
            </ul>
          </div>
        </div>
        <hr />
        <p class="copyright">Copyright 2022 - alemam242</p>
      </div>
    </div>

    <!-- js for toggle menu -->
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

    <!-- js for toggle gallery -->
    <script>
      var ProductImg = document.getElementById("ProductImg");
      var SmallImg = document.getElementsByClassName("SmallImg");

      SmallImg[0].onclick = function () {
        ProductImg.src = SmallImg[0].src;
      };
      SmallImg[1].onclick = function () {
        ProductImg.src = SmallImg[1].src;
      };
      SmallImg[2].onclick = function () {
        ProductImg.src = SmallImg[2].src;
      };
      SmallImg[3].onclick = function () {
        ProductImg.src = SmallImg[3].src;
      };
    </script>
  </body>
</html>
