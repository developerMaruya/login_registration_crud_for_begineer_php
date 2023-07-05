<?php
include '../function/function.php';
include '../connection/conn.php';
registerData($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </head>
<body>
    <div class="container">
        <div class="col-lg-6 m-auto"><br><br>
            <form method="post" enctype="multipart/form-data">
                <div class="card" style="border-width : 0">
                    <div class="card-header bg-dark ">
                        <h1 class="text-white text-center">Registration Form</h1>
                    </div>
                    <leabel>Username:</label>
                    <input type="text" name="username" class="form-control" required>
                    <leabel>Age:</label>
                    <input type="number" name="age" class="form-control">
                    <leabel>Email:</label>
                    <input type="email" name="email" class="form-control" required>
                    <leabel>Address:</label>
                    <input type="text" name="address" class="form-control">
                    <leabel>Mobile:</label>
                    <input type="number" name="mobile" class="form-control">
                    <leabel>Password:</label>
                    <input type="password" name="password" class="form-control" required>
                    <leabel>State:</label>
                    <input type="text" name="state" class="form-control">
                    <leabel>Pin:</label>
                    <input type="number" name="pin" class="form-control"><br>
                    <leabel>Image:</leabel>
                    <input type="file" id="img" name="img" accept="image/*">
                    <br><br>
                    <button class="btn btn-success w-100" type="submit" name="registerDone">submit</button>
                    <div class="text-center">
                        <br><a href="login.php" class="text-center">Goto Login Page</a>
                    </div>
                </div>

            </form>
        </div>
   
</body>
</html>
