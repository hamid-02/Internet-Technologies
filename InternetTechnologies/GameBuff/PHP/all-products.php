<?php
  session_start();
  include ("connection.php");
  include ("functions.php");

  $user_data = check_login($con);

  $conn = mysqli_connect('localhost', 'root');
  mysqli_select_db($conn, 'gamebuff');
  $sql = "SELECT * FROM products WHERE featured=0";
  $featured = $conn->query($sql);
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
  <title>All Products | Games Buff UK 2022</title>
  <link rel="icon" type="image/x-icon" href="../Images/favicon-16x16.png">
</head>

<body>
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
        <!---- Cart Content ---->
        <div class="cart-content">
            
        </div>
        <!---- Total ---->
        <div class="total">
          <div class="total-title">Total</div>
          <div class="total-price">£0</div>
        </div>
        <!---- Buy Button ---->
        <button type="button" class="btn-buy">Buy Now</button>
        <!---- Close Cart ---->
        <i class="bx bx-x" id="close-cart"></i>
      </div>
    </div>
  </div>

<!----- All products page ----->
  <div class="small-container">
    <div class="row row-2">
      <h2>All Products</h2>
      <select>
        <option>Default Sorting</option>
        <option>Popularity</option>
        <option>Rating</option>
        <option>High to Low</option>
        <option>Low to High</option>
      </select>
    </div>
    <div class="row">
      <?php
        while($product = mysqli_fetch_assoc($featured)):
      ?>
      <div class="col-4">
        <img src="<?= $product['product_image']; ?>" class="product-img" alt="<?= $product['product_name']; ?>">
        <h4 class="product-title"><?= $product['product_name']; ?></h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <p class="price">£<?= $product['product_price']; ?></p>
        <button type="submit" class="btn add-cart">Add to Cart &#8594;</button>
      </div>
      <?php
        endwhile;
      ?>
      <?php
        while($product = mysqli_fetch_assoc($featured)):
      ?>
      <div class="col-4">
        <img src="<?= $product['product_image']; ?>" class="product-img" alt="<?= $product['product_name']; ?>">
        <h4 class="product-title"><?= $product['product_name']; ?></h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <p class="price">£<?= $product['product_price']; ?></p>
        <button type="submit" class="btn add-cart">Add to Cart &#8594;</button>
      </div>
      <?php
        endwhile;
      ?>
      <?php
        while($product = mysqli_fetch_assoc($featured)):
      ?>
      <div class="col-4">
        <img src="<?= $product['product_image']; ?>" class="product-img" alt="<?= $product['product_name']; ?>">
        <h4 class="product-title"><?= $product['product_name']; ?></h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <p class="price">£<?= $product['product_price']; ?></p>
        <button type="submit" class="btn add-cart">Add to Cart &#8594;</button>
      </div>
      <?php
        endwhile;
      ?>
      <?php
        while($product = mysqli_fetch_assoc($featured)):
      ?>
      <div class="col-4">
        <img src="<?= $product['product_image']; ?>" class="product-img" alt="<?= $product['product_name']; ?>">
        <h4 class="product-title"><?= $product['product_name']; ?></h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <p class="price">£<?= $product['product_price']; ?></p>
        <button type="submit" class="btn add-cart">Add to Cart &#8594;</button>
      </div>
      <?php
        endwhile;
      ?>
    </div>
    <div class="row">
      <?php
        while($product = mysqli_fetch_assoc($featured)):
      ?>
      <div class="col-4">
        <img src="<?= $product['product_image']; ?>" class="product-img" alt="<?= $product['product_name']; ?>">
        <h4 class="product-title"><?= $product['product_name']; ?></h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <p class="price">£<?= $product['product_price']; ?></p>
        <button type="submit" class="btn add-cart">Add to Cart &#8594;</button>
      </div>
      <?php
        endwhile;
      ?>
      <?php
        while($product = mysqli_fetch_assoc($featured)):
      ?>
      <div class="col-4">
        <img src="<?= $product['product_image']; ?>" class="product-img" alt="<?= $product['product_name']; ?>">
        <h4 class="product-title"><?= $product['product_name']; ?></h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <p class="price">£<?= $product['product_price']; ?></p>
        <button type="submit" class="btn add-cart">Add to Cart &#8594;</button>
      </div>
      <?php
        endwhile;
      ?>
      <?php
        while($product = mysqli_fetch_assoc($featured)):
      ?>
      <div class="col-4">
        <img src="<?= $product['product_image']; ?>" class="product-img" alt="<?= $product['product_name']; ?>">
        <h4 class="product-title"><?= $product['product_name']; ?></h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <p class="price">£<?= $product['product_price']; ?></p>
        <button type="submit" class="btn add-cart">Add to Cart &#8594;</button>
      </div>
      <?php
        endwhile;
      ?>
      <?php
        while($product = mysqli_fetch_assoc($featured)):
      ?>
      <div class="col-4">
        <img src="<?= $product['product_image']; ?>" class="product-img" alt="<?= $product['product_name']; ?>">
        <h4 class="product-title"><?= $product['product_name']; ?></h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <p class="price">£<?= $product['product_price']; ?></p>
        <button type="submit" class="btn add-cart">Add to Cart &#8594;</button>
      </div>
      <?php
        endwhile;
      ?>
    </div>
    <div class="row">
      <?php
        while($product = mysqli_fetch_assoc($featured)):
      ?>
      <div class="col-4">
        <img src="<?= $product['product_image']; ?>" class="product-img" alt="<?= $product['product_name']; ?>">
        <h4 class="product-title"><?= $product['product_name']; ?></h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <p class="price">£<?= $product['product_price']; ?></p>
        <button type="submit" class="btn add-cart">Add to Cart &#8594;</button>
      </div>
      <?php
        endwhile;
      ?>
      <?php
        while($product = mysqli_fetch_assoc($featured)):
      ?>
      <div class="col-4">
        <img src="<?= $product['product_image']; ?>" class="product-img" alt="<?= $product['product_name']; ?>">
        <h4 class="product-title"><?= $product['product_name']; ?></h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <p class="price">£<?= $product['product_price']; ?></p>
        <button type="submit" class="btn add-cart">Add to Cart &#8594;</button>
      </div>
      <?php
        endwhile;
      ?>
      <?php
        while($product = mysqli_fetch_assoc($featured)):
      ?>
      <div class="col-4">
        <img src="<?= $product['product_image']; ?>" class="product-img" alt="<?= $product['product_name']; ?>">
        <h4 class="product-title"><?= $product['product_name']; ?></h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <p class="price">£<?= $product['product_price']; ?></p>
        <button type="submit" class="btn add-cart">Add to Cart &#8594;</button>
      </div>
      <?php
        endwhile;
      ?>
      <?php
        while($product = mysqli_fetch_assoc($featured)):
      ?>
      <div class="col-4">
        <img src="<?= $product['product_image']; ?>" class="product-img" alt="<?= $product['product_name']; ?>">
        <h4 class="product-title"><?= $product['product_name']; ?></h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <p class="price">£<?= $product['product_price']; ?></p>
        <button type="submit" class="btn add-cart">Add to Cart &#8594;</button>
      </div>
      <?php
        endwhile;
      ?>
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
      <hr>
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