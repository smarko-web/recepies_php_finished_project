<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "recipe_blog";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
/*if ($conn != 0) {
    echo("connected");
}else {
    echo("Please Connect To db");
}*/
?>