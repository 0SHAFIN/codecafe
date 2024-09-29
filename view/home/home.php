<?php
session_start();
$name=$_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    body{
        background-image: url('../files/designImg/pBG.png');
        background-position: center;
        background-size:cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
    
    #mLogo{
        margin-left: 10px;
    }
    #navSun{
        color: #5f8c7a;
        margin-right: 30px;
        margin-bottom: 15px;
    }
 
    #buttonC{
        background-color:transparent ;
        border: 1px solid #5f8c7a;
        padding: 10px 20px;
        border-radius: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
        margin-left: 44%;
        width: 10%;
        color: #5f8c7a;
    }
    #buttonC:hover{
        background-color: #5f8c7a;
        color: white;
    }
    #hText{
        color:#2d5550;
    }
    #nav-text{
        color: #2d5550;
    }
    #nav-texT{
        color:#5f8c7a;
    }
    .container{
        margin-top: 10%;
    }
  
    
    
</style>
<body>
    <nav class="navbar navbar-expand-sm ">
        <img id="mLogo" src="../files/designImg/logo.png" alt="logo" style="width: 100px; height: 100%;">
        <div class="navbar-nav mx-auto">
            <ul class="navbar-nav ">
                <li class="nav-item px-3 fw-bold"><a class="nav-link " id="nav-text" href="#">Home</a></li>
                <li class="nav-item px-3 fw-bold"><a class="nav-link " id="nav-text"  href="#">Catalog</a> </li>
                <li class="nav-item px-3 fw-bold"><a class="nav-link " id="nav-text"  href="#">Contest </a></li>
                <li class="nav-item px-3 fw-bold"><a class="nav-link " id="nav-text"  href="#">Problem Set </a></li>
                <li class="nav-item px-3 fw-bold"><a class="nav-link " id="nav-text"  href="#">Ranking </a></li>
            </ul>
        </div>
        <div class="d-flex bd-highlight mx-4">
            <p class="mx-2 p-2 fw-bold" id="nav-text" ><?php echo $name==""?"login":$name ?></p>
            <div class="vr mt-2"style="border-left: 2px solid black; height: 26px;"></div>
            <p class="mx-2 p-2 fw-bold" id="nav-texT" ><a href="#" style="text-decoration:none;color: #2d5550;" id="signUp">Signup</a></p>
        </div>
        <div class="">
            <i class="fa-solid fa-sun " id="navSun"></i>
        </div>
    </nav>
   <div class="container">
      <h1 class="text-center" id="hText">MASTER YOUR CODING SKILLS</h1>
      <p class="text-center" id="nav-texT">Join the leading platform for competitive programming.<br>
         complete in challenges.solve problem,<br>
         and improve your coding skills.
      </p>
       <input type="button" value="Start Coding" id="buttonC" class="fw-bold">
   </div>
</body>
</html>