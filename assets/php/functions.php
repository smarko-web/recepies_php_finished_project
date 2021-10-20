<?php
//Log in functions

function emptyField($username, $email, $pwd, $pwdconf) {
    $result;
    if (empty($username) || empty($email) || empty($pwd) || empty($pwdconf)) {
       $result = true;
    }
     else {
        $result = false;
    }
    return $result;
}

function invalidChar($username) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
       $result = true;
    }
     else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $result = true;
    }
     else {
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdconf) {
    $result;
    if ($pwd !== $pwdconf) {
       $result = true; 
    }
     else {
        $result = false;
    }
    return $result;
}

function uidExists($conn, $username, $email) {
   
    $sql = "SELECT * FROM users WHERE username = ? OR user_email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../../pages/register.php?error=stmtfaild");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);

}
function createUser($conn, $username, $email, $pwd) {
   
   /* $sql = "INSERT INTO users (username, user_email, user_password) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../../pages/register.php?error=stmtfaild");
        exit();
    }else{
    $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
   // $stmt->bind_param("sss", $username, $email, $hashedpwd);
    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedpwd);
   if(!mysqli_stmt_execute($stmt)){
        echo("not!". $mysqli->error);
        exit();
    }
   mysqli_stmt_close($stmt);
    header("location: ../../pages/register.php?signup=success");
    exit();
}*/
    /* Prepare an insert statement */
//hashpassword
$hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
$stmt = mysqli_prepare($conn, "INSERT INTO  users (username, user_email, user_password) VALUES (?, ?, ?)");
/* Bind variables to parameters */
mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedpwd);
mysqli_stmt_execute($stmt);
header("location: ../../pages/register.php?signup=success");
exit();
}

//Log in functions
function emptyFieldLogin($username, $pwd) {
    $result;
    if (empty($username) || empty($pwd)) {
       $result = true;
      
    }
     else {
        $result = false;
       
    }
    return $result;
}
function loginUser($conn, $username, $pwd) {
    $userNameExists = uidExists($conn, $username, $username);//ln48

    if ($userNameExists === false) {
        header("location: ../../pages/login.php?login=Usernamenotexists");
        exit();
    }

    $pwdHashed = $userNameExists["user_password"];
    $checkPwd = password_verify($pwd, $pwdHashed);
    
    if ($checkPwd === false) {
        header("location: ../../pages/login.php?login=incorrectpassword");
        exit();
    }
    else if ($checkPwd === true) {
        session_start();
        $_SESSION["userid"] = $userNameExists["id"];
        $_SESSION["username"] = $userNameExists["username"];
        header("location: ../../pages/index.php");
        exit();
    }
}