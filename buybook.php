<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

     <!-- font-awsome-cnd -->
    <script src="https://kit.fontawesome.com/2b764a02eb.js" crossorigin="anonymous"></script>
     <!-- custim css -->
    <link rel="stylesheet" type="text/css" href="css/buybooks.css">
    <link rel="stylesheet" href="css/homepage.css">
</head>

<body>

    <!-- nav-bar-start-here -->
    <div id="horizontal_line">
    </div>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: white;">
        <div class="container-fluid">
            <a id="navbar-logo" class="navbar-brand" href="#"><img src="images/bookloftnew.png" width="230vw" alt=""></a>
            <button style="border: none;" class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <form id="navbar-form" class="d-flex mx-auto">
                    <input class="input my-auto" type="text" placeholder="Search for book" >
                    <button class="search_btn"> <i class="fas fa-search"></i><b>SEARCH</b></button>
                </form>
                
                <ul id="navbar-ul" class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <a class="aboutus_btn" href="homepage.php"><button class="signup_btn mx-2"><i class="fas fa-home"></i><b>Home</b></button></a>
                    <a class="dashboard_btn" href="dashbord.php"><button class="login_btn mx-2"><i class="fas fa-tachometer-alt"></i><b>Dashboard</b></button></a>
                    <a class="logout_btn" href="logout.php"><button id="cart_btn" class="cart_btn mx-2"><i class="fas fa-sign-out-alt"></i><b>logout</b></button></a>
                </ul>
            </div>
        </div>
    </nav>
    <!-- nav-bar-ends-here -->

    <div class="container mt-4">
        <main class="grid">
            

            <?php

            include "connection.php";
            $session_id = $_SESSION['id'];

            $selectquery = " select * from book_store ";
                $query = mysqli_query($connection, $selectquery);

                $nums = mysqli_num_rows($query);

                $res = mysqli_fetch_array($query);


                while($res = mysqli_fetch_array($query))
                {
                    ?>
                    
                    <article>
                    <img style="padding: 1rem" src="<?php echo $res['book_picture'] ?>" alt="">
                    <div class="text">
                        <h4 class="mt-3"><?php echo $res['book_name'] ?></h4>
                        <p> <h3 class="card-sub-title fs-6"><?php echo $res['author_name'] ?></h3>
                            <p id="card-text"><i class="fas fa-rupee-sign"></i><?php echo $res['price'] ?></p>
                            </p>
                            <form action="" method="POST">
                        <button name="request-now-btn" class="request-now-btn">Request Now</button>
                        </form>
                    </div>
                </article>
                <?php
                }
            ?>




        </main>

    </div>

</body>

</html>


<?php


include "connection.php";

if(isset($_POST['request-now-btn'])){
    

    $cust_id = $_SESSION['id'];
    $cust_name = $_SESSION['full_name'];
    $cust_mobile = $_SESSION['phone_number'];
    $product_id = " select * from book_store where product_id=12;";
    $seller_id = " select * from book_store where seller_id=18;";
    
    do{
    $insert = "INSERT INTO `request`(`product_id`, `seller_id`, `cust_id`, `cust_name`, `cust_mobile`) VALUES ('$product_id','$seller_id','$cust_id','$cust_name','$cust_mobile')";

    $check = mysqli_query($connection, $insert);

    }while(1<0);


    

    ?>
    <script>

    if($check){
        alert("yes");
    }else{
        alert("no");
    }

    </script>

    <?php
}




?>