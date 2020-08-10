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
    if ($result[$key]['item_id'] == $result[$results]['item_id']){
        array_push($array,'true');
    }else{
        $result[$key]['item_id'] = 0;
        array_push($array,'false');
        
    }
}
//echo($array[6]) ;