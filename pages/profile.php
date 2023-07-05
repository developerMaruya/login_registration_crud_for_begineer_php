<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </head>
<body>
    <div class="container">
        <div class="col-lg-6 m-auto">
            <br><br><div class="card" style="border-width:0">
                <div class="card-header bg-dark">
                    <h1 class="text-center text-white">User Profile</h1>
                </div>

                <table class="table table-striped table-hover table-bordered">
           
                    <?php
                        include '../connection/conn.php';
                        $emailData=$_SESSION['email'];
                        $query="SELECT * FROM registration WHERE email='$emailData'";
                        $data=mysqli_query($con,$query);
                        $rowData=mysqli_fetch_assoc($data);
                        while($rowData){
                    ?>
                        <tr class="text-center">
                            <td><?php echo "User Id : ".$rowData['id']; ?></td> 
                        </tr>
                        <tr class="text-center">
                            <td><?php echo "User Name : ".$rowData['username']; ?></td>                   
                        </tr>
                        <tr class="text-center">
                            <td><?php echo "User Age : ".$rowData['age']; ?></td>                 
                        </tr>
                        <tr class="text-center">
                            <td><?php echo "Email : ".$rowData['email']; ?></td>                 
                        </tr>
                        <tr class="text-center">
                            <td><?php echo "Mobile Number : ".$rowData['mobile']; ?></td>                  
                        </tr>
                        <tr class="text-center">
                            <td><?php echo "Full Address  : ".$rowData['address']; ?></td>                   
                        </tr>
                        <tr class="text-center">
                            <td><?php echo "Pin Code : ".$rowData['pin']; ?></td>                   
                        </tr>
                        <tr class="text-center">
                            <td><?php echo "User State : ".$rowData['state']; ?></td>
                            <?php break; ?>
                        </tr>
                    <?php
                        }
                    ?>
            </table> 
                    
            </div>
                <div class="text-center mt-5">
            <a href="./display.php" class="text-center">Goto Home Page</a>
                    </div>
        </div>
    </div>
    
</body>
</html>