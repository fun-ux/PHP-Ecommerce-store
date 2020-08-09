<!-- all products -->
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
<!-- end all products -->

