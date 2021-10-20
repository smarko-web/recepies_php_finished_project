<?php
    session_start();
?>
<!DOCTYPE html>

<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Blog.php</title>
        <meta name="description" content="recipe blog">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../assets/Images/favicon.png"type="image/x-icon">


    </head>
    <body>
  <header>
  <div class="logo">
      <h1 class="logo-text"><span>My</span> Blog</h1>
  </div>
  <i class="fa fa-bars menu-toggle"></i>
  <ul class="nav">

      <!--<li><a href="#">Sign up</a></li>
      <li><a href="#">login</a></li>--->
      <li>
          <a href="#">
              <i class="fa fa-user"></i>
              Marko
              <i class="fa fa-chevron-down" style="font-size: .8em ;"></i>
          </a>
          <ul>
              <li><a href="../../../assets/php/logout.php" class="logout">Logout</a></li>
          </ul>
      </li>
  </ul>

</header>