<?php
  session_start();
  include ("connection.php");
  include ("functions.php");

  $user_data = check_login($con);
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
  <title>Contact Us | Games Buff UK 2022</title>
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
      <img src="../Images/menu.png" class="menu-icon" onclick="menuToggle()">
    </div>
  </div>

  <!---- Contact Us section ----->
  <div class="contact-us">
    <div class="title">
      <h2>Get in touch!</h2>
    </div>
    <div class="box">
      <!--Form-->
      <div class="contact form">
        <h3>Send a Message</h3>
        <form>
          <div class="form-box">
            <div class="row50">
              <div class="input-box">
                <span>First Name:</span>
                <input type="text" placeholder="First Name">
              </div>
              <div class="input-box">
                <span>Last Name</span>
                <input type="text" placeholder="Last Name">
              </div>
            </div>
            <div class="row50">
              <div class="input-box">
                <span>Email:</span>
                <input type="text" placeholder="Email address">
              </div>
              <div class="input-box">
                <span>Phone number:</span>
                <input type="text" placeholder="Phone number">
              </div>
            </div>
            <div class="row100">
              <div class="input-box">
                <span>Message:</span>
                <textarea placeholder="Write your message here..."></textarea>
              </div>
            </div>
            <div class="row100">
              <div class="input-box">
                <input type="submit" value="Send">
              </div>
            </div>
          </div>
        </form>
      </div>
      <!--Information-->
      <div class="contact info">
        <h3>Contact info</h3>
        <div class="info-box">
          <div>
            <span>
              <ion-icon name="location"></ion-icon>
            </span>
            <p>Avenue Road, Bradford, BD5 8DB, West Yorkshire</p>
          </div>
          <div>
            <span>
              <ion-icon name="mail"></ion-icon>
            </span>
            <a href="mailto:hamid567@hotmail.co.uk">hamid567@hotmail.co.uk</a>
          </div>
          <div>
            <span>
              <ion-icon name="call"></ion-icon>
            </span>
            <a href="tel:07512 035001">07512 035001</a>
          </div>
          <ul class="social">
            <li><a href="#">
                <ion-icon name="logo-facebook"></ion-icon>
              </a></li>
            <li><a href="#">
                <ion-icon name="logo-twitter"></ion-icon>
              </a></li>
            <li><a href="#">
                <ion-icon name="logo-instagram"></ion-icon>
              </a></li>
            <li><a href="#">
                <ion-icon name="logo-youtube"></ion-icon>
              </a></li>
            <li><a href="#">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a></li>
          </ul>
        </div>
      </div>
      <!--Map-->
      <div class="contact map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1178.887139317671!2d-1.746563041758358!3d53.77570558006397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487be1259d4cd655%3A0xd0eb9214b9498073!2sAvenue%20Rd%2C%20Bradford%20BD5%208DB!5e0!3m2!1sen!2suk!4v1648645081163!5m2!1sen!2suk"
          style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
        menuItems.style.maxHeight = "300px";
      } else {
        menuItems.style.maxHeight = "0px";
      }
    }
  </script>
</body>

</html>