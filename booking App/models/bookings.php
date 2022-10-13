<?php

class Book{


        private $hotelName;
        private $calculatedCost;
        private $bookInDate;
        private $bookOutDate;
        private $features;
        private $image;
        private $rating;


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
















}



















?>