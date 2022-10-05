

<?php
// display errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include 'models/users.php';
include 'models/hotels.php';

//fetching user input from login
$firstName = $_POST['firstName'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$password = $_POST['password'];
$BookIN = $_POST['BookIN'];
$BookOUT = $_POST['BookOUT'];

//creating user obj using Users class
$user = new User($firstName, $surname, $email, $password, $BookIN, $BookOUT);
echo $user->get_name();

//fetching JSON hotels file and converting to php array
$hotelListJson = file_get_contents('data\hotels.json');
$hotelsList = json_decode($hotelListJson);

//creating hotel objects using Hotel class
foreach ($hotelsList as $i) {
    $hotel = new Hotels($i[0], $i[1], $i[2], $i[3], $i[4], $i[5], $i[6],);
    // print_r($hotel);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Hotels</title>
</head>
<body>
 <?php
//  print_r($hotelsList) ;
$length = count($hotelsList);
 for($i = 0; $i < $length ; $i ++) {

 echo '<div class="card bg-secondary p-2 text-dark bg-opacity-50" style="width: 18rem;">
 <img src="'.$hotel->get_img().'" class="card-img-top" alt="...">
 <div class="card-body">
   <h5 class="card-title">'.$hotel->get_name().'</h5>
 </div>
 <ul class="list-group list-group-flush">
   <li class="list-group-item">Cost per night : '.$hotel->get_cost().'</li>
   <li class="list-group-item">Rooms Avail : '.$hotel->get_availRooms().'</li>
   <li class="list-group-item">Hotel Rating : '.$hotel->get_rating().'</li>
   <li class="list-group-item text-danger">Calc Cost : '.$hotel->get_rating().'</li>
 </ul>
 <div class="card-body">
 <div class="d-flex justify-content-around">
 <form action="" method="post">
 <input type="text" value="'.$hotel->get_id().'" hidden>
<button type="submit" class="bg-secondary p-2 text-dark bg-opacity-100 text-white">Book</button>
</form>  
<form action="" method="post">
<input type="text" value="'.$hotel->get_id().'" hidden>
<button type="submit" class="bg-secondary p-2 text-dark bg-opacity-100 text-white">Details</button>
</form>
</div>
 </div>
</div>';
};
 ?> 


  
</body>
</html>

