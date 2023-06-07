<?php
class control extends user
{
    public function create($name,$snumber,$pnumber,$year,$d1,$d2,$d3,$d4,$d5,$d6,$d7,$time)
    {
        $days=[$d1,$d2,$d3,$d4,$d5,$d6,$d7];
        $days=implode(',',$days);
        $this->addstudent($name,$snumber,$pnumber,$year,$days,$time);
    }
}