<!-- 
    nome
    cognome
    indirizzo
    metodi di pagamento
    tipo di utente (prime/normal)
 -->

<?php
include "classes/ProductList.php";
class User{
    protected $fullName = "";
    public $firstName = "";
    protected $lastName = "";
    protected $adress = "";
    protected $userType = "";
    protected $paymentMethods = [];
    protected $defaultPayment = "Pagamento non definito";

    public $cart = [];
    public $scount = 0;
    public $shippingcost = 10;
    
    function __construct($_firstName, $_lastName) {
              
        $this->setFistName($_firstName);
        $this->setLastName($_lastName);
      }
    
    
    /* funz set */


    public function setFullName(){
        $this->fullName =  $this->firstName . " " . $this->lastName ;
    }
    
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
    public function setPaymentMethodsPrimary($_paymentDefault){
        if(in_array($_paymentDefault, $this->paymentMethods)){
            $this->defaultPayment = $_paymentDefault;
        } else {
            $this->defaultPayment = "Metodo di pagamento non valido";
        }

    }
    public function addPaymentMethods($newPaymentMethods){
        $this->paymentMethods[] = $newPaymentMethods;
    }
    public function getCart(){
        return $this->cart;

    }

    public function addToCart($ProductToAdd){
        $this->cart[] = $ProductToAdd;
    }
    
    public function getFirstName(){
        return $this->firstName;
    }
    public function getFullName(){
        return $this->fullName;
    }
    public function getUserType(){
        return $this->userType;
    }
    public function getPaymentMethodsPrimary(){
        return $this->defaultPayment;
    }
    public function getPaymentMethods(){
        return $this->paymentMethods;
    }
   
    
}
/* foreach($productList as $key => $value){
    echo "<h2>" . $value["name"] . "</h2>";
    var_dump($value);
} */
/* var_dump($productList);

var_dump($productList[2]);
 */

