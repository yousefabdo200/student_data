<?php
class DBcon
{
    private $host="localhost";
    private $db_name="student_data";
    private $user_name="root";
    private $password="2002";
    protected function connect()
    {
        try{
            $dsn="mysql:host=".$this->host.";dbname=".$this->db_name;
            $con=new PDO($dsn,$this->user_name,$this->password);
            $con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
            $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
            return $con;
        }catch(PDOException $e)
        {
            echo "connection error ".$e->getMessage();
            return;
        }

    }
}