<?php
include_once "../backend/class/DBcon.class.php";
include_once "../backend/class/user.class.php";
include_once "../backend/class/control.class.php";
$student=new control();
$student->edit($_GET['num'],$_POST['name'],$_POST['studentnumber'],$_POST['parrentnumber'],$_POST['firstdegree'],$_POST['seconddegree'],$_POST['thirddegree'],$_POST['fourthdegree'],$_POST['fifthdegree'],$_POST['sithdegree'],$_POST['seventhdegree']);

$y=$_POST['grade'];
header("location:../front/year.php?grade=$y");