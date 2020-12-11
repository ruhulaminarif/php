<!-- && (Logical AND)
|| (Logical OR)
! (Logical Not)
and (Logical And)
OR (Logical or)
xor (Exclusive or) -->

<?php
$a=20;
$b=10;

if ($a==20 && $b==10) {
	echo "hello </br>";
}else{
	echo "wrong </br>";
}


if ($a==20 || $b==10) {
	echo "hello </br>";
}else{
	echo "wrong </br>";
}

if ($a==20 xor $b==10) {
	echo "hello </br>";
}else{
	echo "wrong </br>";
}


if ($a!==20) {
	echo "hello </br>";
}else{
	echo "wrong </br>";
}
?>