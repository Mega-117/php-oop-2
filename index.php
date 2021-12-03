<?php

include "classes/User.php";
include "classes/UserPrime.php";
include "classes/Product.php";

$userList = [];


$user_1 = new user();
$user_1 -> setFistName("Marco");
$user_1 -> setLastName("Morandi");
$user_1 -> setAdress("Via Venezia 15 RM");

$userList[] =  $user_1;


$user_2 = new user();
$user_2 -> setFistName("Gino");
$user_2 -> setLastName("Perlasca");
$user_2 -> setAdress("Via Napoli 5 NA");

$userList[] =  $user_2;


$user_3 = new user();
$user_3 -> setFistName("Roberto");
$user_3 -> setLastName("Giraldoni");
$user_3 -> setAdress("Via Roma 10 RV");

$userList[] =  $user_3;


var_dump($userList);