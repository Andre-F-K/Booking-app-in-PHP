<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/paymentStyles.css">
    <!-- link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <?php
    // display errors
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


    include 'models/hotels.php';
    include 'models/bookings.php';
    session_start();



  
        //fetching clicked hotel from book.php 
        $randomHotelSelec = $_POST['bookedHotel'];
        $hotelsArr = $_SESSION['hotelsArr'];
        $hotelBooked = $hotelsArr[$randomHotelSelec];
        // print_r($hotelBooked);

        Book::push_toJSON( $hotelBooked);
    
    ?>
    <div class="card payCard">
        <h5 class="card-header">Payment</h5>
        <div class="card-body">
            <h5 class="card-title">Hotel has been booked</h5>
            <p class="card-text">This Hotel will be pushed to Json, payment will be collected on day of arrival</p>
            <textarea name="" id="" cols="75" rows="5" value><?php print_r($hotelBooked)   ?></textarea>
            <div>
            <a href="index.php" class="btn btn-primary ">Fin.</a>
            </div>
        </div>
    </div>
</body>

</html>