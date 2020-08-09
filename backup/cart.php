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
                  <li class="nav-item active">
                      <a class="nav-link " href="./">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#"><i class="fas fa-sign-in-alt"></i> Login</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#Products">Products</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="./cart.php"><i class="fas fa-shopping-cart"></i> Cart</a>
                  </li>
              </ul>
          </div>
        </nav>
  </header>
  <!-- end #header -->

    <!-- start #main-site -->
        <main id="main-site">

            <!-- Shopping cart section  -->
                <section id="cart" class="py-3">
                    <div class="container-fluid w-75">
                        <h5 class="font-baloo font-size-20">Shopping Cart</h5>

                        <!--  shopping cart items   -->
                            <div class="row">
                                <div class="col-sm-9">
                                    <!-- cart item -->
                                        <div class="row border-top py-3 mt-3">
                                            <div class="col-sm-2">
                                                <img src="assets/products/1.png" style="height: 120px;" alt="cart1" class="img-fluid">
                                            </div>
                                            <div class="col-sm-8">
                                                <h5 class="font-baloo font-size-20">Samsung Galaxy 10</h5>
                                                <small>by Samsung</small>
                                                <!-- product rating -->
                                                <div class="d-flex">
                                                    <div class="rating text-warning font-size-12">
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="far fa-star"></i></span>
                                                      </div>
                                                      <a href="#" class="px-2 font-rale font-size-14">20,534 ratings</a>
                                                </div>
                                                <!--  !product rating-->

                                                <!-- product qty -->
                                                    <div class="qty d-flex pt-2">
                                                        <div class="d-flex font-rale w-25">
                                                            <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                                            <input type="text" data-id="pro1" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                                            <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                                        </div>
                                                        <button type="submit" class="btn font-baloo text-danger px-3 border-right">Delete</button>
                                                        <button type="submit" class="btn font-baloo text-danger">Save for Later</button>
                                                    </div>
                                                <!-- !product qty -->

                                            </div>

                                            <div class="col-sm-2 text-right">
                                                <div class="font-size-20 text-danger font-baloo">
                                                    $<span class="product_price">152</span>
                                                </div>
                                            </div>
                                        </div>
                                    <!-- !cart item -->
                                    <!-- cart item -->
                                    <div class="row border-top py-3 mt-3">
                                        <div class="col-sm-2">
                                            <img src="assets/products/2.png" style="height: 120px;" alt="cart1" class="img-fluid">
                                        </div>
                                        <div class="col-sm-8">
                                            <h5 class="font-baloo font-size-20">Samsung Galaxy 10</h5>
                                            <small>by Samsung</small>
                                            <!-- product rating -->
                                            <div class="d-flex">
                                                <div class="rating text-warning font-size-12">
                                                    <span><i class="fas fa-star"></i></span>
                                                    <span><i class="fas fa-star"></i></span>
                                                    <span><i class="fas fa-star"></i></span>
                                                    <span><i class="fas fa-star"></i></span>
                                                    <span><i class="far fa-star"></i></span>
                                                  </div>
                                                  <a href="#" class="px-2 font-rale font-size-14">20,534 ratings</a>
                                            </div>
                                            <!--  !product rating-->

                                            <!-- product qty -->
                                                <div class="qty d-flex pt-2">
                                                    <div class="d-flex font-rale w-25">
                                                        <button class="qty-up border bg-light" data-id="pro2"><i class="fas fa-angle-up"></i></button>
                                                        <input  type="text" data-id="pro2" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                                        <button data-id="pro2" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                                    
                                                    </div>
                                                    <button type="submit" class="btn font-baloo text-danger px-3 border-right">Delete</button>
                                                    <button type="submit" class="btn font-baloo text-danger">Save for Later</button>
                                                </div>
                                            <!-- !product qty -->

                                        </div>

                                        <div class="col-sm-2 text-right">
                                            <div class="font-size-20 text-danger font-baloo">
                                                $<span class="product_price">152</span>
                                            </div>
                                        </div>
                                    </div>
                                <!-- !cart item -->
                                </div>
                                <!-- subtotal section-->
                                <div class="col-sm-3">
                                    <div class="sub-total border text-center mt-2">
                                        <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i> Your order is eligible for FREE Delivery.</h6>
                                        <div class="border-top py-4">
                                            <h5 class="font-baloo font-size-20">Subtotal (2 item):&nbsp; <span class="text-danger">$<span class="text-danger" id="deal-price">152.00</span> </span> </h5>
                                            <button type="submit" class="btn btn-warning mt-3">Proceed to Buy</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- !subtotal section-->
                            </div>
                        <!--  !shopping cart items   -->
                    </div>
                </section>
            <!-- !Shopping cart section  -->

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

        </main>
    <!-- end #main-site -->

    <!-- start #footer -->
        <footer id="footer" class="bg-dark text-white py-5">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-12">
                <h4 class="font-rubik font-size-20">Mobile Shopee</h4>
                <p class="font-size-14 font-rale text-white-50">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus, deserunt.</p>
              </div>
              <div class="col-lg-4 col-12">
                <h4 class="font-rubik font-size-20">Newslatter</h4>
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
                <h4 class="font-rubik font-size-20">Information</h4>
                <div class="d-flex flex-column flex-wrap">
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">About Us</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Delivery Information</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Privacy Policy</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Terms & Conditions</a>
                </div>
              </div>
              <div class="col-lg-2 col-12">
                <h4 class="font-rubik font-size-20">Account</h4>
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
        <div class="copyright text-center bg-dark text-white py-2">
          <p class="font-rale font-size-14">&copy; Copyrights 2020. Desing By <a href="#" class="color-second">Daily Tuition</a></p>
        </div>
    <!-- end #footer -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

   <!--  slick plugin  -->
   <script type="text/javascript" src="slick-1.8.1/slick/slick.min.js"></script>
    <!--  isotope plugin cdn  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI=" crossorigin="anonymous"></script>

    <!-- Custom Javascript -->
    <script type="text/javascript">
        $(document).ready(function() {
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

            // product qty section
            let $qty_up = $(".qty .qty-up");
            let $qty_down = $(".qty .qty-down");
            let $deal_price = $("#deal-price");
            // let $input = $(".qty .qty_input");

                // click on qty up button
                $qty_up.click(function(e){
                    //alert($(this).data("id"));
                    let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
                    if($input.val() >= 1 && $input.val() <= 9){
                        $input.val(function(i, oldval){
                            return ++oldval;
                        });
                    }
                });
                // click on qty down button
                $qty_down.click(function(e){
                    //alert($(this).data("id"));
                    let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
                    if($input.val() > 1 && $input.val() <= 10){
                        $input.val(function(i, oldval){
                            return --oldval;
                        });
                    }
                });
            });

    </script>
</body>
</html>