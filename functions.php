<?php
session_start();
// require MySQL Connection
require ("database/db.php");

// require Product 
require ('database/Product.php');

if(!isset($_SESSION['cart'])){
    $_SESSION['cart']=array();
}
 
// require Cart 
require ('database/Cart.php');



// Product object
//$product = new Product();
/*
$product_shuffle = $product->getData();

// Cart object
$Cart = new Cart($db );
*/
