<?php
session_start();
setcookie("username","out",time(),'/');
session_destroy();
header("Location:http://localhost/php%20projects/oop/Student%20Data/front/index.html");