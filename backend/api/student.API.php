<?php
header("Access-Control-Allow-Origin *");
header("Content-Type:application/json");

include_once "../class/DBcon.class.php";
include_once "../class/user.class.php";
include_once "../class/view.class.php";
$t=new view();
$r=$t->data_view();
$first=[];
$second=[];
$third=[];
while($row=$r->fetch())
{
    if($row['year']=='one')
    {
        $first[]=$row;
    }
    elseif($row['year']=='two')
    {
        $second[]=$row;
    }
    else
    {
        $third[]=$row;
    }
}
$result=["one"=>$first,"two"=>$second,"three"=>$third];
echo json_encode($result);

