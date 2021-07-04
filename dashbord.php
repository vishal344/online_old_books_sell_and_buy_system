<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard </title>
    <link rel="stylesheet" href="css/dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>

</head>

<body>
    <input type="checkbox" id="check">

    <header>
        <label for="check">
            <i class="fas fa-bars" id="sidebar_btn"></i>
        </label>
        <div class="left_area">
            <h3><span>Dashboard</span></h3>
        </div>
        <div class="right_area">
            <a href="logout.php" class="logout_btn"><i class="fas fa-sign-out-alt"></i>Logout</a>
            <a href="homepage.php" class="logout_btn"><i class="fas fa-home"></i>Home</a>
        </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
        <div class="nav_bar">
            <img src="images/bookloft.jpeg" class="mobile_profile_image" alt="">
            <i class="fa fa-bars nav_btn"></i>
        </div>
        <div class="mobile_nav_items">
            <a href="sell-book.php"><i class="fas fa-upload"></i><span>Sell Books</span></a>
            <a href="mybook.php"><i class="fas fa-book"></i><span>My Books </span></a>
            <a href="buybook.php"><i class="fas fa-table"></i><span>Buy Book</span></a>
            <a href="#"><i class="fas fa-th"></i><span>Request</span></a>
            <a href="aboutus.html"><i class="fas fa-info-circle"></i><span>About</span></a>
            <!--   <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>-->
        </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->


    <div class="sidebar">
        <div class="profile_info">
            <img src="images/bookloft.jpeg" class="profile_image" alt="">
            <h2 style="font-family: 'Courier New', Courier, monospace;">Hello, Welcome <br> <strong> <span class="mt-2" style="text-align : center; display: block;"> <?php echo $_SESSION['username'] ?> </span> </strong> </h2>
        </div>
        <a href="sell-book.php"><i class="fas fa-upload"></i><span>Sell Books</span></a>
        <a href="mybook.php"><i class="fas fa-book"></i><span>My Book</span></a>
        <a href="buybook.php"><i class="fas fa-table"></i><span>Buy Book</span></a>
        <a href="#"><i class="fas fa-th"></i><span>Request</span></a>
        <a href="aboutus.html" id="fo"><i class="fas fa-info-circle"></i><span>About</span></a>
        <!-- <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>-->
    </div>


    <!--sidebar end-->

    <div class="content">

        

        <video autoplay loop muted class="card" width="100%">
            <source src="mp3.mp4" type="video/mp4" scrolling="no">
            
        </video>


    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $('.nav_btn').click(function () {
                $('.mobile_nav_items').toggleClass('active');
            });
        });


    </script>

</body>

</html>