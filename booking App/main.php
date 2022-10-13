

<?php
// display errors
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);


include 'models/users.php';
include 'models/hotels.php';
session_start();
//fetching user input from login
$firstName = $_POST['firstName'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$password = $_POST['password'];
$BookIN = $_POST['BookIN'];
$BookOUT = $_POST['BookOUT'];

//creating user obj using Users class
$user = new User($firstName, $surname, $email, $password, $BookIN, $BookOUT);


//fetching JSON hotels file and converting to php 
$hotelListJson = file_get_contents('data\hotels.json');
$hotelsList = json_decode($hotelListJson);
//empty array used to push new Hotles into
$hotelsArr = array();


//for each loop to create hotel objects from $hotelsList(line27) and pushing objects into $hotelsArr to display
foreach($hotelsList as $hotel){
    $hotelObj = new Hotels($hotel[0],$hotel[1],$hotel[2],$hotel[3],$hotel[4],$hotel[5],$hotel[6],);
    array_push($hotelsArr,$hotelObj);
}

$_SESSION['hotelsArr'] = $hotelsArr;
$_SESSION['calcDate'] = $user->calc_days();
$_SESSION['bookIn'] = $BookIN;
$_SESSION['bookOut'] = $BookOUT;
$_SESSION['hotelsArr'] = $hotelsArr;




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link css -->
    <link rel="stylesheet" href="styles/mainStyle.css">
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Hotels</title>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-light mb-2">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Where to Mr <?php echo $firstName . ' ' . $surname ?>?</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    </div>
  </div>
</nav>

<div class="row ">
 <?php
// loop trough created hotel objects and displaying them.

foreach($hotelsArr as $hotels){
 echo '
 <div class=" hotelWrapper col-sm-3 ">
 <div class=" hotelCard  card bg-secondary p-2 text-dark bg-opacity-50" >
 <img src="'.$hotels->get_img().'" class="card-img-top cardImages" alt="...">
 <div class="card-body">
   <h5 class="card-title hotelName">'.$hotels->get_name().'</h5>
 </div>
 <ul class="list-group list-group-flush">
   <li class="list-group-item">Cost per night : ' .'R'.$hotels->get_cost().'</li>
   <li class="list-group-item">Rooms Avail : '.$hotels->get_availRooms().'</li>
   <li class="list-group-item">Hotel Rating : '.$hotels->get_rating().'</li>
   <li class="list-group-item text-danger">Calc Cost : '.'R'.$user->calc_cost($hotels->get_cost()).'</li>
 </ul>
 <div class="card-body">
 <div class="d-flex justify-content-around">
 <form action="book.php" method="post">
 <input type="text"  name="book" value='.$hotels->get_id().'  hidden>
<button type="submit" class="bg-secondary p-2 text-dark bg-opacity-100 text-white">Book</button>
</form>  
<form action="book.php" method="post">
<input type="text" name="details" value='.$hotels->get_id().' hidden>
<button type="submit" class="bg-secondary p-2 text-dark bg-opacity-100 text-white">Details</button>
</form>
</div>
 </div>
</div>
</div>';
}

 ?> 

</div>





  
</body>
</html>










