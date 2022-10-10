<?php
include 'models/bookings.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

//Retrieving clicked ID
$hotelID = $_POST['book'] - 1;
echo $hotelID;

//Session for the hotel array 
$hotelsArray = $_SESSION['hotelsArray'];

//Session to acquire book in/out dates as well as calculated costs
$bookIn = $_SESSION['bookIn'];
$bookOut = $_SESSION['bookOut'];
$calculatedCost = $_SESSION['calcDate'] * $hotelsArray[$hotelID][2]  ;



//creating new Book class 
$selectedHotel = new Book($hotelsArray[$hotelID][1],$calculatedCost,$bookIn,$bookOut,$hotelsArray[$hotelID][4],$hotelsArray[$hotelID][5],$hotelsArray[$hotelID][6]);
print_r($selectedHotel);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<title>Confirm Booking</title>
</head>
<body>
    
<?php

echo '<div class="card" style="width: 18rem;">
<img src="'.$selectedHotel->get_image().'" class="card-img-top" alt="...">
<div class="card-body">
  <h5 class="card-title">'.$selectedHotel->get_name().'</h5>
  <p class="card-text">'.$selectedHotel->get_features().'</p>
</div>
<ul class="list-group list-group-flush">
  <li class="list-group-item">'.$selectedHotel->get_bookIn(). '</li>
  <li class="list-group-item">'.$selectedHotel->get_bookOut(). '</li>
  <li class="list-group-item">'.$selectedHotel->get_cost(). '</li>
</ul>
<div class="card-body">
    <button class="btn btn-primary" type="button">Confirm Booking</button>

</div>
</div>'







?>
</body>
</html>