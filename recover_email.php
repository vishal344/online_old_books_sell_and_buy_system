<?php
session_start();
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

        <h1 style="font-family: 'Open Sans', sans-serif;">Welcome Back Recover Your Account</h1>
        <div class="container">
            <div class="main">

                <div class="content">
                    <h2>Recover Your Account</h2>
                    <div> 
                    

                    </div>
                    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" class="login_form1" method="POST" onsubmit="return validated()" name="form">
                        <label id="email" for="Email">Email</label></br>
                        <input type="email" name="email" id="email1" placeholder="Your email" autocomplete="none">
                        <span id="email_error" >Please fill up your Email </span>
                    </br>
                        
                        
                        <button type="submit" class="btn" name="submit" value="submit" id="myBtn">Send Mail</button>

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

   
    $email =  mysqli_real_escape_string($connection,$_POST['email']);
    

   

    $emailquery="select * from registration where email ='$email' ";
    $query=mysqli_query($connection,$emailquery);

    $emailcount=mysqli_num_rows($query);
    
    if($emailcount){
       
    


    $userdata=mysqli_fetch_array($query);
    $username=$userdata['username'];
    $token=$userdata['token'];

    
        $subject ="Password Reset";
        $body="hi, $username.click here too reset your password http://localhost:8080/miniproject2021/reset_password.php?token=$token";
        $sender_email="from:vishalwanode2021@gmail.com";
        if(mail($email,$subject,$body,$sender_email)){

            $_SESSION['msg']="check you mail to reset your password $email";
            header('location:login.php');
           

        }else{
            echo "Email sending faild....";
        }

        
    }else{
        echo"No email found";
    }
    

}

        



?>