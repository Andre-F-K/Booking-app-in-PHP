<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/indexStyle.css">
    <!-- link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
    <title>Booking App</title>
</head>

<body>
    <div class="formWrapper">
        <form action="main.php" class="loginForm" method="post">
            <div class="formInput">
            <label for="firstName">First Name</label>
            <input type="text" name="firstName" required>
            </div>
            <div class="formInput">
            <label for="surname">Surname</label>
            <input type="text" name="surname" required>
            </div>
            <div class="formInput">
            <label for="email">Email</label>
            <input type="email" name="email" required>
            </div>
            <div class="formInput">
            <label for="password">Password</label>
            <input type="password" name="password" required>
            </div>
            <div class="formInput">
            <label for="passwordConf">Confirm Password</label>
            <input type="password" name="passwordConf" required>
            </div>
            <div class="formInput">
            <label for="BookIN">Book in Date</label>
            <input type="date" name="BookIN" required>
            </div>
            <div class="formInput">
            <label for="BookOUT">Book out Date</label>
            <input type="date" name="BookOUT" required>
            </div>
            <div class="formInput">
            <button type="submit">Submit</button>
            </div>
        </form>

        
    </div>

    <form action="" method="post">
        <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Firs Name</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
        </form>
</body>

</html>