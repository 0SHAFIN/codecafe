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
            if(login($data['email'],$data['password']))
            {
                $conn=dbconnection();
                $sql = "SELECT * FROM `user_info` WHERE `u_email`='".$data['email']."' AND `u_password`='".$data['password']."'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                $_SESSION['name']=$row['u_name'];
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