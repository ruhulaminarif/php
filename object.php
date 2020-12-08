<?php
class student{
	function myfun(){
		return "Math";
	}
	function details(){
		echo $this->myfun();
	}
}

$obj = new student();
$obj->details();



?>