<?php
function loginQuery($con, $username, $password) {
    $loginQuery = "SELECT * FROM crudtable WHERE username = '$username' AND password = '$password'";
    $query = mysqli_query($con, $loginQuery);
    return $query;
}
function insertQuery($con, $username, $password) {
    $insertQuery = "INSERT INTO `crudtable`(`username`, `password`) VALUES ('$username','$password')";
    $query = mysqli_query($con, $insertQuery);
    return $query;
}
function deleteQuery($con,$id){
    $q="DELETE FROM crudtable WHERE id=$id";
    $query=mysqli_query($con,$q);
    return $query;
}
function updateQuery($con, $username, $password,$id){
    $updateQuery = "UPDATE crudtable SET username='$username', password='$password' WHERE id=$id";
    $query = mysqli_query($con, $updateQuery);
    return $query;
}
function DisplayUpdateQuery($con){
    $id = $_GET['id'];
    $selectQuery = "SELECT * FROM crudtable WHERE id=$id";
    $result = mysqli_query($con, $selectQuery);
    return $result;
}
?>