<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RedHut | E-Commerce</title>
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
    <div class="header">
      <div class="container">
        <div class="navbar">
          <div class="logo">
            <a href="index.html"><img src="img/logo.png" width="125px" /></a>
          </div>
          <nav>
            <ul id="MenuItems">
              <li><a href="index.php">Home</a></li>
              <li><a href="products.php">Products</a></li>
              <li><a href="">About</a></li>
              <li><a href="">Contact</a></li>
              <li><a href="account.php">Account</a></li>
            </ul>
          </nav>
          <a href="cart.html"
            ><img src="img/cart.png" width="30px" height="30px"
          /></a>
          <img src="img/menu.png" class="menu-icon" onclick="menutoggle()" />
        </div>
        <div class="row">
          <div class="col-2">
            <h1>
              Give your workout <br />
              A new style
            </h1>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis
              consequuntur ut distinctio quasi similique sed voluptate
              exercitationem. Dolorum, incidunt reiciendis.
            </p>
            <a href="" class="btn">Explore Now &#8594;</a>
          </div>
          <div class="col-2">
            <img src="img/image1.png" />
          </div>
        </div>
      </div>
    </div>

    <!-- Feature Categories -->
    <div class="categories">
      <div class="small-container">
        <div class="row">
          <div class="col-3">
            <img src="img/category-1.jpg" />
          </div>
          <div class="col-3">
            <img src="img/category-2.jpg" />
          </div>
          <div class="col-3">
            <img src="img/category-3.jpg" />
          </div>
        </div>
      </div>
    </div>

    <!-- Featured Products -->

    <div class="small-container">
      <h2 class="title">Featured Products</h2>
      <div class="row">
        <div class="col-4">
          <img src="img/product-1.jpg" />
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
          <img src="img/product-2.jpg" />
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
          <img src="img/product-3.jpg" />
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
          <img src="img/product-4.jpg" />
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
      <h2 class="title">Latest Products</h2>
      <div class="row">
        <div class="col-4">
          <img src="img/product-5.jpg" />
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
          <img src="img/product-6.jpg" />
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
          <img src="img/product-7.jpg" />
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
          <img src="img/product-8.jpg" />
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

    <!-- Offer Products -->
    <div class="offer">
      <div class="small-container">
        <div class="row">
          <div class="col-2">
            <img src="img/exclusive.png" class="offer-img" />
          </div>
          <div class="col-2">
            <p>Exclusively Available on RedStore</p>
            <h1>Smart Band 4</h1>
            <small
              >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et
              incidunt ratione a? Nam corporis architecto pariatur, molestias
              ipsam perspiciatis et.</small
            >
            <a href="" class="btn">Buy Now &#8594;</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Testimonial -->

    <div class="testimonial">
      <div class="small-container">
        <div class="row">
          <div class="col-3">
            <i class="fa fa-quote-left"></i>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt
              beatae accusantium, consectetur expedita esse iusto vitae,
              reiciendis voluptatibus laboriosam possimus tempore assumenda et
              eos?
            </p>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-o"></i>
            </div>
            <img src="img/user-1.png" alt="" />
            <h3>Sean Parker</h3>
          </div>
          <div class="col-3">
            <i class="fa fa-quote-left"></i>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt
              beatae accusantium, consectetur expedita esse iusto vitae,
              reiciendis voluptatibus laboriosam possimus tempore assumenda et
              eos?
            </p>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-o"></i>
            </div>
            <img src="img/user-2.png" alt="" />
            <h3>Mike Smith</h3>
          </div>
          <div class="col-3">
            <i class="fa fa-quote-left"></i>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt
              beatae accusantium, consectetur expedita esse iusto vitae,
              reiciendis voluptatibus laboriosam possimus tempore assumenda et
              eos?
            </p>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-o"></i>
            </div>
            <img src="img/user-3.png" alt="" />
            <h3>Aka Joe</h3>
          </div>
        </div>
      </div>
    </div>

    <!-- Brands -->
    <div class="brands">
      <div class="small-container">
        <div class="row">
          <div class="col-5">
            <img src="img/logo-godrej.png" />
          </div>
          <div class="col-5">
            <img src="img/logo-oppo.png" />
          </div>
          <div class="col-5">
            <img src="img/logo-coca-cola.png" />
          </div>
          <div class="col-5">
            <img src="img/logo-paypal.png" />
          </div>
          <div class="col-5">
            <img src="img/logo-philips.png" />
          </div>
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
              <li><a href="https://www.facebook.com/suvo242/">Facebook</a></li>
              <li>
                <a href="https://www.Instagram.com/alemamsuvo242/">Instagram</a>
              </li>
              <li><a href="https://www.twitter.com/MdAlEmam2/">Twitter</a></li>
              <li><a href="https://www.github.com/alemam242/">Github</a></li>
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
  </body>
</html>
