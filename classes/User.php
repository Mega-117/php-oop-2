<!-- 
    nome
    cognome
    indirizzo
    metodi di pagamento
    tipo di utente (prime/normal)
 -->

<?php
include "classes/ProductList.php";
require_once __DIR__ . "/../traits/TextFormatter.php";
class User{
    protected $fullName = "";
    public $firstName = "";
    protected $lastName = "";
    protected $adress = "";
    protected $userType = "Normal";
    protected $paymentMethods = [];
    protected $defaultPayment = "Pagamento non definito";

    public $cart = [];
    public $scount = "0%";
    public $shippingCost = "10 Euro";
    public $pippo = "pippo";


    use Formatter;
    
    function __construct($_firstName, $_lastName) {
        try{
            $this->setFistName($_firstName);
        } catch (Exception $e){
            echo "Errore: " . $e->getMessage();
        }
        try{
            $this->setLastName($_lastName);
        } catch (Exception $e){
            echo "Errore: " . $e->getMessage();
        }
      }
    
    
    /* funz set */


    public function setFullName(){
        $this->fullName =  $this->firstName . " " . $this->lastName ;
    }
    
    public function setFistName($newName){
        if(strlen($newName)<3){
            throw new Exception("Nome troppo corto");
        }
        else if(strlen($newName)>10){
            throw new Exception("Nome troppo lungo");
        } else {
            $this->firstName = $this->uperCaseFirst($newName);
        }
    }
    public function setLastName($newlastName){
        $this->lastName = $this->uperCaseFirst($newlastName);
        if(strlen($newlastName)<3){
            throw new Exception("Cognome troppo corto");
        }
        if(strlen($newlastName)>10){
            throw new Exception("Cognome troppo lungo");
        }
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
    
    public function addToCart($ProductToAdd){
        $this->cart[] = $ProductToAdd;
    }
    
    public function getFirstName(){
        return $this->firstName;
    }
    public function getFullName(){
        return $this->fullName;
    }
    public function adress(){
        return $this->adress;
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
    public function getPippo(){
        return $this->pippo;
    }
    public function getCart(){
        return $this->cart;
    }
    public function getScount(){
        return $this->scount;
    }
    public function getShippingCost(){
        return $this->shippingCost;
    }
   
    
}
/* foreach($productList as $key => $value){
    echo "<h2>" . $value["name"] . "</h2>";
    var_dump($value);
} */
/* var_dump($productList);

var_dump($productList[2]);
 */
