<?php
header("Access-Control-Allow-Origin *");
header("Content-Type:application/json");

include_once "../class/DBcon.class.php";
include_once "../class/user.class.php";
include_once "../class/view.class.php";
$t=new view();
$r=$t->coun();
echo json_encode($r);
