<?php

//include "classes/User.php";
require "classes/UserPrime.php";
require "classes/ProductList.php";

$userList = [];


$user_1 = new user("Marco", "Morandi");
/* $user_1 -> setFistName("Marco");
$user_1 -> setLastName("Morandi"); */

$user_1 -> setFullName();
$user_1 -> setUserType("Normal");
$user_1 -> setAdress("Via Venezia 15 RM");
$user_1 -> addPaymentMethods("cash");
$user_1 -> addPaymentMethods("Visa");
$user_1 -> setPaymentMethodsPrimary("Visa");
//$user_1 -> addToCart($productList[0]["name"]);
$user_1 -> addToCart($productList[0]);
$user_1 -> addToCart($productList[1]);



$userList[] =  $user_1;


$user_2 = new UserPrime("Gino", "Perlasca");
/* $user_2 -> setFistName("Gino");
$user_2 -> setLastName("Perlasca"); */
$user_2 -> setFullName();
$user_2 -> setUserType("Prime");
$user_2 -> setAdress("Via Napoli 5 NA");
$user_2 -> addPaymentMethods("credit card");
$user_2 -> addPaymentMethods("Bit Coin");
$user_2 -> setPaymentMethodsPrimary("credit card");
//$user_2 -> addToCart($productList[3]["name"]);
$user_2 -> addToCart($productList[2]);
$user_2 -> addToCart($productList[3]);

$userList[] =  $user_2;


$user_3 = new user("Roberto", "Giraldoni");
/* $user_3 -> setFistName("Roberto");
$user_3 -> setLastName("Giraldoni"); */
$user_3 -> setFullName();
$user_3 -> setUserType("Normal");
$user_3 -> setAdress("Via Roma 10 RV");
$user_3 -> addPaymentMethods("paypal");
$user_3 -> addPaymentMethods("bancomat");
$user_3 -> setPaymentMethodsPrimary("bancomat");
//$user_3 -> addToCart($productList[2]["name"]);
$user_3 -> addToCart($productList[1]);
$user_3 -> addToCart($productList[0]);
$user_3 -> addToCart($productList[3]);
$user_3 -> addToCart($productList[2]);




$userList[] =  $user_3;



var_dump($userList);





foreach($userList as $key => $singleUser){
    //var_dump($singleUser);
    //echo "<h2>" . "Nome: " . $singleUser->getFirstName() . "</h2>";
    
    echo "<span>" . "<strong>" . "Nome utente: " . "</strong>" . $singleUser->getFullName() . "</span>" . "<br>";
    echo "<span>" . "<strong>" . "Indirizzo: " . "</strong>" . $singleUser->adress() . "</span>" . "<br>";
    echo "<span>" . "<strong>" . "Tipo utente: " . "</strong>" . $singleUser->getUserType() . "</span>" . "<br>";
    echo "<span>" . "<strong>" . "Pagamento default: " . "</strong>" .$singleUser->getPaymentMethodsPrimary() . "</span>" . "<br>";
    echo "<span>" . "<strong>" . "Sconto: " . "</strong>" .$singleUser->getScount() . "</span>" . "<br>";
    echo "<span>" . "<strong>" . "Costi spedizione: " . "</strong>" .$singleUser->getShippingCost() . "</span>" . "<br>";

    echo "<span>" .  "<strong>" . "Metodi di pagamento: " . "</strong>" . "</span>";
    foreach($singleUser->getPaymentMethods() as $singlePaymentMethod){
        
        echo "<ul>";
            echo "<li>" . $singlePaymentMethod . "</li>";
        echo "</ul>";
    }
    echo "<h3>" . "Carrello:" . "</h3>";
    echo "<ol>";
   
    foreach($singleUser->getCart() as $key=> $singlePaymentMethod){
        echo "<li>" . "Prodotto " . ($key + 1) . "</li>";
            echo "<ul>";
                echo "<li>" . "Nome prodotto: " . $singlePaymentMethod["name"] . "</li>" . "<br>";
                echo "<li>" . "Quantità: " . $singlePaymentMethod["quantity"] . "</li>" . "<br>";
                echo "<li>" . "Descrizione: " . $singlePaymentMethod["desc"] . "</li>" . "<br>";
                echo "<li>" . "Prezzo: " . $singlePaymentMethod["price"] . "</li>" . "<br> ";
            echo "</ul>";
    }
    echo "</ol>";
    
    echo "<hr>";
    //var_dump($key); 
    //var_dump($key ->firstName); 
    //var_dump( $value);
}
