<?php
session_start();

  include ("connection.php");
  include ("functions.php");

  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
      //read from database
      $query = "SELECT * FROM users WHERE user_name = '$user_name' limit 1";

      $result = mysqli_query($con, $query);
      if ($result) {
        if ($result && mysqli_num_rows($result) > 0) {
          $user_data = mysqli_fetch_assoc($result);
          if ($user_data['password'] == $password) {
            $_SESSION['user_id'] = $user_data['user_id']; 
            header('location: index.php');
            die;
          }
        }
      }
      echo "Incorrect Username or Password";
    } else {
      echo "Enter Valid Information";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../CSS/style.css" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" />
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <title>Login | Games Buff UK 2022</title>
  <link rel="icon" type="image/x-icon" href="../Images/favicon-16x16.png">
</head>

<body>
  <div class="container">
    <div class="navbar">
      <div class="logo">
        <a href="index.php"><img src="../Images/Website-Logo.png" width="135px" /></a>
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
      <img src="../Images/menu.png" class="menu-icon" onclick="menuToggle()" />
    </div>
  </div>

<!---- Account Login section ----->
  <div class="account-page">
    <div class="container">
      <div class="row">
        <div class="col-2">
          <img src="../Images/gaming.jpg" width="100%">
        </div>
        <div class="col-2">
          <div class="form-container">
            <div class="title">
              <span>Login</span>
            </div>
            <form method="POST">
              <input type="text" name="user_name" required>
              <input type="password" name="password" required>
              <button type="submit" class="btn" value="login">Login</button>
              <a href="signup.php">Click here to sign up!</a>
            </form>
          </div>
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
          <a href="index.php"><img src="../Images/DarkLogo.png" /></a>
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
  <script>
    let LoginForm = document.getElementById("loginForm");
    let RegisterForm = document.getElementById("registerForm");
    let Indicator = document.getElementById("Indicator");

    function registerForm() {
      RegisterForm.style.transform = "translateX(0px)";
      LoginForm.style.transform = "translateX(0px)";
      Indicator.style.transform = "translateX(100px)";
    }

    function loginForm() {
      RegisterForm.style.transform = "translateX(300px)";
      LoginForm.style.transform = "translateX(300px)";
      Indicator.style.transform = "translateX(0px)";
    }
  </script>
</body>

</html>