<?php
 //Prepare Statement else {
     
    

    //EROOR HANDLERS
    // check if user has clicked on the singup button and if any of the feilds are empty 
    if (isset($_POST['register-btn'])) {

        include_once "connection.php";
        include_once "functions.php";
    $username = mysqli_real_escape_string($conn, $_POST['username']);//protect aganst hacker
    $email = mysqli_real_escape_string($conn, $_POST['email']);//protect aganst hacker
    $pwd = mysqli_real_escape_string($conn, $_POST['password']);//protect aganst hacker using MYSQLi long way
    $pwdconf = mysqli_real_escape_string($conn, $_POST['passwordconf']);
    $sql = "INSERT INTO users (username, user_email, user_password) 
            VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "SQL error";
    } else {
        mysqli_stmt_bind_param($stmt, "sss", $username, $email, $pwd);
        mysqli_stmt_execute($stmt);
    }
   
     //Predefined Function 
    //check if the feilds are empty
    if (empty($username) || empty($email) || empty($pwd) || empty($pwdconf)) {
        header("Location: ../../pages/register.php?signup=empty&username=$username&email=$email");
        exit();
    } 
        //check if input character are valid
    if (!preg_match("/^[a-zA-Z]*$/", $username)) {
        header("Location: ../../pages/register.php?signup=charinvalid&email=$email");
        exit();
    }  
    /*if (uidExist($conn, $username, $email) !== false) {
       header("location: ../../pages/register.php?signup=usernametaken");
       exit();
    }*/
        // check if the email is valid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("Location: ../../pages/register.php?signup=invalidemail&username=$username");
            exit();
        } 
        if($pwd !== $pwdconf) {
          header("Location: ../../pages/register.php?signup=pwdnotmatch&username=$username&email=$email");
                exit();
            }
        
        else {
            echo "You are signed up!";
            header("Location: ../../pages/register.php?signup=success");
        }
        
    
    
    } else {
        header("Location: ../../pages/register.php?signup=error");
        exit();
    }
    //Predefined Function 
?>
