<?php
include_once "../backend/class/DBcon.class.php";
include_once "../backend/class/user.class.php";
include_once "../backend/class/control.class.php";

$re=new control();
$re->delete($_GET['num']);