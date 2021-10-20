<?php
//Sign up functions
    //Creating user Function to the same Things as Above 
    if (isset($_POST['register-btn'])) {
        include_once "connection.php";
        include_once "functions.php";
    $username = mysqli_real_escape_string($conn, $_POST['username']);//protect aganst hacker
    $email = mysqli_real_escape_string($conn, $_POST['email']);//protect aganst hacker
    $pwd = mysqli_real_escape_string($conn, $_POST['password']);//protect aganst hacker using MYSQLi long way
    $pwdconf = mysqli_real_escape_string($conn, $_POST['passwordconf']);
    
       
       
    
    if (emptyField($username, $email, $pwd, $pwdconf) !== false) {
       header("location: ../../pages/register.php?signup=empty&username=$username&email=$email");
       exit();
    }
    if (invalidChar($username) !== false) {
        header("location: ../../pages/register.php?signup=charinvalid");
       exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: ../../pages/register.php?signup=invalidemail");
       exit();
    } 
    if (pwdMatch($pwd, $pwdconf) !== false) {
        header("location: ../../pages/register.php?signup=pwdnotmatch&username=$username&email=$email");
       exit();
    }
    if (uidExists($conn, $username, $email) !== false) {
        header("location: ../../pages/register.php?signup=usernametaken");
       exit();
    }else {
         createUser($conn, $username, $email, $pwd);

    }
  
    }      
     else {
        header("location: ../../pages/register.php");
        exit();
    }
?>