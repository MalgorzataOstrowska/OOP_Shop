<?php


include_once 'library.php';

    $mysql = new mysqli(
        'localhost',
        'root',
        'coderslab',
//        'exercises_db' 
        'baza_tomka'
    );
    
$connection = new Connection($mysql);
//$connection->query("SELECT * FROM product");
//
////foreach ($connection->getLastResult() as $row) {
////    var_dump($row);
////}
//
//$product = new ProductActiveRecord(
//    new ProductPrice(20),
//    "Kostka brukowa",
//    new Quantity(25)
//);
//
//$product->save($connection);
//var_dump($product);
//$product->setPrice(new ProductPrice(999));
//$product->update($connection);
//var_dump($product);
//echo "ID:" . $product->getId();

//$product = ProductActiveRecord::load($connection, 18);
//
//var_dump($product);

$product = ProductActiveRecord::delete($connection, 30);

var_dump($product);
