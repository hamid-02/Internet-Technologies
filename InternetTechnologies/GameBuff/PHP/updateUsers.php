<?php
  session_start();
  include ("connection.php");
  include ("functions.php");
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
  <title>Update Users | Games Buff UK 2022</title>
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
    </div>
  </div>

  <!---- Admin Panel Section ---->
  <?php require_once "userProcess.php"; ?>
  <div class="account-page">
    <div class="container">
      <div class="row">
        <div class="col-2">
          <img src="../Images/gaming.jpg" width="100%">
        </div>
        <div class="col-2">
          <div class="form-container">
            <h2 class="title">Admin Dashboard</h2>
            <form action="process.php" method="POST">
              <input type="hidden" name="id" value="<?= $id; ?>">
              <input type="text" name="user_name" value="<?= $user_name; ?>" placeholder="Username">
              <input type="password" name="password" value="<?= $password; ?>" placeholder="Password">
              <?php
                if ($update == true):
              ?>
                <button type="submit" class="submit-btn" name="update">Update</button>
              <?php else: ?>
                <button type="submit" class="submit-btn" name="save">Save</button>
              <?php endif; ?>
              <p style="text-align: center;">Click here to <a href="admin.php">update products</a></p>
            </form>
          </div>
        </div>
      </div>
        <?php
          $mysqli = new mysqli('localhost','root','','gamebuff') or die(mysqli_error($mysqli));
          $result = $mysqli->query("SELECT * FROM users") or die($mysqli->error);
        ?>
      <div class="small-container">
        <table class="admin-table">
          <thead>
            <tr>
              <th>User Name</th>
              <th>Password</th>
              <th colspan="2">Action</th>
            </tr>
          </thead>
        <?php 
          while ($row = $result->fetch_assoc()): ?>
          <tr>
            <td><?= $row['user_name']; ?></td>
            <td><?= $row['password']; ?></td>
            <td>
              <a href="admin.php?edit=<?= $row['id']; ?>" 
                class="btn-info">Edit</a>
              <a href="process.php?delete=<?= $row['id']; ?>" 
                class="btn-danger">Delete</a>
            </td>
          </tr>
          <?php endwhile; ?>
        </table>
        <?php
          function pre_r($array) {
            echo '<pre>';
            print_r($array);
            echo '<pre>';
          }
        ?>
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