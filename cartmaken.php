<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Shoppingcart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="motor, kleren, motorsport, custom">
    <meta name="description" content="Officiele motorcross sponsoring">
    <meta name="author" content="Luca">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="CSS/style55.css" />
    <link rel="stylesheet" type="text/css" href="CSS/style222.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>
 <body>
    <!-- Logo & cart link -->
    <div class="container-flude  main-container">
        <div class="store-header"> 
        <a class="brand" href="cartmaken.php"><img src="Images/motor.jpg" alt="" class="logo-image"></a>
        <a href="#" class="shopping-cart-btn btn btn-default btn-xl navbar-right hidden-xs hidden-sm"> <i class="glyphicon glyphicon-shopping-cart"></i></a>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="cartModal">
        <div class="modal-dialog">
          <div class="modal-content" id="cartContent">
            
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Navigatie scherm: Home, Login buttons -->
    <nav id="navbar-example" class="navbar navbar-default navbar-static" role="navigation">
        <ul class="nav navbar-nav">
          <li class="active" style="text-align: center;"><a href="cartmaken.php">Home</a></li>
          <li><a hredf="#" style="text-align: center;"><i class="glyphicon glyphicon-log-in"></i> Login</a></li>
        </ul> 
        
    </nav>
    <!-- Zoekfunctie -->
    <div class="custom-container main-container col-lg-12 col-md-12 col-sm-12">
      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
          <div id="sidebar" role="navigation">
       
            <div class="panel panel-default">
              <div class="panel-heading">Product zoeken</div>
                <div class="panel-body">
                  <form action="#" accept-charset="utf-8" class="form-horizontal" method="GET">
                  <div class="row input-search">
                    <div class="col-md-11">
                      <div class="input-group">
                        <input type="text" name="search_query" class="form-control col-lg-4" value="">
                        <span class="input-group-btn">
                        <button class="btn btn-default" type="submit">Search</button>
                        </span>
                      </div>
                    </div>
                  </div>
                  </form>
                </div>
            </div>
            <!-- Categories -->
            <div class="panel panel-default">
              <div class="panel-heading"> <h4>Categories</h4></div>
              <div class="list-group">
                <a class="list-group-item active" href="#">Alle Producten <i class="glyphicon glyphicon-arrow-right pull-right"></i></a>
                <a class="list-group-item " href="#">Kleren <i class="glyphicon glyphicon-arrow-right pull-right"></i></a>
                <a class="list-group-item " href="#">Design <i class="glyphicon glyphicon-arrow-right pull-right"></i></a>  
              </div>
            </div>
          </div>
        </div>
          <!-- Laat producten zien -->
          <div class="col-md-8 col-lg-9 col-sm-8 page-container col-xs-12">
            <div class="alert alert-info" style="text-align:center;">Welkom op onze website!</div>

            <h3 style="text-align: center;">Alle Producten</h3> <hr>
            <!-- Sorteerfunctie -->

            <!--<div class="btn-group navbar-right shortby">
              <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">
              Sort by: <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li><a class="sort_items" href="https://v1-demo.livelycart.com/index.php/product/category//?&sortBy=name&sort=desc">Name</a></li>
                <li><a class="sort_items" href="https://v1-demo.livelycart.com/index.php/product/category//?&sortBy=price&sort=desc">Price</a></li>
                <li><a class="sort_items" href="https://v1-demo.livelycart.com/index.php/product/category//?&sortBy=description&sort=desc">Description</a></li>
              </ul>
            </div>-->


            <div>
            <div class="custom-product row custom-btn-sort">
              
              <!-- Product Items -->
              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 thumb thumb-image-view">
                <div class="thumbnail text-center">
                  <div class="thumb-image">
                    <a title="Kleding stuk" class="show_details_link" href="#"><img src="Images/shirtje.jpg" class="img-responsive" alt=""></a>
                  </div>
                  <div class="caption"></div>
                  <h4 title="Monster Shirt">Monster shirt&#8230;</h4>
                  <h3 class="store-product-price">&#8364;15.00</h3>
                  <a title="Monster Shirt" href="#" class="btn btn-warning btn-sm show_details_link">Bekijk Details</a>
                </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 thumb thumb-image-view">
                <div class="thumbnail text-center">
                  <div class="thumb-image">
                    <a title="Kleding stuk" class="show_details_link" href="#"><img src="Images/shirtje.jpg" class="img-responsive" alt=""></a>
                  </div>
                  <div class="caption"></div>
                  <h4 title="Monster Shirt">Monster shirt&#8230;</h4>
                  <h3 class="store-product-price">&#8364;15.00</h3>
                  <a title="Monster Shirt" href="#" class="btn btn-warning btn-sm show_details_link">Bekijk Details</a>
                </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 thumb thumb-image-view">
                <div class="thumbnail text-center">
                  <div class="thumb-image">
                    <a title="Kleding stuk" class="show_details_link" href="#"><img src="Images/shirtje.jpg" class="img-responsive" alt=""></a>
                  </div>
                  <div class="caption"></div>
                  <h4 title="Monster Shirt">Monster shirt&#8230;</h4>
                  <h3 class="store-product-price">&#8364;15.00</h3>
                  <a title="Monster Shirt" href="#" class="btn btn-warning btn-sm show_details_link">Bekijk Details</a>
                </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 thumb thumb-image-view">
                <div class="thumbnail text-center">
                  <div class="thumb-image">
                    <a title="Kleding stuk" class="show_details_link" href="#"><img src="Images/shirtje.jpg" class="img-responsive" alt=""></a>
                  </div>
                  <div class="caption"></div>
                  <h4 title="Monster Shirt">Monster shirt&#8230;</h4>
                  <h3 class="store-product-price">&#8364;15.00</h3>
                  <a title="Monster Shirt" href="#" class="btn btn-warning btn-sm show_details_link">Bekijk Details</a>
                </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 thumb thumb-image-view">
                <div class="thumbnail text-center">
                  <div class="thumb-image">
                    <a title="Kleding stuk" class="show_details_link" href="#"><img src="Images/shirtje.jpg" class="img-responsive" alt=""></a>
                  </div>
                  <div class="caption"></div>
                  <h4 title="Monster Shirt">Monster shirt&#8230;</h4>
                  <h3 class="store-product-price">&#8364;15.00</h3>
                  <a title="Monster Shirt" href="#" class="btn btn-warning btn-sm show_details_link">Bekijk Details</a>
                </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 thumb thumb-image-view">
                <div class="thumbnail text-center">
                  <div class="thumb-image">
                    <a title="Kleding stuk" class="show_details_link" href="#"><img src="Images/shirtje.jpg" class="img-responsive" alt=""></a>
                  </div>
                  <div class="caption"></div>
                  <h4 title="Monster Shirt">Monster shirt&#8230;</h4>
                  <h3 class="store-product-price">&#8364;15.00</h3>
                  <a title="Monster Shirt" href="#" class="btn btn-warning btn-sm show_details_link">Bekijk Details</a>
                </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 thumb thumb-image-view">
                <div class="thumbnail text-center">
                  <div class="thumb-image">
                    <a title="Kleding stuk" class="show_details_link" href="#"><img src="Images/shirtje.jpg" class="img-responsive" alt=""></a>
                  </div>
                  <div class="caption"></div>
                  <h4 title="Monster Shirt">Monster shirt&#8230;</h4>
                  <h3 class="store-product-price">&#8364;15.00</h3>
                  <a title="Monster Shirt" href="#" class="btn btn-warning btn-sm show_details_link">Bekijk Details</a>
                </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 thumb thumb-image-view">
                <div class="thumbnail text-center">
                  <div class="thumb-image">
                    <a title="Kleding stuk" class="show_details_link" href="#"><img src="Images/shirtje.jpg" class="img-responsive" alt=""></a>
                  </div>
                  <div class="caption"></div>
                  <h4 title="Monster Shirt">Monster shirt&#8230;</h4>
                  <h3 class="store-product-price">&#8364;15.00</h3>
                  <a title="Monster Shirt" href="#" class="btn btn-warning btn-sm show_details_link">Bekijk Details</a>
                </div>
              </div>

            </div>

            <div class="row">

              <!-- Paginaties -->
              <div class="pull-center">
                 <div class="pagination">
                    <ul class="pagination">
                      <li class="active"> 
                        <a>1</a>
                      </li>
                      <li>
                        <a href="#?sortBy=&sort=ASC&amp;per_page=8" data-ci-pagination-page="2">2</a>
                      </li>
                      <li>
                        <a href="#?sortBy=&sort=ASC&amp;per_page=8" data-ci-pagination-page="3">3</a>
                      </li>
                      <li>
                        <a href="#?sortBy=&sort=ASC&amp;per_page=8" data-ci-pagination-page="2" rel="next">Next &raquo;</a>
                      </li>
                      <li>
                        <a href="#?sortBy=&sort=ASC&amp;per_page=8" data-ci-pagination-page="4">Last</a>
                      </li>
                    </ul>
                 </div>
              </div>
                 
            </div>
              <script>
                /*! Equal Heights */
              var currentTallest=0,currentRowStart=0,rowDivs=new Array(),$el,topPosition=0;$(".thumb-image-view").each(function(){$el=$(this);topPostion=$el.position().top;if(currentRowStart!=topPostion){for(currentDiv=0;currentDiv<rowDivs.length;currentDiv++){rowDivs[currentDiv].height(currentTallest)}rowDivs.length=0;currentRowStart=topPostion;currentTallest=$el.height();rowDivs.push($el)}else{rowDivs.push($el);currentTallest=(currentTallest<$el.height())?($el.height()):(currentTallest)}for(currentDiv=0;currentDiv<rowDivs.length;currentDiv++){rowDivs[currentDiv].height(currentTallest)}});
              </script>          
            </div>
          </div>
          </div>
        </div>
        <div id="footer">
          <div class="col-lg-12"><br>
            <p class="text-muted credit">&copy; 2019 Copyright  
              <small class="pull-right">Powered by Luca</a></small>
            </p>
          </div>
        </div>
      </div>
      
      <script href="JSfiles.js" type="text/javascript"></script>
      <!-- SCRIPTS -->
      <script src="https://v1-demo.livelycart.com/assets/bootstrap3/bootstrap-3.4.1/js/bootstrap.min.js?1552027855" type="text/javascript" charset="utf-8"></script>
      <script src="https://v1-demo.livelycart.com/assets/bootstrap3/js/custom.js?1552027855" type="text/javascript" charset="utf-8"></script>
      <script type="text/javascript">
        $(document).ready(function() {

         /*Ajax Product details in Modal*/
        
            $alert_container =  $('.alert_container');

            $('.show_details_link').on('click', function(e){
              $alert_container.fadeOut();
              e.preventDefault();
                  $ModelProductName = $('#cartContent');
                  $ModelProductData = $('#cartModal');
                  var toURL = $(this).attr('href');

               $ModelProductName.html('<div style="padding:10%; text-align:center;">  <img src="https://v1-demo.livelycart.com/assets/img/ajax-loader.gif"></br> Loading...</div>');
               $ModelProductData.modal('show');
              $.get(toURL, function(data, textStatus, xhr) {
                if(data.error){
                  $alert_container.html('<div class="alert alert-error"> <button type="button" class="close" data-dismiss="alert">&times;</button> <strong>Warning!</strong> '+ data.error +'</div>').fadeIn();
                  return false;
                }
                $ModelProductName.html(data);
              });
            });
        /*Ajax Product details in Modal End*/
        });
      </script>

      <script type="text/javascript">
        $(document).ready(function($) {
          $(window).on('resize', onResizeWindow);

          $('.warning-msg .alert').addClass('alert-warning');

          function onResizeWindow(){
            var modalModifiedStyle = '.modal-body{max-height:'+($(window).height() * 0.35)+'px;}';
            $('#modalModifiedStyle').html(modalModifiedStyle);
          }

          onResizeWindow();

          $('#shopping-cart-btn, .shopping-cart-btn').on('click', function(e){
            e.preventDefault();

            $('#cartModal').modal('show');

            var $this = $(this),
            $cartModal = $('#cartContent'),
            requestURL = $this.attr('href');
            $cartModal.html('<div style="padding:10%; text-align:center;">  <img src="https://v1-demo.livelycart.com/assets/img/ajax-loader.gif"></br> Loading...</div>');
            $.post(requestURL, function(data){
              $cartModal.html(data.page_data);
           },'JSON');
        });

      });
  </script>
 </body>
</html>
