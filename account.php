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

    <!-- js for fontawesome kit  -->
    <script
      src="https://kit.fontawesome.com/f4edef5943.js"
      crossorigin="anonymous"
    ></script>
    
  </head>
  <body>
    <div class="container">
      <div class="navbar">
        <div class="logo">
          <img src="img/logo.png" width="125px" />
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
        <img src="img/cart.png" width="30px" height="30px" />
        <img src="img/menu.png" class="menu-icon" onclick="menutoggle()" />
      </div>
    </div>

    <!-- Account page  -->
    <div class="account-page">
      <div class="container">
        <div class="row">
          <div class="col-2">
            <img src="img/image1.png" width="100%" />
          </div>
          <div class="col-2">
            <div class="form-container">
              <div class="form-btn">
                <span onclick="login()">Login</span>
                <span onclick="register()">Register</span>
                <hr id="Indicator" />
              </div>
              <form id="LoginForm" method = "POST">
                <input type="text" placeholder="username" name="username"/>
                <input type="password" placeholder="password" name="password"/>
                <button type="submit" class="btn" name="submit">Login</button>
                <a href="">Forgot Password?</a>
              </form>

              <?php
    include 'project_connection.php';

    if(isset($_POST['submit']))
    {
      $tmp="";
      $uname=$_POST['username'];
      $password=$_POST['password'];

      $queryselect = "select * from user_info where username='$uname' and password='$password'";

      $query = mysqli_query($con,$queryselect);

      $res = mysqli_fetch_array($query);
      if($res){
      $tmp = $res['username'];
      }
 if($tmp == $uname)
{
   ?>
   <script>
   alert('Login successful');
   window.location.href = "products.php";
   </script>
   <?php
}
else
{
  ?>
  <script>
  alert('Login failed');
  </script>
  <?php
}
    }
    mysqli_close($con);
    ?>

              <form id="RegForm" method = "POST">
                <input type="text" placeholder="Username" name = "rusername"/>
                <input type="email" placeholder="Email" name = "remail"/>
                <input type="password" placeholder="Password" name="rpassword"/>
                <button type="submit" class="btn" name="rsubmit">Register</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php
    include 'project_connection.php';

    if(isset($_POST['rsubmit']))
    {
      $uname=$_POST['rusername'];
      $email=$_POST['remail'];
      $password=$_POST['rpassword'];

      $queryinsert = "insert into user_info (username, email, password) values('$uname','$email','$password')";

      $query = mysqli_query($con,$queryinsert);
      if($query)
{
   ?>
   <script>
   alert('Registration successful');
   </script>
   <?php
}
else
{
  ?>
  <script>
  alert('Registration failed');
  </script>
  <?php
}
    }
    mysqli_close($con);
    
    ?>
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

    <!-- js for toggle form -->
    <script>
      var LoginForm = document.getElementById("LoginForm");
      var RegForm = document.getElementById("RegForm");
      var Indicator = document.getElementById("Indicator");

      // function register() {
      //   RegFrom.style.transform = "translateX(0px)";
      //   LoginFrom.style.transform = "translateX(0px)";
      //   Indicator.style.transform = "translateX(100px)";
      // }
      // function login() {
      //   RegFrom.style.transform = "translateX(300px)";
      //   LoginFrom.style.transform = "translateX(300px)";
      //   Indicator.style.transform = "translateX(0px)";
      // }
      function register() {
        LoginForm.style.left = "-400px";
        RegForm.style.left = "0px";
        //   Indicator.style.left = "100px";
        Indicator.style.transform = "translateX(100px)";
      }
      function login() {
        LoginForm.style.left = "0px";
        RegForm.style.left = "400px";
        //   Indicator.style.left = "0px";
        Indicator.style.transform = "translateX(0px)";
      }
    </script>
  </body>
</html>
