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
            header("Location:http://localhost/php%20projects/oop/Student%20Data/front/dashboard.php");
        }
    }
    public function coun()
    {
        $result=$this->student_data();
        $first=0;
        $second=0;
        $third=0;
        while($row=$result->fetch())
        {
            if($row['year']=='one')
            {
                $first++;
            }
            else if($row['year']=='two')
            {
                $second++;
            }
            else
            {
                $third++;
            }
        }
       $result=["first"=>$first,"second"=>$second,"third"=>$third];
       return $result;
    }
    public function data_view()
    {
        $result=$this->student_data();
        return $result;
    }
}