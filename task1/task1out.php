<!DOCTYPE html>
<html>

<head>
	<title>Task 1 Output</title>
</head>

<body>

	<?php 
		
		echo "Hello! " . $_POST["fname"];

		echo " " . $_POST["lname"]. ".<br>";

		echo "This is your email id: " . $_POST["email"] . "<br>";
		
		echo "This is your mobile number: " . $_POST["mobile"] . "<br>";
		
		echo "This is your Password: " . $_POST["pass"] . "<br>";

	?>

</body>

</html>