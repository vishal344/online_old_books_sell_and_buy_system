<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mybook</title>
     <!-- bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

      <!-- font-awsome-cnd -->
    <script src="https://kit.fontawesome.com/2b764a02eb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/mybook.css">
    <link rel="stylesheet" href="css/homepage.css">
</head>
<body>
        <!--header area start-->

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
    
        <!-- navbar-ends-here -->

        <!-- table start here -->
        <div class="container mt-4">
        <table class="table table-striped text-center">
            <thead>
              <tr class="table-dark">
                
                <th scope="col">Book Name</th>
                <th scope="col">Author Name</th>
                <th scope="col">Price</th>
                <th scope="col">Purchase Date</th>
                <th scope="col">Book picture</th>
                <th scope="col">Book Condition</th>
              </tr>
            </thead>
            <tbody>


            
                <?php

                include "connection.php";
                $session_id = $_SESSION['id'];
                $selectquery = " select * from book_store where seller_id=$session_id;";
                $query = mysqli_query($connection, $selectquery);

                $nums = mysqli_num_rows($query);

                $session_id = $_SESSION['id'];
                
                

                for ($i=0; $i < $nums ; $i++) { 
                    
                    $res = mysqli_fetch_array($query);
                    
                ?>
                    
                    <tr class="align-middle fs-5">
                    
                    <td><?php echo $res['book_name'] ?></td>
                    <td><?php echo $res['author_name'] ?></td>
                    <td><?php echo $res['price'] ?></td>
                    <td><?php echo $res['purchase_date'] ?></td>
                    <td style="width: 30vw" class=""><img width="30%" src="<?php echo $res['book_picture'] ?>" alt=""></td>
                    <td ><?php echo $res['book_condition'] ?></td>
                    </tr>

                    <?php
                    
                }
                ?>

    
            </tbody>
          </table>
        </div>
        <!-- table ends here -->




    <!-- boosstrap-bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
</body>
</html>