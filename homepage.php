<?php

session_start();

if(!isset($_SESSION['id'])){
    header(`location:homepage.php`);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OLD BOOKS</title>
    <!-- font-awsome-cnd -->
    <script src="https://kit.fontawesome.com/2b764a02eb.js" crossorigin="anonymous"></script>
        <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <!--google font-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Reggae+One&display=swap" rel="stylesheet">
        <!--css files-->
    <link rel="stylesheet" href="css/homepage.css">
    <link rel="stylesheet" href="css/third-section.css">
    <link rel="stylesheet" href="css/fifth-section.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/sixth-section.css">
    <link rel="stylesheet" href="css/book-store.css">
    


    <!-- animate-cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>
<body style="overflow-x : hidden">

    <!------------------------------------------ nav bar---------------------------------------->
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
                    <a class="aboutus_btn" href="regis.php"><button class="signup_btn mx-2"><i class="fas fa-user-plus"></i><b>Sign Up</b></button></a>
                    <a class="dashboard_btn" href="login.php"><button class="login_btn mx-2"><i class="fas fa-sign-in-alt"></i><b>Log In</b></button></a>
                    <a class="logout_btn" href="cart.php"><button id="cart_btn" class="cart_btn mx-2"><i class="fas fa-shopping-cart"></i><b>Cart</b></button></a>
                </ul>
            </div>
        </div>
    </nav>
    <!------------------------------------------ nav bar ends here------------------------------>
    <!--------------------------------------second section start here---------------------------->

    <div id="second-section" class="second-section pt-4 pb-4">
        <div class="container">
            <div class="row  d-flex justify-content-center">
                <div class="col-lg-5 p-3 pb-4 box1 d-flex  justify-content-center align-items-center">
                    <img  src="images/book5.jpg" height="500rem" alt="">
                </div>
                <div class="col-lg-5 d-flex box2 flex-column justify-content-center align-items-start">
                    <p class="fs-4 m-1 text-muted mb-0">YOU CAN</p>
                    <h1> <span id="heading"></span> OLD BOOKS </h1>
                    <p class="ms-2">E-commerce in India has changed the buying habits of customers - With online Selling buying books has become so easy the books are now one of top selling catrggoties in E-commence. If you are a books seller, here is your chance to read out of crower of customers across India</p>

                    <button class="btn mt-2">LEARN MORE</button>
                </div>
            </div>
        </div>
    </div>
    <!--------------------------------------second section ends here--------------------------->
    <!------------------------------ third-section-start-here -------------------------------->
    <div id="third_section" class="third_section m-2">
        <div id="inner_third_section" class="inner_third_section container pt-4 pb-4">
            <div class="row d-flex  justify-content-center align-items-center">
                <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center">
                    <div class="box1 m-3">
                        <img class="img" src="images/book.svg" alt="book">
                    </div>
                    <div class="box2 text-center">
                        <h2 class=""><i class="fas fa-check-circle circle1"></i> Quality Books</h2>
                        <p  class="text-muted  ps-3 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.  hey i am here i am saurabh kumar and you know me</p>
                    </div>
                </div>
                <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center">
                    <div class="box1 m-3">
                        <img class="img" src="images/shield.svg" alt="sheild">
                    </div>
                    <div class="box2 text-center">
                        <h2><i class="fas fa-check-circle circle2"></i> Fully Secure</h2>
                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center">
                    <div class="box1 m-3">
                        <img class="img" src="images/price-tag.svg" alt="price">
                    </div>
                    <div class="box2 text-center">
                        <h2><i class="fas fa-check-circle circle3 "></i> Best Deals</h2>
                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. hey i am saurabh kumar full stack web developer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-------------------- third-section-ends-here ----------------------->
    <!-- bookstore-section-start-here -->


    <div id="book-store" class="pt-4 pb-4">
    <section>
    <div class="col1">
        <div class="card m-4 border-0">
            <img src="images/book1.jpg" height="100%" alt="book" class="card-img-top" />
            <div class="card-body">
                <h3 class="card-title">Let us C, by  </h3>
                <h3 class="card-sub-title">Author Name</h3>
                <p class="card-text"><i  class="mx-1 fas fa-rupee-sign"></i>50</p>
                <div class="btn">
                  <button href="buybook.php">BUY Now</button>
               </div>
            </div>
        </div>
        <div class="card m-4 border-0">
            <img src="images/book2.jpg" alt="book" class="card-img-top" />
            <div class="card-body">
                <h3 class="card-title">Book Name</h3>
                <h3 class="card-sub-title">Author Name</h3>

                <p class="card-text"><i  class="mx-1 fas fa-rupee-sign"></i>500</p>
                <div class="btn">
                  <button>BUY Now</button>
               </div>
            </div>
        </div>
        <div class="card m-4 border-0">
            <img src="images/book3.jpg" alt="book" class="card-img-top" />
            <div class="card-body">
                <h3 class="card-title">Book Name</h3>
                <h3 class="card-sub-title">Author Name</h3>
                <p class="card-text"><i  class="mx-1 fas fa-rupee-sign"></i>500</p>
                <div class="btn">
                  <button>BUY Now</button>
               </div>
            </div>
        </div>
             <div class="card m-4 border-0">
            <img src="images/book4.jpg" alt="book" class="card-img-top" />
            <div class="card-body">
                <h3 class="card-title">Book Name</h3>
                <h3 class="card-sub-title">Author Name</h3>
                <p class="card-text"><i  class="mx-1 fas fa-rupee-sign"></i>500</p>
                <div class="btn">
                  <button>BUY Now</button>
               </div>
            </div>
        </div>


        </div>
         <div class="col2">
         <div class="card m-4 border-0">
            <img src="images/book2.jpg" alt="book" class="card-img-top" />
            <div class="card-body">
                <h3 class="card-title">Book Name</h3>
                <h3 class="card-sub-title">Author Name</h3>
                <p class="card-text"><i  class="mx-1 fas fa-rupee-sign"></i>500</p>
                <div class="btn">
                  <button>BUY Now</button>
               </div>
            </div>
        </div>
         <div class="card m-4 border-0">
            <img src="images/book4.jpg" alt="book" class="card-img-top" />
            <div class="card-body">
                <h3 class="card-title">Book Name</h3>
                <h3 class="card-sub-title">Author Name</h3>
                <p class="card-text"><i  class="mx-1 fas fa-rupee-sign"></i>500</p>
                <div class="btn">
                  <button>BUY Now</button>
               </div>
            </div>
        </div>
        <div class="card m-4 border-0">
            <img src="images/book1.jpg" alt="book" class="card-img-top" />
            <div class="card-body">
                <h3 class="card-title">Book Name</h3>
                <h3 class="card-sub-title">Author Name</h3>
                <p class="card-text"><i  class="mx-1 fas fa-rupee-sign"></i>500</p>
                <div class="btn">
                  <button>BUY Now</button>
               </div>
            </div>
        </div>
        <div class="card m-4 border-0">
            <img src="images/book3.jpg" alt="book" class="card-img-top" />
            <div class="card-body">
                <h3 class="card-title">Book Name</h3>
                <h3 class="card-sub-title">Author Name</h3>
                <p class="card-text"><i  class="mx-1 fas fa-rupee-sign"></i>500</p>
                <div class="btn">
                  <button>BUY Now</button>
               </div>
            </div>
        </div>
      </div>


          <div class="col3">
          <div class="card m-4 border-0">
            <img src="images/book3.jpg" alt="book" class="card-img-top" />
            <div class="card-body">
                <h3 class="card-title">Book Name</h3>
                <h3 class="card-sub-title">Author Name</h3>
                <p class="card-text"><i  class="mx-1 fas fa-rupee-sign"></i>500</p>
                <div class="btn">
                  <button>BUY Now</button>
               </div>

            </div>
        </div>
           <div class="card m-4 border-0">
            <img src="images/book2.jpg" alt="book" class="card-img-top" />
            <div class="card-body">
                <h3 class="card-title">Book Name</h3>
                <h3 class="card-sub-title">Author Name</h3>
                <p class="card-text"><i  class="mx-1 fas fa-rupee-sign"></i>500</p>
                <div class="btn">
                  <button>BUY Now</button>
               </div>
            </div>
        </div><div class="card m-4 border-0">
            <img src="images/book4.jpg" alt="book" class="card-img-top" />
            <div class="card-body">
                <h3 class="card-title">Book Name</h3>
                <h3 class="card-sub-title">Author Name</h3>
                <p class="card-text"><i  class="mx-1 fas fa-rupee-sign"></i>500</p>
                <div class="btn">
                  <button>BUY Now</button>
               </div>
            </div>
        </div><div class="card m-4 border-0">
            <img src="images/book1.jpg" alt="book" class="card-img-top" />
            <div class="card-body">
                <h3 class="card-title">Book Name</h3>
                <h3 class="card-sub-title">Author Name</h3>
                <p class="card-text"><i  class="mx-1 fas fa-rupee-sign"></i>500</p>
                <div class="btn">
                  <button>BUY Now</button>
               </div>
            </div>
        </div>
     </div>


        <div class="col4">
          <div class="card m-4 border-0">
            <img src="images/book4.jpg" alt="book" class="card-img-top" />
            <div class="card-body">
                <h3 class="card-title">Book Name</h3>
                <h3 class="card-sub-title">Author Name</h3>
                <p class="card-text"><i  class="mx-1 fas fa-rupee-sign"></i>500</p>
                <div class="btn">
                  <button>BUY Now</button>
               </div>
            </div>
        </div>
           <div class="card m-4 border-0">
            <img src="images/book1.jpg" alt="book" class="card-img-top" />
            <div class="card-body">
                <h3 class="card-title">Book Name</h3>
                <h3 class="card-sub-title">Author Name</h3>
                <p class="card-text"><i  class="mx-1 fas fa-rupee-sign"></i>500</p>
                <div class="btn">
                  <button>BUY Now</button>
               </div>
            </div>
        </div><div class="card m-4 border-0">
            <img src="images/book2.jpg" alt="book" class="card-img-top" />
            <div class="card-body">
                <h3 class="card-title">Book Name</h3>
                <h3 class="card-sub-title">Author Name</h3>
                <p class="card-text"><i  class="mx-1 fas fa-rupee-sign"></i>500</p>
                <div class="btn">
                  <button>BUY Now</button>
               </div>
            </div>
        </div><div class="card m-4 border-0">
            <img src="images/book3.jpg" alt="book" class="card-img-top" />
            <div class="card-body">
                <h3 class="card-title">Book Name</h3>
                <h3 class="card-sub-title">Author Name</h3>
                <p class="card-text"><i  class="mx-1 fas fa-rupee-sign"></i>500</p>
                <div class="btn">
                  <button>BUY Now</button>
               </div>
            </div>
        </div>
</div>
    </section>
</div>




    <!-- bookstore-section-ends-here -->
    <!-------------------- fifth-section-starts-here ---------------->
    

    <div id="happy-coustmer" class="text-center display-4 mt-5 mb-4"> <b> HAPPY COUSTMER </b></div>
    <div  id="fifth-section">
        <div  class="container d-flex justify-content-between align-items-center">
            <div class="card" >
                <div class="imgBx">
                    <img src="images/women.jpeg">
                </div>
                <div class="content">
                    <h1> <b>Dummy 1</b></h1>
                    <div class="start"> <p><i class="fas fa-star"></i>  <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star-half-alt"></i> </p></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt eaque eos distinctio recusandae
                        saepe unde, debitis, iste illo minima natus est c
                        dolores voluptatum.</p>
    
                </div>
            </div>
            <div class="card">
                <div class="imgBx">
                    <img src="images/JavaScript-logo.png">
                </div>
                <div class="content">
                    <h1> <b> Javascript </b></h1>
                    <div class="start"> <p><i class="fas fa-star"></i>  <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> </p></div>
                    
    
                   
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt eaque eos distinctio recusandae
                        saepe unde, debitis, iste illo minima natus est c
                        dolores voluptatum.</p>
    
                        
    
                </div>
            </div>
            <div class="card">
                <div class="imgBx">
                    <img src="images/women2.jpeg">
                </div>
                <div class="content">
                    <h1> <b> Dummy 2</b></h1>
                    <div class="start"> <p><i class="fas fa-star"></i>  <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star-half-alt"></i> </p></div>
                    
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt eaque eos distinctio recusandae
                        saepe unde, debitis, iste illo minima natus est c
                        dolores voluptatum.</p>
    
                </div>
            </div>
        </div>
    
    </div>


    <!-------------------- fifth-section-ends-here ----------------->
    <!---------------------- sixth-section-start-here -------------->
    <div id="sixth-section" class="sixth-section m-2">
        <div id="inner_sixth_section" class="inner_sixth_section container pt-4 pb-4 text-center">
            <div class="row g-2">
                <div class="col-lg-3 d-flex flex-column justify-content-center align-items-center ">
                    <div class="box1 m-3">
                        <img class="img" src="images/happy-customer.svg" alt="book">
                    </div>
                    <div class="box2  text-center">
                        <h2 class="counter">100</h2>
                        <p class="text-muted ">HAPPY COUSTOMER</p>
                    </div>
                </div>
                <div class="col-lg-3  d-flex flex-column justify-content-center align-items-center">
                    <div class="box1 m-3">
                        <img class="img" src="images/stackofbook.svg" alt="stackofbook">
                    </div>
                    <div class="box2  text-center">
                        <h2 class="counter">1000</h2>
                        <p class="text-muted">BOOK COLLECTION</p>
                    </div>
                </div>
                <div class="col-lg-3  d-flex flex-column justify-content-center align-items-center">
                    <div class="box1 m-3">
                        <img class="img" src="images/yearofexc.png" alt="yearofexc">
                    </div>
                    <div class="box2 text-center">
                        <h2 class="counter">15</h2>
                        <p class="text-muted">YEARS OF EXCELLENCE</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!---------------------- sixth-section-ends-here ----------------->
    <!-------------------footer starts here------------------->
    <body>
        <footer id="footer" class="footer">
            <div class="line"></div>
            <div class="middle_footer  d-flex justify-content-center align-items-center">
                <div class="container inner_middle_footer pt-5 pb-4 row d-flex justify-content-center align-items-start">
                    <div class="box1 box col-lg-3 ">
                        <div class="mb-3">
                            <img src="images/bookloft.png" width="200rem" alt="">
                            <p class="text-white">I keep my old books in the loft.</p>
                        </div>
                        <div  class="pe-2 mb-3">
                            <h3 ">About Us</h3>
                            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div>
                            <h3 >Contact Us</h3>
                            <p class="text-white"><i class="fas me-2 fa-phone-alt"></i>+91-999999999</p>
                            <p class="text-white"><i class="fas me-2 fa-envelope"></i>bookloft2021@gmail.com</p>
                        </div>
                    </div>
                    <div class="box2 box col-lg-3 text-white">
                        <h3>Information</h3>
                        <a  href="aboutus.html" style="text-decoration: none; color:white;" ><p >About Us</p></a>
                        <p>More Search</p>
                        <p>Blog</p>
                        <p>Testimonials</p>
                        <p>Events</p>
                    </div>
                    <div class="box3 box col-lg-3 text-white">
                        <h3>Helpfull books</h3>
                        <p classt="text-white">About Us</p>
                        <p class="text-white"> More Search</p>
                        <p>Blog</p>
                        <p>Testimonials</p>
                        <p>Events</p>
                    </div>
                    <div class="box4 box col-lg-3 text-white">
                        <h3>Suscribe More Info</h3>
                        <img style="border-radius:70%" class="mb-3" width="50%" src="images/bookloft.jpeg" alt="bookloft"> <br>
                        <button class="footer_btn">Suscribe</button>
                    </div>
                    
                </div>
            </div>
            <div class="upper_footer text-center">
                <a href=""><i class="fab fa-facebook"></i></a>
                <a href=""><i class="fab fa-instagram-square"></i></a>
                <a href=""><i class="fab fa-twitter-square"></i></a>
                <a href=""><i class="fab fa-linkedin"></i></a>
            </div>

            
            <div class="lower_footer text-center p-1">
                2021 &copy; Copyright All Rights Reserved
            </div>
        </footer>
    <!-------------------footer ends here--------------------->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <!-- <script src="jquery.counterup.min.js"></script> -->
        <script src="https://github.com/ciromattia/jquery.counterup"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

        <script src="js/sixth-section.js"></script>
    <script src="js/homepage.js"></script>
</body>

</html>


<?php
if(isset($_SESSION['id'])){
    ?>
    <script>
        document.querySelector(".signup_btn").innerHTML = `<i class="fas fa-info-circle"></i><b>AboutUs</b>`;
        document.querySelector(".login_btn").innerHTML = `<i class="fas fa-tachometer-alt"></i><b>dashboard</b>`;
        document.querySelector(".cart_btn").innerHTML = `<i class="fas fa-sign-out-alt"></i><b>LOGOUT</b>`;
        
        document.querySelector(".aboutus_btn").setAttribute("href", "aboutus.html");
        document.querySelector(".dashboard_btn").setAttribute("href", "dashbord.php");
        document.querySelector(".logout_btn").setAttribute("href", "logout.php");

    </script>
    <?php
}
?>