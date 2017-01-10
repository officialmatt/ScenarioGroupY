<?php
session_start();
$oldPW = $_POST["currentPassword"];
$newPW = $_POST["newPassword"];
$name = $_SESSION["name"];

changePassword($oldPW, $newPW, $name);




# query database to see if user typed the right password
function changePassword($oldPW, $newPW, $name) {
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "simpsons";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT password FROM students WHERE name = '$name'";
	$result = $conn->query($sql);

	print $result;
	$conn->close();

	if ($result == $oldPW)
	{
		print $result;
		print $oldPW;

		print "Password the same";

	}

	else {
		print "Passwords different";
		print $result;
		print $oldPW;
	}

}
?>
