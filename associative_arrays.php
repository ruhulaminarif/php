<?php 
$age = array("Arif" => "26", "Ruhul" => "15","Amin" => "22");

$age["Arif"] = "26";
$age["Ruhul"] = "15";
$age["Amin"] = "22";

//echo "Name:". $age["Arif"]. "years old";

foreach($age as $x => $person_age){
 echo "Your Nmae: ". $x." | " ."You age: ".$person_age."<br>" ;
}


 ?>
