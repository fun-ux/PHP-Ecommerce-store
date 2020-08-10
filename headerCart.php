<?php
    // require functions.php file
    require ('functions.php');
    $statement = $DB->prepare("SELECT * FROM product");
    $statement->execute();
    $result = $statement->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Shop</title>
    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css" type="text/css">

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="slick-1.8.1/slick/slick-theme.css">
    <link rel="stylesheet" href="slick-1.8.1/slick/slick.css">

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!--Jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style2.css" type="text/css">
    
    <style>
        .btn.font-baloo.text-danger.px-3.border-right {
            margin-left: 50px;
        }
    </style>
</head>
<body>
  <!-- start #header -->
  <header id="header">
    <!--logo display-->
    <div class="section-1-container section-container">
        <div id="head1">
            <div class="store-header col-10 offset-1 col-lg-8 offset-lg-2 div-wrapper d-flex justify-content-center align-items-center">
 
                <a class="div-to-align" href="./"> 
                    <img src="Images/compio.png" alt="" class="logo-image ">
                </a>
 
            </div>
        </div>

        <!--navigatie-->
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
          <button class="navbar-toggler w-100 " type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav mx-auto my-2 order-0 order-md-1 position-relative">
                  <li class="nav-item ">
                      <a class="nav-link " href="./">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#"><i class="fas fa-sign-in-alt"></i> Login</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#Products">Products</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link active" href="./cart.php"><i class="fas fa-shopping-cart"></i> Cart</a>
                  </li>
              </ul>
          </div>
        </nav>
  </header>
  <!-- end #header -->

  <!-- start #main-site -->
  <main id="main-site">