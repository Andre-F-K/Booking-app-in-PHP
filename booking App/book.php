<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



include 'models/hotels.php';

include 'models/bookings.php';
session_start();


//Retrieving clicked ID
$hotelID = $_POST['book'] - 1;
// echo $hotelID;

//Session for the hotel array 
$hotelsArray = $_SESSION['hotelsArray'];

//Session to acquire book in/out dates as well as calculated costs
$bookIn = $_SESSION['bookIn'];
$bookOut = $_SESSION['bookOut'];
$calculatedCost = $_SESSION['calcDate'] * $hotelsArray[$hotelID][2];
$hotelsArr = $_SESSION['hotelsArr'];




//creating new Book class 
$selectedHotel = new Book($hotelsArray[$hotelID][1], $calculatedCost, $bookIn, $bookOut, $hotelsArray[$hotelID][4], $hotelsArray[$hotelID][5], $hotelsArray[$hotelID][6]);
$_SESSION['selectHotel'] = $selectedHotel;
// print_r($selectedHotel);





$randomHotelID = Hotels::random_hotel($hotelsArray, $selectedHotel);
$_SESSION['randomHotelID'] = $randomHotelID;




?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/bookStyles.css">
  <!--Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <title>Confirm Booking</title>
</head>

<body>


  <div class="row m ">
    <?php

    echo '<div class="wapper col">
<div class="card bg-secondary p-2 text-dark bg-opacity-50 " style="width: 100%; height: 101vh;">
<img src="' . $selectedHotel->get_image() . '" class="card-img-top cardImages" alt="...">
<div class="card-body">
  <h5 class="card-title">' . $selectedHotel->get_name() . '</h5>
  <p class="card-text">' . implode(Hotels::display_features($selectedHotel)) . '</p>
</div>
<ul class="list-group list-group-flush">
  <li class="list-group-item">' . "Book in date : " . $selectedHotel->get_bookIn() . '</li>
  <li class="list-group-item">' . "Book out date : " . $selectedHotel->get_bookOut() . '</li>
  <li class="list-group-item">' . "Calculated Cost : " . "R" . $selectedHotel->get_cost() . '</li>
</ul>
<div class="card-body">
  <form action="payment.php" method="Post">
  <input type="text" name="bookedHotel" value="'.$hotelID.'" hidden>
    <button class="btn btn-primary" type="submit">Confirm Booking</button>
  </form>
</div>
</div>S
</div>';
    ?>
    <?php
    echo '<div class="wapper col">
<div class="card bg-secondary p-2 text-dark bg-opacity-50" style="width: 95%; height: 101vh;">
<img src="' . $hotelsArr[$randomHotelID]->image . '" class="card-img-top cardImages" alt="...">
<div class="card-body">
  <h5 class="card-title">' . $hotelsArr[$randomHotelID]->name . '</h5>
  <p class="card-text">' . implode("<br>" ,$hotelsArr[$randomHotelID]->features ).'</p>
</div>
<ul class="list-group list-group-flush">
  <li class="list-group-item">' . "Calculated Cost : " . "R" . $hotelsArr[$randomHotelID]->cost . '</li>
  <li class="list-group-item">' . "Available Rooms : " . $hotelsArr[$randomHotelID]->availRooms . '</li>
  <li class="list-group-item">' . "Hotel Rating : ". $hotelsArr[$randomHotelID]->rating . '</li>
</ul>
<div class="card-body">
  <form action="payment.php" method="Post">
  <input type="text" name="bookedHotel" value="'.$randomHotelID.'" hidden>
    <button class="btn btn-primary"  type="submit">Changed Your Mind?</button>
  </form>

</div>
</div>
</div>'
    ?>





  </div>
</body>

</html>