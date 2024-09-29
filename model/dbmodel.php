<?php
require_once 'dbcon.php';
function signup($name,$email,$number,$dob,$password)
{
    $conn = dbconnection();
    $sql = "INSERT INTO `user_info` (`u_name`, `u_email`, `u_number`, `u_dob`, `u_password`) VALUES ('$name', '$email', '$number', '$dob', '$password')";
    $result = mysqli_query($conn, $sql);
    if($result)
    {
        return true;
    }
    else
    {
        return false;
    }
}
function login($username,$password)
{
    $conn = dbconnection();
    $sql = "SELECT * FROM `users` WHERE `user_name`='$username' AND `password`='$password'";
    $result = mysqli_query($conn, $sql);
    if($result->num_rows>0)
    {
        return true;
    }
    else
    {
        return false;
    }
}
?>