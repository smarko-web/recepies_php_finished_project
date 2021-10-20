<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/style.css">
    <!--fonts.google-->
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet">
    <!--fonts.awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Login</title>

</head>

<body>


<?php
    include("../path.php");
    require ROOT_PATH . "/assets/php/header.php";
?>

<div class="auth-content">
    <form action="../assets/php/login.php" method="post">
        <h2 class="form-title">Login</h2>
        <div>
            <label>Username</label>
            <input type="text" name="username"class="text-input" placeholder="username/email">
        </div>
         <div>
            <label>Password</label>
            <input type="password" name="password"class="text-input" placeholder="password">
        </div>

        <div>
            <button type="submit" name="login-btn" class="btn btn-big">Login</button>
        </div>
        <p>Or <a href="register.php">Sign Up</a></p>
       <?php
       
        if (!isset($_GET['login'])) {
                    exit();
                
                }
                else {
                    $loginCheck = $_GET['login'];

                    if ($loginCheck == "empty") {
                        echo "<p class='error'>You Didn’t Enter Any Credentials!</p>";
                    exit();
                    }
                    else if ($loginCheck == "Usernamenotexists") {
                        echo "<p class='error'> The Username is Invalid!</p>";
                    exit();   
                    }
                    else if ($loginCheck == "incorrectpassword") {
                        echo "<p class='error'> The Password is Incorrect!</p>";
                    exit();   
                    }
                    else if ($loginCheck == "success") {
                        echo "<p class='success'> You Are LOGED IN!</p> ";
                        exit();
                    }
                    
                }
                ?>             
    </form>
</div>
    


    

    <!---- JQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>


    <!-- Custom Script-->
    <script src="js/script.js"></script>
</body>


</html>