<?php


include_once 'library.php';


$czekolada = new Product(1, 2,'czekolada',5);
echo '<br>Product Czekolada: <br>';
echo $czekolada -> getId() . ' ';
echo $czekolada -> getPrice() . ' ';
echo $czekolada ->getName() . ' ';
echo $czekolada ->getQuantity() . '<br>';

$gosia = new Customer(1,'Malgorzata', 'Ostrowska');
echo '<br>Customer Gosia: <br>';
echo $gosia -> getId() . ' ';
echo $gosia -> getFirstName() . ' ';
echo $gosia -> getLastName() . '<br>';


$castomer1 = new Customer(1, 'Tomek', 'KKK');
echo '<br>Customer Tomek: <br>';
new Cart($castomer1);
echo $castomer1->getId() . ' ';
echo $castomer1->getFirstName() . ' ';
echo $castomer1->getLastName() . '<br>';

//new Cart('Test');  // mie może być string tylko obiekt klasy Customer inaczej błąd !!!!!!!!!

$cart = new Cart($castomer1);
echo '<br>First name from Cart($castomer1): <br>';
echo $cart ->getCustomer()->getFirstName();

