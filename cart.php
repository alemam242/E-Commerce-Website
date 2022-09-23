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

    <!-- Cart items details -->
    <div class="small-container cart-page">
      <table>
        <tr>
          <th>Product</th>
          <th>Quantity</th>
          <th>Subtotal</th>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="img/buy-1.jpg" />
              <div>
                <p>Red Printed T-shirt</p>
                <small>Price: $50.00</small>
                <br />
                <a href="">Remove</a>
              </div>
            </div>
          </td>
          <td><input type="number" value="1" /></td>
          <td>$50.00</td>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="img/buy-2.jpg" />
              <div>
                <p>Red Printed T-shirt</p>
                <small>Price: $65.00</small>
                <br />
                <a href="">Remove</a>
              </div>
            </div>
          </td>
          <td><input type="number" value="1" /></td>
          <td>$65.00</td>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <img src="img/buy-3.jpg" />
              <div>
                <p>Red Printed T-shirt</p>
                <small>Price: $75.00</small>
                <br />
                <a href="">Remove</a>
              </div>
            </div>
          </td>
          <td><input type="number" value="1" /></td>
          <td>$75.00</td>
        </tr>
      </table>

      <div class="total-price">
        <table>
          <tr>
            <td>SubTotal</td>
            <td>$190.00</td>
          </tr>
          <tr>
            <td>Tax</td>
            <td>$30.00</td>
          </tr>
          <tr>
            <td>SubTotal</td>
            <td>$220.00</td>
          </tr>
        </table>
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
  </body>
</html>
