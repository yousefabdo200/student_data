<?php
include_once "../backend/class/DBcon.class.php";
include_once "../backend/class/user.class.php";
include_once "../backend/class/control.class.php";
date_default_timezone_set('Africa/Cairo');
$student=new control();
$student->create($_POST['name'],$_POST['studentnumber'],$_POST['parrentnumber'],$_GET['grade'],$_POST['firstdegree'],$_POST['seconddegree'],$_POST['thirddegree'],$_POST['fourthdegree'],$_POST['fifthdegree'],$_POST['sithdegree'],$_POST['seventhdegree'],date('Y-m-d'));
header("location:http://localhost/php%20projects/oop/Student%20Data/front/dashboard.html");
