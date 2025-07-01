<?php
$day = array("Monday","Tuesday","Friday");
$month = ["Jan", "feb","march"];
$month[3] = "April"; 

for($i=0; $i<count($day); $i++){
    echo $day[$i]."<br />";
}

foreach($month as $value){
    echo $value."<br />";
}

$student = array("name"=>"saeed","age"=>30, "semester" => 6, "program" => "CS");
// print_r($student);
foreach($student as $key=>$value){
    echo $key.":".$value."<br />";
}

function add($x=0, $y=0){
    echo " The sum of ".$x. " and ".$y ." is ";
    return $x+$y;
}

echo add(10);

?>