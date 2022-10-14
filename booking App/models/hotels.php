<?php



class Hotels{

    public $id;
    public $name;
    public $cost;
    public $availRooms;
    public $features;
    public $image;
    public $rating;

    function __construct($id ,$name, $cost, $availRooms, $features, $image, $rating)
    {
        $this->id = $id;
        $this->name = $name;
        $this->cost = $cost;
        $this->availRooms = $availRooms;
        $this->features = $features;
        $this->image = $image;
        $this->rating = $rating;
    }


    public function get_name(){
        
        return $this->name;
    }

    public function get_img(){
        
        return $this->image;
    }

    public function get_cost(){
        
        return $this->cost;
    }

    public function get_availRooms(){
        
        return $this->availRooms;
    }

    public function get_rating(){
        
        return $this->rating;
    }

    public function get_features(){
        
        return $this->features;
    }

    public function get_id(){
        
        return $this->id;
    }

    static function random_hotel($hotelId , $selectedHotel){
        $randHotel = rand(0 , count($hotelId) - 1);
        // echo $randHotel;
        while ($selectedHotel !== $randHotel ){
            return $randHotel;
        }

    } 


    static function display_features($selectedHotel){
        $featursArr = array();
        foreach ($selectedHotel->get_features() as $feature) {
            array_push($featursArr, $feature , '<br>');

          }
          return($featursArr)  ;
    }





    

    
    




}












?>