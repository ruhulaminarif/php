<?php 
// $GLOBALS
// $_SERVER

$x=15;
$y=10;

function sum(){
	$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
sum();
echo $z;

 ?>

 <?php 
echo "<br>";
  ?>

  <?php 
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SERVER_ADDR'];

   ?>