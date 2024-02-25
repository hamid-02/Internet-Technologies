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
    $user_name = '';
    $password = '';

    if (isset($_POST['save'])) {
        $user_name = $row['user_name'];
        $password = $row['password'];

        $mysqli->query("INSERT INTO users(user_name, password) 
            VALUES('$user_name', '$password')") or die(mysqli_error($mysqli));

        header("location: updateUsers.php");
    }

    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        $mysqli->query("DELETE FROM users WHERE id=$id") or die(mysqli_error($mysqli));

        header("location: updateUsers.php");
    }

    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
        $update = true;
        $result = $mysqli->query("SELECT * FROM users WHERE id=$id") or die(mysqli_error($mysqli));
        if ($result->num_rows) {
            $row = $result->fetch_array();
            $user_name = $row['user_name'];
            $password = $row['password'];
        }
    }

    if(isset($_POST['update'])) {
        $id = $_POST['id'];
        $user_name = $row['user_name'];
        $password = $row['password'];

        $mysqli->query("UPDATE users SET user_name='$user_name', password='$password' WHERE id=$id") 
            or die($mysqli->error);

        header('location: updateUsers.php');
    }