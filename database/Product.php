<?php

        
$statement = $DB->prepare("SELECT * FROM product");
$statement->execute();
$result = $statement->fetchAll();

$statement2 = $DB->prepare("SELECT * FROM cart");
$statement2->execute();
$result2 = $statement2->fetchAll();

$array = array();

foreach($result as $results => $val){
    
    $key = array_search($result2[$results]["item_id"], array_column($result, 'item_id')) ;
    if ($results != count($result2)){
        array_push($array,$result[$key]['item_id']);
    }else{
        break;
    }
    
}

