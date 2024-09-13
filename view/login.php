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
        background-image: url('../files/designImg/bg.png');
        background-position: center;
        background-size:fill;
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
    #nav-text{
        color: #2d5550;
    }
    #logContainer{
        width: 23%;
        height: 100%;
        border: 1px solid #5f8c7a;
        border-radius: 10px;
        margin-top: 5%;
    }
    .form-control{
        border: #5f8c7a 1px solid;
        border-radius: 10px;
    }
    .form-control::placeholder{
        color: #5f8c7a;
        opacity: 50%;
        padding-left: 10px;
    }
    #checkBox{
        border:2px solid #5f8c7a;
        border-radius: 100%;
        margin-right: 10px;
    }

    #logBtn{
        background-color: white;
        color: #5f8c7a;
        border-radius: 10px;
        border:1.5px solid #5f8c7a;
        height: 40px;
        font-weight: bold;
        font-size: 19px;
        
    }
    #logBtn:hover{
        background-color: #5f8c7a;
        color: white;
    }
    hr{
        border: 1px solid #2d5550;
    }
    i{
        color: #5f8c7a;
        scale: 1.4;
    }
    .passwordF{
        background-color: white;
        border: #5f8c7a 1px solid;
        width: 100%;
        height: 40px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        padding: 0px 20px 0px 0px;
    }
    #inputF{
        width: 100%;
        outline:0;
        border: 0; 
    }
    #inputF::placeholder{
        opacity: 50%;
        color: #5f8c7a;
    }
    #eyeIcon{
        scale: .9;
    }
    .inputFerror{
        border: 2px solid red;
        outline: red;
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
            <p class="mx-2 p-2 fw-bold" id="nav-text" >Login</p>
            <div class="vr mt-2"style="border-left: 2px solid black; height: 26px;"></div>
            <p class="mx-2 p-2 fw-bold" id="nav-text" ><a href="#" style="text-decoration:none;color: #2d5550;" id="signUp">Signup</a></p>
        </div>
        <div class="">
            <i class="fa-solid fa-sun " id="navSun"></i>
        </div>
    </nav>
    <div class="container" id="logContainer">
        <form action="" id="loginForm">
            <div class="d-flex justify-content-center mt-4 mb-4">
                <h3 id="nav-text">Login</h3>
            </div>
            <input type="text" name="email" id="email" placeholder="enter your email" class="form-control">
            <div id="emailError" class="mb-3"  style="color:red"></div>
            <div class="passwordF" id="password">
                <input type="password" name="password" id="inputF" placeholder="enter your password" class="form-control">
                <i class="fa-solid fa-eye-slash" id="eyeIcon"></i>
            </div>
            <div id="passError" class="mb-3"style="color:red"></div>

            <div class="d-flex justify-content-between mb-3">
                <div>
                <input type="checkbox" class="form-check-input mr-3 mb-3" id="checkBox"><span id="nav-text" class="fw-bold">Remember me</span>
                </div>
                <a href="#" class="fw-bold" id="nav-text" style="text-decoration:none;">Forgot Password?</a>
            </div>
            <div class=" mb-3" >
                <input type="submit" class=" text-center pb-1" id="logBtn" style="width:100%" value="Login">
            </div>
        </form>
        <div class="d-flex justify-content-between px-3 mb-3">
                <div style="width:50% "><hr></div>
                <div class="mx-3 nav-text fw-bold mt-1" id="nav-text">OR</div>
                <div style="width:50%"><hr></div>
            </div>
            <div class="fw-bold d-flex justify-content-center mb-2" id="nav-text">
                or you can sign in with
            </div>
            <div class="d-flex bd-highlight justify-content-center mb-2">
                 <div class="p-2">
                 <i class="fa-brands fa-google"></i>
                </div>
                <div class="p-2">
                    <i class="fa-brands fa-facebook"></i>
                </div>
                <div class="p-2">
                 <i class="fa-brands fa-twitter"></i>
                </div>
                <div class="p-2">
                 <i class="fa-brands fa-github"></i>
                </div>
                <div class="p-2">
                 <i class="fa-brands fa-linkedin"></i>
                </div>
            </div>
            <div class="fw-bold d-flex justify-content-center mb-2" id="nav-text">
                <span>Don't have any account?</span>
                <span class="mx-3 mb-4" id="signUp2"><a href="#" style="text-decoration:none;color: #2d5550;">Signup</a></span>
            </div>
    </div>  
   
</body>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var eyeIcon = document.getElementById("eyeIcon");
        var inputF = document.getElementById("inputF");
        eyeIcon.addEventListener('click', function(event) {
            if(inputF.type === "password"){
                inputF.type = "text";
                eyeIcon.classList.remove("fa-eye-slash");
                eyeIcon.classList.add("fa-eye");
            }else{
                inputF.type = "password";
                eyeIcon.classList.remove("fa-eye");
                eyeIcon.classList.add("fa-eye-slash");
            }
        });
        var signUp= document.getElementById("signUp");
        signUp.addEventListener('click', function(event) {
            event.preventDefault();
            window.location.href = "signup.php";
        });
        var signUp2= document.getElementById("signUp2");
        signUp2.addEventListener('click', function(event) {
            event.preventDefault();
            console.log("clicked");
            window.location.href = "signup.php";
        });
        
        var loginForm = document.getElementById("loginForm");
        var email = document.getElementById("email");
        var passField = document.getElementById("inputF");
        var password = document.getElementById("password");
        var emailError = document.getElementById("emailError");
        var passError = document.getElementById("passError");
        var eyeIcon = document.getElementById("eyeIcon");
        loginForm.addEventListener('submit', function(event) {
            event.preventDefault();
            if(email.value === "" || password.value === ""){
                email.classList.add("inputFerror");
                emailError.innerHTML = "Email is required";
                password.classList.add("inputFerror");
                passError.innerHTML = "Password is required";
                emailError.style.marginBottom = "2px";
            }else{
                xml=new XMLHttpRequest();
                xml.open("POST","../control/controller.php",true);
                xml.setRequestHeader("Content-type", "application/json charset=UTF-8");
                xml.onload = function() {
                if (xml.status == 200) {
                    console.log( " response: "+xml.responseText);
                        var data = JSON.parse(xml.responseText);
                        if (data.status === "success") {
                            event.preventDefault();
                            window.location.href = "home.php";
                        } else {
                            alert("login failed");
                        }
                }
            };

                var data = {
                    "email": email.value,
                    "password": passField.value,
                    "action": "login"
                };
                console.log(data);
                xml.send(JSON.stringify(data));
            }
        });
    });
</script>
</html>