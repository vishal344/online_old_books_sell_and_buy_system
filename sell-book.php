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
        <!-- custom-css -->
        <link rel="stylesheet" href="css/homepage.css">
    <link rel="stylesheet" href="css/signup.css">
    
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
    <div class="login-form">

        <h1 style="font-family: 'Open Sans', sans-serif;">Upload your book</h1>
        <div class="container">
            <div class="main">

                <div class="content">
                    <h2>Fill this form</h2>
                    <form action="#"  method="POST" name="form" enctype="multipart/form-data">
                        <div class="your-name-div">
                            <label class="your-name ms-3 fs-5" for="book_name">Book name</label></br>
                            <input type="text" name="book_name" id="book_name" placeholder="Book name"
                                autocomplete="none">
                        </div>
                        
                        <div class="phone-number-div">
                            <label class="phone-number  ms-3 fs-5" for="author_Name">Author name</label></br>
                            <input type="text" name="author_name" id="author_name" placeholder="Author name"
                                autocomplete="none">

                        </div>
                        
                        
                        <!-- <label class="your-name ms-3 fs-5" for="Price">Price</label></br>
                            <input type="text" name="price" id="yourname12" placeholder="price"
                                autocomplete="none"> -->
                        

                                <label class=" ms-3 fs-5" for="price">price</label></br>
                        <input type="text" name="price" id="password1." placeholder="price"
                            autocomplete="none">
                        
                        <label class=" ms-3 fs-5" for="Password">purchase date</label></br>
                        <input type="text" name="purchase_date" id="password1." placeholder="Purchase date"
                            autocomplete="none">
                        
                        

                        <div class="mt-2">
                            <label  for="book_pic" class="form-label ms-3 fs-5">Upload the book picture</label>
                            <input style="border-radius: 2.5rem;" class="form-control " type="file" name="book_pic">
                          </div>

                          <div>

                          <label class="ms-3 mt-1 fs-5" for="">Book Condition</label>
                          <select style="border-radius: 2.5rem ;" name="book_condition" class="form-select form-select-lg" aria-label=".form-select-lg  example">
                            <option selected>Open this select menu</option>
                            <option value="good">Good</option>
                            <option value="Average">Average</option>
                            <option value="Worst">Worst</option>
                          </select>

                        </div>
                        
                        <br>

                        <div class="mt-2">
                            <button id="signup_btn" name="submit" type="submit" class="btn">Submit</button>

                        </div>

                        
                    </form>


                </div>
                <div class="form-img">
                    <img  src="images/bookimg.png">
                </div>
            </div>
        </div>




    </div>

</body>
</html>




<?php


include "connection.php";

if(isset($_POST['submit'])){
    
    $book_name = $_POST['book_name'];
    $author_name = $_POST['author_name'];
    $price = $_POST['price'];
    $purchase_date = $_POST['purchase_date'];
    $book_pic = $_FILES['book_pic'];
    $book_condition = $_POST['book_condition'];

    $filename = $book_pic['name'];
    $fileerror = $book_pic['error'];
    $filetmp = $book_pic['tmp_name'];

    $fileext = explode('.', $filename);
    $filecheck = strtolower(end($fileext));

    $fileextstored = array('png', 'jpg', 'jpeg');

    if(in_array($filecheck, $fileextstored )){

        $destinationfile = 'upload/'.$filename;
        
        move_uploaded_file($filetmp, $destinationfile);

        $current_session = $_SESSION['id'];

        $q = "INSERT INTO `book_store`(`seller_id`, `book_name`, `author_name`, `price`, `purchase_date`, `book_picture`, `book_condition`) VALUES ('$current_session','$book_name','$author_name','$price','$purchase_date','$destinationfile','$book_condition')";

        $book_uploaded =  mysqli_query($connection, $q);


        if($book_uploaded){
            ?>
            <script>
                alert("done");
            </script>
            <?php
        }

    }

    

    
    
    

}

?>


