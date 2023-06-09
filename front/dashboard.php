<!DOCTYPE html>
<html>
    <head>
        <title>Student Count</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="icon" href= "images/logo.jpg"/>
        <link rel="stylesheet" href= "css/all.min.css"/>
        <link rel="stylesheet" href= "css/fontawesome.min.css"/>
        <link rel="stylesheet" href= "css/bootstrap.min.css"/>
        <link rel="stylesheet" href= "css/style.css"/>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <span class="navbar-brand">Logo</span>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#app-nav" aria-controls="app-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="app-nav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="dashboard.php">Student Count</a></li>
                    <li class="nav-item"><a class="nav-link" href="year.php?grade=one">First Year</a></li>
                    <li class="nav-item"><a class="nav-link" href="year.php?grade=two">Second Year</a></li>
                    <li class="nav-item"><a class="nav-link" href="year.php?grade=three">Third Year</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">User</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li class="open"><a class="dropdown-item" href="">Edit Profile</a></li>
                            <li class="open"><a class="dropdown-item" href="../backend/logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
        <?php
        $apiurl="http://localhost/php%20projects/oop/Student%20Data/backend/api/count.API.php";
        $response = file_get_contents($apiurl);
        if ($response !== false) {
            $row=json_decode($response,true);
          
        }
        ?>
        <h1 class='text-center'>Student Count</h1>
        <div class="container home-stats text-center">
            <div class="row">
                <div class="col col-md-4 col-sm-10">
                    <div class="stat st-firstyear">
                        First Year
                        <span><a href="year.php?grade=one"><?=$row['first']?></a></span>
                    </div>
                </div>
                <div class="col col-md-4 col-sm-10">
                    <div class="stat st-secondyear">
                        Secnod Year
                        <span><a href="year.php?grade=two"><?=$row['second']?></a></span>
                    </div>
                </div>
                <div class="col col-md-4 col-sm-10">
                    <div class="stat st-thirdyear">
                        Third Year
                        <span><a href="year.php?grade=three"><?=$row['third']?></a></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            
        </div>
        <script src="js/jquery-1.12.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>