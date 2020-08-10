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
                <form method="post">
                    <input type="hidden" name="item_id" value="<?php echo $result[$results]['item_id'] ?? '1'; ?>">
                    <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                    <?php
                    if ($array[$results] == "true"){
                        echo '<button type="submit" disabled class="btn btn-success font-size-12">In the Cart</button>';
                        
                    }else{
                        echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>';
                    }
                    ?>

                </form>
            </div>
            </div>
        </div>
        </div>
        <?php } ?>
        </div>
    </div>
</section>
<!-- end all products -->

