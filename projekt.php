<?php


include_once 'library.php';


$czekolada = new Product(1, 2,'czekolada',5);
echo $czekolada -> getId() . ' ';
echo $czekolada -> getPrice() . ' ';
echo $czekolada ->getName() . ' ';
echo $czekolada ->getQuantity() . '<br>';

$gosia = new Customer(1,'Malgorzata', 'Ostrowska');
echo $gosia -> getId() . ' ';
echo $gosia -> getFirstName() . ' ';
echo $gosia -> getLastName() . '<br>';;