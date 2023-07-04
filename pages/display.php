<?php
include '../function/function.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>crud demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </head>
<body>
   <div class="container">
       <div class="col-lg-12">
           <br><br><h1 class="text-warning text-center"> Display Table Data   <button class="btn btn-success"><a href="insert.php"class="text-white">Insert</a></button></h1><br>
           <table class="table table-striped table-hover table-bordered">
                <tr class="bg-dark table-dark text-center">
                    <td>Id</td>
                    <td>Username</td>
                    <td>Password</td>
                    <td>Delete</td>
                    <td>Update</td>
                </tr>
                <?php
                $query = fetchData($con);
                while ($res = mysqli_fetch_assoc($query)) {
                ?>
                <tr class="text-center">
                    <td><?php echo $res['id']; ?></td>
                    <td><?php echo $res['username']; ?></td>
                    <td><?php echo $res['password']; ?></td>
                    <td>
                    <button class="btn btn-danger" onclick="confirmDelete(<?php echo $res['id']; ?>)">
                        <a href="#" class="text-white">Delete</a>
                    </button>
                    </td>

                   <td><button class="btn btn-primary"><a href="update.php?id=<?php echo $res['id']; ?>"class="text-white">Update</a></button></td>

                </tr>
                <?php
                }
                ?>
            </table>
       </div>
   </div>
   <!-- JavaScript -->
   <script src="../assets/script.js"></script>
</body>
</html>

