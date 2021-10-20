<?php

if (isset($_POST['login-btn'])) {
  $username = $_POST['username'];//protect aganst hacker
  $pwd = $_POST['password'];//protect aganst hacker using MYSQLi long way

  require_once "connection.php";
  require_once "functions.php";

  if (emptyFieldLogin($username, $pwd) !== false) {
    header("location: ../../pages/login.php?login=empty&username=$username");
    exit();
 }
 loginUser($conn, $username, $pwd);
}
else {
  header("location: ../../pages/login.php");
  exit();
}

?>