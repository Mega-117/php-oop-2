<!-- spese di spedizione gratis 
(sconti)
-->
<?php
require __DIR__ . "/User.php";
class UserPrime extends User{
   /*  public $scount = 20;
    public $shippingcost = 0; */
    //public $userType = "prime";
    
    function __construct($_firstName, $_lastName){
        parent::__construct($_firstName, $_lastName);
        $this->setScount();
        $this->setShippingcost();
        
    }

    public function setScount(){
        $this -> scount = "50%";
    }
    public function setShippingcost(){
        $this -> shippingCost = "spedizioni gratis";
    }

    
}

