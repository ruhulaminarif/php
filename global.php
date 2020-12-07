<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	$name="arif";

	function myname(){
		echo "<p>Variable x inside function is: $name</p>";
	}
	myname();
	echo "variable: $name ";
	?>

	<!-- Note: global variable Function ar bahire echo korte hoy -->
</body>
</html>