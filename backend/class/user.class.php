<?php
class user extends DBcon
{
   protected function log($user_name)
    {
        $query="SELECT * FROM admin WHERE user_name=? LIMIT  1";
        $stm=$this->connect()->prepare($query);
        $stm->execute([$user_name]);
        $result=$stm->fetch();
        return $result;
    }

    protected function addstudent($name,$snumber,$pnumber,$year,$days,$time)
    {
        $query="INSERT INTO student (s_name,s_number,p_number,attend,year,time) value(?,?,?,?,?,?)";
        $stm=$this->connect()->prepare($query);
        if($stm->execute([$name,$snumber,$pnumber,$days,$year,$time]))
        {
            return true;
        }
        return false;
    } 
    protected function student_data()
    {
        $query="SELECT * FROM student";
        $stm=$this->connect()->prepare($query);
        $stm->execute();
        return $stm;
    }
    protected function delete_user($snumber)
    {
        $query="DELETE FROM student WHERE s_number = ?";
        $stm=$this->connect()->prepare($query);
        if($stm->execute([$snumber]))
        {
            return true;
        }
        return false;
    }

    protected function singl_data($snumber)
    {
        $query="SELECT * FROM student WHERE s_number = ?";
        $stm=$this->connect()->prepare($query);
        $stm->execute([$snumber]);
        return $stm;
    }
     
    protected function update($num,$name,$snumber,$pnumber,$days)
    {
        $query="UPDATE student SET s_name=?,s_number=?,p_number=?,attend=? WHERE s_number=?";
        $stm=$this->connect()->prepare($query);
        if($stm->execute([$name,$snumber,$pnumber,$days,$num]))
        {
            return true;
        }
        else
        {
            return false;
        }

    }
}