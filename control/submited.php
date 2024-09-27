<?php
   $data=json_decode(file_get_contents("php://input"),true);
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $code=$data['code'];
        $language=$data['language'];
       // $fileData=$data['fileData'];


        http_response_code(200);
        echo json_encode(array("status"=>"success"));
    }
?>