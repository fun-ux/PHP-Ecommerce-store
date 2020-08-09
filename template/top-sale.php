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