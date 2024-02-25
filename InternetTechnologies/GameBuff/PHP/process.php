<?php
    if(!isset($_SESSION)) { 
        session_start(); 
    } else {
        session_destroy();
        session_start(); 
    }

    $mysqli = mysqli_connect('localhost', 'root', '', 'gamebuff') or die(mysqli_error($mysqli));

    $id = 0;
    $update = false;
    $name = '';
    $price = '';
    $location = '';

    if (isset($_POST['save'])) {
        $name = $_POST['product_name'];
        $price = $_POST['product_price'];
        $location = $_POST['product_image'];

        $mysqli->query("INSERT INTO products(product_name, product_price, product_image) 
            VALUES('$name', '$price', '$location')") or die(mysqli_error($mysqli));

        header("location: admin.php");
    }

    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        $mysqli->query("DELETE FROM products WHERE id=$id") or die(mysqli_error($mysqli));

        header("location: admin.php");
    }

    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
        $update = true;
        $result = $mysqli->query("SELECT * FROM products WHERE id=$id") or die(mysqli_error($mysqli));
        if ($result->num_rows) {
            $row = $result->fetch_array();
            $name = $row['product_name'];
            $price = $row['product_price'];
            $location = $row['product_image'];
        }
    }

    if(isset($_POST['update'])) {
        $id = $_POST['id'];
        $name = $_POST['product_name'];
        $price = $_POST['product_price'];
        $location = $_POST['product_image'];

        $mysqli->query("UPDATE products SET product_name='$name', product_price='$price', product_image='$location' WHERE id=$id") 
            or die($mysqli->error);

        header('location: admin.php');
    }