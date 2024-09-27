<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="cStanding.css">
</head>
<body>
    <nav class="navbar navbar-expand-sm ">
            <img id="mLogo" src="../files/designImg/logo.png" alt="logo">
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
                <p class="mx-2 p-2 fw-bold" id="nav-text">Login</p>
                <div class="vr mt-2" id="navVr"></div>
                <p class="mx-2 p-2 fw-bold" id="nav-text"><a href="#" id="signUp">Signup</a></p>
            </div>
            <div class="">
                <i class="fa-solid fa-sun " id="navSun"></i>
            </div>
    </nav>
    <div class="container-fluid text-white" id="seNav">
        <div class="d-flex bd-highlight">
            <div class="p-2">
                <button id="btn" >Problem</button>
            </div >
            <div class="p-2">
                <button class="pBtn" >My Submission</button>
            </div>
            <div class="p-2">
                <button id="btn">Standings</button>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="text-center">
            <h3>Contest Name</h3>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container-fluid fw-bold">
            Standing
        </div>
        <div class="container-fluid" id="cStanding">
        <table>
                <tr>
                    <th>Sl</th>
                    <th>Handle</th>
                    <th>Score</th>
                    <th>Problem1</th>
                    <th>Problem2</th>
                    <th>Problem3</th>
                    <th>Problem4</th>
                    <th>Problem5</th>
                    <th>Problem6</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>
                        <span><i class="fa-solid fa-user"></i></span>
                        <span>user1</span>
                        
                    </td>
                    <td>100</td>
                    <td>AC</td>
                    <td>AC</td>
                    <td>AC</td>
                    <td>AC</td>
                    <td>AC</td>
                    <td>AC</td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>