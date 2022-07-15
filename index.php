<?php
require_once __DIR__."/products.php";
require_once __DIR__."/food.php";
require_once __DIR__."/user.php";
require_once __DIR__."/kennels.php";
require_once __DIR__."/cart.php";
require_once __DIR__."/games.php";
require_once __DIR__."/cardPayment.php";
require_once __DIR__."/customer.php";


$product1 = new Food("croccantini",10,"2022-7-29");
$product2 = new Food("Cibo in scatola gattini",16,"2021-1-02");
$card1= new Card(5342556693402197,2029);
$card2= new Card(5290110902572197,2026);
$kennel1 = new Kennels("Cuccia Grande",280,"120x60x120");
$kennel2 = new Kennels("Albero gatti",280,"180x30x80");
$game1 = new Game("osso finto",25,"Giochi per cani");
$game2 = new Game("Pupazzo",15,"Giochi per gatti");
$user1= new Customer("Felice", "Laterza","felice.laterza93@icloud.com", true); 
$user2= new Customer("Merì", "Aversa","meri_aversa@icloud.com", true); 

$user1->cart->addProduct([$product1,$product2]);
$user2->cart->addProduct([$product2,$kennel2,$game1]);
$user1->cart->getTotal($card1->getCardExpiringDate(),$user1->getSale());
/* $user2->cart->getTotal($card2->getCardExpiringDate(),$user2->getSale()); */
/* var_dump($card1);
var_dump($card2);
var_dump($product1);
var_dump($product2);
var_dump($kennel1);
var_dump($kennel2);
var_dump($game1);   
var_dump($game2);
var_dump($user1);
var_dump($user2); */

    /* foreach ($user1->cart->getProducts() as $product) {
        var_dump($product);
    }
 */
var_dump($user1->cart->getTotal($card1->getCardExpiringDate(),$user1->getSale()));

echo "---------------------------------------------------------------------";
echo "---------------------------------------------------------------------";
echo "---------------------------------------------------------------------";
var_dump($user2->cart->getProducts());
var_dump($user2->cart->getTotal($card2->getCardExpiringDate(),$user2->getSale()));


?>