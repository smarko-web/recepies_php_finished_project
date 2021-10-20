<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/style.css?v=<?php echo time(); ?>">
    <!--fonts.google-->
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet">
    <!--fonts.awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Register</title>

</head>

<body>


<?php
    include("../path.php");
    require ROOT_PATH . "/assets/php/header.php";
?>

<div class="auth-content">
<h2 class="form-title">Register</h2>
    <form action="../assets/php/signup.php" method="POST">
    <?php
    if (isset($_GET['username'])) {
        $username = $_GET['username'];
        echo ' <div>
        <label>Username</label>
        <input type="text" placeholder="username" name="username" class="text-input" value="'.$username.'">
    </div>';
    } 
    else {
        echo ' <div>
        <label>Username</label>
        <input type="text" placeholder="username" name="username" class="text-input">
    </div>';
    }
    if (isset($_GET['email'])) {
        $email = $_GET['email'];
        echo ' <div>
        <label>Email</label>
        <input type="text" placeholder="email" name="email" class="text-input" value="'.$email.'">
    </div>';
    }  else {
        echo ' <div>
        <label>Email</label>
        <input type="text" placeholder="email" name="email" class="text-input">
    </div>';

    }
    
    ?>
   <!-- <div>
      <label>Username</label>
      <input type="text" placeholder="username" name="username" class="text-input">
  </div>
       <div class="msg success error">
            <li>Username required</li>
        </div> --> 
       

        <div>
            <label>Password</label>
            <input type="password" placeholder='password'name="password"class="text-input">
        </div>

        <div>
            <label>Password confirmation</label>
            <input type="password"placeholder='repeat' name="passwordconf"class="text-input">
        </div>
     <div>
            <button type="submit" name="register-btn" class="btn btn-big">Register</button>
        </div>
        <p> or <a href="login.php"> Sign In</a></p>

        <?php
        //uses signup.php to  see the Error in the URL and on that base check if a Specific string is in it 
       
           //$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
               
               /* if (strpos($fullUrl, "signup=empty") == true) {
                echo "<p class='error'>You Didn’t Complete The form!</p>";
                exit();
                }
                elseif (strpos($fullUrl, "signup=charinvalid") == true) {
                    echo "<p class='error'> The Username is Invalid!</p>";
                    exit();
                }
                elseif (strpos($fullUrl, "signup=invalidemail") == true) {
                    echo "<p class='error'> The Email Address is Invalid!</p>";
                    exit();
                }
                elseif (strpos($fullUrl, "signup=pwdnotmach") == true) {
                    echo "<p class='error'> Your Password Did Not Mach! </p>";
                    exit();
                }
                elseif (strpos($fullUrl, "signup=success") == true) {
                    echo "<p class='success'> You Are Signed Up!</p> ";
                    exit();
                }*/


                if (!isset($_GET['signup'])) {
                    exit();
                
                }
                else {
                    $signupCheck = $_GET['signup'];

                    if ($signupCheck == "empty") {
                        echo "<p class='error'>You Didn’t Complete The form!</p>";
                    exit();
                    }
                    if ($signupCheck == "charinvalid") {
                        echo "<p class='error'> The Username is Invalid!</p>";
                    exit();   
                    }
                    if ($signupCheck == "usernametaken") {
                        echo "<p class='error'> The Username/email has been taken!</p>";
                    exit();   
                    }
                    if ($signupCheck == "pwdnotmatch") {
                        echo "<p class='error'> Your Password Did Not Match!</p>";
                    exit();   
                    }
                    if ($signupCheck == "success") {
                        echo "<p class='success'> You Are Signed Up!</p> ";
                        exit();
                    }
                    
                }


            
?>

    </form>
   

</div>
    


    

  
</body>


</html>