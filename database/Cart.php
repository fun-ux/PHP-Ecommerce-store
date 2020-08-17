<?php
function insertIntoCart($userid, $itemid, $DB){
    
    
    $stmt= $DB->prepare("INSERT INTO cart (user_id, item_id) VALUES (:user_id, :item_id)");
    $data = [
        'user_id' => $userid,
        'item_id' => $itemid
    ];
    $stmt->execute($data);
    
}

function addToCart($userid, $itemid, $DB){
    if (isset($userid) && isset($itemid)){
        

        // insert data into cart
        $result = insertIntoCart($userid, $itemid, $DB);
        if ($result){
            // Reload Page
            header("Location: ./cart");
        }
    }
}

// delete cart item using cart item id
function deleteCart($itemid, $DB){
    if($itemid != null){
        $result = $DB->prepare("DELETE FROM cart WHERE item_id = :item_id");
        $data = [
            'item_id' => $itemid
        ];
        $result->execute($data);

        if($result){
            header("Location:" . $_SERVER['PHP_SELF']);
        }
        return $result;
    }
}
?>