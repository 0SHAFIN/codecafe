<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="status.css">
</head>

<body>
    <nav class="navbar navbar-expand-sm ">
        <img id="mLogo" src="../files/designImg/logo.png" alt="logo">
        <div class="navbar-nav mx-auto">
            <ul class="navbar-nav ">
                <li class="nav-item px-3 fw-bold"><a class="nav-link " id="nav-text" href="#">
                        <div class="navText">Home</div>
                    </a></li>
                <li class="nav-item px-3 fw-bold"><a class="nav-link " id="nav-text" href="#">
                        <div class="navText">Catalog</div>
                    </a> </li>
                <li class="nav-item px-3 fw-bold"><a class="nav-link " id="nav-text" href="#">
                        <div class="navText" id="contest">Contest</div>
                    </a></li>
                <li class="nav-item px-3 fw-bold"><a class="nav-link " id="nav-text" href="#">
                        <div class="navText">Problem Set </div>
                    </a></li>
                <li class="nav-item px-3 fw-bold"><a class="nav-link " id="nav-text" href="#">
                        <div class="navText">Ranking</div>
                    </a></li>
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
    <div id="seNav"  >   
        <div class="d-flex bd-highlight text-white fw-bold mx-4">
            <div class="p-2">Problem</div>
            <div class="p-2" id="status">Status</div>
        </div>
    </div>
   <div class="container" id="statusTable">
    <div class="container" id="cStatus">Contest Status</div>
    <div class="container">
        <table>
            <tr>
                <th>#</th>
                <th>When</th>
                <th>Who</th>
                <th>Problem</th>
                <th>Lang</th>
                <th>Verdict</th>
            </tr>
            <tr>
                <td>1</td>
                <td>2021-10-10 10:10:10</td>
                <td>user1</td>
                <td>1001</td>
                <td>C++</td>
                <td id="verdict">Accepted</td>
            </tr>
            <tr>
                <td>2</td>
                <td>2021-10-10 10:10:10</td>
                <td>user2</td>
                <td>1002</td>
                <td>Java</td>
                <td id="verdict">Wrong Answer</td>
            </tr>
            <tr>
                <td>3</td>
                <td>2021-10-10 10:10:10</td>
                <td>user3</td>
                <td>1003</td>
                <td>Python</td>
                <td id="tle">Time Limit Exceeded</td>
            </tr>
            <tr>
                <td>4</td>
                <td>2021-10-10 10:10:10</td>
                <td>user4</td>
                <td>1004</td>
                <td>C</td>
                <td id="tle">Runtime Error</td>
            </tr>
        </table>
    </div>
    <div class="d-flex" id="pagination">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
   </div>
   
    

</body>

</html>