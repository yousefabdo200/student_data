<?php 
include_once "../backend/class/DBcon.class.php";
include_once "../backend/class/user.class.php";
include_once "../backend/class/view.class.php";
if ($_SERVER['REQUEST_METHOD']=="POST")
{
   
    $admin=new view();
    $admin->log_admin($_POST['user'],$_POST['pass']);
    
}