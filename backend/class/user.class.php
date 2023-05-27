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
}