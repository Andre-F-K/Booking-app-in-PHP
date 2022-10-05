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
    
    
}

// $user = new User(15);





?>