<form action="" method="POST">
	<input type="text" name="fname" placeholder="Enter Your name">
	<input type="text" name="lname" placeholder="Enter your subject">
	<input type="submit" value="submit">
</form>

<?php 
$school=$_POST['fname'];
$schools=$_POST['lname'];

function schoolname($school, $schools){
	echo "$school Student of $schools <br>";
}

schoolname($school,$schools);

 ?>

<!--  section -->
<?php echo "<br>"; ?>

<?php 
function school1($name){
	echo "$name is good school <br>";
}
school1('MD');
school1('MR');
school1('MC');

 ?>

 <!--  section -->
<?php echo "<br>"; ?>

<?php

function school($name ="My school"){
	echo "$name  <br>";
}
school('MD');
school();
school('MC');

 ?>

<!--  section -->
<?php echo "<br>"; ?>

 <?php 
function sum($x,$y){
	$z=$x+$y;
	return $z;
}

echo "4+5= ".sum(4,5);

  ?>