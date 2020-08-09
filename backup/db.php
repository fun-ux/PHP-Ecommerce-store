<?php
try {
$DB = new PDO("mysql:host=localhost;dbname=shopee", 'root', '');

if($DB){
    //echo "Database connection successfull.";
}

} catch (Exception $ex) {
echo $ex->getMessage();
}

?>