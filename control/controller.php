<?php
require_once '../model/dbmodel.php';
require_once '../model/dbcon.php';
    session_start();
    $data=json_decode(file_get_contents("php://input"),true);  
    switch($data['action'])
    {
        case 'signup':
            $name=$data['name'];
            $email=$data['email'];
            $password=$data['password'];
            $dob=$data['dob'];
            $phone=$data['phone'];
            if(signup($name,$email,$phone,$dob,$password))
            {
                http_response_code(200);
                echo json_encode(array("status"=>"success"));
            }
            else
            {
                http_response_code(200);
                echo json_encode(array("status"=>"failed"));
            }
            break;
        case 'login':
            if(login($data['username'],$data['password']))
            {
                $conn=dbconnection();
                $sql = "SELECT * FROM `users` WHERE `user_name`='".$data['username']."' AND `password`='".$data['password']."'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                $_SESSION['name']=$row['name'];
                http_response_code(200);
                echo json_encode(array("status"=>"success"));
            }
            else
            {
                http_response_code(200);
                echo json_encode(array("status"=>"failed"));
            }
    }
?>