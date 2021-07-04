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

        <h1 style="font-family: 'Open Sans', sans-serif;">Welcome Back Login Your Account</h1>
        <div class="container">
            <div class="main">

                <div class="content">
                    <h2>Login</h2>
                    <div> 
                    <p class="bg-success text-white px-4">  <?php
                       if(isset($_SESSION['msg'])){
                        echo $_SESSION['msg'];

                       }   else{           echo $_SESSION['msg']="You are logout.Please login again ";
                    }
                       ?>
                    </p>

                    </div>
                    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" class="login_form1" method="POST" onsubmit="return validated()" name="form">
                        <label id="email" for="Email">Email</label></br>
                        <input type="email" name="email" id="email1" placeholder="Your email" autocomplete="none">
                        <span id="email_error" >Please fill up your Email </span>
                    </br>
                        <label id="password" for="Password">Password</label></br>
                        <input type="password" name="password" id="'password1" placeholder="Your password"
                            autocomplete="none">
                        <span id="pass_error" >Please fill up your Password </span>
                        <br>
                        <span><a href="recover_email.php" class="fg-pass">Forgot password?</a></span>
                        <br>
                        <br>
                        <button type="submit" class="btn" name="submit" value="submit" id="myBtn">Login</button>

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

   
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email_search = "select * from registration where email='$email' and status='active' ";
    $query = mysqli_query($connection, $email_search);

    $email_count = mysqli_num_rows($query);

    if($email_count) {
        $email_pass = mysqli_fetch_assoc($query);

        $db_pass = $email_pass['password'];

        $_SESSION['id'] = $email_pass['id'];
        $_SESSION['mobile'] = $email_pass['mobile'];
        $_SESSION['username'] = $email_pass['username'];
        //$_SESSION['msg'] = $email_pass['msg'];
        

    


        $pass_decode = password_verify($password, $db_pass);

        if($pass_decode){
            echo "login successfull";
            ?>
            <script>
                
                location.replace("homepage.php");
            </script>
            <?php
        }else{
            echo"password incorrect";
            ?>
            <script>
                alert("login failed");
               
            </script>
            <?php
        }
    }else{
        ?>
            <script>
                alert("Invlaid email");
            </script>
            <?php
    }

        
}


?>