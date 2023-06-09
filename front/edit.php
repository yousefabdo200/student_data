<!DOCTYPE html>
<html>
    <head>
        <title>Edit</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="icon" href= "images/logo.jpg"/>
        <link rel="stylesheet" href= "css/all.min.css"/>
        <link rel="stylesheet" href= "css/fontawesome.min.css"/>
        <link rel="stylesheet" href= "css/bootstrap.min.css"/>
        <link rel="stylesheet" href= "css/style.css"/>
    </head>
    <body>
        <?php
        $num=$_GET["num"];
            $url = "http://localhost/php%20projects/oop/Student%20Data/backend/api/accountinfo.API.php?num=$num";
            $response = file_get_contents($url);
            $row=json_decode($response,true);
            $row['attend']=explode(',', $row['attend']);
        ?>
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
        <h1 class="text-center">Edit Student</h1>
        <div class="container">
            <form class="form-horizontal" action="?do=Update" method="POST">
                <input type="hidden" name="id" value="<?php echo $id ?>"/>

                <!-- Name Field -->
                <div class="form-group">
                    <label>Name</label>
                    <div class="col-sm-10 col-md-6">
                        <input type="text" name="name" class="form-control form-control-lg" placeholder="Student Name" disable value=<?=$row['s_name']?> />
                    </div>
                </div>

                <!-- Student Number Field -->
                <div class="form-group">
                    <label>Student Number</label>
                    <div class="col-sm-10 col-md-6">
                        <input type="text" name="studentnumber" class="form-control form-control-lg" placeholder="Student Number" required="required" value=<?=$row['s_number']?> />
                    </div>
                </div>  

                <!-- Parrent Number Field -->
                <div class="form-group">
                    <label>Parrent Number</label>
                    <div class="col-sm-10 col-md-6 password">
                        <input type="text" name="parrentnumber" class="form-control form-control-lg"placeholder="Parrent Number" required="required" value=<?=$row['p_number']?> />
                    </div>
                </div>  

                <!-- 1st Degree Field -->
                <div class="form-group">
                    <label>1st Day</label>
                    <div class="col-sm-10 col-md-6">
                        <input type="text" name="firstdegree" class="form-control form-control-lg" placeholder="1st Exam" value=<?=$row['attend'][0]?>  />
                    </div>
                </div>  

                <!-- 2nd Degree Field -->
                <div class="form-group">
                    <label>2nd Day</label>
                    <div class="col-sm-10 col-md-6">
                        <input type="text" name="seconddegree" class="form-control form-control-lg" placeholder="2nd Exam"  value=<?=$row['attend'][1]?> />
                    </div>
                </div>  
                <!-- 3rd Degree Field -->
                <div class="form-group">
                    <label>3rd Day</label>
                    <div class="col-sm-10 col-md-6">
                        <input type="text" name="thirddegree" class="form-control form-control-lg" placeholder="3rd Exam"  value=<?=$row['attend'][2]?> />
                    </div>
                </div>  
                <!-- 4th Degree Field -->
                <div class="form-group">
                    <label>4th Day</label>
                    <div class="col-sm-10 col-md-6">
                        <input type="text" name="fourthdegree" class="form-control form-control-lg" placeholder="4th Exam" value=<?=$row['attend'][3]?> />
                    </div>
                </div>  
                <!-- 5th Degree Field -->
                <div class="form-group">
                    <label>5th Day</label>
                    <div class="col-sm-10 col-md-6">
                        <input type="text" name="fifthdegree" class="form-control form-control-lg" placeholder="5th Exam" value=<?=$row['attend'][4]?> />
                    </div>
                </div>  
                <!-- 6th Degree Field -->
                <div class="form-group">
                    <label>6th Day</label>
                    <div class="col-sm-10 col-md-6">
                        <input type="text" name="sithdegree" class="form-control form-control-lg" placeholder="6th Exam" value=<?=$row['attend'][5]?> />
                    </div>
                </div>  
                <!-- 7th Degree Field -->
                <div class="form-group">
                    <label>7th Day</label>
                    <div class="col-sm-10 col-md-6">
                        <input type="text" name="seventhdegree" class="form-control form-control-lg" placeholder="7th Exam" value=<?=$row['attend'][6]?> />
                    </div>
                </div>

                <!-- Submit Field -->
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input type="submit" value="Save" class="btn btn-primary btn-lg" />
                    </div>
                </div>  
            </form>
        </div>
        <div class="footer">
            
        </div>
        <script src="js/jquery-1.12.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>