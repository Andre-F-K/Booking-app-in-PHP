<?php

class Book{


        public $hotelName;
        public $calculatedCost;
        public $bookInDate;
        public $bookOutDate;
        public $features;
        public $image;
        public $rating;


    function __construct($hotelName,$calculatedCost,$bookInDate,$bookOutDate,$features,$image,$rating,)
    {
        $this->hotelName = $hotelName;
        $this->calculatedCost = $calculatedCost;
        $this->bookInDate = $bookInDate;
        $this->bookOutDate = $bookOutDate;
        $this->features = $features;
        $this->image = $image;
        $this->rating = $rating;

    }

    function get_name(){
        return $this->hotelName;
    } 
    function get_cost(){
        return $this->calculatedCost;
    }   
    function get_bookIn(){
        return $this->bookInDate;
    } 
    function get_bookOut(){
        return $this->bookOutDate;
    }
    function get_features(){
                
            return $this->features;
    }  
    function get_image(){
        return $this->image;
    } 

    static function push_toJSON($hotelObj){
        // $hotelsToJSONarr = array();
        // if(isset($hotelsToJSONarr)){
        //     $json = file_get_contents('data/BookedHotel.json');
        //     $data = json_decode($json, true);
    
        //     $data = array_push($hotelsToJSONarr, $hotelObj);
        //     $newData = json_encode($data, true);
        //     file_put_contents("BookedHotel.json", $newData);
        // }else{
        //     return;
        // }


    }














}
