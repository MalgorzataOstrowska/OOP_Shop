<?php


include_once 'library.php';


// Przykład 1
$prise = new ProductPrice(20);
$herbata = new Product(1, $prise,'herbata',new Quantity(5));

// Przykład 2
$czekolada = new Product(1, new ProductPrice(40),'czekolada',new Quantity(10));
echo '<br>Product Czekolada: <br>';
echo $czekolada -> getId() . ' ';
echo $czekolada -> getPrice() -> getPrice() . ' ';      // pierwszy fragment zwraca obiekt klasy Product 
                                                        // drugi zwraca atrybut z ProductPrise
echo $czekolada ->getName() . ' ';
echo $czekolada ->getValue()->getValue() . '<br>';

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
echo $cart ->getCustomer()->getFirstName() . '<br>';

$dziesiec_czekolad = new CartItem($czekolada, new Quantity(10));
echo '<br>$dziesiec_czekolad: <br>';
echo $dziesiec_czekolad ->getProduct()->getName() . ' ';
echo $dziesiec_czekolad ->getValue()->getValue() . '<br>';


$koszykGosi = new Cart($gosia);
echo '<br>$koszykGosi: <br>';
$koszykGosi->addCartItem($dziesiec_czekolad);
$koszykGosi->addCartItem($dziesiec_czekolad);

//echo ($koszykGosi->getCartItems());
var_dump($koszykGosi->getCartItems());
