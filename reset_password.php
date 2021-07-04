<?php

echo"hii password";
?>
<?php
session_start();
ob_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <script src="https://kit.fontawesome.com/2b764a02eb.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>

<body>
    <div class="login-form">

        <h1 style="font-family: 'Open Sans', sans-serif;">Welcome Back Reset  Your Password</h1>
        <div class="container">
            <div class="main">

                <div class="content">
                    <h2>Reset Your Password</h2>
                    <div> 
                    <p class="bg-info text-white px-5"> <?php if(isset($_SESSION['passmsg'])){
                               echo $_SESSION['passmsg'];
                    }  else{
                        echo $_SESSION['passmsg']= "";

                    }
                    ?> </p>

                    </div>
                    <form action="" class="login_form1" method="POST" onsubmit="return validated()" name="form">
                        
                    <label id="password" for="Password"> New Password</label></br>
                        <input type="password" name="password1" id="'password1" placeholder=" enter your new password"
                            autocomplete="none">
                        <span id="pass_error" >Please fill up your Password </span>
                        <br>
                        
                        
                        <button type="submit" class="btn" name="submit" value="submit" id="myBtn">Update Password</button>

                    </form>


                </div>
                <div class="form-img">
                    <img src="images/signup.png">
                </div>
            </div>
        </div>

    </div>
    <script src="js/login.js"></script>

</body>

</html>


<?php


include "connection.php";

if(isset($_POST['submit'])){

    if(isset($_GET['token'])){
        $token=$_GET['token'];
    

   
   
      $password =  mysqli_real_escape_string($connection,$_POST['password1']);

      $str_password = password_hash($password, PASSWORD_BCRYPT);

    
    

   
    
     if($password>0){
        
        $updatequery="update registration set password= '$str_password' where token ='$token'";
    
    
        $signup_success =  mysqli_query($connection, $updatequery);

         if($signup_success){

                 $_SESSION['msg']="Your password has been updated";
                  header('location:login.php');

        
         }
           else{
               $_SESSION['passmsg']="password  not updated";
                header('location:reset_password.php');
             }



     }    else{
         $_SESSION['msg']="Your password is not matching";

            }
    }  else{
        echo"No token found";
         }
    
}

        



?>