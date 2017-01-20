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
$connection->query("SELECT * FROM product");

//foreach ($connection->getLastResult() as $row) {
//    var_dump($row);
//}

$product = new ProductActiveRecord(
    new ProductPrice(20),
    "Kostka brukowa",
    new Quantity(25)
);

$product->save($connection);
$product->update($connection);
var_dump($product);
echo "ID:" . $product->getId();

