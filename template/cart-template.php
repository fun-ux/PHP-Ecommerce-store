<?php 
// get product using item id
    //if (isset($item_id)){
        
        
        $getCart = $DB->prepare("SELECT * FROM cart");
        $getCart->execute();
        $GetCart = $getCart->fetchAll();
        $shop = array( 
                array( 
                    )
             );
        
        foreach($GetCart as $results => $val){ 
            $getprodcts = $DB->prepare("SELECT * FROM product WHERE item_id = :item_id");
            $getprodcts->execute(array(
                ':item_id' => $GetCart[$results]['item_id']
            ));
            $prdcts = $getprodcts->fetchAll();
            //echo($GetCart[$results]['item_id']. " ") ;
            //echo( $prdcts);

            $shop[$results]['item_id'] = $prdcts[0]['item_id'];
            $shop[$results]['item_brand'] = $prdcts[0]['item_brand'];
            $shop[$results]['item_name'] = $prdcts[0]['item_name'];
            $shop[$results]['item_price'] = $prdcts[0]['item_price'];
            $shop[$results]['item_image'] = $prdcts[0]['item_image'];

            //print_r( $prdcts);
            //echo $GetCart[0]['item_id'];
        }
        //print_r($shop);
        //echo $shop[1]['item_id'];
?>
<!-- Shopping cart section  -->
<section id="cart" class="py-3">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Shopping Cart</h5>

        <!--  shopping cart items   -->
            <div class="row">
                <div class="col-sm-9">
                    <!-- cart item -->
                    <?php
                    foreach($shop as $results => $val){ 
                    
                    ?>
                        <div class="row border-top py-3 mt-3">
                            <div class="col-sm-2">
                                <img src="<?php echo $shop[$results]["item_image"]; ?>" style="height: 120px;" alt="<?php echo $shop[$results]["item_name"]; ?>" class="img-fluid">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="font-baloo font-size-20"><?php echo $shop[$results]["item_name"]; ?></h5>
                                <small>by <?php echo $shop[$results]["item_brand"]; ?></small>
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
                                            <button class="qty-up border bg-light" data-id="<?php echo str_replace(" ","-",$shop[$results]["item_name"]); ?>"><i class="fas fa-angle-up"></i></button>
                                            <input type="text" data-id="<?php echo str_replace(" ","-",$shop[$results]["item_name"]); ?>" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                            <button data-id="<?php echo str_replace(" ","-",$shop[$results]["item_name"]); ?>" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                        </div>
                                        <button type="submit" class="btn font-baloo text-danger px-3 border-right">Delete</button>
                                        <button type="submit" class="btn font-baloo text-danger">Save for Later</button>
                                    </div>
                                <!-- !product qty -->

                            </div>

                            <div class="col-sm-2 text-right">
                                <div class="font-size-20 text-danger font-baloo">
                                    $<span class="product_price"><?php echo $shop[$results]["item_price"]; ?></span>
                                </div>
                            </div>
                        </div>
                    <!-- !cart item -->
                    <?php } ?>

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