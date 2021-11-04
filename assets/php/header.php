<!-- header for public vievers--->
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
            <a href='../pages/index.php' class="logo">
                <img src="../assets/images/header.png" alt="">
                <!--<h1 class="logo-text"><span>My</span> Blog</h1>--->
            </a>
            <i class="fa fa-bars menu-toggle"></i>
            <ul class="nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">
                        Services
                        <i class="fa fa-chevron-down" style="font-size: .8em ;"></i>
                    </a>
                    <ul style="left: 0px;">
                        <li><a href="#">cooking</a></li>
                        <li><a href="#">Baking</a></li>
                    </ul>
                </li>
                <!--<li><a href="#">Sign up</a></li>
                <li><a hr   ef="#">login</a></li>--->
                <?php
                    if (isset($_SESSION["username"])) {
                       echo "<li><a href='#'>" .$_SESSION['username']. "<i class='fa fa-chevron-down' style='font-size: .8em ;'></i></a>";
                   echo "<ul style='left: 0px;'>
                        <li><a href='admin/posts/index.php'>Dashboard</a></li>
                        <li><a href='../assets/php/logout.php'>Log out</a></li>
                    </ul>
                        </li>";
                    }  

                    else {
                        echo "<li><a href='register.php'>Sign up</a></li>";
                        echo "<li><a href='login.php'>log in</a></li>";
                    }

                ?>
                 <!--<li> <a href="register.php">
                   <i class="fa fa-user"></i>
                       SIGN UP
                       <i class="fa fa-chevron-down" style="font-size: .8em ;"></i>
                    </a>
                        <ul>
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#" class="logout">Logout</a></li>
                    </ul>
                </li>
                <li><a href="login.php">LOG IN</a></li>--->
            </ul>
        
        </header>
 





