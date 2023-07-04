<?php
include 'query/query.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</head>
<body>
<div class="col-lg-6 m-auto">
        <form method="post">
            <br><br><div class="card" style="border-width : 0">
                <div class="card-header bg-dark">
                    <h1 class="text-white text-center"> Login</h1>
                </div>
                <label>Username:</label>
                <input type="text" name="username" class="form-control" placeholder="Enter Username" required><br>
                <label>Password:</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password" required><br>
                <button class="btn btn-success" type="submit" name="done">Login</button><br>
                <a href="insert.php" class="text-center">Register Here</a>
            </div>

</form>
    </div>
    
</body>
</html>