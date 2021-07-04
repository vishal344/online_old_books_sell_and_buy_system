<?php

session_start();

include 'connection.php';

if(isset($_GET['token'])){
    $token=$_GET['token'];
    $updatequery= "update registration set status='active' where token='$token'";

    $query= mysqli_query($connection ,$updatequery);
    if($query){

        if(isset($_SESSION['msg'])){
            $_SESSION['msg']=" Your Account activate successfully";
            header('location:login.php');
        }else{
            $_SESSION['msg']="You are logout";
            header('location:login.php');

        }
    }else{
        $_SESSION['msg']=" Your Account not activate successfully";
        header('location:regis.php');
    }
}


?>