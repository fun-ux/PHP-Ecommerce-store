<?php
  include "db.php";
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
    
</head>
<body>
    <!--logo display-->
    <div class="section-1-container section-container">
        <div id="head1">
            <div class="store-header col-10 offset-1 col-lg-8 offset-lg-2 div-wrapper d-flex justify-content-center align-items-center">
 
                <a class="div-to-align" href="cartmaken.php"> 
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
                    <li class="nav-item active">
                        <a class="nav-link " href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-sign-in-alt"></i> Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Products">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i> Cart</a>
                    </li>
                </ul>
            </div>
        </nav>
        
        <div class="your-class">
            <img src="assets/Banner1.png">
            <img src="assets/Banner2.png">
        </div>
        <section id="top-sale">
        <div class="container py-5">
          <h4 class="font-rubik font-size-20">Top Sale</h4>
              <hr>
          <div class="multiple-items">
              <?php
                  foreach($result as $results => $val){ 
                  
                ?>
                  <!-- Product Items -->
                  <div class="item py-2">
                      <div class="product font-rale">
                        <a href="#"><img src="<?php echo $result[$results]["item_image"]; ?>" alt="<?php echo $result[$results]["item_name"]; ?>" class="img-fluid"></a>
                        <div class="text-center">
                          <h6><?php echo $result[$results]["item_name"]; ?></h6>
                          <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                          </div>
                          <div class="price py-2">
                            <span>$<?php echo $result[$results]["item_price"]; ?></span>
                          </div>
                          <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                      </div>
                    </div>
                <?php } ?>
          </div>
        </div>
        </section>

        <!-- Special Price -->
        <section id="special-price">
            <div class="container">
              <h4 class="font-rubik font-size-20" >All Products</h4>
              <div id="filters" class="button-group text-right font-baloo font-size-16">
                <button class="btn is-checked" data-filter="*">All Brand</button>
                <button class="btn" data-filter=".Apple">Apple</button>
                <button class="btn" data-filter=".Samsung">Samsung</button>
                <button class="btn" data-filter=".Redmi">Redmi</button>
              </div>

              <div class="grid">
              <?php
                  foreach($result as $results => $val){ 
              ?>
                <div class="grid-item <?php echo $result[$results]["item_brand"]; ?> border" >
                 <div class="item py-2" style="width: 200px;">
                  <div class="product font-rale">
                    <a href="#"><img src="<?php echo $result[$results]["item_image"]; ?>" alt="<?php echo $result[$results]["item_name"]; ?>" class="img-fluid"></a>
                    <div class="text-center">
                      <h6><?php echo $result[$results]["item_name"]; ?></h6>
                      <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                      </div>
                      <div class="price py-2">
                        <span>$<?php echo $result[$results]["item_price"]; ?></span>
                      </div>
                      <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                    </div>
                  </div>
                </div>
                </div>
                <?php } ?>
              </div>
            </div>
        </section>

        <!-- start #footer -->
        <footer id="footer" class="bg-dark text-white py-5">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-12">
              <h4 class="font-rubik text-left font-size-20">Company Name</h4>
                <p class="font-size-14 font-rale text-white-50">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus, deserunt.</p>
              </div>
              <div class="col-lg-4 col-12">
                <h4 class="font-rubik text-left font-size-20">Newsletter</h4>
                <form class="form-row">
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Email *">
                  </div>
                  <div class="col">
                    <button type="submit" class="btn btn-primary mb-2">Subscribe</button>
                  </div>
                </form>
              </div>
              <div class="col-lg-2 col-12">
                <h4 class="font-rubik text-left font-size-20">Information</h4>
                <div class="d-flex flex-column flex-wrap">
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">About Us</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Delivery Information</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Privacy Policy</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Terms & Conditions</a>
                </div>
              </div>
              <div class="col-lg-2 col-12">
                <h4 class="font-rubik text-left font-size-20">Account</h4>
                <div class="d-flex flex-column flex-wrap">
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">My Account</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Order History</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Wish List</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Newslatters</a>
                </div>
              </div>
            </div>
          </div>
        </footer>
        

        
    </div>
    <!--  jquery & bootstrap  -->                
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!--  slick plugin  -->
    <script type="text/javascript" src="slick-1.8.1/slick/slick.min.js"></script>
     <!--  isotope plugin cdn  -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI=" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function() {

           // isotope filter
            var $grid = $(".grid").isotope({
                itemSelector : '.grid-item',
                layoutMode : 'fitRows'
            });
            $(".button-group").on("click", "button", function(){
              var filterValue = $(this).attr('data-filter');
              $grid.isotope({ filter: filterValue});
          })

          $('.your-class').slick({
            autoplay: true,
            arrows: false,
            
          });

          
            $('.multiple-items').slick({
                dots: true,
                infinite: true,
                autoplay: true,
                slidesToShow: 4,
                slidesToScroll: 4,
                responsive: [
                  {
                    breakpoint: 1024,
                    settings: {
                      slidesToShow: 3,
                      slidesToScroll: 3,
                      infinite: true,
                      dots: true
                    }
                  },
                  {
                    breakpoint: 600,
                    settings: {
                      slidesToShow: 2,
                      slidesToScroll: 2
                    }
                  },
                  {
                    breakpoint: 480,
                    settings: {
                      slidesToShow: 1,
                      slidesToScroll: 1
                    }
                  },
                  {
                    breakpoint: 420,
                    settings: {
                      slidesToShow: 1,
                      slidesToScroll: 1,
                      dots: false
                    }
                  }
                ]
            });
        });

    </script>

</body>
</html>