</main>    
<!-- end #main-site -->  

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
<!-- end #footer -->

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
                  slidesToScroll: 1,
                  dots: false
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