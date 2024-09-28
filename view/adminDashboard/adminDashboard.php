<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="aDashboard.css">
    <script src="aDashboard.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm ">
                <img id="mLogo" src="../view/files/designImg/logo.png" alt="logo">
                <div class="navbar-nav mx-auto">
                    <ul class="navbar-nav ">
                        <li class="nav-item px-3 fw-bold"><a class="nav-link " id="nav-text" href="#">Home</a></li>
                        <li class="nav-item px-3 fw-bold"><a class="nav-link " id="nav-text" href="#">Catalog</a> </li>
                        <li class="nav-item px-3 fw-bold"><a class="nav-link " id="nav-text" href="#">Contest </a></li>
                        <li class="nav-item px-3 fw-bold"><a class="nav-link " id="nav-text" href="#">Problem Set </a></li>
                        <li class="nav-item px-3 fw-bold"><a class="nav-link " id="nav-text" href="#">Ranking </a></li>
                    </ul>
                </div>
                <div class="d-flex bd-highlight mx-4">
                    <p class="mx-2 p-2 fw-bold" id="nav-text">Username</p>
                    <div class="vr mt-2" id="navVr"></div>
                    <p class="mx-2 p-2 fw-bold" id="nav-text"><a href="#" id="signUp">Signup</a></p>
                </div>
                <div class="">
                    <i class="fa-solid fa-sun " id="navSun"></i>
                </div>
    </nav>
<div class="container-fluid " id="mBody">
    <div class="row ">
        <div class="col">
            <div>
                <h1>Handle</h1>
            </div>
            <div>
                User full name
            </div>
            <div id="totalContest">
                Total Contest
            </div>
            <div id="totalProblem">
                Total Problem 
            </div>
            <div>
            <span><i class="fa-solid fa-envelope"></i></i></span>
            <span>xyz@gmail.com</span>
            </div>
        </div>
        <div class="col">
            <!--user photo -->
            <div class="container" id="profileFrame">
                <img src="https://img.freepik.com/free-photo/handsome-confident-smiling-man-with-hands-crossed-chest_176420-18743.jpg?size=626&ext=jpg&ga=GA1.1.2008272138.1727481600&semt=ais_hybrid" alt="">
                <a href="#">
                Change Photo
                </a>
            </div>

        </div>
    </div>
</div>
<div class="container-fluid " id="mBody">
    <a href="#" data-bs-toggle="collapse" data-bs-target="#collapseExample">Create a new contest</a>
    <div class="collapse" id="collapseExample">
     <div class="container" id="addContest">
        <form action="">
            <h3>Create your own contest</h3>
            <input  type="text" class="form-control mt-2" placeholder="Contest Title">
            <input  type="text" class="form-control mt-2" placeholder="Contest Duration">
            <input  type="text" class="form-control mt-2" placeholder="Contest Start Time">
            <input  type="text" class="form-control mt-2" placeholder="Contest End Time">
            <div class="container mt-4">
            <a href="#" data-bs-toggle="collapse" data-bs-target="#addProblem">Add Problem</a>
            <div class="collapse" id="addProblem">
                <form action="">
                    <div><input class="form-control mt-2"  type="text" class="form-control"placeholder="Problem Title"></div>
                    <div>
                    <textarea name=""  class="form-control mt-2" id="" cols="30" rows="5"> Problem Description</textarea>
                    </div>
                    <div class="d-flex bd-highlight">
                        <div class="container">
                            <textarea name=""  class="form-control mt-2 " id=""cols="30" rows="5">Input</textarea>
                        </div>
                        <div class="container">
                        <textarea name="" id="" class="form-control mt-2 " cols="30" rows="5">Output</textarea>
                        </div>
                        <div>
                            <button class="mt-2">Add Input</button>
                            <button class="mt-2">Add Problem</button>
                        </div>
                    </div>
                </form>
            </div>
            <button>Add Contest</button>
            </div>
            
        </form>
     </div>
</div>
</div>
</body>
</html>






