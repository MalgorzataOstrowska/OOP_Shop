<?php


include_once 'library.php';

    $mysql = new mysqli(
        'localhost',
        'root',
        'coderslab',
        'exercises_db' 
    );
    
$connection = new Connection($mysql);
$connection->query("SELECT * FROM product");

//foreach ($connection->getLastResult() as $row) {
//    var_dump($row);
//}

$product = new ProductActiveRecord(
    1,
    new ProductPrice(20),
    "Kostka brukowa",
    new Quantity(25)
);

$product->save($connection);


