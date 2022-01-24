<?php


if($_POST["username"]){
    $username = $_POST["username"];
    $password = $_POST["password"];
    if($username == "adamlee" && $password == "adamlee3000"){
        header('location: adminCustomer/Issues/Monitor.php');
    }
    else{
        header('location: index.php?error=Wrong_password_or_username');
    }
}




?>