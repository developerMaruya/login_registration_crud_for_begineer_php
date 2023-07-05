<?php
include '../connection/conn.php';
include '../query/query.php';

// login 

function loginData($con) {
    session_start();
    if (isset($_POST['done'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = loginQuery($con, $username, $password);
        if (mysqli_num_rows($query) > 0) {
            $_SESSION['username']=$username;
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