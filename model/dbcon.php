<?php
    function dbconnection(){
    $serverName="localhost";
    $userName="root";
    $password="";
    $dbName="codecafe";
    $conn = mysqli_connect($serverName,$userName,$password,$dbName);
    return $conn;
    }
    
?>