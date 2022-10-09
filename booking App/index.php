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
        <form action="main.php" class="loginForm" method="post" class="inputForm">
            <div class="formInput">
                <div class="mb-3">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" name="firstName" class="form-control" required>
                </div>
             </div>
            <div class="formInput">
                <div class="mb-3">
                    <label for="surname" class="form-label">Surname</label>
                    <input type="text" name="surname" class="form-control" required>
                </div>
            </div>
            <div class="formInput">
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
            </div>
            <div class="formInput">
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
            </div>
            <div class="formInput">
                <div class="mb-3">
                    <label for="bookIn" class="form-label">Book in Date</label>
                    <input type="date" name="BookIN" class="form-control" required>
                </div>
            </div>
            <div class="formInput">
                <div class="mb-3">
                    <label for="bookOut" class="form-label">Book out Date</label>
                    <input type="date" name="BookOUT" class="form-control" required>
                </div>
            </div>
            <div class="formInput">
            <button type="submit" class="btn btn-secondary btn-lg btn-block">Submit</button>
            </div>
        </form>

        
    </div>
</body>

</html>