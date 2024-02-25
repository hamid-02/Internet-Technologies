<?php
  session_start();

  include ("connection.php");
  include ("functions.php");

  $user_data = check_login($con);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CSS/style.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
  <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <title>Home | Games Buff UK 2022</title>
  <link rel="icon" type="image/x-icon" href="../Images/favicon-16x16.png">
</head>

<body>
  <div class="header">
    <div class="container">
      <div class="navbar">
        <div class="logo">
          <a href="index.php"><img src="../Images/Website-Logo.png" width="135px"></a>
        </div>
        <nav>
          <ul id="menuItems">
            <li><a href="index.php">Home</a></li>
            <li><a href="all-products.php">Products</a></li>
            <li><a href="contact-us.php">Contact</a></li>
            <li><a href="admin.php">Admin</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </nav>
        <img src="../Images/cart.png" class='bx bx-cart' id="cart-icon" width="30px" height="30px">
        <img src="../Images/menu.png" class="menu-icon" onclick="menuToggle()">
        <!---- Cart ---->
        <div class="cart">
          <h2 class="cart-title">Your Cart</h2>
          <!--- Cart Content --->
          <div class="cart-content">

          </div>
          <!---- Total ---->
          <div class="total">
            <div class="total-title">Total</div>
            <div class="total-price">£0</div>
          </div>
          <!---- Buy Button ---->
          <button type="button" class="btn-buy">Buy Now</button>
          <!--- Close Cart --->
          <i class="bx bx-x" id="close-cart"></i>
        </div>
      </div>
      <div class="row">
        <div class="col-2">
          <h1>Give your gaming a <br>new breath of fresh air!</h1>
          <p>
            Playing video games has never been more fun. Shop now
            for exciting<br>new and unique deals near you!!
          </p>
          <a href="all-products.php" class="btn">Shop Now &#8594;</a>
        </div>
        <div class="col-2">
          <img src="../Images/gaming.jpg">
        </div>
      </div>
    </div>
  </div>

  <!----- Featured Games ------>
  <div class="categories">
    <div class="small-container">
      <div class="row">
        <div class="col-3">
          <img src="../Images/death-stranding.jpg">
        </div>
        <div class="col-3">
          <img src="../Images/cyberpunk-2077.jpg">
        </div>
        <div class="col-3">
          <img src="../Images/god-of-war.jpg">
        </div>
      </div>
    </div>
  </div>

  <!------- Featured Products ------->
  <div class="small-container">
    <h2 class="title">Featured Products</h2>
    <div class="row">
      <!-- Displaying 4 products -->
      <div class="col-4">
        <img src="../Images/gt-7.jpg" class="product-img">
        <h4 class="product-title">Gran Tursimo 7</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <p class="price">£70</p>
        <button type="submit" class="btn add-cart">Add to Cart &#8594;</button>
      </div>
      <div class="col-4">
        <img src="../Images/lego.jpg" class="product-img">
        <h4 class="product-title">Lego Star Wars: The Skywalker Saga</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <p class="price">£45</p>
        <button type="submit" class="btn add-cart">Add to Cart &#8594;</button>
      </div>
      <div class="col-4">
        <img src="../Images/animal-crossing.jpg" class="product-img">
        <h4 class="product-title">Animal Crossing: New Horizons</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <p class="price">£40</p>
        <button type="submit" class="btn add-cart">Add to Cart &#8594;</button>
      </div>
      <div class="col-4">
        <img src="../Images/halo.png" class="product-img">
        <h4 class="product-title">Halo Infinity</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <p class="price">£35</p>
        <button type="submit" class="btn add-cart">Add to Cart &#8594;</button>
      </div>
    </div>
  </div>

  <!---- Product on offer ----->
  <div class="offer">
    <div class="small-container">
      <div class="row">
        <div class="col-2">
          <img src="../Images/elden-ring.jpg" class="offer-img">
        </div>
        <div class="col-2">
          <p>Exclusive to Games Buff UK only</p>
          <h1 class="product-title">Elden Ring</h1>
          <small>
            Elden Ring is a fan-favourite video game which is played in third-person.
            The game is an action-adventure game which is focused on combat against huge
            bosses and exploration of The Lands Between. It is an action role-playing game
            developed by FromSoftware and published by Bandai Namco Entertainment. The game
            was directed by Hidetaka Miyazaki and made in collaboration with fantasy novelist
            George R. R. Martin, who provided material for the game's setting.
          </small>
        </div>
      </div>
    </div>
  </div>

  <!------ Brands ------->
  <div class="brands">
    <div class="small-container">
      <div class="row">
        <div class="col-5">
          <img src="../Images/discord-logo.png">
        </div>
        <div class="col-5">
          <img src="../Images/GAME.png">
        </div>
        <div class="col-5">
          <img src="../Images/ps-logo.png">
        </div>
        <div class="col-5">
          <img src="../Images/Xbox-Logo.png">
        </div>
        <div class="col-5">
          <img src="../Images/logo-paypal.png">
        </div>
      </div>
    </div>
  </div>

  <!------ Footer ------->
  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col-1">
          <h3>Download Our App!</h3>
          <p>Download our app for iOS and Android.</p>
          <div class="app-logo">
            <img src="../Images/app-store.png">
            <img src="../Images/play-store.png">
          </div>
        </div>
        <div class="footer-col-2">
          <a href="index.php"><img src="../Images/DarkLogo.png"></a>
        </div>
        <div class="footer-col-3">
          <h3>Useful links:</h3>
          <ul>
            <li><a href="#">Coupons</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Delivery Info</a></li>
            <li><a href="#">Returns Policy</a></li>
          </ul>
        </div>
        <div class="footer-col-4">
          <h3>Follow me:</h3>
          <ul>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Snapchat</a></li>
            <li><a href="#">Discord</a></li>
            <li><a href="#">Reddit</a></li>
            <li><a href="#">Instagram</a></li>
          </ul>
        </div>
      </div>
      <hr />
      <p class="copyright">Copyright 2022 | Games Buff UK | Find cheap deals here!</p>
    </div>
  </div>
  <script>
    var MenuItems = document.getElementById("menuItems");
    menuItems.style.maxHeight = "0px";

    function menuToggle() {
      if (menuItems.style.maxHeight == "0px") {
        menuItems.style.maxHeight = "200px";
      } else {
        menuItems.style.maxHeight = "0px";
      }
    }
  </script>
  <script src="../JS/cart.js"></script>
</body>

</html>