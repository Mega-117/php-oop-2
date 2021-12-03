<!-- 
    nome
    cognome
    indirizzo
    metodi di pagamento
    tipo di utente (prime/normal)
 -->

<?php

class User{
    public $firstName = "";
    public $lastName = "";
    public $adress = "";
    public $userType = "normal";
    public $paymentMethods = [];
    
    public function setFistName($newName){
    $this->firstName = $newName;
    }
    public function setLastName($newlastName){
        $this->lastName = $newlastName;
    }
    public function setAdress($newAdress){
        $this->adress = $newAdress;
    }
    public function setUserType($newUserType){
        $this->userType = $newUserType;
    }
    public function setPaymentMethods($newPaymentMethods){
        $this->paymentMethods = $newPaymentMethods;
    }

}