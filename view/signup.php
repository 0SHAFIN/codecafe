
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Signup</title>
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
        margin-top: 20px;
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
        width: 100%;
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
    #inputc{
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
    #eyeIconC{
        scale: .9;
    }
    .inputFerror{
        border: 2px solid red;
        outline: red;
    }
    #dob{
        color:#5f8c7a;
        opacity: 50%;
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
            <span class="mx-2 p-2 fw-bold" id="nav-text" ><a href="#"style="text-decoration:none;color: #2d5550;"id="login1">Login</a></span>
            <div class="vr mt-2"style="border-left: 2px solid black; height: 26px;"></div>
            <p class="mx-2 p-2 fw-bold" id="nav-text" >Signup</p>
        </div>
        <div class="">
            <i class="fa-solid fa-sun " id="navSun"></i>
        </div>
    </nav>
    <div class="container" id="logContainer">
        <form id="signupForm">
            <div class="d-flex justify-content-center mt-4 mb-4">
                <h3 id="nav-text">Register</h3>
            </div>

            <input type="text" class="form-control" name="name" placeholder="Full Name" id="name">
            <div id="nameError" class="mb-3"  style="color:red"></div>
            <input type="text" class="form-control mr-3" name="email;" placeholder="Email" id="email">
            <div id="emailError" class="mb-3"  style="color:red"></div>
            <input type="text" class="form-control" name="phone" placeholder="Phone Number" id="phone">
            <div id="phoneError" class="mb-3"  style="color:red"></div>
            <div class="custom-date-picker">
                <input type="date" class="form-control" name="dob" placeholder="" id="dob">   
            </div>
            <div id="dobError" class="mb-3"  style="color:red"></div>
            
            <div class="passwordF" id="password">
                <input type="password" class="form-control" name="password" placeholder="Password" id="inputF">   
                <i class="fa-solid fa-eye-slash" id="eyeIcon"></i>
            </div>
            <div id="passError" class="mb-3"style="color:red"></div>
            <div class="passwordF"id="Cpassword">
                <input type="password" class="form-control" name="Cpassword" placeholder="Repeat Password" id="inputc">   
                <i class="fa-solid fa-eye-slash" id="eyeIconC"></i>
            </div>
            <div id="CpassError" class="mb-3"style="color:red"></div>
            <div class=" mb-3" >
                <input type="submit" class=" text-center pb-1" id="logBtn" style="width:100%" value="Signup">
            </div>
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
                <span class="mx-3 mb-4"><a href=""style="text-decoration:none;color: #2d5550;" id="login2">Login</a></span>
            </div>

        </form>
        
    </div>
   
</body>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var eyeIcon = document.getElementById("eyeIcon");
        var eyeIconC = document.getElementById("eyeIconC");
        var inputF = document.getElementById("inputF");
        var inputc = document.getElementById("inputc");
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
        eyeIconC.addEventListener('click', function(event) {
            if(inputc.type === "password"){
                inputc.type = "text";
                eyeIconC.classList.remove("fa-eye-slash");
                eyeIconC.classList.add("fa-eye");
            }else{
                inputc.type = "password";
                eyeIconC.classList.remove("fa-eye");
                eyeIconC.classList.add("fa-eye-slash");
            }
        });

        var login1= document.getElementById("login1");
        login1.addEventListener('click', function(event) {
            event.preventDefault();
            window.location.href = "login.php";
        });
        var login2= document.getElementById("login2");
        login2.addEventListener('click', function(event) {
            event.preventDefault();
            window.location.href = "login.php";
        });

        
        var loginForm = document.getElementById("signupForm");
        var email = document.getElementById("email");
        var phone = document.getElementById("phone");
        var dob = document.getElementById("dob");
        var name = document.getElementById("name");
        var passField = document.getElementById("inputF");
        var cpassfield = document.getElementById("inputc");
        var password = document.getElementById("password");
        var emailError = document.getElementById("emailError");
        var passError = document.getElementById("passError");
        var CpassError = document.getElementById("CpassError");
        var phoneError = document.getElementById("phoneError");
        var dobError = document.getElementById("dobError");
        var nameError = document.getElementById("nameError");
        var eyeIcon = document.getElementById("eyeIcon");

        var namE= document.getElementById("name").value.trim();
        var emaiL= document.getElementById("email").value.trim();
        var phonE= document.getElementById("phone").value.trim();
        var doB= document.getElementById("dob").value.trim();
        var passworD= document.getElementById("inputF").value.trim();
        loginForm.addEventListener('submit', function(event) {
    event.preventDefault();

    var namE = name.value.trim();
    var emaiL = email.value.trim();
    var phonE = phone.value.trim();
    var doB = dob.value.trim();
    var passworD = passField.value;
    var cpassworD = cpassfield.value;

    if (namE === "") {
        nameError.innerHTML = "Name is required";
        name.classList.add("inputFerror");
    } else {
        nameError.innerHTML = "";
        name.classList.remove("inputFerror");
    }
    
    if (emaiL === "") {
        emailError.innerHTML = "Email is required";
        email.classList.add("inputFerror");
    } else {
        emailError.innerHTML = "";
        email.classList.remove("inputFerror");
    }

    if (phonE === "") {
        phoneError.innerHTML = "Phone number is required";
        phone.classList.add("inputFerror");
    } else {
        phoneError.innerHTML = "";
        phone.classList.remove("inputFerror");
    }

    if (doB === "") {
        dobError.innerHTML = "Date of birth is required";
        dob.classList.add("inputFerror");
    } else {
        dobError.innerHTML = "";
        dob.classList.remove("inputFerror");
    }

    if (passworD === "") {
        passError.innerHTML = "Password is required";
        passField.classList.add("inputFerror");
    } else {
        passError.innerHTML = "";
        passField.classList.remove("inputFerror");
    }

    if (cpassworD === "") {
        CpassError.innerHTML = "Confirm password is required";
        cpassfield.classList.add("inputFerror");
    } else if (passworD !== cpassworD) {
        CpassError.innerHTML = "Passwords do not match";
        cpassfield.classList.add("inputFerror");
    } else {
        CpassError.innerHTML = "";
        cpassfield.classList.remove("inputFerror");
    }

    // Proceed only if all fields are valid
    if (namE !== "" && emaiL !== "" && phonE !== "" && doB !== "" && passworD !== "" && passworD === cpassworD) {

        xml=new XMLHttpRequest();
                xml.open("POST","../control/controller.php",true);
                xml.setRequestHeader("Content-type", "application/json charset=UTF-8");
                xml.onload = function() {
                if (xml.status == 200) {
                    console.log( " response: "+xml.responseText);
                        var data = JSON.parse(xml.responseText);
                        if (data.status === "success") {
                            event.preventDefault();
                            window.location.href = "login.php";
                        } else {
                            alert("signup failed");
                        }
                }
            };

                var data = {
                    "action": "signup",
                    "name": namE,
                    "email": emaiL,
                    "phone": phonE,
                    "dob": doB,
                    "password": passworD
                };
                console.log("ALL DATA: " + JSON.stringify(data));
                xml.send(JSON.stringify(data));
            
    }
});


        

    });
</script>
</html>