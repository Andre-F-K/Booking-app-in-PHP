<?php


class User{


    public $firstName;
    public $surname;
    public $email;
    public $password;
    public $BookIN;
    public $BookOUT;

    function __construct($firstName, $surname, $email, $password, $BookIN, $BookOUT){
        $this->firstName = $firstName;
        $this->surname = $surname;
        $this->email = $email;
        $this->password = $password;
        $this->BookIN = $BookIN;
        $this->BookOUT = $BookOUT;

    }
    function get_name() {
        echo $this->firstName;
        echo $this->surname;
        echo $this->email;
        echo $this->password;
        echo $this->BookIN;
        echo $this->BookOUT;
      }

      function calc_days(){
        $diffDate = abs(strtotime($this->BookOUT) - strtotime($this->BookIN) );
        $yearsDiff = floor($diffDate/(365*60*60*24));
        $monthDiff = floor(($diffDate - $yearsDiff * 365*60*60*24 )/(30*60*60*24));
        $daysDiff = floor(($diffDate - $yearsDiff * 365*602*60*24 - $monthDiff*30*60*60*24)/(60*60*24));
        return $daysDiff ;
      }
    
    function calc_cost($price){
        
        $diffDate = abs(strtotime($this->BookOUT) - strtotime($this->BookIN) );
        $yearsDiff = floor($diffDate/(365*60*60*24));
        $monthDiff = floor(($diffDate - $yearsDiff * 365*60*60*24 )/(30*60*60*24));
        $daysDiff = floor(($diffDate - $yearsDiff * 365*602*60*24 - $monthDiff*30*60*60*24)/(60*60*24));
        $totalCost = $daysDiff * $price;
        return $totalCost;
        
    }
    
}

// $user = new User(15);





?>