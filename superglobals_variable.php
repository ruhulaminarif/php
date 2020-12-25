 <!-- <form action="<?php //echo $_SERVER['PHP_SELF'] ?>" method="POST">
	User Name: <input type="text" name="uname"><br>
	<input type="submit" value="submit">
</form> -->

<?php 
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
// 	$name = $_REQUEST['uname'];
// 	if (empty($name)) {
// 		echo "Please You name";
// 	} else {
// 		echo $name;
// 	}
// }

 ?> 

 <?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name=$_REQUEST['uname'];

	if (empty($name)) {
		echo "<spam style='color: red;'> Please Enter Your name </spam>";
	}else{
		echo "<spam style='color: green;'>Your name: ". $name . "</spam>";
	}
}

  ?>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	User Name: <input type="text" name="uname"><br>
	<input type="submit" value="submit">
</form>