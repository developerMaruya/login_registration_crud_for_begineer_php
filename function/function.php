<?php
include '../connection/conn.php';
include '../query/query.php';

// login 

function loginData($con) {
    session_start();
    if (isset($_POST['done'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $query = loginQuery($con, $email, $password);
        if (mysqli_num_rows($query) > 0) {
            $_SESSION['email']=$email;
            header('Location: display.php');
        }
    }
}

// insert data
function insertData($con) {
    if (isset($_POST['done1'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = insertQuery($con, $username, $password);
        header('location:./display.php');
    }
}
// register data
function registerData($con){
    session_start();
    if(isset($_POST['registerDone'])){
        $username = $_POST['username'];
        $age = $_POST['age'];
        $email=$_POST['email'];
        $address = $_POST['address'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];
        $state = $_POST['state'];
        $pin = $_POST['pin'];
        // store file in froject
        $filename = $_FILES["img"]["name"];
        $tempname = $_FILES["img"]["tmp_name"];
        $images = "images/" . $filename;
        move_uploaded_file($tempname, $images);
        $_SESSION['email']=$email;
        $query=registerQuery($con,$username,$age,$email,$address,$mobile,$password,$state,$pin,$images);
        header('location:./display.php');
    }
}
// delete data
function deleteData($con){
    $id=$_GET['id'];
    $query=deleteQuery($con,$id);
    header('location:./display.php');
}
// update data
function updateData($con){
    if (isset($_POST['done'])) {
        $id = $_GET['id'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = updateQuery($con, $username, $password,$id);   
        header('location: ./display.php');
    }
}
// fetch all data
function fetchData($con) {
    $q = "SELECT * FROM crudtable";
    $query = mysqli_query($con, $q);
    return $query;
}