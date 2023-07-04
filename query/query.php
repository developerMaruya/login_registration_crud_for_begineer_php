<?php
include 'connection/conn.php';
// loging
if(isset($_POST['done'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $logingQuery="SELECT * FROM crudtable";
    $query=mysqli_query($con,$logingQuery);
    while($res=mysqli_fetch_array($query)){
        if ($username==$res['username'] && ($password==$res['password'])){
            header('location:display.php');
            break;
        }else{
            header('location:login.php');
        }
    }


}
// inset data 
if(isset($_POST['done1'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $insertQuery="INSERT INTO `crudtable`(`username`, `password`) VALUES ('$username','$password')";
    $query=mysqli_query($con,$insertQuery);
    header('location:display.php');
}
?>