<?php
session_start();
setcookie("username","out",time(),'/');
session_destroy();
header("LOCATION:../front/index.html");