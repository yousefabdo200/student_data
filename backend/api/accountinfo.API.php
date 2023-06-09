<?php
header("Access-Control-Allow-Origin *");
header("Content-Type:application/json");

include_once "../class/DBcon.class.php";
include_once "../class/user.class.php";
include_once "../class/view.class.php";
$data=new view();
$result=$data->singl($_GET['num']);
echo json_encode($result);
