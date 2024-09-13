<?php
    function dbconnection(){
    $serverName="localhost";
    $userName="root";
    $password="";
    $dbName="mid_labtask";
    $conn = mysqli_connect($serverName,$userName,$password,$dbName);
    return $conn;
    }
    
?>