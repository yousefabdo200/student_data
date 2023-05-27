<?php
class view extends user
{
    public function log_admin($user_name,$password)
    {
        $result=$this->log($user_name);
       
        if(!$result)
        {
            header("Location:http://localhost/php%20projects/oop/Student%20Data/front/?error=not found");
        }
        else
        {
            if($result['password']!==$password)
            {
                header("Location:http://localhost/php%20projects/oop/Student%20Data/front/?error=no user name or incorrect passwordfound");
               
            }
            session_start();
            setcookie("username","$user_name",time()+3600*60,'/');
            header("Location:http://localhost/php%20projects/oop/Student%20Data/front/dashboard.html");
        }
    }
}