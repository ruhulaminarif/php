

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<table>
	<tr>
		<td>Name:</td>
		<td><input type="text" name="name"></td>
	</tr>
	<tr>
		<td>E-mail:</td>
		<td><input type="email" name="email"></td>
	</tr>
	<tr>
		<td>website:</td>
		<td><input type="text" name="website"></td>
	</tr>
	<tr>
		<td>Comment:</td>
		<td><textarea name="comment" id="" cols="40" rows="5"></textarea></td>
	</tr>
	<tr>
		<td>Gender:</td>
		<td><input type="radio" name="gender" value="male">Male
			<input type="radio" name="gender" value="female">FeMale</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="submit" value="submit"></td>
	</tr>
</table>
</form>

<?php 
$name = $email = $website = $gender ="";

if ($_SERVER["REQUEST_METHOD"] =="POST") {
	$name = validate($_POST['name']);
	$email = validate($_POST['email']);
	$website = validate($_POST['website']);
	$genderw = validate($_POST['gender']);
	
	echo "Name: ".$name."<br>";
	echo "Email: ".$email."<br>";
	echo "website: ".$website."<br>";
	echo "Gender: ".$genderw;
}

function validate($data){
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

 ?>
